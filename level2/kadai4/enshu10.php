<?php
$data = [
  'Apple'  => 'Red',
  'Orange' => 'Yellow',
  'Melon'  => 'Green',
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>enshu10</title>
</head>
<body>

<ul>
<?php foreach ($data as $fruit => $color): ?>
  <li><?= $fruit ?>: <?= $color ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>
