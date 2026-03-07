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
=======
<?php
// アクセス日時とIPを取得
$ip = $_SERVER['REMOTE_ADDR'];
$date = date("Y-m-d H:i:s");

// iplog.txt に追記
file_put_contents("iplog.txt", "$date - $ip\n", FILE_APPEND);

// index.html に戻す
header("Location: index.html");
exit;
>>>>>>> 2d03820dfda73900d7278ce6e003d1c183b50279
?>