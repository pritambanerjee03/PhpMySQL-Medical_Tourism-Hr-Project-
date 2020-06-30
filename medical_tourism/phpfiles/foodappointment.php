<?php
    
        session_start();
    if(!isset($_SESSION['id']))
		{
			header('location: ../index.php');
		}

?> 
<?php
                            include('../dbconfig/config.php');
                            if (isset($_POST['FoodSubmitBtn'])) 
                            {
                                
                                //echo '<script type="text/javascript"> alert("sign up button clicked") </script> ';
                                $Id_hotel=$_SESSION['Id_doc'];
                                $app_date=$_SESSION['AppDate'];
                                $patient_name=$_SESSION['PatientName'];
                                $res_name=$_POST['ResName'];
                                $food_pref=$_POST['FoodPref'];
                                $persons=$_POST['Persons'];
                                $date=$_POST['Date'];
                                $time=$_POST['Time'];
                                $doc_slno_food=$_SESSION['Doc_slno_food'];
                                
                                        $query="insert into restaurantappointment(`id`, `patient_name`, `doc_app`, `restaurant_name`, `food_pref`, `persons`, `date`, `time`,`docslno`) values('$Id_hotel','$patient_name','$app_date','$res_name','$food_pref','$persons','$date','$time','$doc_slno_food')";
                                
                                        $query_run=mysqli_query($con,$query);

                                        if($query_run)
                                        {
                                                unset($_SESSION['Id_doc']);
                                                unset($_SESSION['AppDate']);
                                                unset($_SESSION['PatientName']);
                                            
                                                ?>
                                                <script type="text/javascript">
                                                alert("Thank you for your booking.\n We will contact you soon.");
                                               window.location.href = "../index1.php";
                                                </script>
                                                <?php
                                        }
                                        else
                                        {
                                                ?>
                                                <script type="text/javascript">
                                                alert("Check Your Details.\n Try Again!");
                                                window.location.href = "../host/fooding/food.php";
                                                </script>
                                                <?php
                                        }

                                   
                            }  

?>