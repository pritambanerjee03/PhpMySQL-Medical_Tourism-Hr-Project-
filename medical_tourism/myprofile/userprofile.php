<?php
    
        session_start();
    if(!isset($_SESSION['id']))
		{
			header('location: ../index.php');
		}
    include('../dbconfig/config.php');
        $_SESSION['msg1']="";
        date_default_timezone_set('Asia/Kolkata');// change according timezone
        $currentTime = date( 'd-m-Y h:i:s A', time () );
        if(isset($_POST['entry_submit']))
        {
            $sql=mysqli_query($con,"SELECT password FROM userinfo where password='".$_POST['cpass']."' && email='".$_SESSION['email']."'");
            $num=mysqli_fetch_array($sql);
            if($num>0)
            {
             $con=mysqli_query($con,"update userinfo set password='".$_POST['npass']."', updation_date='$currentTime' where email='".$_SESSION['email']."'");
                header("location: ./userprofile.php");
            /*$_SESSION['msg1']="Password Changed Successfully !!";*/
                
            }
            else
            {
            $_SESSION['msg1']="Old Password not match !!";
            }
        }
        $_SESSION['msg2']="";
        if(isset($_POST['update_submit']))
        {
             $con=mysqli_query($con,"update userinfo set first_name='".$_POST['fname']."', last_name='".$_POST['lname']."',phone_no='".$_POST['contact']."',dob='".$_POST['dob']."',address='".$_POST['address']."' where email='".$_SESSION['email']."'");
             
            if($con == TRUE)
            {
            $_SESSION['msg2']="User Details Updated Successfully !!";
                header("location: ./userprofile.php");
            }
            else
            {
            $_SESSION['msg2']="Check Your Details Again !!";
            }
        }
        
        if(isset($_SESSION['email']))
        {
        $sql=mysqli_query($con,"SELECT * FROM `userinfo` WHERE first_name IS NOT NULL AND email='".$_SESSION['email']."'");
        $row = mysqli_fetch_array($sql);
        if($row > 0)
        {
           ?>
               <script>
                   window.onload=function(){
                       document.getElementById("fname").value="<?php echo $row['first_name']; ?>";
                       document.getElementById("lname").value="<?php echo $row['last_name']; ?>";
                       document.getElementById("contact").value="<?php echo $row['phone_no']; ?>";
                       document.getElementById("dp1").value="<?php echo $row['dob']; ?>";
                       document.getElementById("address").value="<?php echo $row['address']; ?>";
                       document.getElementById("updatebtn").style.display='none';
                        /*$("#myForm :input").prop("readonly",true);*/
                       document.getElementById("fname").disabled=true;
                       document.getElementById("lname").disabled=true;
                       document.getElementById("contact").disabled=true;
                       document.getElementById("dp1").disabled=true;
                       document.getElementById("address").disabled=true;
                       document.getElementById("editbtn").style.display='block';
                       
                   }
                   
                </script>
           <?php
        }
            else
            {
                ?>
                <script>
                   window.onload=function(){
                       document.getElementById("editbtn").style.display='none';
                       
                   }
                   
                </script>
                <?php
            }
        }
        
?> 
                            
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css'>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Welcome <?php echo $_SESSION['id']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../index1.php">Home</a>
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0" method="post" action="search.php">
      <input class="form-control mr-sm-2" type="text" placeholder="enter contact number" aria-label="Search" name="contact">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit" value="Search">
    </form>-->
  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
    .card-body {
    flex: 1 1 auto;
    padding: .2em;
    }
    .clickable { cursor: pointer; }
    .border-right {
    border-right: 2px solid #ddd;
    }
    .border-left {
        border-left: 5px solid crimson;
    }
    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255,255,255);
    }
  </style>
  
  <body style="padding-top:50px;">
 <!--<div class="jumbotron" id="ab1"></div>-->
   <div class="container-fluid" style="margin-top:50px;">
    <div class="row">
  <div class="col-md-6 text-center">
    <div class="list-group" id="list-tab" role="tablist">
     <a class="list-group-item list-group-item-action " id="list-user-list" data-toggle="list" href="#list-user" role="tab" aria-controls="user">My Profile</a>
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Doctor Appointment</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Host Appointment</a>
      
      </div>
    </div>
     <div class="col-md-6 text-center">
    <div class="list-group" id="list-tab" role="tablist">
     <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Hotel Booking</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Restaurant Booking</a>
       <div class="list-group dropdown" id="list-tab" role="tablist">
              <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown">Event Appointment
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a class="list-group-item list-group-item-action" id="list-seminar-list" data-toggle="list" href="#list-seminar" role="tab" aria-controls="seminar">Seminar Booking</a></li>
                <li><a class="list-group-item list-group-item-action" id="list-yoga-list" data-toggle="list" href="#list-yoga" role="tab" aria-controls="yoga">YogaCamp Booking</a></li>
                <li><a class="list-group-item list-group-item-action" id="list-blood-list" data-toggle="list" href="#list-blood" role="tab" aria-controls="blood">BloodDonation Camp</a></li>
              </ul>
        </div>
       <!--<a class="list-group-item list-group-item-action" id="list-attend-list" data-toggle="list" href="#list-attend" role="tab" aria-controls="settings">Feedback</a>-->
    </div>
  </div>
      <!-- <div class="col-md-4 text-center">
        <div class="list-group" id="list-tab" role="tablist">
         

          </div>
    </div> -->

      </div>
       </div><br>




<div class="row">
  <div class="col-md-12">
    <div class="tab-content" id="nav-tabContent">
     <div class="tab-pane fade" id="list-user" role="tabpanel" aria-labelledby="list-user-list">
          <div class="card" id="card">
             <div class="card-body">
                 <div class="row">
                     <div class="col-md-6 border-right">
                         <center><h4>My Profile</h4></center><br>
                          <p style="color:red;"><?php echo htmlentities($_SESSION['msg2']);?></p>
                          <form class="form-group" id="myForm" method="post" name="updateform" onSubmit="return updatevalid();">
                            <div class="row">
                              <div class="col-md-4"><label>First Name:</label></div>
                              <div class="col-md-8"><input type="text" class="form-control" id="fname" name="fname" placeholder="First Name"></div><br><br>
                              <div class="col-md-4"><label>Last Name:</label></div>
                              <div class="col-md-8"><input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name"></div><br><br>
                              <div class="col-md-4"><label>Contact Number:</label></div>
                              <div class="col-md-8"><input type="text" class="form-control" id="contact" name="contact" placeholder="Phone No." pattern="^[6-9]\d{9}$"></div><br><br>
                              <div class="col-md-4"><label>Date Of Birth:</label></div>
                              <div class="col-md-8 form-group"><input  type="text" id="dp1" name="dob" class="form-control clickable input-md" placeholder="&#xf133 DOB"></div><br><br>
                              <div class="col-md-4"><label>Address:</label></div>
                              <div class="col-md-8"><textarea class="form-control" rows="3" id="address" name="address" placeholder="Address"></textarea></div>
                              <br><br><br><br>
                              <div class="col-md-4" id="updatebtn">
                                <input type="submit" name="update_submit" value="Update Details" class="btn btn-primary" id="inputbtn">
                              </div>
                              <div class="col-md-4 col-md-offset-4" id="editbtn">
                                <p onclick="updateshow(1)" class="btn btn-danger">Edit Details</p>
                              </div>                  
                            </div>
                          </form>
                     </div>
                      <div class="col-md-6 border-left">
                         <center><h4>Change Password</h4></center><br>
                         <p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?></p>  
                          <form class="form-group" name="chngpwd" method="post"  onSubmit="return valid();">
                            <div class="row">
                              <div class="col-md-4"><label>Current Password:</label></div>
                              <div class="col-md-8"><input type="password" class="form-control" name="cpass" placeholder="Enter Current Password"></div><br><br>
                              <div class="col-md-4"><label>New Password:</label></div>
                              <div class="col-md-8"><input type="password" class="form-control"  name="npass" placeholder="New Password"></div><br><br>
                              <div class="col-md-4"><label>Confirm Password:</label></div>
                              <div class="col-md-8"><input type="password" class="form-control"  name="cfpass" placeholder="Confirm Password"></div>
                              <br><br><br><br>
                              <div class="col-md-4">
                                <input type="submit" name="entry_submit" value="Submit" class="btn btn-danger" id="inputbtn">
                              </div>
                              <div class="col-md-8"></div>                  
                            </div>
                          </form>
                     </div>
                 </div>
                  
              </div>
         </div>
      </div>
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <div class="container-fluid">
          <div class="card" id="card">
            <div class="card-body  table-responsive-sm">
                 <center><h4>Doctor Appointment</h4></center><br>
                            <?php
                                $sql="SELECT  `slno`,`name`, `age`, `gender`, `address`, `date_app`, `speciality`, `docname`, `hospital_name`, `mobile`, `email`,`action` FROM `doctorappointment` WHERE id = '".$_SESSION['id']."'";
                                $res = mysqli_query($con,$sql);
                                    if (mysqli_num_rows($res)>0)
                                       {
                            ?>
                                        <table  class="table table-hover table-bordered">
                                           <thead>
                                            <tr class="table-primary">
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                               
                                                <th>Date App.</th>
                                                <th>Speciality</th>
                                                <th>Doc Name</th>
                                                <th>Hospital Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Pdf</th>
                                                <th>Cancel</th>
                                              </tr>
                                            </thead>
                                          <?php
                                            while($row = mysqli_fetch_array($res))
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $row ['name']; ?></td>
                                                <td><?php echo $row ['age']; ?></td>
                                                <td><?php echo $row ['gender']; ?></td>
                                               
                                                <td><?php echo $row ['date_app']; ?></td>
                                                <td><?php echo $row ['speciality']; ?></td>
                                                <td><?php echo $row ['docname']; ?></td>
                                                <td><?php echo $row ['hospital_name']; ?></td>
                                                <td><?php echo $row ['mobile']; ?></td>
                                                <td><?php echo $row ['email']; ?></td>
                                                <?php
                                                    if($row ['action']=='active')
                                                    {
                                                        $modalId=$row ['slno']."docApp";
                                                       
                                                ?>
                                                <td> <button type="submit" class="btn btn-success"><a href="pdfgen/docpdf.php?id=<?php echo $row ['slno']; ?>" class="text-white"> Pdf</a></button></td>
                                                <td> <button class="btn-danger btn" data-toggle="modal" data-target="#<?php echo $modalId; ?>"> Delete </button> </td>
                                                 <!-- The Modal -->
                                                  <div class="modal fade" id="<?php echo $modalId; ?>">
                                                    <div class="modal-dialog modal-md">
                                                      <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header text-center" style="color: #fff; background-color: #007bff; border-bottom:3px solid red;">
                                                          <h4 class="modal-title"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> WARNING</h4>
                                                          <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                          <form action="/action_page.php">
                                                          <div class="row">
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="name">Patient Name:</label>
                                                                    <input type="text" class="form-control" id="name" value="<?php echo $row ['name']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="date_app">Date Of App:</label>
                                                                    <input type="date_app" class="form-control" id="date_app" value="<?php echo $row ['date_app']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>
                                                          <div class="row">
                                                             <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <label for="docname">Doctor Name:</label>
                                                                    <input type="text" class="form-control" id="docname" value="<?php echo $row ['docname']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <label for="hospital_name">Hospital Name:</label>
                                                                    <input type="text" class="form-control" id="hospital_name" value="<?php echo $row ['hospital_name']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>
                                                          <!--<div class="row">
                                                             <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <p><b>Once You Click On Delete <br>Your Corresponding Appointments Will Be Deleted.</b></p>
                                                                  </div>
                                                                  
                                                              </div> 
                                                          </div>-->
                                                          
                                                        </form>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer" style="border-color: #007bff;">
                                                         <button type="submit" class="btn btn-primary"><a href="delete/docdel.php?id=<?php echo $row ['slno']; ?>" class="text-white"> Delete</a></button>
                                                         
                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>
                                                <?php
                                                    }
                                                    else if($row ['action']=='passive')
                                                    {
                                                    ?>
                                                    <td></td>
                                                    <td><button class="btn-info btn" data-toggle="modal" data-target="#modal1">  Deleted </button></td>
                                                    <?php
                                                    }
                                                ?>
                                            </tr>
                                            <?php
                                            }
                                
                                       }
                                    else
                                    {
                                            ?>
                                            <h3 style="color:#007bff;"><center>No Records Found</center></h3>
                                <?php
                                    }
                                ?>
                            
                                
                           </table>
            </div>
          </div>
        </div><br>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
         <div class="container-fluid">
          <div class="card" id="card">
            <div class="card-body  table-responsive-sm">
                 <center><h4>Host Appointment</h4></center><br>
                            <?php
                                $sql="SELECT `slno`,`name`, `mobile`, `email`, `organization`, `eventname`, `audience`, `performer_name`,`duration`, `startdate`, `venue`,`action` FROM `hostappointment` WHERE  id = '".$_SESSION['id']."'";
                                $res = mysqli_query($con,$sql);
                                    if (mysqli_num_rows($res)>0)
                                       {
                            ?>
                                        <table  class="table table-hover table-bordered">
                                           <thead>
                                            <tr class="table-primary">
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Organoization</th>
                                                <th>Event Name</th>
                                               
                                                <th>Performer Name</th>
                                                <th>Duration</th>
                                                <th>Date</th>
                                                <th>Pdf</th>
                                                <th>Cancel</th>
                                              </tr>
                                            </thead>
                                          <?php
                                            while($row = mysqli_fetch_array($res))
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $row ['name']; ?></td>
                                                <td><?php echo $row ['mobile']; ?></td>
                                                <td><?php echo $row ['email']; ?></td>
                                                <td><?php echo $row ['organization']; ?></td>
                                                <td><?php echo $row ['eventname']; ?></td>
                                                
                                                <td><?php echo $row ['performer_name']; ?></td>
                                                <td><?php echo $row ['duration']; ?></td>
                                                <td><?php echo $row ['startdate']; ?></td>
                                              
                                                <?php
                                                    if($row ['action']=='active')
                                                    {
                                                        $modalId=$row ['slno']."hostApp";
                                                ?>
                                                <td> <button type="submit" class="btn btn-success"><a href="pdfgen/hostpdf.php?id=<?php echo $row ['slno']; ?>" class="text-white"> Pdf</a></button></td>
                                                <td> <button class="btn-danger btn" data-toggle="modal" data-target="#<?php echo $modalId; ?>"> Delete </button> </td>
                                                 <!-- The Modal -->
                                                  <div class="modal fade" id="<?php echo $modalId; ?>">
                                                    <div class="modal-dialog modal-md">
                                                      <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header text-center" style="color: #fff; background-color: #007bff; border-bottom:3px solid red;">
                                                          <h4 class="modal-title"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> WARNING</h4>
                                                          <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                          <form action="/action_page.php">
                                                          <div class="row">
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="name">Name:</label>
                                                                    <input type="text" class="form-control" id="name" value="<?php echo $row ['name']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="date_app">Start Date:</label>
                                                                    <input type="date_app" class="form-control" id="date_app" value="<?php echo $row ['startdate']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>
                                                          <div class="row">
                                                             <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <label for="docname">Event Name:</label>
                                                                    <input type="text" class="form-control" id="docname" value="<?php echo $row ['eventname']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <label for="hospital_name">Performer Name:</label>
                                                                    <input type="text" class="form-control" id="hospital_name" value="<?php echo $row ['performer_name']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>
                                                          
                                                          
                                                        </form>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer" style="border-color: #007bff;">
                                                         <button type="submit" class="btn btn-primary"><a href="delete/hostdel.php?id=<?php echo $row ['slno']; ?>" class="text-white"> Delete</a></button>
                                                         
                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>
                                                <?php
                                                    }
                                                    else if($row ['action']=='passive')
                                                    {
                                                    ?>
                                                    <td></td>
                                                    <td><button class="btn-info btn" data-toggle="modal" data-target="#modal1">  Deleted </button></td>
                                                    <?php
                                                    }
                                                ?>
                                            </tr>
                                            <?php
                                            }
                                
                                       }
                                    else
                                    {
                                            ?>
                                            <h3 style="color:#007bff;"><center>No Records Found</center></h3>
                                <?php
                                    }
                                ?>
                            
                                
                           </table>
            </div>
          </div>
        </div><br><br>
      </div>
      
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
          <div class="container-fluid">
          <div class="card" id="card">
            <div class="card-body  table-responsive-sm">
                 <center><h4>Restaurant Booking</h4></center><br>
                            <?php
                                $sql="SELECT  `slno`,`patient_name`, `doc_app`, `restaurant_name`, `food_pref`, `persons`, `date`, `time`,`action` FROM `restaurantappointment` WHERE id = '".$_SESSION['id']."'";
                                $res = mysqli_query($con,$sql);
                                    if (mysqli_num_rows($res)>0)
                                       {
                            ?>
                                        <table  class="table table-hover table-bordered">
                                           <thead>
                                            <tr class="table-primary">
                                                <th>Patient Name</th>
                                                <th>Doc App.</th>
                                                <th>Restaurant</th>
                                                <th>Food Pref.</th>
                                                <th>Persons</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Pdf</th>
                                                <th>Cancel</th>
                                              </tr>
                                            </thead>
                                          <?php
                                            while($row = mysqli_fetch_array($res))
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $row ['patient_name']; ?></td>
                                                <td><?php echo $row ['doc_app']; ?></td>
                                                <td><?php echo $row ['restaurant_name']; ?></td>
                                                <td><?php echo $row ['food_pref']; ?></td>
                                                <td><?php echo $row ['persons']; ?></td>
                                                <td><?php echo $row ['date']; ?></td>
                                                <td><?php echo $row ['time']; ?></td>
                                                <?php
                                                    if($row ['action']=='active')
                                                    {
                                                        $modalId=$row ['slno']."restaurantApp";
                                                ?>
                                                <td> <button type="submit" class="btn btn-success"><a href="pdfgen/restaurantpdf.php?id=<?php echo $row ['slno']; ?>" class="text-white"> Pdf</a></button></td>
                                                <td> <button class="btn-danger btn" data-toggle="modal" data-target="#<?php echo $modalId; ?>"> Delete </button> </td>
                                                 <!-- The Modal -->
                                                  <div class="modal fade" id="<?php echo $modalId; ?>">
                                                    <div class="modal-dialog modal-md">
                                                      <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header text-center" style="color: #fff; background-color: #007bff; border-bottom:3px solid red;">
                                                          <h4 class="modal-title"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> WARNING</h4>
                                                          <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                          <form action="/action_page.php">
                                                          <div class="row">
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="name">Date:</label>
                                                                    <input type="text" class="form-control" id="name" value="<?php echo $row ['date']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="date_app">Food Pref:</label>
                                                                    <input type="date_app" class="form-control" id="date_app" value="<?php echo $row ['food_pref']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>
                                                          <div class="row">
                                                             <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <label for="docname">Restaurant Name:</label>
                                                                    <input type="text" class="form-control" id="docname" value="<?php echo $row ['restaurant_name']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <label for="hospital_name">Name:</label>
                                                                    <input type="text" class="form-control" id="hospital_name" value="<?php echo $row ['patient_name']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>
                                                          
                                                          
                                                        </form>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer" style="border-color: #007bff;">
                                                         <button type="submit" class="btn btn-primary"><a href="delete/restaurantdel.php?id=<?php echo $row ['slno']; ?>" class="text-white"> Delete</a></button>
                                                         
                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>
                                                <?php
                                                    }
                                                    else if($row ['action']=='passive')
                                                    {
                                                    ?>
                                                    <td></td>
                                                    <td><button class="btn-info btn" data-toggle="modal" data-target="#modal1">  Deleted </button></td>
                                                    <?php
                                                    }
                                                ?>
                                            </tr>
                                            <?php
                                            }
                                
                                       }
                                    else
                                    {
                                            ?>
                                            <h3 style="color:#007bff;"><center>No Records Found</center></h3>
                                <?php
                                    }
                                ?>
                            
                                
                           </table>
            </div>
          </div>
        </div><br>
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <div class="container-fluid">
          <div class="card" id="card">
            <div class="card-body  table-responsive-sm">
                 <center><h4>Hotel Booking</h4></center><br>
                            <?php
                                $sql="SELECT  `slno`,`patient_name`, `doc_app`, `hotel_name`, `check_in`, `check_out`, `rooms`, `guests`,`action` FROM `hotelappointment` WHERE id = '".$_SESSION['id']."'";
                                $res = mysqli_query($con,$sql);
                                    if (mysqli_num_rows($res)>0)
                                       {
                            ?>
                                        <table  class="table table-hover table-bordered">
                                           <thead>
                                            <tr class="table-primary">
                                                <th>Patient Name</th>
                                                <th>Doc App.</th>
                                                <th>Hotel</th>
                                                <th>Check In</th>
                                                <th>Check Out</th>
                                                <th>Rooms</th>
                                                <th>Guests</th>
                                                <th>Pdf</th>
                                                <th>Cancel</th>
                                              </tr>
                                            </thead>
                                          <?php
                                            while($row = mysqli_fetch_array($res))
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $row ['patient_name']; ?></td>
                                                <td><?php echo $row ['doc_app']; ?></td>
                                                <td><?php echo $row ['hotel_name']; ?></td>
                                                <td><?php echo $row ['check_in']; ?></td>
                                                <td><?php echo $row ['check_out']; ?></td>
                                                <td><?php echo $row ['rooms']; ?></td>
                                                <td><?php echo $row ['guests']; ?></td>
                                                <?php
                                                    if($row ['action']=='active')
                                                    {
                                                        $modalId=$row ['slno']."hotelApp";
                                                ?>
                                                <td> <button type="submit" class="btn btn-success"><a href="pdfgen/hotelpdf.php?id=<?php echo $row ['slno']; ?>" class="text-white"> Pdf</a></button></td>
                                                <td> <button class="btn-danger btn" data-toggle="modal" data-target="#<?php echo $modalId; ?>"> Delete </button> </td>
                                                 <!-- The Modal -->
                                                  <div class="modal fade" id="<?php echo $modalId; ?>">
                                                    <div class="modal-dialog modal-md">
                                                      <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header text-center" style="color: #fff; background-color: #007bff; border-bottom:3px solid red;">
                                                          <h4 class="modal-title"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> WARNING</h4>
                                                          <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                          <form action="/action_page.php">
                                                          <div class="row">
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="name">Check In:</label>
                                                                    <input type="text" class="form-control" id="name" value="<?php echo $row ['check_in']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="date_app">Check Out:</label>
                                                                    <input type="date_app" class="form-control" id="date_app" value="<?php echo $row ['check_out']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>
                                                          <div class="row">
                                                             <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <label for="docname">Hotel Name:</label>
                                                                    <input type="text" class="form-control" id="docname" value="<?php echo $row ['hotel_name']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <label for="hospital_name">Name:</label>
                                                                    <input type="text" class="form-control" id="hospital_name" value="<?php echo $row ['patient_name']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>
                                                          
                                                          
                                                        </form>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer" style="border-color: #007bff;">
                                                         <button type="submit" class="btn btn-primary"><a href="delete/hoteldel.php?id=<?php echo $row ['slno']; ?>" class="text-white"> Delete</a></button>
                                                         
                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>
                                                <?php
                                                    }
                                                    else if($row ['action']=='passive')
                                                    {
                                                    ?>
                                                    <td></td>
                                                    <td><button class="btn-info btn" data-toggle="modal" data-target="#modal1">  Deleted </button></td>
                                                    <?php
                                                    }
                                                ?>
                                            </tr>
                                            <?php
                                            }
                                
                                       }
                                    else
                                    {
                                            ?>
                                            <h3 style="color:#007bff;"><center>No Records Found</center></h3>
                                <?php
                                    }
                                ?>
                            
                                
                           </table>
            </div>
          </div>
        </div><br>
      </div>
       
       <div class="tab-pane fade" id="list-seminar" role="tabpanel" aria-labelledby="list-seminar-list">
          <div class="container-fluid">
          <div class="card" id="card">
            <div class="card-body  table-responsive-sm">
                 <center><h4>Seminar Booking</h4></center><br>
                            <?php
                                $sql="SELECT `slno`,`name`, `mobile`, `email`, `personal_Id`, `personal_Id_no`, `program_name`, `date`, `time`, `no_of_seats`, `seat_type`,`action` FROM `seminarappointment` WHERE id = '".$_SESSION['id']."'";
                                $res = mysqli_query($con,$sql);
                                    if (mysqli_num_rows($res)>0)
                                       {
                            ?>
                                        <table  class="table table-hover table-bordered">
                                           <thead>
                                            <tr class="table-primary">
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Peronal Id</th>
                                                
                                                <th>Program Name</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Seats</th>
                                                <th>Seat Type</th>
                                                <th>Pdf</th>
                                                <th>Cancel</th>
                                              </tr>
                                            </thead>
                                          <?php
                                            while($row = mysqli_fetch_array($res))
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $row ['name']; ?></td>
                                                <td><?php echo $row ['mobile']; ?></td>
                                                <td><?php echo $row ['email']; ?></td>
                                                <td><?php echo $row ['personal_Id']; ?></td>
                                               
                                                <td><?php echo $row ['program_name']; ?></td>
                                                <td><?php echo $row ['date']; ?></td>
                                                <td><?php echo $row ['time']; ?></td>
                                                <td><?php echo $row ['no_of_seats']; ?></td>
                                                <td><?php echo $row ['seat_type']; ?></td>
                                                <?php
                                                    if($row ['action']=='active')
                                                    {
                                                        $modalId=$row ['slno']."seminarCamp";
                                                ?>
                                                <td> <button type="submit" class="btn btn-success"><a href="pdfgen/seminarpdf.php?id=<?php echo $row ['slno']; ?>" class="text-white"> Pdf</a></button></td>
                                                <td> <button class="btn-danger btn" data-toggle="modal" data-target="#<?php echo $modalId; ?>"> Delete </button> </td>
                                                 <!-- The Modal -->
                                                  <div class="modal fade" id="<?php echo $modalId; ?>">
                                                    <div class="modal-dialog modal-md">
                                                      <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header text-center" style="color: #fff; background-color: #007bff; border-bottom:3px solid red;">
                                                          <h4 class="modal-title"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> WARNING</h4>
                                                          <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                          <form action="/action_page.php">
                                                          <div class="row">
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="name">Date:</label>
                                                                    <input type="text" class="form-control" id="name" value="<?php echo $row ['date']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="date_app">Time:</label>
                                                                    <input type="date_app" class="form-control" id="date_app" value="<?php echo $row ['time']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>
                                                          <div class="row">
                                                             <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <label for="docname">Program Name:</label>
                                                                    <input type="text" class="form-control" id="docname" value="<?php echo $row ['program_name']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <label for="hospital_name">Name:</label>
                                                                    <input type="text" class="form-control" id="hospital_name" value="<?php echo $row ['name']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>
                                                          
                                                          
                                                        </form>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer" style="border-color: #007bff;">
                                                         <button type="submit" class="btn btn-primary"><a href="delete/seminarCampdel.php?id=<?php echo $row ['slno']; ?>" class="text-white"> Delete</a></button>
                                                         
                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>
                                                <?php
                                                    }
                                                    else if($row ['action']=='passive')
                                                    {
                                                    ?>
                                                    <td></td>
                                                    <td><button class="btn-info btn" data-toggle="modal" data-target="#modal1">  Deleted </button></td>
                                                    <?php
                                                    }
                                                ?>
                                            </tr>
                                            <?php
                                            }
                                
                                       }
                                    else
                                    {
                                            ?>
                                            <h3 style="color:#007bff;"><center>No Records Found</center></h3>
                                <?php
                                    }
                                ?>
                            
                                
                           </table>
            </div>
          </div>
        </div><br>
      </div>
      <div class="tab-pane fade" id="list-yoga" role="tabpanel" aria-labelledby="list-yoga-list">
        <div class="container-fluid">
          <div class="card" id="card">
            <div class="card-body  table-responsive-sm">
                 <center><h4>YogaCamp Booking</h4></center><br>
                            <?php
                                $sql="SELECT  `slno`,`name`, `mobile`, `email`, `personal_Id`, `program_name`, `location`, `duration`, `start_date`, `food_choice`, `disease_name`,`action` FROM `yogacampappointment` WHERE id = '".$_SESSION['id']."'";
                                    $res = mysqli_query($con,$sql);
                                    if (mysqli_num_rows($res)>0)
                                       {
                            ?>
                                        <table  class="table table-hover table-bordered">
                                           <thead>
                                            <tr class="table-primary">
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Peronal Id</th>
                                                <th>Program Name</th>
                                                <th>Location</th>
                                                <th>Duration</th>
                                                <th>Start Date</th>
                                                <th>Food Choice</th>
                                                <th>Pdf</th>
                                                <th>Cancel</th>
                                              </tr>
                                            </thead>
                                          <?php
                                            while($row = mysqli_fetch_array($res))
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $row ['name']; ?></td>
                                                <td><?php echo $row ['mobile']; ?></td>
                                                <td><?php echo $row ['email']; ?></td>
                                                <td><?php echo $row ['personal_Id']; ?></td>
                                                <td><?php echo $row ['program_name']; ?></td>
                                                <td><?php echo $row ['location']; ?></td>
                                                <td><?php echo $row ['duration']; ?></td>
                                                <td><?php echo $row ['start_date']; ?></td>
                                                <td><?php echo $row ['food_choice']; ?></td>
                                                
                                                <?php
                                                    if($row ['action']=='active')
                                                    {
                                                        $modalId=$row ['slno']."yogaCamp";
                                                ?>
                                                <td> <button type="submit" class="btn btn-success"><a href="pdfgen/yogapdf.php?id=<?php echo $row ['slno']; ?>" class="text-white"> Pdf</a></button></td>
                                                <td> <button class="btn-danger btn" data-toggle="modal" data-target="#<?php echo $modalId; ?>"> Delete </button> </td>
                                                 <!-- The Modal -->
                                                  <div class="modal fade" id="<?php echo $modalId; ?>">
                                                    <div class="modal-dialog modal-md">
                                                      <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header text-center" style="color: #fff; background-color: #007bff; border-bottom:3px solid red;">
                                                          <h4 class="modal-title"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> WARNING</h4>
                                                          <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                          <form action="/action_page.php">
                                                          <div class="row">
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="name"> Start Date:</label>
                                                                    <input type="text" class="form-control" id="name" value="<?php echo $row ['start_date']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="date_app">Loacation:</label>
                                                                    <input type="date_app" class="form-control" id="date_app" value="<?php echo $row ['location']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>
                                                          <div class="row">
                                                             <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <label for="docname">Program Name:</label>
                                                                    <input type="text" class="form-control" id="docname" value="<?php echo $row ['program_name']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <label for="hospital_name">Name:</label>
                                                                    <input type="text" class="form-control" id="hospital_name" value="<?php echo $row ['name']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>
                                                          
                                                          
                                                        </form>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer" style="border-color: #007bff;">
                                                         <button type="submit" class="btn btn-primary"><a href="delete/yogaCampdel.php?id=<?php echo $row ['slno']; ?>" class="text-white"> Delete</a></button>
                                                         
                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>
                                                <?php
                                                    }
                                                    else if($row ['action']=='passive')
                                                    {
                                                    ?>
                                                    <td></td>
                                                    <td><button class="btn-info btn" data-toggle="modal" data-target="#modal1">  Deleted </button></td>
                                                    <?php
                                                    }
                                                ?>
                                            </tr>
                                            <?php
                                            }
                                
                                       }
                                    else
                                    {
                                            ?>
                                            <h3 style="color:#007bff;"><center>No Records Found</center></h3>
                                <?php
                                    }
                                ?>
                            
                                
                           </table>
            </div>
          </div>
        </div><br>
      </div>
       <div class="tab-pane fade" id="list-blood" role="tabpanel" aria-labelledby="list-blood-list">
           <div class="container-fluid">
          <div class="card" id="card">
            <div class="card-body  table-responsive-sm">
                 <center><h4>BloodDonation Camp Booking</h4></center><br>
                            <?php
                                $sql="SELECT `slno`,`name`, `mobile`, `email`, `personal_Id`, `personal_Id_no`, `address`,  `blood_grp`,`chronic_disease`, `medication_details`,`action` FROM `bloodcampappointment` WHERE id = '".$_SESSION['id']."'";
                                $res = mysqli_query($con,$sql);
                                    if (mysqli_num_rows($res)>0)
                                       {
                            ?>
                                        <table  class="table table-hover table-bordered">
                                           <thead>
                                            <tr class="table-primary">
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Peronal Id</th>
                                                <th>Peronal Id_No</th>
                                                <th>Address</th>
                                                <th>Blood Grp</th>
                                                <th>Chronic Disease</th>
                                                <th>Pdf</th>
                                                <th>Cancel</th>
                                              </tr>
                                            </thead>
                                          <?php
                                            while($row = mysqli_fetch_array($res))
                                            {
                                            ?>
                                            <tr>
                                            
                                                <td><?php echo $row ['name']; ?></td>
                                                <td><?php echo $row ['mobile']; ?></td>
                                                <td><?php echo $row ['email']; ?></td>
                                                <td><?php echo $row ['personal_Id']; ?></td>
                                                <td><?php echo $row ['personal_Id_no']; ?></td>
                                                <td><?php echo $row ['address']; ?></td>
                                                <td><?php echo $row ['blood_grp']; ?></td>
                                                <td><?php echo $row ['chronic_disease']; ?></td>
                                                
                                                <?php
                                                    if($row ['action']=='active')
                                                    {
                                                       $modalId=$row ['slno']."bloodCamp";
                                                        
                                                ?>
                                                <td> <button type="submit" class="btn btn-success"><a href="pdfgen/bloodpdf.php?id=<?php echo $row ['slno']; ?>" class="text-white"> Pdf</a></button></td>
                                                <td> <button class="btn-danger btn" data-toggle="modal" data-target="#<?php echo $modalId; ?>"> Delete </button> </td>
                                                 <!-- The Modal -->
                                                  <div class="modal fade" id="<?php echo $modalId; ?>">
                                                    <div class="modal-dialog modal-md">
                                                      <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header text-center" style="color: #fff; background-color: #007bff; border-bottom:3px solid red;">
                                                          <h4 class="modal-title"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> WARNING</h4>
                                                          <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                          <form action="/action_page.php">
                                                          <div class="row">
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="name"> Blood Grp:</label>
                                                                    <input type="text" class="form-control" id="name" value="<?php echo $row ['blood_grp']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="date_app">Personal Id:</label>
                                                                    <input type="date_app" class="form-control" id="date_app" value="<?php echo $row ['personal_Id']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>
                                                          <div class="row">
                                                             <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <label for="docname">Chronic Disease:</label>
                                                                    <input type="text" class="form-control" id="docname" value="<?php echo $row ['chronic_disease']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <label for="hospital_name">Name:</label>
                                                                    <input type="text" class="form-control" id="hospital_name" value="<?php echo $row ['name']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>
                                                          
                                                          
                                                        </form>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer" style="border-color: #007bff;">
                                                         <button type="submit" class="btn btn-primary"><a href="delete/bloodCampdel.php?id=<?php echo $row ['slno']; ?>" class="text-white"> Delete</a></button>
                                                         
                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>
                                                <?php
                                                    }
                                                    else if($row ['action']=='passive')
                                                    {
                                                    ?>
                                                    <td></td>
                                                    <td><button class="btn-info btn" data-toggle="modal" data-target="#modal1">  Deleted </button></td>
                                                    <?php
                                                    }
                                                ?>
                                            </tr>
                                            <?php
                                            }
                                
                                       }
                                    else
                                    {
                                            ?>
                                            <h3 style="color:#007bff;"><center>No Records Found</center></h3>
                                <?php
                                    }
                                ?>
                            
                                
                           </table>
            </div>
          </div>
        </div><br>                    
       </div>
       
    </div>
  </div>
</div>
   
   

<!-- The Modal -->
<div class="modal fade" id="modal1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="color: #fff; background-color: #007bff; border-bottom:3px solid red;">
        <h4 class="modal-title"><i class="fa fa-ban" aria-hidden="true"></i> DELETED</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p><b>You Have Already Deleted The Appointment.<br>Sorry For The Inconvenience.</b></p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer" style="border-color: #007bff;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
   

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!--Sweet alert js-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js'></script>
    <script  src="font-awesome-4.7.0/js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        function valid()
        {
        if(document.chngpwd.cpass.value=="")
        {
        alert("Current Password Filed is Empty !!");
        document.chngpwd.cpass.focus();
        return false;
        }
        else if(document.chngpwd.npass.value=="")
        {
        alert("New Password Filed is Empty !!");
        document.chngpwd.npass.focus();
        return false;
        }
        else if(document.chngpwd.cfpass.value=="")
        {
        alert("Confirm Password Filed is Empty !!");
        document.chngpwd.cfpass.focus();
        return false;
        }
        else if(document.chngpwd.npass.value!= document.chngpwd.cfpass.value)
        {
        alert("Password and Confirm Password Field do not match  !!");
        document.chngpwd.cfpass.focus();
        return false;
        }
        return true;
        }
    </script> <!--change password alert-->
    
    <script type="text/javascript">
        function updatevalid()
        {
            if(document.updateform.fname.value=="")
            {
            alert("First Name Filed is Empty !!");
            document.updateform.fname.focus();
            return false;
            }
            else if(document.updateform.lname.value=="")
            {
            alert("Last Name Filed is Empty !!");
            document.updateform.lname.focus();
            return false;
            }
            else if(document.updateform.contact.value=="")
            {
            alert("Contact Filed is Empty !!");
            document.updateform.contact.focus();
            return false;
            }
            else if(document.updateform.dob.value=="")
            {
            alert("Date Of Birth Filed is Empty !!");
            document.updateform.dob.focus();
            return false;
            }
            else if(document.updateform.address.value=="")
            {
            alert("Address Filed is Empty !!");
            document.updateform.address.focus();
            return false;
            }
            return true;
        }
    </script> <!--Update Details alert-->
    
    <script>
        function updateshow(x)
        {
            if(x==1)
                {
                    document.getElementById("updatebtn").style.display='block';
                        /*$("#myForm :input").prop("readonly",true);*/
                       document.getElementById("fname").disabled=false;
                       document.getElementById("lname").disabled=false;
                       document.getElementById("contact").disabled=false;
                       document.getElementById("dp1").disabled=false;
                       document.getElementById("address").disabled=false;
                       document.getElementById("editbtn").style.display='none';
                }
            
        }
      </script>
      
      
  </body>
</html>