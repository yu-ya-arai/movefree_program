<?php
require_once './DbManager.php';

try {
    $db = getDb();

    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $db->beginTransaction();

    
    $db->exec("
        INSERT INTO resource(code, name, class, price)
        VALUES('990011', 'テスト教材11', 'sftw', 3000)
    ");

    
    $db->exec("
        INSERT INTO resource(code, name, class, price)
        VALUES('990012', 'テスト教材12', 'sftw', 4000)
    ");

    
    $db->commit();

    echo "2件の登録に成功しました。";

} catch (PDOException $e) {

    $db->rollBack();

    echo "エラーメッセージ：" . $e->getMessage();
}
?>