<?php

$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=SCHOOL;charset=utf8mb4';
$usr = 'root';
$passwd = 'rootpass';

try {
    $db = new PDO($dsn, $usr, $passwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    print 'データベースへの接続を確立しました。';
} catch (PDOException $e) {
    die("エラーメッセージ：{$e->getMessage()}");
} finally {
    $db = null;
}