<?php

require_once __DIR__ . '/models/news.php';

$news = News_getAll();

include 'view/index.php';
include 'view/form.php';
//phpinfo();


