<?php
require_once './DbManager.php';

try {
    $db = getDb();

    // エラーを例外として扱う
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // トランザクション開始
    $db->beginTransaction();

    // 1件目（成功する想定）
    $db->exec("
        INSERT INTO resource(code, name, class, price)
        VALUES('990001', 'テスト教材A', 'sftw', 3000)
    ");

    // 2件目（同じcodeなのでエラー発生）
    $db->exec("
        INSERT INTO resource(code, name, class, price)
        VALUES('990001', 'テスト教材B', 'sftw', 4000)
    ");

    // 両方成功した場合のみ確定
    $db->commit();

} catch (PDOException $e) {

    // 失敗したら全部取り消し
    $db->rollBack();

    die("エラーメッセージ：{$e->getMessage()}");
}
?>