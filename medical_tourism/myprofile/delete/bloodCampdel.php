<?php


include('../../dbconfig/config.php');

$id = $_GET['id'];

$q = " UPDATE `bloodcampappointment` SET `action`='passive' WHERE slno = $id ";

mysqli_query($con, $q);

header('location:../userprofile.php');

?>
