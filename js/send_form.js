function sendForm(params) {
	var request = new XMLHttpRequest();
	request.onreadystatechange = function () {
		if(request.readyState == 4 && request.status == 200){
			result.innerHTML = request.responseText;
		}
	}
	
	request.open("POST", "functions/save_news.php");
	request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	request.send(params);
}