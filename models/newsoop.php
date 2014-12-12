<?php

require_once __DIR__ . '/../ooptest/oopdb.php';
$basaone = new DB('localhost', 'root', '', 'test');
$basaone -> Add_news('news', $_POST['title'], $_POST['text']);
$basaone -> All_news('news');
var_dump($ret);
$news = $ret;

$basaone -> News_getAll('news');


