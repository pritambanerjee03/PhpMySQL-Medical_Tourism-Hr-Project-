
<?php
                            include('../dbconfig/config.php');
                            if (isset($_POST['submit_btn'])) 
                            {
                                
                                
                                $name=$_POST['name'];
                                $email=$_POST['email'];
                                $mobile=$_POST['mobile'];
                                $msg=$_POST['msg'];

                                
                                        $query="insert into `feedback`(`Name`, `Email`,`Mobile`, `Message`) values('$name','$email','$mobile','$msg')";
                                        $query_run=mysqli_query($con,$query);

                                        if($query_run)
                                        {
                                        
                                                
                                                ?>
                                                <script type="text/javascript">
                                                alert("Thank you for Your feedback");
                                               window.location.href = "../admin/index.php";
                                                </script>
                                                <?php
                                        }
                                        else
                                        {
                                            echo '<script type="text/javascript"> alert("Error") </script> ';
                                        }

                                   
                            }  

?>