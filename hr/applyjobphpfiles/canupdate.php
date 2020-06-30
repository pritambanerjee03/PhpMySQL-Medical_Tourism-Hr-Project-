<?php
session_start();

include('../dbconfig/config.php');

$Aj_Id = $_POST['Aj_Id'];
$Interviewer_Id = $_POST['Interviewer_Id'];
$Date_Time = $_POST['Date_Time'];
$Status="Scheduled";

                                    $query="UPDATE `appliedjobs` SET `Interviewer_id`='$Interviewer_Id',`Date_Time`='$Date_Time', `Status`='$Status' WHERE `Aj_Id`='$Aj_Id'";

                                        
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