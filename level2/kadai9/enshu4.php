<?php

require_once './DbManager.php';

try {
    $db = getDb();

    $stt = $db->prepare(
        'INSERT INTO student_auto(name, grade) VALUES(?, ?)'
    );

    $stt->bindValue(1, '佐藤花子');
    $stt->bindValue(2, 2, PDO::PARAM_INT);

    $stt->execute();

    print '直近の ID 値：' . $db->lastInsertId();

} catch (PDOException $e) {
    die("エラーメッセージ：{$e->getMessage()}");
}