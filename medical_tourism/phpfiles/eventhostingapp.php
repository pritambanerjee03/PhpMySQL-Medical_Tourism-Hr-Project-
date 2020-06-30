<?php
    
        session_start();
    if(!isset($_SESSION['id']))
		{
			header('location: ../index.php');
		}

?>
<?php
                            include('../dbconfig/config.php');
                            if (isset($_POST['appsubmission'])) 
                            {
                                
                                $guest=$_SESSION['id'];
                                $name=$_POST['inputName'];
                                $mobile=$_POST['inputMobile'];
                                $email=$_POST['inputEmail'];
                                $organization=$_POST['inputOrganization'];
                                $eventname=$_POST['inputEventname'];
                                $genre=$_POST['inputGenre'];
                                $audience=$_POST['inputAudience'];
                                $performername=$_POST['inputPerformerName'];
                                $duration=$_POST['inputDuration'];
                                $date=$_POST['inputDate'];
                                $venue=$_POST['inputVenue'];
                                $comments=$_POST['inputComments'];
                                
                             
                               $query="insert into hostappointment(`id`, `name`, `mobile`, `email`, `organization`, `eventname`, `genre`, `audience`, `performer_name`, `duration`, `startdate`, `venue`, `comments`) values('$guest','$name','$mobile','$email','$organization','$eventname','$genre','$audience','$performername','$duration','$date','$venue','$comments')";
                                
                                        $query_run=mysqli_query($con,$query);

                                        if($query_run)
                                        {

                                                ?>
                                                <script type="text/javascript">
                                                alert("Thank you for joining with us. We will contact you soon");
                                               window.location.href = "../index1.php";
                                                </script>
                                                <?php
                                        }
                                        else
                                        {
                                            echo '<script type="text/javascript"> alert("Error") </script> ';
                                        }

                                   
                            }  

?>