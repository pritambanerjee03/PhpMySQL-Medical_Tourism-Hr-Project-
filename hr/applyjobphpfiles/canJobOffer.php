<?php
session_start();

include('../dbconfig/config.php');

$Aj_Id = $_POST['Aj_Id'];
$Status = $_POST['Job_Offer'];


                                    $query="UPDATE `appliedjobs` SET `Status`='$Status' WHERE `Aj_Id`='$Aj_Id'";

                                        
                                        $query_run=mysqli_query($con,$query);

                                        if($query_run)
                                        {
                                                ?>
                                               <script type="text/javascript">
                                                alert("Thank You For Doing Update.");
                                                window.location.href = "../index.php";
                                                </script>
                                                <?php
                                        }


?>