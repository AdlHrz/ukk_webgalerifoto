<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION['userid'])) {
    header("location:index.php");
} else {
    $fotoid = $_GET['fotoid'];
    $userid = $_SESSION['userid'];
    
    $ceksuka =mysqli_query($conn, "SELECT * FROM likefoto WHERE fotoid='$fotoid' AND userid='userid'");

    if (mysqli_num_rows($ceksuka) == 1) {
        while ($row = mysqli_fetch_array($ceksuka)) {
            $likeid = $row['likeid'];
            mysqli_query($conn, "DELETE * FROM likefoto WHERE likeid='$likeid'");
            header("location:home.php");
        }

    } else {
        $tanggallike = date("Y-m-d");
        mysqli_query($conn, "INSERT INTO likefoto VALUES('','$fotoid','$userid','$tanggallike')");
        header("location:home.php");
    }
}