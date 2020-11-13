<?php
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
if ( $result->num_rows == 0 ){ 
    $_SESSION['message'] = "Përdoruesi me këtë email nuk ekziston!";
    header("location: error.php");
}
else { 
    $user = $result->fetch_assoc();
    if ( password_verify($_POST['password'], $user['password']) ) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['logged_in'] = true;
        header("location: ../index.php");
    }
    else {
        $_SESSION['message'] = "Nuk e keni shënuar fjalëkalimin e saktë. Provoni përsëri!";
        header("location: error.php");
    }
}