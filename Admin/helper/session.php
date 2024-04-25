<?php
session_start();
if (empty($_SESSION['SESSION_ID'])) {
    header('Location:./login.php');
    // echo $_SESSION['SESSION_ID'];
} else {
    // echo $_SESSION['SESSION_ID'];
}
?>