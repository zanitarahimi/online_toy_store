<?php
error_reporting(E_ERROR | E_PARSE);
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];
$_SESSION['id'] = $_POST['id'];


$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']);
$id = $mysqli->escape_string($_POST['id']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));

$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());

if ( $result->num_rows > 0 ) {
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");
}
else { 
    $sql = "INSERT INTO users (first_name, last_name, email, password) " . "VALUES ('$first_name','$last_name','$email','$password')";
    if ( $mysqli->query($sql) ){
        $_SESSION['logged_in'] = true; 
        header("location: ../index.php");
    }
    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }
}