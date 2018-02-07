function callDelete() {
	var delete_id = this.id;
	deleteNews(delete_id);
}

function showNews(news) {
	var news_wrapp = document.getElementById("news_wrapp");
	news_wrapp.innerHTML = "";
	for (var i = 0; i < news.length; i++) {
		var delete_id = news[i]["id"];
		/*
		*	news_article is a box for a news
		*/

		var news_article = news_wrapp.appendChild(document.createElement("article"));
		news_article.className = "article_main_page article_main_page_"+news[i]["id"];

		var news_header = news_article.appendChild(document.createElement("div"));
		news_header.className = "news_header news_header_"+news[i]["id"];

		var news_delete_button = news_header.appendChild(document.createElement("span"));
		news_delete_button.className = "news_delete_button news_delete_button_"+news[i]["id"];
		news_delete_button.id = news[i]["id"];
		news_delete_button.innerHTML = "Удалить новость";
		news_delete_button.onclick = callDelete;

		var news_title = news_header.appendChild(document.createElement("h2"));
		news_title.className = "news_title news_title_"+news[i]["id"];
		news_title.innerHTML = news[i]["title"];
		
		var news_body = news_article.appendChild(document.createElement("div"));
		news_body.className = "news_body news_body_"+news[i]["id"];

		var news_category = news_body.appendChild(document.createElement("span"));
		news_category.className = "news_category news_category_"+news[i]["id"];
		news_category.innerHTML = "Категория: " + news[i]["category"];
		
		var news_description = news_body.appendChild(document.createElement("p"));
		news_description.className = "news_description news_description_"+news[i]["id"];
		news_description.innerHTML = news[i]["description"]

		var news_source = news_body.appendChild(document.createElement("span"));
		news_source.className = "news_source news_source_"+news[i]["id"];
		news_source.innerHTML = "Источник:  <a href='http://"+news[i]['source']+"'>"+news[i]["source"]+"</a>";
	}
}
