<!DOCTYPE html>
<html>
<head>

	<style>
	.content
	{
	font-family: Times new roman;
	height:60%;
	font-size: 20px;
	text-align: center;
	border: 2px solid #04396f;
	width:50%;
	margin-top:50px;
	vertical-align:middle;
	horizontal-align:middle;
	border-radius: 8px;
	}
	
	inputbox{
	style="text-align:center;"
	border-radius: 8px;
	border: 1px solid #04396f;
	margin-right:20px;
	margin-left:20px;
	}
	
	.btn{
	font-family: Times new roman;
	width:200px;
	background-color:#9999ff;	
	border: 1px solid #003e75;
	font-size: 20px;
	margin-right:20px;
	margin-left:20px;
	margin-bottom:20px;
	margin-top:20px;
	border-radius: 8px;
	}
	
	.btn:hover{
	font-family: Times new roman;
	font-weight:900;
	animation-name: example;
	animation-duration: 1.5s;
	width:200px;
	margin-bottom:20px;
	margin-top:20px;
	border: 1px solid #003e75;
	border-radius: 8px;
	}
	
		
	@keyframes example {
	  from {background-color:lightblue;}
	  to{background-color:#9999ff;}
	}
	
	th{
	font-size:30px;
	}
	
	
	
	
	</style>


	<script>
	function myFunction() {
	  
	  var username= document.getElementById("username").value;
	  
	  document.getElementById("demo").innerHTML = "Username: "+username+";
	  
	}
	
	</script>



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
		<a href="mailto:BSGcomms@temenos.com">Feedback</a> 
		</th>
		</tr>
		</table>
		
		<hr style="border: 2px solid #063970;">

		<center>
		<br>
		
		<ul style="text-align:left;color:#063970;margin-left:100px;margin-right:100px;font-size:20px;">
        <li> Below self service option can be used to unlock / Reset password for Infinity ( Retail/Business/ Wealth ) Users.</li>
        <li> Provide User name in the text box and click Reset password option to get new password as "123456".</li>
        <li> provide User name in the text box and click Unlock user to get user unlocked.</li>
		</ul>
		
		
		
		
		<div class="content">

			<div>
				<h3>Password Reset/Unlock User</h3>
			</div>
		<form name="form" action="dataupdate.php" method="get" >
			Username: <input  type="text" style="height:20px" id="username" placeholder="Enter username" name='data'>
			<br>
			<center>
			<table style="text-align:center;margin-top:10px;">
			<tr><th>
			<button class="btn" value="resetpass" name="process" method="get">Reset Password</button>
			</th>
			
			<th>
			<button class="btn" value="unlockuser" name="process" method="get">Unlock User</button>
			</th></tr>
			</table>
			</center>
			<p id="demo"></p>
		</form>

		</div>

		</center>

	</body>
</html>

