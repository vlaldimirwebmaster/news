<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require_once "../classes/NewsDB.class.php";
	$news = new NewsDB();
	
	$id = trim(htmlspecialchars($_POST["id"]));
	$news->deleteNews($id);
}