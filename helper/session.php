<?php
if (empty($_SESSION['SESSION_ID'])) {
    header('Location:./index.php');
    // echo $_SESSION['SESSION_ID'];
} else {
    // echo $_SESSION['SESSION_ID'];
}
?>