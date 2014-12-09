<?php

require_once __DIR__ . '/../functions/db.php';

function News_getAll()
{
    return DBQuery("
    SELECT * FROM news
    ");
}
    if (isset($_POST['article']) && isset($_POST['title']))
    {
        $artar = $_POST['article'];
        $artti = $_POST['title'];
        DBConnect();
        mysql_query("INSERT INTO news (title, text) VALUES('$artti', '$artar')");
    }

    if(isset($_GET['id']))
    {
        $artic = $_GET['id'];
        DBConnect();
        $res=mysql_query("SELECT * FROM news WHERE id=$artic");
        $row=mysql_fetch_array($res);

            echo $row['title'], $row['text'];
    }
