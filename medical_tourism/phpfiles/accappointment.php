<?php
    
        session_start();
    if(!isset($_SESSION['id']))
		{
			header('location: ../index.php');
		}

?> 
<?php
                            include('../dbconfig/config.php');
                            if (isset($_POST['HotelSubmitBtn'])) 
                            {
                                
                                //echo '<script type="text/javascript"> alert("sign up button clicked") </script> ';
                                $Id_hotel=$_SESSION['Id_doc'];
                                $app_date=$_SESSION['AppDate'];
                                $patient_name=$_SESSION['PatientName'];
                                $hotel_name=$_POST['HotelName'];
                                $check_in=$_POST['CheckinDate'];
                                $check_out=$_POST['CheckoutDate'];
                                $rooms=$_POST['Rooms'];
                                $guests=$_POST['Guests'];
                                $doc_slno=$_SESSION['Doc_slno'];
                                
                                        $query="insert into hotelappointment(`id`, `patient_name`, `doc_app`, `hotel_name`, `check_in`, `check_out`, `rooms`, `guests`,`docslno`) values('$Id_hotel','$patient_name','$app_date','$hotel_name','$check_in','$check_out','$rooms','$guests','$doc_slno')";
                                
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
                                                window.location.href = "../host/hotel.php";
                                                </script>
                                                <?php
                                        }

                                   
                            }  

?>