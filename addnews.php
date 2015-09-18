<?php

include 'view/form.php';
require_once __DIR__ . '/models/news.php';
if (isset($_POST['article']) && isset($_POST['title'])){
    News_add();
}

