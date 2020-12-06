<?php
session_start();
if(isset($_SESSION['username'])){
    session_destroy();
    unset($_SESSION['username']);
    echo "<script>window.location.href = 'http://localhost/website/trinchelp'</script>";
} else {
    echo "<script>window.location.href = 'http://localhost/website/trinchelp'</script>";
}
?>