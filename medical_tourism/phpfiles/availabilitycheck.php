<?php
    
        session_start();
    if(!isset($_SESSION['id']))
		{
			header('location: ../index.php');
		}

?>
<?php
                            include('../dbconfig/config.php');
                            if (isset($_POST['AvailibilitySubmitBtn'])) 
                            {
                                
                                $id=$_POST['Id'];
                                $appdate=$_POST['AppDate'];
                                $PatientName=$_POST['PatientName'];
                                $action="active";

                                
                                    $query="select * from doctorappointment where id='$id' And date_app='$appdate' And name='$PatientName' And action='$action'";
                                    $query_run=mysqli_query($con,$query);
                                    $row = mysqli_fetch_array($query_run);

                                    if (mysqli_num_rows($query_run)==1)
                                    {  
                                        
                                        $query="select * from hotelappointment where id='$id' And doc_app='$appdate' And patient_name='$PatientName' And action='$action'";
                                        $query_run=mysqli_query($con,$query);
                                        
                                        if (mysqli_num_rows($query_run)>0)
                                        {
                                                ?>
                                                <script type="text/javascript">
                                                alert("You have already owned an accommodation.\nPlease check your details.");
                                                window.location.href = "../index1.php";
                                                </script>
                                                <?php
                                        }
                                            
                                        else    
                                        { 

                                                $_SESSION['Id_doc']=$id;
                                                $_SESSION['AppDate']=$appdate;
                                                $_SESSION['PatientName']=$PatientName;
                                                $_SESSION['Doc_slno']=$row['slno'];
                                                ?>
                                                <script type="text/javascript">
                                                alert("Patient Name registered.\nPlease book an accommodation.");
                                                window.location.href = "../host/hotel.php";
                                                </script>
                                                <?php
                                        }
                                    }
                                        else
                                        {
                                            ?>
                                                <script type="text/javascript">
                                                alert("Check Your Details.\n Try Again!");
                                                window.location.href = "../index1.php";
                                                </script>
                                                <?php
                                        }
                                    
                                } 
                                else
                                        {
                                            echo '<script type="text/javascript"> alert("Appointment Date mismatch") </script> ';
                                        }
                            
?>
