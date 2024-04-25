<?php
include ("config.php");
if (isset($_REQUEST["signin"])) {
    $Email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $SecurePassword = md5($password);
    $Query = "SELECT token, securepassword FROM admin WHERE email='$Email' AND securepassword='$SecurePassword'";
    // echo $Query;  die;
    $Result = mysqli_query($conn, $Query);
    if ($Result->num_rows > 0) {
        $row = mysqli_fetch_object($Result);
        $_SESSION['SESSION_ID'] = $row->token;
        $_SESSION['password'] = $row->securepassword;
        header('Location:../index.php');
        exit();
        // echo "<script>window.location.href='index.php';</script>";
        // exit();
    } else {
        ?>
        <script>
            alert("Invalid Credentials")
            window.location.href = "../login.php";
        </script>
        <?php
    }
}
?>