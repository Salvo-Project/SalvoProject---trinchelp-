<?php
$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "trinchelp";
 
$link = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$confirmpassword = md5($_POST['confirmpassword']);
$sql = "INSERT INTO user (username,email,password,confirmpassword) VALUES (?, ?, ?, ?)";
if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "ssss",$param_username,$param_email,$param_confirmpassword,$param_password);

    $param_username = $username;
    $param_email = $email;
    $param_password = $password;
    $param_confirmpassword = $confirmpassword;
    if(mysqli_stmt_execute($stmt)){
        session_start();
        $_SESSION['username'] = $username;
        echo "window.location.href = 'http://localhost/signin/dashboard.php'";
    }
}
?>