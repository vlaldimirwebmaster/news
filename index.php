<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- my css file -->
    <link href="css/style.css" rel="stylesheet">
  </head>
<body>
    <!-- Navigation -->
    <?php require("inc/nav.inc.php"); ?>
    <!-- end -->
	<div class="container">		
		<!-- content -->
		<?php
          require("inc/routing.php");
    	?>
    	<!-- end -->
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- my js files -->
     <script src="js/check_form.js"></script>
     <script src="js/send_form.js"></script>
     <script src="js/delete_news.js"></script>

     <script src="js/get_news.js"></script>
     <script src="js/show_news.js"></script>

     <script type="text/javascript">document.addEventListener("DOMContentLoaded", getNews);</script>
  </body>
</html>