<?php
include ('../helper/config.php');
if (isset($_REQUEST['addproduct'])) {

    $IP = $_SERVER['REMOTE_ADDR'];
    $Title = mysqli_escape_string($conn, $_POST['title']);
    $TotalPrice = mysqli_escape_string($conn, $_POST['totalprice']);
    $Percentageoff = mysqli_escape_string($conn, $_POST['percentage_off']);
    $Catageory = mysqli_escape_string($conn, $_POST['category']);

    $DiscountedPrice = 0;
    if ($Percentageoff > 0) {
        $PercentageDecimal = $Percentageoff / 100;
        $DiscountedPrice = $TotalPrice - ($TotalPrice * $PercentageDecimal);
    } else {
        $DiscountedPrice = $TotalPrice;
    }
    $DiscountedPrice = number_format((double) $DiscountedPrice, 2, '.', '');

    $FileInfo = pathinfo($_FILES['image']['name']);
    $NewFileName = $FileInfo['filename'] . "_" . time() . "." . $FileInfo['extension'];
    move_uploaded_file($_FILES['image']['tmp_name'], "../../upload/" . $NewFileName);
    $Image = "./upload/" . $NewFileName;
    // echo $Catageory; die;
    $Query = "SELECT MAX(id) FROM sale";
    // echo $Query; die();
    $Result = mysqli_query($conn, $Query);
    $MaxID = mysqli_fetch_array($Result);
    $ProductID = $MaxID['0'];
    $ProductID = $ProductID + 1;
    $TodayDate = date("Ymd");
    $Reference = $TodayDate . "_" . str_pad($ProductID, 8, "0", STR_PAD_LEFT); //20240328_000000002
    $Status = 0;
    $InsertQuery = "INSERT INTO sale(id, image, title, refference, catageory, ip, totalprice, percentoff, priceonoff)" .
        " VALUES ($ProductID, '$Image', '$Title', '$Reference', '$Catageory', '$IP', $TotalPrice, $Percentageoff, $DiscountedPrice)";
    // echo $InsertQuery; die();
    $Result = mysqli_query($conn, $InsertQuery);
    if ($Result) {
        ?>
        <script>
            alert('Product ADD Successfully.');
            window.location.href = '../index.php?success';
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Error For Product ADD');
            window.location.href = '../addproduct.php?error';
        </script>
        <?php
    }
}
?>