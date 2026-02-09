<?php

$logfile = __DIR__ . '/access.log';


$file = @fopen($logfile, 'a') or die('ファイルを開けません');

flock($file, LOCK_EX);

$date = date('Y-m-d H:i:s');
$script = $_SERVER['SCRIPT_NAME'];
$ua = $_SERVER['HTTP_USER_AGENT'];

$line = $date . "\t" . $script . "\t" . $ua . "\n";

fwrite($file, $line);

flock($file, LOCK_UN);
fclose($file);

echo 'ログを書き込みました';
