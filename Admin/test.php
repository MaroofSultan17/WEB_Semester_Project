<?php
    session_start();
    if(isset($_SESSION['SESSION_ID'])){
        $Username = $_SESSION['EMAIL'];
        echo $Username;
    } else{
        echo "Inactive Session";
    }
    ?>