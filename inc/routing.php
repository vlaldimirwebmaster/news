<?php
if(isset($_GET["page"])){
	$page = strtolower(strip_tags(trim($_GET["page"])));
	switch($page){
		case "add-news": include "inc/add_news.inc.php"; break;
		default: include "inc/get_news.inc.php";
	}
}else{
	include "inc/get_news.inc.php";
}
