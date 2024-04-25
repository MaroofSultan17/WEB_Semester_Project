<?php
include ("db-config.php");
if (isset($_REQUEST["contactus"])) {

    $IP = $_SERVER['REMOTE_ADDR'];
    $FullName = mysqli_real_escape_string($conn, $_POST['contactusname']);
    $Email = mysqli_real_escape_string($conn, $_POST['contactusemail']);
    $Contact = mysqli_real_escape_string($conn, $_POST['contactusphno']);
    $Subject = mysqli_real_escape_string($conn, $_POST['contactussubject']);
    $Message = mysqli_real_escape_string($conn, $_POST['contactusmessage']);

    $Query = "SELECT MAX(id) FROM contactus";
    // echo $Query;
    // die();
    $Result = mysqli_query($conn, $Query);
    $MaxID = mysqli_fetch_array($Result);
    $ContactUsID = $MaxID['0'];
    $ContactUsID = $ContactUsID + 1;
    $TodayDate = date("Ymd");
    $Reference = $TodayDate . "_" . str_pad($ContactUsID, 8, "0", STR_PAD_LEFT); //20240328_000000002
    $InsertQuery = "INSERT INTO contactus(id, fullname, email, phoneno, subject, message, ip, refference)" .
        " VALUES ($ContactUsID, '$FullName', '$Email', '$Contact', '$Subject', '$Message' ,'$IP', '$Reference')";
    // echo $InsertQuery;
    // die;
    $Result = mysqli_query($conn, $InsertQuery);
    if ($Result) {
        ?>
        <script>
            alert('We Will COntact you as soon as possible');
            window.location.href = '../main.php?success';
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Error For Registration');
            window.location.href = '../contact-us.php?error';
        </script>
        <?php
    }
}
?>