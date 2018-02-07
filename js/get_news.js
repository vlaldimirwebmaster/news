function getNews() {
	var request = new XMLHttpRequest();
	request.onreadystatechange = function () {
		if(request.readyState == 4 && request.status == 200){
			var news = eval(request.responseText);
			showNews(news);
		}
	}
	request.open("POST", "functions/get_news.php");
	request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	request.send();
}