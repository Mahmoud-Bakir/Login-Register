<?php
include("connection.php");

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$pass=$_POST['password'];

$check=$mysqli->prepare("select email from users where email=?");
$check->bind_param("s",$email);
$check->execute();

$check->store_result();
$email_exist = $check->num_rows();

if ($email_exist == 0) {
    $hashed_password = password_hash($pass, PASSWORD_BCRYPT);
    $query = $mysqli->prepare('insert into users(first_name,last_name,email,password) values(?,?,?,?)');
    $query->bind_param('ssss', $first_name, $last_name, $email, $hashed_password);
    $query->execute();

    $response['status'] = "success";
    $response['message'] = "another message in success";
} else {
    $response['status'] = "failed";
    $response['message'] = "another message in fail";
}




?>