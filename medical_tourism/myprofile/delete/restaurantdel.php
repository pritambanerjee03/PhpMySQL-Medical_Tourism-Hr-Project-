<?php


include('../../dbconfig/config.php');

$id = $_GET['id'];

$q = " UPDATE `restaurantappointment` SET `action`='passive' WHERE slno = $id ";

mysqli_query($con, $q);

header('location:../userprofile.php');

?>