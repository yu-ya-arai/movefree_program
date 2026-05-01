<?php
require_once './DbManager.php';
require_once './Encode.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>演習5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<table class="table">
    <thead>
        <tr>
            <th>教材コード</th>
            <th>教材名</th>
            <th>分類名</th>
            <th>価格</th>
        </tr>
    </thead>
    <tbody>
<?php
try {
    $db = getDb();

    $stt = $db->prepare(
        'SELECT code,
                resource.name AS resource_name,
                class_name.name AS class_label,
                price
         FROM resource
         INNER JOIN class_name USING (class)
         ORDER BY price DESC, code ASC'
    );

    $stt->execute();

    while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
?>
        <tr>
            <td><?= e($row['code']) ?></td>
            <td><?= e($row['resource_name']) ?></td>
            <td><?= e($row['class_label']) ?></td>
            <td><?= e($row['price']) ?>円</td>
        </tr>
<?php
    }

} catch (PDOException $e) {
    die("エラーメッセージ：{$e->getMessage()}");
}
?>
    </tbody>
</table>

</body>
</html>