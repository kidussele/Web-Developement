<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];

$s = " select * from usertable where email='$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"Username is already taken.";
}else{
    $reg=" insert into usertable(fname , lname , email , password, c_password) values ('$fname' , '$lname' , '$email' , '$pass' , '$cpass')";
    mysqli_query($con, $reg);
    echo" Registered successfully";
}
?>