<?php
    
        session_start();
    if(isset($_SESSION['id']))
		{
			header('location: ../index1.php');
		}

?>
                           

 <?php
                            include('../dbconfig/config.php');
                            if (isset($_POST['register_btn'])) 
                            {
                                
                                //echo '<script type="text/javascript"> alert("sign up button clicked") </script> ';
                                $email=$_POST['email'];
                                $password=$_POST['password'];
                                $cpassword=$_POST['cpassword'];

                                if ($password==$cpassword) 
                                {
                                    $query="select * from userinfo where email='$email'";
                                    $query_run=mysqli_query($con,$query);

                                    if (mysqli_num_rows($query_run)>0) 
                                    {
                                        echo '<script type="text/javascript"> alert("User already exist try another username") </script> ';
                                    }
                                    else
                                    {
                                        $query="INSERT INTO `userinfo`(`email`, `password`) VALUES('$email','$password')";
                                        $query_run=mysqli_query($con,$query);

                                        if($query_run)
                                        {
                                            
                                                ?>
                                                <script type="text/javascript">
                                                alert("User registered go to login page.\nPlease login again to verify.");
                                                window.location.href = "../loginandregister/loginandregister.php";
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

                            else if(isset($_POST['login_btn'])) 
                            {
                                
                               /* $username=$_POST['username'];
                                $password=$_POST['password'];*/
                                $email = mysqli_real_escape_string($con, $_POST["email"]);
                                $password = mysqli_real_escape_string($con, $_POST["password"]);
                                
                                    $query="select * from userinfo where email='$email' AND password='$password'";
                                    $query_run=mysqli_query($con,$query);

                                    if (mysqli_num_rows($query_run)>0) 
                                    {
                                        //valid
                                        
                                        $_SESSION['email']=$email;
                                        $string = $email;
                                        $resultArr = [];                             
                                        $j=strpos($string,"@");
                                        for ($i = 0; $i <$j; $i++) {
                                            $resultArr[$i] = $string[$i];
                                        }
 
                                        $username= implode("",$resultArr);
                                        $_SESSION['id']=$username;
                                        ?>
                                                <script type="text/javascript">
                                                alert("Thank you for Logging with us");
                                                window.location.href = "../index1.php";
                                                </script>
                                        <?php
                                    }
                                    else
                                    {
                                        //invalid
                                        ?>
                                        <script type="text/javascript"> 
                                            alert("Invalid credentials") 
                                            window.location.href = "../loginandregister/loginandregister.php";
                                        </script> 
                                        <?php
                                        
                                    }
                                    
                            }

                            ?>