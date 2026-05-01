<?php
require_once './DbManager.php';

try {
    $db = getDb();

    $sql = "
        SELECT purchased_on, resource.name AS resource_name, num
        FROM purchase_history
        INNER JOIN resource USING (code)
        WHERE code = ?
        ORDER BY purchased_on ASC
    ";

    $stt = $db->prepare($sql);

    $stt->bindValue(1, $_GET['code'] ?: '100001');

    $stt->execute();

    $stt->bindColumn('purchased_on', $purchasedOn);
    $stt->bindColumn('resource_name', $resourceName);
    $stt->bindColumn('num', $num);

    if ($stt->fetch(PDO::FETCH_BOUND)) {
        echo "{$purchasedOn} / {$resourceName} / {$num}個";
    } else {
        echo "該当するデータがありません。";
    }

} catch (PDOException $e) {
    echo "エラー: " . $e->getMessage();
}
?>