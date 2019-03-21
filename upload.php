<?php
// 一時アップロード先ファイルパス
$file_tmp  = $_FILES["file_1"]["tmp_name"];
// 正式保存先ファイルパス
$t = ceil(microtime(true)*1000);

$ext = pathinfo($_FILES["file_1"]["name"],PATHINFO_EXTENSION);
$file_name = $t.".".$ext;
$file_save = "./img/".$file_name;

$url = "http://localhost/img/".$file_name;
// ファイル移動
$result = @move_uploaded_file($file_tmp, $file_save);
if ( $result === true ) {
   // echo "UPLOAD OK";
   echo $url;
} else {
   // echo "UPLOAD NG";
}
?>
