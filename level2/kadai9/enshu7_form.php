<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>教材画像アップロード</title>
</head>

<body>

<form method="POST" enctype="multipart/form-data" action="enshu7_process.php">

<div>
  <label>教材コード：</label><br />
  <input type="text" name="code" maxlength="6" />
</div>

<div>
  <label>画像ファイル：</label><br />
  <input type="file" name="photo" />
</div>

<div>
  <input type="submit" value="アップロード" />
</div>

</form>

</body>
</html>