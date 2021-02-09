<?php
include 'db.php';
include 'header.php';


if(isset($_POST['submit'])){
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$address = $_POST['addres'];
	$email = $_POST['email'];
	$class = $_POST['clas'];
	$password = $_POST['pas'];
	//$sh= sha1($password);
	$number = $_POST['number'];


$check = "SELECT * FROM staff WHERE email = '$email'";
$check2  = mysqli_query($config, $check) or die(mysqli_error($config));
$count = mysqli_num_rows($check2);
	

if($count > 0){
	echo "Already registered";
	
}else{
	$enter = "INSERT INTO staff (firstName, lastName, address, email, class, password, number) VALUE('$firstName', '$lastName', '$address', '$email', '$class', '$password', '$number')";

 
 $enter2 = mysqli_query($config, $enter) or die (mysqli_error($config));
?>
 <script>

 alert ('registration successful')
 window.redirect ('index.php')

 </script>

 <?php


//  header ('location :home.php');
}

 

}


?>


