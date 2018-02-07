<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require_once "../classes/NewsDB.class.php";
	$news = new NewsDB();
	
	$title = trim(htmlspecialchars($_POST["title"]));
	$category = trim(htmlspecialchars($_POST["category"]));
	$description = trim(htmlspecialchars($_POST["description"]));
	$source = trim(htmlspecialchars($_POST["source"]));

	$res = $news->saveNews($title, $category, $description, $source);
	if ($res) {
		echo "Новость добавлена";
	}else{
		echo "Произошла ошибка";
	}
	
}