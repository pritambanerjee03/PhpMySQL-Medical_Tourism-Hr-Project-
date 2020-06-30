<?php


include('../../dbconfig/config.php');

$id = $_GET['id'];

$q = " DELETE FROM `feedback` WHERE id = $id ";

mysqli_query($con, $q);

header('location:../userprofile.php');

?>
