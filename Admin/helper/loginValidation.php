<?php
include ("db-config.php");
if (isset($_REQUEST["submit"])) {
    $fullName = mysqli_real_escape_string($conn, $_POST['fullname']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $SecurePassword = md5($password);
    $Query = "SELECT cid, fullname, securepassword FROM customer WHERE fullname='$fullName' AND securepassword='$SecurePassword'";
    // echo $Query;
    // die;
    $Result = mysqli_query($conn, $Query);
    if ($Result->num_rows > 0) {
        $row = mysqli_fetch_object($Result);
        $_SESSION['SESSION_ID'] = $row->cid;
        $_SESSION['password'] = $row->securepassword;
        header('Location:../main.php');
        exit();
        // echo "<script>window.location.href='index.php';</script>";
        // exit();
    } else {
        ?>
        <script>
            alert("Invalid Credentials")
            window.location.href = "../index.php";
        </script>
        <?php
    }
}
?>