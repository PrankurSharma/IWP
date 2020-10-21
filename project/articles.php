<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://bootswatch.com/3/cyborg/bootstrap.min.css">
	<title></title>
	<style>
		.container{
			padding:16px;
			margin-right: 200px;
			margin-left: 200px;
			border-style: solid;
			border-color: red;
		}
		h6{
			word-break: break-all;
		}
	</style>
</head>
<body>
	<h2><button type="button" class="btn btn-outline-success btn-lg" onclick="document.location='/myfiles/IWP/Landing Page/Landing Page/trailLandPage.html'" style="color: white; background-color: transparent; border-color: blue; height: 50px;">Knowledge Guild</button></h2>
	<h1 align='center'> Articles </h1>
	<h6 align="center"><a href="\myfiles\IWP\sql1.php">Want to Upload an Article?? Click Here</a></h6>
</body>
</html>
<?php
$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "comments"; 
$table = "details"; 
$connection = mysqli_connect($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysqli_error());
}
mysqli_select_db($connection, $dbase);
$sql1 = "SELECT description FROM details WHERE topic='Web Development'";
$sql2 = "SELECT description FROM details WHERE topic='App Development'";
$sql3 = "SELECT description FROM details WHERE topic='Data Science'";

$result1 = mysqli_query($connection,$sql1);
$result2 = mysqli_query($connection,$sql2);
$result3 = mysqli_query($connection,$sql3);
    if(mysqli_num_rows($result1)>0){
    	echo "<div class='container' style='margin-top: 50px'>";	
    	echo "<h2 align='center'> Web Development </h2>";
	while($row1=mysqli_fetch_assoc($result1)){
		echo "<div class='col-md-12'>";
        echo "<div class='well text-center'>";
		echo "<h6>".$row1['description']."</h6>";

		echo "</div>";
		echo "</div>";
	}
	echo "</div>";
}
    if(mysqli_num_rows($result2)>0){
    	echo "<div class='container' style='margin-top: 200px'>";
    	echo "<h2 align='center'> App Development </h2>";
	while($row2=mysqli_fetch_assoc($result2)){
		echo "<div class='col-md-12'>";
        echo "<div class='well text-center'>";
		echo "<h6>".$row2['description']."</h6>";

		echo "</div>";
		echo "</div>";
	}
	echo "</div>";
}
if(mysqli_num_rows($result3)>0){
	    echo "<div class='container' style='margin-top: 200px'>";
    	echo "<h2 align='center'> Data Science </h2>";
	while($row3=mysqli_fetch_assoc($result3)){
		echo "<div class='col-md-12'>";
        echo "<div class='well text-center'>";
		echo "<h6>".$row3['description']."</h6>";

		echo "</div>";
		echo "</div>";
	}
	echo "</div>";
}


?>
