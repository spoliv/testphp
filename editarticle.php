<?php

require_once __DIR__ . '/models/news.php';

if(isset($_GET['id']))
{
    $article = News_getOne($_GET['id']);
}

include 'view/editform.php';
