<?php
session_start();
if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
    echo '<a href="http://localhost/website/trinchelp/logout.php">Logout</a>';
} else {
    echo "<script>window.location.href = 'http://localhost/website/trinchelp'</script>";
}
?>