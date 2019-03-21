
const data = {
    img1: {
        time: "2019-3-14 13:53:41",
        title: "hackzImg",
        state: "OK"
    },
    img2: {
        time: "2019-3-14 13:53:41",
        title: "TestImage",
        state: "NO"
    },
    img3: {
        time: "2019-3-14 13:53:41",
        title: "HelloPython",
        state: "WJ"
    },
    img4: {
        time: "2019-3-14 13:53:41",
        title: "HelloPython",
        state: "WJ"
    }
};

const  CreateList = function(time,title,state) {
    console.log("AC");
    if(state=="OK")return '<tr><td>'+time+'</td><td>'+title+'</td><td><p class="imgState '+ state +'">評価中</td><td><button class="OKbutton">投稿</button></td></tr>';
    return '<tr><td>'+time+'</td><td>'+title+'</td><td><p class="imgState '+ state +'">評価中</td><td></td></tr>';
};

console.log("TEST")
$(document).ready(function () {
    console.log("TEST~~")
    // ページ読み込み時に実行したい処理
    for (key in data) {
        console.log(key);
        console.log(data[key]);
        console.log(data[key].time);
        item = CreateList(data[key].time,data[key].title,data[key].state);
        console.log($("#imgTable"));
        $("#imgTable").append(item);
    }
});