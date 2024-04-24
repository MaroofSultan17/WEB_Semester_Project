<?php
include ("db-config.php");
if (isset($_REQUEST["submit"])) {
    $FullName = mysqli_real_escape_string($conn, $_POST['fullname']);
    $Email = mysqli_real_escape_string($conn, $_POST['email']);
    $Contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $Password = mysqli_real_escape_string($conn, $_POST['password']);
    $SecurePassword = md5($Password);
    // echo $FullName;
    // die;
    $TokenKey = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!*()$";
    $TokenKey = str_shuffle($TokenKey);
    $TokenKey = substr($TokenKey, 0, 32);
    $Query = "SELECT MAX(cid) FROM customer";
    // echo $Query;
    // die();
    $Result = mysqli_query($conn, $Query);
    $MaxID = mysqli_fetch_array($Result);
    $UserID = $MaxID['0'];
    $UserID = $UserID + 1;
    $TodayDate = date("Ymd");
    $Reference = $TodayDate . "_" . str_pad($UserID, 8, "0", STR_PAD_LEFT); //20240328_000000002
    $Status = 0;
    $IP = $_SERVER['REMOTE_ADDR'];
    $InsertQuery = "INSERT INTO customer(cid, fullname, email, contact, password, securepassword, status, ipaddress, token, " .
        " refference) VALUES ($UserID, '$FullName', '$Email', '$Contact', '$Password', '$SecurePassword', '$Status', '$IP', '$TokenKey', '$Reference')";
    // echo $InsertQuery;
    // die;
    $Result = mysqli_query($conn, $InsertQuery);
    if ($Result) {
        ?>
        <script>
            alert('Registration Successfully.');
            window.location.href = '../index.php?success';
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Error For Registration');
            window.location.href = '../index.php?error';
        </script>
        <?php
    }

}

?>