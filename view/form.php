<html>
<head>
    <title>Добавить новость</title>
</head>
<body>
<br />
<br />
<form action="functions/db.php"
      method="post"
      enctype="multipart/form-data">
    <legend><h3>Добавить новость</h3></legend>
    <textarea cols="30" rows="5" name="article"></textarea>
    <br/>
    <input type="submit" value="добавить" />
</form>
</body>
</html>