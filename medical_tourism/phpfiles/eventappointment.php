<?php
    
        session_start();
    if(!isset($_SESSION['id']))
		{
			header('location: ../index.php');
		}

?>
<?php
                            include('../dbconfig/config.php');
                            if (isset($_POST['seminarsubmission'])) 
                            {
                                
                                $guest=$_SESSION['id'];
                                $name=$_POST['inputName'];
                                $mobile=$_POST['inputMobile'];
                                $email=$_POST['inputEmail'];
                                $id_details=$_POST['inputIdDetails'];
                                $id_no=$_POST['inputIdNo'];
                                $address=$_POST['inputAddress'];
                                $booking_type=$_POST['inputBookingType'];
                                
                                $program_name=$_POST['inputProgramName'];
                                $seminar_date=$_POST['inputSeminarDate'];
                                $seminar_time=$_POST['inputSeminarTime'];
                                $seat_no=$_POST['inputSeminarSeatNo'];
                                $seat_type=$_POST['inputSeminarSeatType'];
                                
                                
                                
                                
                                        $query="insert into seminarappointment(`id`, `name`, `mobile`, `email`, `personal_Id`, `personal_Id_no`, `address`, `booking_type`, `program_name`, `date`, `time`, `no_of_seats`, `seat_type`) values('$guest','$name','$mobile','$email','$id_details','$id_no','$address','$booking_type','$program_name','$seminar_date','$seminar_time','$seat_no','$seat_type')";
                                
                                        $query_run=mysqli_query($con,$query);

                                        if($query_run)
                                        {

                                                ?>
                                                <script type="text/javascript">
                                                alert("Thank you for booking an Event with us. We will contact you soon");
                                               window.location.href = "../index.php";
                                                </script>
                                                <?php
                                        }
                                        else
                                        {
                                            echo '<script type="text/javascript"> alert("Error") </script> ';
                                        }

                                   
                            }  
                        
                        else if (isset($_POST['yogacampsubmission'])) 
                            {
                                
                                $guest=$_SESSION['id'];
                                $name=$_POST['inputName'];
                                $mobile=$_POST['inputMobile'];
                                $email=$_POST['inputEmail'];
                                $id_details=$_POST['inputIdDetails'];
                                $id_no=$_POST['inputIdNo'];
                                $address=$_POST['inputAddress'];
                                $booking_type=$_POST['inputBookingType'];
                                
                                $age=$_POST['inputAge'];
                                $gender=$_POST['inputGender'];
                                $program_name=$_POST['inputYogaProgramName'];
                                $location=$_POST['inputYogaCampLocation'];
                                $duration=$_POST['inputYogaCampDuration'];
                                $date=$_POST['inputYogaCampDate'];
                                $food_choice=$_POST['inputYogaCampFood'];
                                $disease=$_POST['inputYogaCampDiseaseName'];
                                $medicine=$_POST['inputYogaCampMedicineName'];
                                $medicine_details=$_POST['inputYogaCampMedicineDetails'];
                                $allergy=$_POST['inputYogaCampFoodAllergyName'];
                                $allergy_details=$_POST['inputYogaCampFoodAllergyDetails'];
                                
                                
                                
                                
                                        $query="insert into yogacampappointment(`id`, `name`, `mobile`, `email`, `personal_Id`, `personal_Id_no`, `address`, `booking_type`, `age`, `gender`, `program_name`, `location`, `duration`, `start_date`, `food_choice`, `disease_name`, `medicine`, `medicine_details`, `food_allergy`, `food_allergy_details`) values('$guest','$name','$mobile','$email','$id_details','$id_no','$address','$booking_type','$age','$gender','$program_name','$location','$duration','$date','$food_choice','$disease','$medicine','$medicine_details','$allergy','$allergy_details')";
                                
                                        $query_run=mysqli_query($con,$query);

                                        if($query_run)
                                        {

                                                ?>
                                                <script type="text/javascript">
                                                alert("Thank you for booking an Event with us. We will contact you soon");
                                               window.location.href = "../index.php";
                                                </script>
                                                <?php
                                        }
                                        else
                                        {
                                            echo '<script type="text/javascript"> alert("Error") </script> ';
                                        }

                                   
                            }  
                        
                        else if (isset($_POST['blooddonationsubmission'])) 
                            {
                                
                                $guest=$_SESSION['id'];
                                $name=$_POST['inputName'];
                                $mobile=$_POST['inputMobile'];
                                $email=$_POST['inputEmail'];
                                $id_details=$_POST['inputIdDetails'];
                                $id_no=$_POST['inputIdNo'];
                                $address=$_POST['inputAddress'];
                                $booking_type=$_POST['inputBookingType'];
                                
                                $age=$_POST['inputAge'];
                                $gender=$_POST['inputGender'];
                                $blood_grp=$_POST['inputBloodDonationCampBloodGroup'];
                                $within_90days=$_POST['inputBloodDonationCamp90Days'];
                                $disease=$_POST['inputBloodDonationCampDiseaseDetails'];
                                $medication=$_POST['inputBloodDonationCampMedication'];
                                $medication_details=$_POST['inputBloodDonationCampMedicationDetails'];
                                
                                
                                
                                
                                        $query="insert into bloodcampappointment( `id`, `name`, `mobile`, `email`, `personal_Id`, `personal_Id_no`, `address`, `booking_type`, `age`, `gender`, `blood_grp`, `donated_blood`, `chronic_disease`, `medication`, `medication_details`) values('$guest','$name','$mobile','$email','$id_details','$id_no','$address','$booking_type','$age','$gender','$blood_grp','$within_90days','$disease','$medication','$medication_details')";
                                
                                        $query_run=mysqli_query($con,$query);

                                        if($query_run)
                                        {

                                                ?>
                                                <script type="text/javascript">
                                                alert("Thank you for booking an Event with us. We will contact you soon");
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