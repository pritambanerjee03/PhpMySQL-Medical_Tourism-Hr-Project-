<?php
    
       session_start();
    if(!isset($_SESSION['id']))
		{
			header('location: ../index.php');
		}

?>
<?php
                            include('../dbconfig/config.php');
                            if (isset($_POST['submit_btn'])) 
                            {
                                
                                //echo '<script type="text/javascript"> alert("sign up button clicked") </script> ';
                                if($_SESSION['id']!="")
                                    $guest=$_SESSION['id'];
                                else
                                    $guest="Guest_User";
                                $name=$_POST['name'];
                                $email=$_POST['email'];
                                $msg=$_POST['msg'];

                                
                                        $query="insert into `feedback`(`username`, `name`, `email`, `message`) values('$guest','$name','$email','$msg')";
                                        $query_run=mysqli_query($con,$query);

                                        if($query_run)
                                        {
                                        
                                                
                                                ?>
                                                <script type="text/javascript">
                                                alert("Thank you for Your feedback");
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