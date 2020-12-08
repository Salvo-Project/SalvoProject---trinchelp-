<?php
$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "trinchelp";
 
$link = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
$username = $_POST['username'];
$password = $_POST['password'];
if(isset($username) && isset($password)){
 $sql = "SELECT * FROM user where username = '".$username."' AND password = '".$password."'";
 $result = $link->query($sql);
 if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        session_start();
        $_SESSION['username'] = $row['username'];
        echo "window.location.href = 'http://localhost/website/trinchelp/header.php'";
    }
 } else {
    echo 'alert("Username/Password non corretti")';
 }
}
?>