<?php
    session_start();
    if(isset($_GET['logout']))
    {
        //var_dump($_GET);
        //die();
        session_destroy();
        header("location:../tampilkan/tampilkan7.php");
    }

?>