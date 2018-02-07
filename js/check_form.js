var form = document.getElementById("form");
var inp_title = document.getElementById("title");
var inp_category = document.getElementById("category");
var inp_text = document.getElementById("description");
var inp_source = document.getElementById("source");
var params = "";
var result = document.getElementById("result");

function checkForm() {
	inp_title.style.borderColor = inp_text.style.borderColor = inp_source.style.borderColor = "";
	var send = true;
	
	if (inp_title.value == "") {
		inp_title.style.borderColor = "red";
		send = false;
	}
	if(inp_text.value == "") {
		inp_text.style.borderColor = "red";
		send = false;
	}
	if(inp_text.value == "") {
		inp_text.style.borderColor = "red";
		send = false;
	}
	if(inp_source.value == "") {
		inp_source.style.borderColor = "red";
		send = false;
	}

	if (send == true) {
		params = 
				"title=" + inp_title.value + "&"
				+ "category=" + inp_category.value + "&"
				+ "description=" + inp_text.value + "&"
				+ "source=" + inp_source.value;
		inp_title.value = inp_text.value = inp_source.value = "";
		sendForm(params);
	}else{
		result.innerHTML = "Заполните все поля";
	}
}