<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>教材登録フォーム</title>
</head>
<body>

<form method="POST" action="enshu3_process.php">

    <div>
        <label>code：</label><br>
        <input type="text" name="code">
    </div>

    <div>
        <label>name：</label><br>
        <input type="text" name="name">
    </div>

    <div>
        <label>class：</label><br>
        <input type="text" name="class">
    </div>

    <div>
        <label>price：</label><br>
        <input type="text" name="price">
    </div>

    <div>
        <input type="submit" value="登録">
    </div>

</form>

</body>
</html>