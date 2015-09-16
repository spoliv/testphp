
<html>
<head>
    <title>Редактировать новость</title>
</head>
<body>
<br />
<br />
<form action="models/news.php"
      method="post"
      enctype="multipart/form-data">
    <legend><h3>Изменить заголовок</h3></legend>
    <input type="text" size="28" name="title" value="<?= $article['title']?>" />
    <br />
    <legend><h3>Изменить текст</h3></legend>
    <textarea cols="30" rows="5" name="article"><?= $article['text']?></textarea>
    <br/>
    <input type="submit" value="Редактировать" />
</form>
</body>
</html>