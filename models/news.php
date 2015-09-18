<?php

require_once __DIR__ . '/../functions/db.php';

function News_getAll()
{
    return DBQuery("
    SELECT * FROM news
    ");
}
        /*if (isset($_POST['article']) && isset($_POST['title'])) {
        $artar = $_POST['article'];
        $artti = $_POST['title'];
        DBConnect();
        mysql_query("INSERT INTO news (title, text) VALUES('$artti', '$artar')");
    }*/

function News_add()
{
    $artar = $_POST['article'];
    $artti = $_POST['title'];
    DBQuery_Add("INSERT INTO news (title, text) VALUES('$artti', '$artar')");
}

function News_getOne($id)
{
    return DBQuery_One("SELECT * FROM news WHERE id = $id");

}




