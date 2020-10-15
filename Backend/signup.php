<?php
session_start();
include 'dbconnect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$pass = $_POST['pass'];
$con_pass = $_POST['con_pass'];
$photo = $_FILES['photo'];

$_SESSION['old_name'] = $name;
$_SESSION['old_email'] = $email;
$_SESSION['old_phone'] = $phone;
$_SESSION['old_address'] = $address;


$basepath = "img/admin/";
$fullpath = $basepath.$photo['name'];
move_uploaded_file($photo['tmp_name'], $fullpath);

if($name == null || $email == null || $phone == null || $address == null || $pass == null || $photo['size']==0){

	if($photo['size']==0){
		$_SESSION['profile_error'] = "Profile Image is required.";
	}
	if($name == null){
		$_SESSION['name_error'] = "Name is required.";
	}
	if($email == null){
		$_SESSION['name_error'] = "Name is required.";
	}
	if($phone == null){
		$_SESSION['phone_error'] = "Phone is required.";
	}
	if($address == null){
		$_SESSION['address_error'] = "Address is required.";
	}
	if($pass == null){
		$_SESSION['pass_error'] = "Password is required.";
	}
	if($con_pass == null){
		$_SESSION['con_pass_error'] = "Confirm Password is required.";
	}

	header("location: register.php");
} elseif ($pass != $con_pass) {
	$_SESSION['pass_error'] = "Password and Confirm Password are not matched.";
}else {

	$sql="INSERT INTO users (name,email,phone,address,password,profile) VALUES(:name,:email,:phone,:address,:pass,:photo)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':name',$name);
	$stmt->bindParam(':email',$email);
	$stmt->bindParam(':phone',$phone);
	$stmt->bindParam(':address',$address);
	$stmt->bindParam(':pass',$pass);
	$stmt->bindParam(':photo',$fullpath);
	$stmt->execute();


	$sql="SELECT * FROM users ORDER BY id DESC LIMIT 1";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$user = $stmt->fetch(PDO::FETCH_ASSOC);

	$user_id = $user['id'];
	$role_id = 1;

	$sql = "INSERT INTO model_has_roles (user_id, role_id) VALUES (:user_id, :role_id)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':user_id', $user_id);
	$stmt->bindParam(':role_id', $role_id);
	$stmt->execute();

	if ($stmt->rowCount()) {
		header("location:login.php");
	}else{
		echo "Error";
	}

}

?>