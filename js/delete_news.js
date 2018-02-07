function deleteNews(id) {
	var params = "id="+id;
	var request = new XMLHttpRequest();
	request.onreadystatechange = function () {
		if(request.readyState == 4 && request.status == 200){
			getNews();
		}
	}
	request.open("POST", "functions/delete_news.php");
	request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	request.send(params);
}