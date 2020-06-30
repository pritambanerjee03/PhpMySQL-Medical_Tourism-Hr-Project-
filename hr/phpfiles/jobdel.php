
<?php
session_start();

include('../dbconfig/config.php');

$id = $_GET['id'];

$q = " DELETE FROM `addjobs` WHERE  Id = $id ";

$res=mysqli_query($con, $q);

$q1 = " DELETE FROM `appliedjobs` WHERE  Job_id = $id ";

$res=mysqli_query($con, $q1);


    header('location:../index.php');
?>
