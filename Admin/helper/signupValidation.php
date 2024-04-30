<?php
include ("config.php");
if (isset($_REQUEST["signup"])) {
    $IP = $_SERVER['REMOTE_ADDR'];
    $FullName = mysqli_real_escape_string($conn, $_POST['username']);
    $Email = mysqli_real_escape_string($conn, $_POST['email']);
    $Password = mysqli_real_escape_string($conn, $_POST['password']);
    $SecurePassword = md5($Password);
    // echo $FullName; die;
    $TokenKey = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!*()$";
    $TokenKey = str_shuffle($TokenKey);
    $TokenKey = substr($TokenKey, 0, 32);
    $Query = "SELECT MAX(id) FROM adminlogin";
    // echo $Query; die();
    $Result = mysqli_query($conn, $Query);
    $MaxID = mysqli_fetch_array($Result);
    $UserID = $MaxID['0'];
    $UserID = $UserID + 1;
    $TodayDate = date("Ymd");
    $Reference = $TodayDate . "_" . str_pad($UserID, 8, "0", STR_PAD_LEFT); //20240328_000000002
    // $Status = 0;
    $InsertQuery = "INSERT INTO adminlogin(id, fullname, email, password, securepassword, token, ip, refference)" .
        " VALUES ($UserID, '$FullName', '$Email', '$Password', '$SecurePassword', '$TokenKey', '$IP','$Reference')";
    // echo $InsertQuery; die;
    $Result = mysqli_query($conn, $InsertQuery);
    if ($Result) {
        ?>
        <script>
            alert('Registration Successfully.');
            window.location.href = '../login.php?success';
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Error In Registration');
            window.location.href = '../signup.php?error';
        </script>
        <?php
    }
}
?>