<?php
require_once "../classes/NewsDB.class.php";
$news = new NewsDB();
$posts = $news->getNews();
echo json_encode($posts);

