<?php

require_once './DbManager.php';

try {
    $db = getDb();

    $stt = $db->prepare(
        'INSERT INTO resource(code, name, class, price)
         VALUES(:code, :name, :class, :price)'
    );

    $stt->bindValue(':code', $_POST['code']);
    $stt->bindValue(':name', $_POST['name']);
    $stt->bindValue(':class', $_POST['class']);
    $stt->bindValue(':price', $_POST['price']);

    $stt->execute();

    header(
        'Location: http://' .
        $_SERVER['HTTP_HOST'] .
        dirname($_SERVER['PHP_SELF']) .
        '/enshu3_form.php'
    );

} catch (PDOException $e) {
    die("エラーメッセージ：{$e->getMessage()}");
}