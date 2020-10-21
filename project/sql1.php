<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<style type="text/css">
		.container{
			padding:16px;
			margin-right: 200px;
			margin-left: 200px;
			border-style: solid;
			border-color: red;
			margin-top: 200px;
		}
		body{
			background: black;
		}
	</style>
</head>
<body>
	<button type="button" class="btn btn-outline-success btn-lg" onclick="document.location='/myfiles/IWP/Landing Page/Landing Page/trailLandPage.html'" style="color: white; background-color: transparent; border-color: blue; height: 50px;">Knowledge Guild</button>
<form action="sql1.php" method='post' enctype="multipart/form-data">
<div class="container">	
<h1 align="center" style="color: white"> Upload An Article </h1>
<h2 align="center" style="color: white"> Topic
<select style= "width: 250px; height: 35px" id="select1" name="topic_select">
				<option value="0"> Select </option>
				<option value="Web Development"> Web Development </option>
				<option value="App Development" > App Development </option>
				<option value="Data Science" > Data Science </option>
</select>
</h2>
<h2 align="center" style="color: white"> Description <textarea rows="1" cols="30" name="description_entered" minlength="150"> </textarea> </h2> <br><br>
<div align="center"><input type="submit" name="submit" value="Upload"/></div>
</div>
</form>
</body>
</html>

<?php 
$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "comments"; 
$table = "details"; 


$connection= mysqli_connect ($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysqli_error());
}
mysqli_select_db($connection, $dbase);
if(isset($_POST['submit'])){
$description = $_POST['description_entered'];
$topic = $_POST['topic_select'];
if($_POST['topic_select']!='0'){
$sql="INSERT INTO $table (description,topic)
VALUES ('$description', '$topic')";
if (mysqli_query($connection, $sql)) {
  echo '<h5 align="center" style="color: white">New record created successfully</h5>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
}
else{
   echo '<h5 align="center" style="color: white">Please fill all the required fields.</h5>';
}
}
mysqli_close($connection);
?>