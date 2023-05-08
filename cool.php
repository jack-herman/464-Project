<?php
session_start();
?>
<html>
<head>
<title>
The WebsiteTM
</title>
<link rel='stylesheet' type='text/css' href='css/style.css'>
<script src="scripts/menus.js"></script>
</head>
<body>
<div class="flex_column">
<div class="flex_row header">
<h1>The WebsiteTM</h1>
<button id="themebutton">Change Theme</button>
<script>
	const btn = document.querySelector("button");
	btn.addEventListener("click", () => {
	if(document.body.style.backgroundColor == 'darkgray')
		document.body.style.backgroundColor = 'white';
	else
		document.body.style.backgroundColor = 'darkgray';
	});
</script>
</div>
<div class="flex_row nav_bar" onmouseout="hide()">
<!--nav-->
<div class="nav_item"><a href="index.html">Home Page</a></div>
<div class="nav_item" onmouseover="show('m3')"><a href="projects.html">Projects</a>
<div id="m3" class="flex_column under_menu" onmouseover="show('m3')">
<div class="under_item"><a href="#">Husker STEM Vr</a></div>
<div class="under_item"><a href="#">Grilling Simulator</a></div>
<div class="under_item"><a href="#">Minieval</a></div>
<div class="under_item"><a href="#">Hatatebot</a></div>
</div>
</div>
<div class="nav_item"><a href="jobs.html">Job History</a></div>
<div class="nav_item"><a href="contact.html">Contact Me</a></div>
</div>
<div class='discussion_page'>
<form method="get">
<label for="author">Display Name</label>
<input type="text" id="author" name="author"><br>
<label for="message">Leave a message</label>
<textarea width="40%" id="message" name="message"></textarea><br>
</form>
<input type="submit" value="Submit" onclick="sendMessage()">
</div>
<script>
var request = null;
var counter = 0;
function sendMessage()
{
	console.log('submitted');	
	var message = document.getElementById("message").value + "," +
		      document.getElementById("author").value;
	var url = "counter.php?message=" + encodeURIComponent(message);
	request = new XMLHttpRequest();
	request.open("GET", url, true);
	request.send(null);
}

function getMessage()
{
	request = new XMLHttpRequest();
	var url = "counter.php";
	request.open("GET", url, true);
	request.onreadystatechange = updatePage;
	request.send(null);
}

function updatePage()
{
	if (request.readyState == 4)
	{
		var items = request.responseText.split(":");
		console.log(items);
		if (Number(items[0]) > counter)
		{
			counter++;
			var message = document.createElement("p");
			message.innerHTML = items[1] + " -" + items[2] + " " + items[3] + ":" + items[4];
			document.getElementById("top").prepend(message);
		}
		
	}
}

setInterval('getMessage()', 100);
</script>
<div id="top">
</div>
</body>
</html>
