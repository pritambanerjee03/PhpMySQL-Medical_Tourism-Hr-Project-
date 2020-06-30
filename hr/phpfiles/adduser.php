<?php

                            include('../dbconfig/config.php');
                            if (isset($_POST['submit'])) 
                            {
                                
                                $fname=$_POST['full_name'];
                                $address=$_POST['address'];
                                $mobile=$_POST['mobile'];
                                $gender=$_POST['gender'];
                                $email=$_POST['email'];
                                $password=$_POST['password'];
                                $cpassword=$_POST['cpassword'];

                                if ($password==$cpassword) 
                                {
                                    $query="select * from userinfo where Applicant_Email='$email'";
                                    $query_run=mysqli_query($con,$query);

                                    if (mysqli_num_rows($query_run)>0) 
                                    {
                                        echo '<script type="text/javascript"> alert("User already exist try another email") </script> ';
                                    }
                                    else
                                    {
                                        $query="INSERT INTO `userinfo`(`Applicant_Name`, `Applicant_Email`, `Applicant_Password`, `Applicant_Mobile`, `Applicant_Gender`, `Applicant_Address`) VALUES('$fname','$email','$password','$mobile','$gender','$address')";
                                        $query_run=mysqli_query($con,$query);

                                        if($query_run)
                                        {
                                            
                                                ?>
                                                <script type="text/javascript">
                                                alert("User registered go to login page.\nPlease login again to verify.");
                                                window.location.href = "../loginpages/userlogin.php";
                                                </script>
                                                <?php
                                        }
                                        else
                                        {
                                            echo '<script type="text/javascript"> alert("Error") </script> ';
                                        }

                                    }
                                    
                                }
                                else
                                        {
                                            echo '<script type="text/javascript"> alert("password mismatch") </script> ';
                                        }
                            }
?>
