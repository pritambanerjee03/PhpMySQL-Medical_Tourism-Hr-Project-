
<?php
                            session_start();
                            include('../dbconfig/config.php');
                            if (isset($_POST['addjobsSubmit'])) 
                            {
                                
                               
                                $jobTitle=$_POST['jobTitle'];
                                $technology=$_POST['technology'];
                                $vacancy=$_POST['vacancy'];
                                $hr_id=$_SESSION['Hr_Id'];
                                $salary=$_POST['salary'];
                                $job_desc=$_POST['jobDesc'];
                               
                                
                                    
                                        $query="INSERT INTO `addjobs`(`Hr_Id`, `JobTitle`, `Technology`, `Salary`, `Job_Description`, `Vacancy`) VALUES('$hr_id','$jobTitle','$technology','$salary','$job_desc','$vacancy')";
                                
                                        $query_run=mysqli_query($con,$query);

                                        if($query_run)
                                        {

                                                ?>
                                                <script type="text/javascript">
                                                alert("You Have Successfully Created a new Job Vacancy");
                                               window.location.href = "../index.php";
                                                </script>
                                                <?php
                                        }
                                        else
                                        {
                                            echo '<script type="text/javascript"> alert("Error") </script> ';
                                        }
                                        
                                    
                                        

                                   
                            }  

?>