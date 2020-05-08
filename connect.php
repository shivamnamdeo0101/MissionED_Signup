<?php
	$conn=mysqli_connect('localhost','root','','missioned');
	$fullname = $_POST['fullname'];
	$email=$_POST['email'];
	$mobile_number =$_POST['mobile_number'];
	$class= $_POST['class'];
	$password = $_POST['password'];

	
	mysqli_query($conn,"insert into users (fullname,email,mobile_number,class,password)values ('$fullname','$email', '$mobile_number','$class','$password')");
	
	//sending email 
	$to = $email;
	$subject = "MissionED Signup Form";
	$message = "
				<html>
				<head>
				<title>MissionED Signup Form</title>
				</head>
				<body>
				<h2>MissionED Signup Form</h2>
				<p>Your Account:</p>
				<p>Full Name : ".$fullname."</p>
				<p>Email: ".$email."</p>
				<p>Mobile No: ".$mobile_number."</p>
				<p>Class : ".$class."</p>
				<p>Password: ".$password."</p>
				</body>
				</html>
				";
			
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: aryansn0101@gmail.com". "\r\n" .
						

		mail($to,$subject,$message,$headers);
  		header('location:signup.php');
	
?>