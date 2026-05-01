<?php
require_once './DbManager.php';

try {
    $db = getDb();

    $sql = "
        INSERT INTO resource_image(code, type, data)
        VALUES(:code, :type, :data)
    ";

    $stt = $db->prepare($sql);

    $file = fopen($_FILES['photo']['tmp_name'], 'rb');

    $stt->bindValue(':code', $_POST['code'], PDO::PARAM_STR);
    $stt->bindValue(':type', $_FILES['photo']['type'], PDO::PARAM_STR);
    $stt->bindValue(':data', $file, PDO::PARAM_LOB);

    $stt->execute();

    echo "教材画像のアップロードに成功しました。";

} catch (PDOException $e) {
    echo "エラー: " . $e->getMessage();
}
?>