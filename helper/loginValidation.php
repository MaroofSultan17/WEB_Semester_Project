<?php
include ("db-config.php");
if (isset($_REQUEST["submit"])) {
    $fullName = mysqli_real_escape_string($conn, $_POST['fullname']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT fullname, password FROM signup WHERE fullname = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $fullName);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_array($result);
        if ($password == $data['password']) {
            ?>
            <script>
                alert("Login Successfully.");
                window.location.href = '../index.php?success';
            </script>

            <?php
        } else {
            ?>

            <script>
                alert("Incorrect Password.");
                window.location.href = '../index1.php?error';
            </script>

            <?php
        }
    } else {
        ?>
        <script>
            alert("User is not Exsist.");
            window.location.href = '../index1.php?error';
        </script>
        <?php
    }
}
?>