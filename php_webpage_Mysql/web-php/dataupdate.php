<!DOCTYPE html>
<html land="en">
<head>

<title>MDS 2024.01</title>

<style>

	.content
	{
	font-family: Times new roman;
	font-size: 20px;
	border: 2px solid #04396f;
	width:35%;
	margin-top:100px;
	vertical-align:middle;
	horizontal-align:middle;
	border-radius: 8px;
	}
	result{
	font-size: 200px;
	border: 2px solid red;
	width:35%;
	margin-top:100px;
	vertical-align:middle;
	horizontal-align:middle;
	border-radius: 8px;
	}
	
	th{
	font-size:30px;
	}
	
	
</style>


</head>

<body>
		<table style="width:100%;border-collapse:collapse;">
		<tr>
		
		<th>
			<img style="width:80px;height:80px;" src="logo.png">
		</th>
		
		<th>
			<h3 style="color:#063970;">Data Update Scripts</h3> 
		</th> 
		<th>
		<a href="mailto:sridhinesh1811@gmail.com">Feedback</a> 
		</th>
		</tr>
		</table>
		
<hr style="border: 2px solid #063970;">
<center>


<div class="content">

<?php
	//getting the user id from previous web page
	$user = $_GET['data'];
	
	//getting the proccess information(password reset or unlock the user)
	$process= $_GET['process'];
	
	//DB connecting parameters
	$servername = "mysqldb";
	$username = "root";
	$password = "Webpage@123";
	$dbname = "users";
	$port="3309";



	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	//select query to get primary key using the username
	$sql = "SELECT id FROM customer where username='".$user."'";
	$result = $conn->query($sql);
?>

<div calss="result">

<?php
	if ($result->num_rows > 0) {
		
		echo "<p style='color:blue;margin-top:20px'>USERNAME: ".$user."<br></b></p>";
	  
	  // output data of each row
		while($row = $result->fetch_assoc()) 
		{
			//assigning the primary key(ID) to the variable $id
			$id = $row["id"];
		}
		
	//reset password
		If($process === "resetpass"){
		
		$sql = "UPDATE customer SET password='$2a$11$/goI8fxpEqyqlEiUQzjcJeBXuJg9H.rV0FJ0ERsHXneQG8frjFoxW' WHERE id=".$id."";
		

		if ($conn->query($sql) === TRUE) 
		{
		echo "<p style='color:green;'>Your password updated as <b>123456.</p>";
		} 
		else 
		{
			echo "Error updating record: " . $conn->error;
		}
		}
		
	//unlock user
		
		If($process === "unlockuser"){
		
		$sql = "UPDATE customer SET lockcount=0 WHERE id=".$id."";
		

		if ($conn->query($sql) === TRUE) 
		{
		echo "<p style='color:green;'>User Unlocked.</p>";
		} 
		else 
		{
			echo "Error updating record: " . $conn->error;
		}
		}
		
	}
	else {
		echo "<p style='color:red;'>Please recheck the Input.</p>";
		}

	$conn->close();

?>

</div>

</div>
</center>

</body>
</html>