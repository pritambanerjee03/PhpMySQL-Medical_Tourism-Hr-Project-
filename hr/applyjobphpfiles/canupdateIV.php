<?php
session_start();

include('../dbconfig/config.php');

$Aj_Id = $_POST['Aj_Id'];
$Marks = $_POST['Marks'];
$Date_Time = $_POST['Date_Time'];
if($Marks<=0)
{
  $Status="Scheduled";
   $Marks="0";
}
else if($Marks>0)
{
   $Status="Interviewed"; 
}


                                    $query="UPDATE `appliedjobs` SET `Date_Time`='$Date_Time',`Marks`='$Marks', `Status`='$Status' WHERE `Aj_Id`='$Aj_Id'";

                                        
                                        $query_run=mysqli_query($con,$query);

                                        if($query_run)
                                        {
                                                ?>
                                               <script type="text/javascript">
                                                alert("Thank You For Doing Update.");
                                                window.location.href = "../indexinterviewer.php";
                                                </script>
                                                <?php
                                        }


?>