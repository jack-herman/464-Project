<!DOCTYPE html>
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
<div class="flex_row header" flex="3">
<h1>The WebsiteTM</h1>
<div id="clock" padding="10px"></div>
<script>
var request = null;
function getCurrentTime()
{
  request = new XMLHttpRequest();
  var url = "time.php";
  request.open("GET", url, true);
  request.onreadystatechange = updatePage;
  request.send(null);
}
function updatePage()
{
  if (request.readyState == 4)
  {
    var dateDisplay = document.getElementById("clock");
    dateDisplay.innerHTML = request.responseText;
  }
}

getCurrentTime();
setInterval('getCurrentTime()', 60000);
</script>
<label for="timezone">Choose your timezone:</label><br>
<select name="timezone" id="timezone">
<option value="America/Chicago">CST</option>
<option value="America/Los_Angeles">PST</option>
<option value="America/New_York">EST</option>
</select>
<button id="change" onclick="changeTimezone()">Change Timezone</button>
<script>
function changeTimezone()
{
	console.log('submitted');	
	var timezone = document.getElementById('timezone').value;
	var url = "change.php?timezone=" + encodeURIComponent(timezone);
	request = new XMLHttpRequest();
	request.open("GET", url, true);
	request.send(null);

	getCurrentTime();
}
</script>
</div>
<div class="flex_row nav_bar" onmouseout="hide()">
<!--nav-->
<div class="nav_item"><a href="index.php">Home Page</a></div>
<div class="nav_item" onmouseover="show('m3')"><a href="projects.php">Projects</a>
<div id="m3" class="flex_column under_menu" onmouseover="show('m3')">
<div class="under_item"><a href="#">Husker STEM Vr</a></div>
<div class="under_item"><a href="#">Grilling Simulator</a></div>
<div class="under_item"><a href="#">Minieval</a></div>
<div class="under_item"><a href="#">Hatatebot</a></div>
</div>
</div>
<div class="nav_item"><a href="jobs.php">Job History</a></div>
<div class="nav_item"><a href="contact.php">Contact Me</a></div>
</div>
<div class="projects_page">
<!--projects-->
<h2>This is the projects page!</h2>
<div class="project_item">
<h3>Husker STEM Vr</h3>
<p>Brief description of project.</p>
<div class="project_item">
<h3>Grilling Simulator</h3>
<p>Brief description of project.</p>
</div>
<div class="project_item">
<h3>Minieval</h3>
<p>Brief description of project.</p>
</div>
<div class="project_item">
<h3>Hatatebot</h3>
<p>Brief description of project.</p>
</div>
</div>
</div>
</div>
</body>
</html>
