<?php 
	session_start();
	include 'dbconnect.php';

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql="SELECT users.*,roles.name as role_name FROM users INNER JOIN model_has_roles ON users.id=model_has_roles.user_id INNER JOIN roles ON model_has_roles.role_id=roles.id  WHERE email=:user_email AND password=:user_password";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':user_email',$email);
	$stmt->bindParam(':user_password',$password);
	$stmt->execute();
	$user=$stmt->fetch(PDO::FETCH_ASSOC);

	if($user){
		$_SESSION['loginuser'] = $user;

		if($_SESSION['loginuser']){
			header("location: index.php");
		}else{
			header("location: login.php");
		}

	}else {
		header("location: login.php");
	}

 ?>