<?php
require_once './DbManager.php';

try {
    $db = getDb();

    $sql = "
        UPDATE resource
        SET name=:name, class=:class, price=:price
        WHERE code=:code
    ";

    $stt = $db->prepare($sql);

    $stt->bindParam(':code', $code);
    $stt->bindParam(':name', $name);
    $stt->bindParam(':class', $class);
    $stt->bindParam(':price', $price);

    for ($i = 1; $i <= $_POST['cnt']; $i++) {

        $code = $_POST['code'.$i];
        $name = $_POST['name'.$i];
        $class = $_POST['class'.$i];
        $price = $_POST['price'.$i];

        $stt->execute();
    }

    header('Location: enshu8_form.php');

} catch (PDOException $e) {
    echo "エラー: " . $e->getMessage();
}
?>
