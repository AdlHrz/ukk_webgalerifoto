<?php
    include "koneksi.php";
    session_start();

    $fotoid = $_GET['fotoid'];

    $sql = mysqli_query($conn, "DELETE FROM foto WHERE fotoid='$fotoid'");

    $showConfirmation = true;

    


    
    header("location:foto.php");
?>