<?php
require_once './DbManager.php';
require_once './Encode.php';

try {
    $db = getDb();

    $stt = $db->query('SELECT * FROM resource ORDER BY code ASC');

    $cnt = 0;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>既存データの更新</title>
</head>

<body>

<form method="POST" action="enshu8_process.php">

<table border="1">
<tr>
  <th>教材コード</th>
  <th>教材名</th>
  <th>分類</th>
  <th>価格</th>
</tr>

<?php
while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
    $cnt++;
?>
<tr>
  <td>
    <?=e($row['code']) ?>
    <input type="hidden" name="code<?=e($cnt) ?>" value="<?=e($row['code']) ?>" />
  </td>

  <td>
    <input type="text" name="name<?=e($cnt) ?>" value="<?=e($row['name']) ?>" />
  </td>

  <td>
    <input type="text" name="class<?=e($cnt) ?>" value="<?=e($row['class']) ?>" />
  </td>

  <td>
    <input type="text" name="price<?=e($cnt) ?>" value="<?=e($row['price']) ?>" />
  </td>
</tr>
<?php
}
?>

</table>

<input type="hidden" name="cnt" value="<?=e($cnt) ?>" />
<input type="submit" value="更新" />

</form>

</body>
</html>

<?php
} catch (PDOException $e) {
    echo "エラー: " . $e->getMessage();
}
?>