<html>
<head>
<style>
div.container {
    width: 100%;
    border: 1px solid white;
    height: 119%;

    
    background: linear-gradient(blue 30% ,white, blue);

}

header, footer {
    padding: 1em;
    color: black;
     background: linear-gradient(white);
    clear: left;
    text-align: center;
    border: 3px solid brown;
font-family:  times new roman;
}

img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

img:hover {
    border: 1px solid #777;
}

img img {
    width: 100%;
    height: auto;
}


article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
	
    height: 570px;
    width: 950px;
 
    background: linear-gradient(white, blue); 

}

#myProgress {
  position: relative;
  width: 100%;
  height: 30px;
  background-color: #ddd;
}

#myBar {
  position: absolute;
  width: 10%;
  height: 100%;
  background-color: #4CAF50;
}

#label {
  text-align: center;
  line-height: 30px;
  color: white;
}

</style>
</head>
<body>


<div class="container">
		<div class="header">
		<img class="img" style="float: left;" src="Images/logo.jpg";/>
        <a href="javascript:history.go(-1)">
		<img class="img" style="float: right;" src="Images/back.jpg";/>
        </a>
		<div class="clr"></div>               
	</div>
<header>
     
    <h1>SELF-HELP TROUBLESHOOTING GUIDES</h1>
	
<center>
<article>
<center>

<h1>SELF-HELP TROUBLESHOOTING GUIDES, SUCCESSFULLY ADDED TO THE DATABASE!</h1>

<div id="myProgress">
  <div id="myBar">
    <div id="label">10%</div>
  </div>
</div>

<br>


<script>

  var elem = document.getElementById("myBar");
  var width = 10;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
      document.getElementById("label").innerHTML = width * 1  + '%';
    
    }
 
  }
</script>


</div>

</body>
</html>


<?php
$problem=$_POST['a'];
$troubleshooting=$_POST['b'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalproject";

// Create connection
$connection = new mysqli("localhost", "root","","finalproject");
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = " INSERT INTO diy (problem,troubleshooting)
	VALUES ('$problem','$troubleshooting') "; 

if (mysqli_query($connection, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}


mysqli_close($connection)


?>
