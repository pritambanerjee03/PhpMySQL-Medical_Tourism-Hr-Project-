<?php 

session_start();
session_destroy();
?>

<script type="text/javascript">
    alert("Please login again to connect with us");
    window.location.href = "../admin/index.php";
</script>
