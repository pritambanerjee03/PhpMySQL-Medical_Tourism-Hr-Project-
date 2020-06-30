
<?php
session_start();

include('../../dbconfig/config.php');

$id = $_GET['id'];

$q = " SELECT * FROM `doctorappointment` WHERE slno = $id ";

$res=mysqli_query($con, $q);

$row = mysqli_fetch_array($res);

$date_app=$row['date_app'];





    $q1 = " UPDATE `doctorappointment` SET `action`='passive' WHERE slno = $id ";
    mysqli_query($con, $q1);
    
    $q2 = " UPDATE `hotelappointment` SET `action`='passive' WHERE doc_app = '$date_app' ";
    mysqli_query($con, $q2);
    
    $q3 = " UPDATE `restaurantappointment` SET `action`='passive' WHERE doc_app = '$date_app' ";
    mysqli_query($con, $q3);
    

    header('location:../userprofile.php');
?>
