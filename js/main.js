// Initialize Firebase
var config = {
    apiKey: "AIzaSyB_C233N_7cIqAPAE-reEnzdD2R0w9jzdo",
    authDomain: "conoha-60071.firebaseapp.com",
    databaseURL: "https://conoha-60071.firebaseio.com",
    projectId: "conoha-60071",
    storageBucket: "conoha-60071.appspot.com",
    messagingSenderId: "98838455718"
};
firebase.initializeApp(config);
var db = firebase.firestore();
db.settings({
    timestampsInSnapshots: true
});

var loginUser = null;
// 定数定義 出力メッセージ
var Messages = {
    "INVALID_EMAIL": "メールアドレスが正しく入力されていません\n",
    "INVALID_PASSWORD": "パスワードが正しく入力されていません\n",
    "SIGNUP_SUCCESS": "登録が完了しました\n",
    "LOGIN_NOTIFICATION": "ログインしました\n",
    "NOT_LOGGED_IN": "ログインしてください\n",
    "SIGNOUT_SUCCESS": "サインアウトしました\n",
    "INVALID_USERNAME": "ユーザー名が短すぎます\n",
};

// Firebase認証時エラーコード
var ErrorCodes = {
    "INVALID_EMAIL": "auth/invalid-email",
    "INVALID_PASSWORD": "auth/weak-password",
}

// オブジェクトを凍結する（定数）
Object.freeze(Messages);
Object.freeze(ErrorCodes);
var posts = [];
// ドキュメント読み込み完了時a
$(document).ready(function () {

    firebase.auth().onAuthStateChanged(function (user) {
        if (user) {
            $('#showSigninForm').hide();
            // ユーザー名未設定のため暫定的にログインしていることを通知する
            // $('#userName').text(Messages.LOGIN_NOTIFICATION);
            // サインアウトボタンを表示する
            $('#signout').show();
            $('.signin').hide();

            // サインインしたらチャット画面を表示する
            $('#main').show();
            loginUser = user;

            $.notify(Messages.LOGIN_NOTIFICATION, 'success');
            // DBが更新されたときにイベントを取得する
            db.collection("posts").where("room", "==", 0).onSnapshot(function (querySnapshot) {
                var cities = [];
                querySnapshot.forEach(function (doc) {
                    if (posts[doc.id]) {
                    } else {
                        posts[doc.id] = doc.data();
                        $('#chat').prepend("<li>" + doc.data().text + "</li>");
                    }
                });
                console.log(posts);
            });
        } else {
            //$.notify(Messages.NOT_LOGGED_IN, 'success');
            $('.signin').show();
            $('#showSigninForm').show();
            $('#main').hide();
        }
    });

    //　サインアウトを行う
    $('#signout').on('click', function () {
        // Firebaseのサインアウト処理を行う
        firebase.auth().signOut().then(function () {
            // Sign-out successful.
            $('.signin').show();
            $('#signout').hide();
            $('#showSigninForm').show();
            $.notify(Messages.SIGNOUT_SUCCESS, 'success');

        }).catch(function (error) {
            // An error happened.
            $.notify(error.message, 'success');

        });
    });

    // 投稿ボタン押下時処理
    $('#post').on('click', function () {
        // 投稿するボタンが押下されたときに投稿を行う
        post();
    });

    // 投稿ボタン押下時にデータベースに登録する
    $('#checkuser').on('click', function () {

        console.log(loginUser);

    });

    // タイムライアン取得ボタン押下時イベント
    $('#getTimeline').on('click', function () {
        // フォームからファイルをアップロードする関数を呼び出す
        getTimeline();
    });
    $('#updateUserName').on('click', function () {

        // フォームに入力されたユーザー名を取得する
        var userName = $('#txtUserName').val();
        console.log(userName.length);
        //ユーザー名が入力されていないときは更新処理を行わない
        if (userName === "" || userName.length < 3) {
            // ユーザー名が不正である旨を通知する
            $.notify(Messages.INVALID_USERNAME, 'warning');
        } else {
            // ログイン中のユーザー情報を取得する
            var user = firebase.auth().currentUser;
            // ユーザーのプロフィール情報を更新する
            user.updateProfile({
                displayName: userName,
                // photoURL: "https://example.com/jane-q-user/profile.jpg"
            }).then(function () {
                // Update successful.
                loginUser = firebase.auth().currentUser;
            }).catch(function (error) {
                // An error happened.
                $.notify(error.message, 'error');
                console.log(error);
            });
        }


    });

    // サインインボタン押下時処理
    $('#signin').on('click', function () {

        // emailとpasswordをinputから取得する
        var email = $('#signinEmail').val();
        var password = $('#signinPassword').val();

        // emailとパスワードを使用してサインインを行う
        firebase.auth().signInWithEmailAndPassword(email, password).then(function (user) {

            createRoom();

        }).catch(function (error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;

        });

    });

    // サインアップフォーム表示
    $('#showSignupForm').on('click', function () {
        $('.signin').hide(100);
        $('.signup').show(100);
    });

    []
    // サインインフォーム表示
    $('#showSigninForm').on('click', function () {
        $('.signin').show(100);
        $('.signup').hide(100);
    });

    $('#upload').on('click', function () {

        file_upload();
    });

    // 登録ボタン押下時イベント
    $('#regist').on('click', function () {

        // emailとpasswordをinputから取得する
        var email = $('#email').val();
        var password = $('#password').val();

        //エラー時に出力するメッセージを初期化する
        var msg = "";

        // メールアドレスの入力チェック
        if (email != "" && email.length > 0) {

        } else {
            msg = Messages.INVALID_EMAIL;
        }

        // パスワードの入力チェック
        if (password != "" && password.length > 5) {

        } else {
            msg += Messages.INVALID_PASSWORD;
        }

        // msgが空じゃないとき（エラーが発生しているとき）
        if (msg !== "") {
            // メッセージがある場合ユーザーに通知する
            $.notify(msg);

        } else {

            // すべての項目に入力されていた場合firebaseに登録を行う
            firebase.auth().createUserWithEmailAndPassword(email, password).then(function (user) {
                // 正常に登録できた場合はその旨をユーザーへ通知する
                $.notify(Messages.SIGNUP_SUCCESS, "success");

            }).catch(function (error) {
                // Firebaseでエラーが発生した場合
                var errorCode = error.code;
                var errorMessage = error.message;

                // Firebase固有のエラーが派生したときのメッセージを初期化する
                var firebaseErrorMsg = "";

                // メールアドレスが不正
                if (errorCode === ErrorCodes.INVALID_EMAIL) {
                    firebaseErrorMsg = Messages.INVALID_EMAIL;
                }
                // パスワードが不正
                if (errorCode === ErrorCodes.INVALID_PASSWORD) {
                    firebaseErrorMsg = Messages.INVALID_PASSWORD;
                }

                // エラーメッセージが設定されていた場合
                if (firebaseErrorMsg !== "") {
                    $.notify(firebaseErrorMsg);
                } else {
                    // エラーメッセージが設定されていなかった場合はサーバーのメッセージを表示
                    firebaseErrorMsg = error.message;
                    $.notify(firebaseErrorMsg);
                }
            });
        }
    });

});
function post() {

    // 投稿内容を取得する
    var text = $("#postText").val();
    // 投稿内容が空じゃなければデータを送信する
    if (text !== "") {
        // Add a new document in collection "cities"
        db.collection("posts").add({
            name: loginUser.displayName,
            uid: loginUser.uid,
            text: text,
            room: 0
        })
            .then(function () {
                $.notify("投稿しました", 'success');
                $("#postText").val('');
            })
            .catch(function (error) {
                $.notify("エラーが発生しました" + error, 'error');
                $("#postText").val('');
            });
    } else {
        $.notify("投稿内容を入力してください", "error");
    }

}
// データベースからタイムラインを取得する
function getTimeline() {
    $('#chat').html('');
    var html = "<ul style='list-style: none;'>";
    db.collection("posts").get().then((querySnapshot) => {
        querySnapshot.forEach((doc) => {
            // 画面に表示するhtmlを生成する
            html += "<li>" + doc.data().text + "</li>";
            console.log(`${doc.id} => ${doc.data().text}`);
        });
        html += "</ul>";
        $('#chat').html(html);
    });
}





function createRoom() {
    db.collection("chat").add({
        first: "Ada",
        last: "Lovelace",
        born: 1815
    })
        .then(function (docRef) {
            console.log("Document written with ID: ", docRef.id);
        })
        .catch(function (error) {
            console.error("Error adding document: ", error);
        });


}
function file_upload() {
    // フォームデータを取得
    var formdata = new FormData($('#my_form').get(0));

    // POSTでアップロード
    $.ajax({
        url: "./upload.php",
        type: "POST",
        data: formdata,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "html"
    })
        .done(function (data, textStatus, jqXHR) {
            alert(data);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            alert("fail");
        });
}