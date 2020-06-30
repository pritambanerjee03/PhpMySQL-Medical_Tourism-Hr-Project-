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
                                
                                //echo '<script type="text/javascript"> alert("sign up button clicked") </script> ';
                                $guest=$_SESSION['id'];
                                $name=$_POST['inputName'];
                                $age=$_POST['inputAge'];
                                $gender=$_POST['inputGender'];
                                $address=$_POST['inputAddress'];
                                $date=$_POST['inputDate'];
                                $speciality=$_POST['inputSpeciality'];
                                $doctorname=$_POST['inputDoctor'];
                                $hospitalname=$_POST['inputHospital'];
                                $mobile=$_POST['inputMobile'];
                                $email=$_POST['inputEmail'];
                                $town=$_POST['inputTown'];
                                $country=$_POST['inputCountry'];
                                $action="active";
                                
                                    $query="select * from doctorappointment where id='$guest' And date_app='$date' And name='$name' And action='$action'";
                                    $query_run=mysqli_query($con,$query);

                                    if (mysqli_num_rows($query_run)>0)
                                    {  
                                                ?>
                                                <script type="text/javascript">
                                                alert("Patient Name is already registered for this Day.\nPlease book an appointment for an another day.");
                                                window.location.href = "../host/doctorlist.php";
                                                </script>
                                                <?php
                                        }
                                    else
                                    {
                                        $query="insert into doctorappointment(`id`, `name`, `age`, `gender`, `address`, `date_app`, `speciality`, `docname`, `hospital_name`, `mobile`, `email`, `town`, `country`) values('$guest','$name','$age','$gender','$address','$date','$speciality','$doctorname','$hospitalname','$mobile','$email','$town','$country')";
                                
                                        $query_run=mysqli_query($con,$query);

                                        if($query_run)
                                        {

                                                ?>
                                                <script type="text/javascript">
                                                alert("Thank you for your booking we will contact you soon");
                                               window.location.href = "../index.php";
                                                </script>
                                                <?php
                                        }
                                        else
                                        {
                                            echo '<script type="text/javascript"> alert("Error") </script> ';
                                        }
                                        
                                    }
                                        

                                   
                            }  

?>