<?php
session_start();

include('../dbconfig/config.php');

$Job_Id = $_GET['id'];
$App_Id=$_SESSION['App_Id'];
$Iv_Id="";
$Date="";
$Marks="0";
$Status="Not Scheduled";


                                    $query="select * from addjobs where Id='$Job_Id'";
                                    $query_run=mysqli_query($con,$query);

                                    if (mysqli_num_rows($query_run)>0) 
                                    {
                                        $row = mysqli_fetch_array($query_run) ;
                                        $Hr_Id=$row['Hr_Id'];
                                    }
                                    
                                   

                                        $query="INSERT INTO `appliedjobs`(`Applicant_id`, `Job_id`, `Hr_id`,`Interviewer_id`, `Date_Time`, `Marks`, `Status`) VALUES ('$App_Id','$Job_Id','$Hr_Id','$Iv_Id','$Date','$Marks','$Status')";
                                        $query_run=mysqli_query($con,$query);

                                        if($query_run)
                                        {
                                                ?>
                                               <script type="text/javascript">
                                                alert("Thank You For Applying With Us.\nWe will connect to you soon.");
                                                window.location.href = "../indexuser.php";
                                                </script>
                                                <?php
                                        }


?>