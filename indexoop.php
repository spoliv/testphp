<?php

include 'view/form.php';
if (isset($_POST['article']) && isset($_POST['title'])) {

    require_once __DIR__ . '/models/newsoop.php';
    include 'view/indexoop.php';
}

/*require_once __DIR__ . '/ooptest/oopdb.php';
$allnews -> All_news('news');
function get_allnews()
{
    return All_news('news');
}

include 'view/index.php';*/
