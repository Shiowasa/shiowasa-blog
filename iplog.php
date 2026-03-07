<<<<<<< HEAD
<?php
// アクセス日時とIPを取得
$ip = $_SERVER['REMOTE_ADDR'];
$date = date("Y-m-d H:i:s");

// iplog.txt に追記
file_put_contents("iplog.txt", "$date - $ip\n", FILE_APPEND);

// index.html に戻す
header("Location: index.html");
exit;
