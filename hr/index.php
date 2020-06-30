<?php
    session_start();
   
        if(!isset($_SESSION['Name']))
		{
			header('location: admin/index.php');
		}

    include('dbconfig/config.php');
    $Hr_Name=$_SESSION['Name'];
?>
<?php
    
    
    
    include('dbconfig/config.php');
        $_SESSION['msg1']="";
        date_default_timezone_set('Asia/Kolkata');// change according timezone
        $currentTime = date( 'd-m-Y h:i:s A', time () );
        if(isset($_POST['entry_submit']))
        {
            $sql=mysqli_query($con,"SELECT Password FROM hrinfo where Password='".$_POST['cpass']."' && Email='".$_SESSION['Hr_Email']."'");
            $num=mysqli_fetch_array($sql);
            if($num>0)
            {
             $con=mysqli_query($con,"update hrinfo set Password='".$_POST['npass']."' where Email='".$_SESSION['Hr_Email']."'");
                header("location: index.php");
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
             $con=mysqli_query($con,"update hrinfo set Name='".$_POST['fname']."', Hr_Mobile='".$_POST['contact']."',Hr_Address='".$_POST['address']."' where Email='".$_SESSION['Hr_Email']."'");
             
            if($con == TRUE)
            {
            $_SESSION['msg2']="User Details Updated Successfully !!";
                header("location: index.php");
            }
            else
            {
            $_SESSION['msg2']="Check Your Details Again !!";
            }
        }
        
        if(isset($_SESSION['Hr_Email']))
        {
        $sql=mysqli_query($con,"SELECT * FROM `hrinfo` WHERE Email='".$_SESSION['Hr_Email']."'");
        $row = mysqli_fetch_array($sql);
        if($row > 0)
        {
           ?>
               <script>
                   window.onload=function(){
                       document.getElementById("fname").value="<?php echo $row['Name']; ?>";
                       document.getElementById("contact").value="<?php echo $row['Hr_Mobile']; ?>";
                       document.getElementById("address").value="<?php echo $row['Hr_Address']; ?>";
                       document.getElementById("updatebtn").style.display='none';
                        /*$("#myForm :input").prop("readonly",true);*/
                       document.getElementById("fname").disabled=true;
                       document.getElementById("contact").disabled=true;
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
    <script type="text/javascript" src="datetime/jquery.js"></script>
    <link rel="stylesheet" href="datetime/jquery.datetimepicker.min.css">
    <script type="text/javascript" src="datetime/jquery.datetimepicker.full.js"></script>
    
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
     

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#"> HRMS</a>
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Welcome <?php echo $Hr_Name; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
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
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
      
      .modal-header
    {
      color: #fff; 
        background-color: #007bff; 
        border-bottom:3px solid red;  
    }
      .modal-footer
      {
          border-color: #007bff;
          background-color: lightseagreen;
      }
      .navbar-dark .navbar-nav .nav-link {
        color: rgba(255,255,255);
    }
  </style>
  <body style="padding-top:50px;">
 <!--<div class="jumbotron" id="ab1"></div>-->
   <div class="container-fluid" style="margin-top:50px;">
    <div class="row">
  <div class="col-md-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">New Entry</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Alotted Jobs</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">View Applicants</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Interviewed Applicants</a>
       <a class="list-group-item list-group-item-action" id="list-attend-list" data-toggle="list" href="#list-attend" role="tab" aria-controls="settings">Hired Applicants</a>
       <a class="list-group-item list-group-item-action" id="list-myprofile-list" data-toggle="list" href="#list-myprofile" role="tab" aria-controls="myprofile">My Profile</a>
    </div><br>
  </div>
  <div class="col-md-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <center><h4>Add New Job Entry</h4></center><br>
              <form class="form-group" method="post" action="phpfiles/addjobs.php">
                <div class="row">
                  <div class="col-md-4"><label>Company Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="cname" value="Abc Technologys Pvt. Ltd" readonly></div><br><br>
                  <div class="col-md-4"><label>Address:</label></div>
                  <div class="col-md-8"><input type="text"  class="form-control" name="caddress" value="212B N.J.C Road, Kolkata-700025, West Bengal" readonly></div><br><br>
                  <div class="col-md-4"><label>Job Title:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="jobTitle" required></div><br><br>
                  <div class="col-md-4"><label>Technolgy:</label></div>
                  <div class="col-md-8">
                   <select name="technology" class="form-control" required>
                     <option value="">Select Required Technology</option>
                      <option value="Java">Java</option>
                      <option value="Python">Python</option> 
                      <option value="Php">Php</option>
                      <option value="Web Developer">Web Developer</option>
                      <option value="Graphics Designer">Graphics Designer</option>
                    </select>
                  </div><br><br>
                  <div class="col-md-4"><label>Salary p/M:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="salary" required></div><br><br>
                  <div class="col-md-4"><label>Job Description:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="jobDesc" required></div><br><br>
                  <div class="col-md-4"><label>Vacancy:</label></div>
                  <div class="col-md-8"><input type="number" class="form-control" id="vacancy_check"  name="vacancy" required onchange="return vacancy_valid();"><br>
                  <div class="col-md-4">
                    <input type="submit" name="addjobsSubmit" value="Create new entry" class="btn btn-primary" id="inputbtn">
                  </div>
                  <div class="col-md-8"></div>                  
                </div>
            </div>
                </form>
          </div>
        </div><br>
      </div>
        </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        <div class="container-fluid">
          <div class="card" id="card">
            <div class="card-body  table-responsive-sm">
                 <center><h4>View Alotted Jobs</h4></center><br>
                            <?php
                            $hr_name=$_SESSION['Name'];
                          $sql="SELECT * FROM addjobs INNER JOIN hrinfo  ON addjobs.Hr_Id = hrinfo.Hr_Id  where Name ='$hr_name' ORDER BY addjobs.Id";
                               
                                $res = mysqli_query($con,$sql);
                                
                                    if (mysqli_num_rows($res)>0)
                                       {
                                        
                            ?>
                                        <table  class="table table-hover table-bordered">
                                           <thead>
                                            <tr class="table-primary">
                                                <th>JobTitle</th>
                                                <th>Technology</th>
                                                <th>Vacancy</th>
                                                <th>Info</th>
                                                <th>Delete</th>
                                              </tr>
                                            </thead>
                                          <?php
                                            while($row = mysqli_fetch_array($res))
                                            {
                                                $modalId=$row ['Id']."recentjobs";
                                                $modalId1=$row ['Id']."recentjobs1";
                                            ?>
                                            <tr>
                                                <td><?php echo $row ['JobTitle']; ?></td>
                                                <td><?php echo $row ['Technology']; ?></td>
                                                <td><?php echo $row ['Vacancy']; ?></td>
                                                <td> <button class="btn-primary btn" data-toggle="modal" data-target="#<?php echo $modalId; ?>"> Info </button> </td>
                                                 <!-- The Modal -->
                                                  <div class="modal fade" id="<?php echo $modalId; ?>">
                                                    <div class="modal-dialog modal-md">
                                                      <div class="modal-content">

                                                        <!-- Modal Header -->
                                                         <div class="modal-header">
                                                          <h4 class="modal-title">Job Details</h4>
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                         <div class="modal-body">
                                                          <form method="post">
                                                          
                                                          <div class="row">
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="email">Job Title:</label>
                                                                    <input type="text" class="form-control" id="email" value="<?php echo $row ['JobTitle']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="pwd">Technology:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $row ['Technology']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="email">Vacancy:</label>
                                                                    <input type="text" class="form-control" id="email" value="<?php echo $row ['Vacancy']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="pwd">Salary per month:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $row ['Salary']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <label for="email">Job Description:</label>
                                                                    <input type="text" class="form-control" id="email" value="<?php echo $row ['Job_Description']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              </div>
                                                              <div class="row">
                                                              <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <label for="pwd">HR Name:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $row ['Name']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                          
                                                        </form>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>
                                                <td> <button class="btn-danger btn" data-toggle="modal" data-target="#<?php echo $modalId1; ?>"> Delete</button></td>
                                                
                                                <div class="modal fade" id="<?php echo $modalId1; ?>">
                                                    <div class="modal-dialog modal-sm">
                                                      <div class="modal-content">

                                                        <!-- Modal Header -->
                                                         <div class="modal-header">
                                                          <h4 class="modal-title">Warning</h4>
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                         <div class="modal-body">
                                                         
                                                          
                                                          <div class="row">
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <h5><b>If you delete all corresponding job appointments will be deleted.</b></h5>
                                                              </div>
                                                              </div>
                                                            </div>
                                                              
                                                         </div>
                                                        

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                        
                                                         <button type="button" class="btn btn-success" ><a href="phpfiles/jobdel.php?id=<?php echo $row ['Id']; ?>" class="text-white"> Delete</a></button>
                                                         
                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>

                                                     
                                                    </div>
                                                  </div>
                                                </div>
                                                
                                                
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
        </div><br><br><br>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        <div class="container-fluid">
          <div class="card" id="card">
            <div class="card-body  table-responsive-sm">
                 <center><h4>View Applicants</h4></center><br>
                            <?php
                
                                 $Hr_Id=$_SESSION['Hr_Id'];
                                $Hr_Name=$_SESSION['Name'];
                                $sql="SELECT * FROM appliedjobs INNER JOIN userinfo  ON appliedjobs.Applicant_id = userinfo.Applicant_id  INNER JOIN addjobs  ON appliedjobs.Job_id  = addjobs.Id where appliedjobs.Hr_id='$Hr_Id' ORDER BY appliedjobs.Job_id";
                
                                $res = mysqli_query($con,$sql);
                                    if (mysqli_num_rows($res)>0)
                                       {
                                            
                                            while($row = mysqli_fetch_array($res))
                                            {
                                               
                                               if($row ['Status']=="Not Scheduled")
                                                {
                                                   $modalId=$row ['Aj_Id']."view_NonScheduledapplicants"; 
                                            ?>
                                            <table  class="table table-hover table-bordered">
                                           <thead>
                                            <tr class="table-primary">
                                                <th>JobTitle</th>
                                                <th>Technology</th>
                                                <th>Applicant Name</th>
                                                <th>Schedule Inteview</th>
                                                
                                              </tr>
                                            </thead>
                                            <tr>
                                                <td><?php echo $row ['JobTitle']; ?></td>
                                                <td><?php echo $row ['Technology']; ?></td>
                                                <td><?php echo $row ['Applicant_Name']; ?></td>
                                                <td> <button class="btn-primary btn" data-toggle="modal" data-target="#<?php echo $modalId; ?>"> Schedule </button> </td>
                                             </tr>
                                            </table>
                                                 <!-- The Modal -->
                                                  <div class="modal fade" id="<?php echo $modalId; ?>">
                                                    <div class="modal-dialog modal-md">
                                                      <div class="modal-content">

                                                        <!-- Modal Header -->
                                                         <div class="modal-header">
                                                          <h4 class="modal-title">Job Details</h4>
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                         <div class="modal-body">
                                                          <form method="post" action="applyjobphpfiles/canupdate.php">
                                                          
                                                          <div class="row">
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="email">Job Title:</label>
                                                                    <input type="text" class="form-control" id="email" value="<?php echo $row ['JobTitle']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="pwd">Applicant Name:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $row ['Applicant_Name']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="email">Vacancy:</label>
                                                                    <input type="text" class="form-control" id="email" value="<?php echo $row ['Vacancy']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="pwd">Salary per month:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $row ['Salary']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                          
                                                          
                                                          <div class="row">
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <label for="email">Job Description:</label>
                                                                    <input type="text" class="form-control" id="email" value="<?php echo $row ['Job_Description']; ?>" readonly>
                                                                    <input type="hidden" class="form-control" name="Aj_Id" value="<?php echo $row ['Aj_Id']; ?>">
                                                                  </div>
                                                              </div>
                                                              </div>
                                                              <div class="row">
                                                              <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <label for="pwd">HR Name:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $Hr_Name; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                          
                                                          <div class="row">
                                                                <div class="col-md-12">
                                                                   <div class="form-group">
                                                                    <label for="activities">Interviewer Name:</label>
                                                                    <select name="Interviewer_Id" id="activities" class="form-control" required>
                                                                        <option value="">Select Interviewer</option>
                                                                        ?>
                                                                        <?php                                               $sql="SELECT * FROM interviewerinfo";
                
                                                                    $res = mysqli_query($con,$sql);
                                                                        if (mysqli_num_rows($res)>0)
                                                                           {
                                                                            while($row = mysqli_fetch_array($res))
                                                                                {
                                                                                        ?> 
                                                                                <option value="<?php echo $row ['Iv_Id']; ?>"><?php echo $row ['Iv_Name']; ?> (<?php echo $row ['Speciality']; ?>)</option> 
                                                                                <?php
                                                                                }
                                                                            }
                                                                                ?>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                                    <div class="row form-group">
                                                                        <div class="col-md-12">
                                                                            <label for="date-start">Date & Time of Interview:</label>
                                                                            <input type="text" id="datetime" class="form-control" name="Date_Time" required>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                   
                                                          <div class="col-md-4">
                                                            <input type="submit" name="addjobsSubmit" value="Update" class="btn btn-primary" id="inputbtn">
                                                          </div>     
                                                          
                                                        </form>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>
                                           
                                            <?php
                                                             }
                                               
                                                else if($row ['Status']=="Scheduled")
                                                {
                                                    $modalId=$row ['Aj_Id']."view_Scheduledapplicants"; 
                                                    ?>
                                                 <table  class="table table-hover table-bordered">
                                                   <thead>
                                                    <tr class="table-primary">
                                                        <th>JobTitle</th>
                                                        <th>Technology</th>
                                                        <th>Applicant Name</th>
                                                        <th>Date Time</th>
                                                        <th>Schedule Inteview</th>
                                                        
                                                      </tr>
                                                    </thead>
                                                    <tr>
                                                    <td><?php echo $row ['JobTitle']; ?></td>
                                                    <td><?php echo $row ['Technology']; ?></td>
                                                    <td><?php echo $row ['Applicant_Name']; ?></td>
                                                    <td><?php echo $row ['Date_Time']; ?></td>
                                                    <td> <button class="btn-success btn" data-toggle="modal" data-target="#<?php echo $modalId; ?>"> Scheduled </button> </td>
                                                     </tr>
                                                    </table>
                                                 <!-- The Modal -->
                                                  <div class="modal fade" id="<?php echo $modalId; ?>">
                                                    <div class="modal-dialog modal-md">
                                                      <div class="modal-content">

                                                        <!-- Modal Header -->
                                                         <div class="modal-header">
                                                          <h4 class="modal-title">Job Details</h4>
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                         <div class="modal-body">
                                                          <form method="post" action="">
                                                          
                                                          <div class="row">
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="email">Job Title:</label>
                                                                    <input type="text" class="form-control" id="email" value="<?php echo $row ['JobTitle']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="pwd">Applicant Name:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $row ['Applicant_Name']; ?>"  readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="email">Vacancy:</label>
                                                                    <input type="text" class="form-control" id="email" value="<?php echo $row ['Vacancy']; ?>"  readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="pwd">Salary per month:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $row ['Salary']; ?>"  readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                        <div class="row">
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <label for="email">Job Description:</label>
                                                                    <input type="text" class="form-control" id="email" value="<?php echo $row ['Job_Description']; ?>" readonly>
                                                                    
                                                                  </div>
                                                              </div>
                                                              </div>
                                                              <div class="row">
                                                              <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <label for="pwd">HR Name:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $Hr_Name; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                          
                                                          <div class="row">
                                                                <div class="col-md-12">
                                                                   <div class="form-group">
                                                                    <label for="activities">Interviewer Name:</label>
                                                                    
                                                                        <?php
                                                                        $Iv_id=$row ['Interviewer_id'];
                                                                        $sql="SELECT * FROM interviewerinfo where Iv_Id='$Iv_id'";
                
                                                                    $res = mysqli_query($con,$sql);
                                                                        if (mysqli_num_rows($res)>0)
                                                                           {
                                                                            $row = mysqli_fetch_array($res);
                                                                                
                                                                                        ?> 
                                                                                <input type="text" class="form-control" id="pwd" value="<?php echo $row['Iv_Name']; ?>" readonly> 
                                                                                <?php
                                                                                
                                                                            }
                                                                                ?>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                                   <!-- <div class="row form-group">
                                                                        <div class="col-md-12">
                                                                            <label for="date-start">Date & Time of Interview:</label>
                                                                        <input type="text" class="form-control" id="pwd" value="<?php //echo $row['Date_Time']; ?>">
                                                                        </div>
                                                                    </div>-->
                                                                    
                                                                   
                                                               
                                                          
                                                             </form>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>
                                            
                                            <?php
                                                }
                                            }
                                
                                       }
                                    else
                                    {
                                            ?>
                                            <h3 style="color:#007bff;"><center>No Records Found</center></h3>
                                <?php
                                    }
                                ?>
                            
                                
                           
            </div>
          </div>
        </div><br>
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <div class="container-fluid">
          <div class="card" id="card">
            <div class="card-body  table-responsive-sm">
                 <center><h4>Interviewed Applicants</h4></center><br>
                            <?php
                
                                  $Hr_Id=$_SESSION['Hr_Id'];
                                $Hr_Name=$_SESSION['Name'];
                                $Status="Interviewed";
                
                                $sql="SELECT * FROM appliedjobs INNER JOIN userinfo  ON appliedjobs.Applicant_id = userinfo.Applicant_id  INNER JOIN addjobs  ON appliedjobs.Job_id  = addjobs.Id INNER JOIN interviewerinfo  ON appliedjobs.Interviewer_id  = interviewerinfo.Iv_Id where appliedjobs.Hr_id='$Hr_Id' AND appliedjobs.Status='$Status'  ORDER BY appliedjobs.Job_id,appliedjobs.Marks DESC";
                
                                $res = mysqli_query($con,$sql);
                                    if (mysqli_num_rows($res)>0)
                                       {
                            ?>
                                         <table  class="table table-hover table-bordered">
                                           <thead>
                                            <tr class="table-primary">
                                                <th>JobTitle</th>
                                                <th>Interviewer Name</th>
                                                <th>Applicant Name</th>
                                                <th>Interview Schedule</th>
                                                <th>Marks</th>
                                                <th>Info</th>
                                                
                                              </tr>
                                            </thead>
                                          <?php
                                            while($row = mysqli_fetch_array($res))
                                            {
                                              $modalId=$row ['Aj_Id']."Interviewed_applicants";  
                                                
                                            ?>
                                            <tr>
                                                <td><?php echo $row ['JobTitle']; ?></td>
                                                <td><?php echo $row ['Iv_Name']; ?></td>
                                                <td><?php echo $row ['Applicant_Name']; ?></td>
                                                <td><?php echo $row ['Date_Time']; ?></td>
                                                <td><?php echo $row ['Marks']; ?></td>
                                                
                                                <td> <button class="btn-success btn" data-toggle="modal" data-target="#<?php echo $modalId; ?>"> Check </button> </td>
                                                 <!-- The Modal -->
                                                  <div class="modal fade" id="<?php echo $modalId; ?>">
                                                    <div class="modal-dialog modal-md">
                                                      <div class="modal-content">

                                                        <!-- Modal Header -->
                                                         <div class="modal-header">
                                                          <h4 class="modal-title">Job Details</h4>
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                         <div class="modal-body">
                                                          <form method="post" action="applyjobphpfiles/canJobOffer.php">
                                                          
                                                          <div class="row">
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="email">Job Title:</label>
                                                                    <input type="text" class="form-control" id="email" value="<?php echo $row ['JobTitle']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="pwd">Applicant Name:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $row ['Applicant_Name']; ?>"  readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="email">Vacancy:</label>
                                                                    <input type="text" class="form-control" id="email" value="<?php echo $row ['Vacancy']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="pwd">Salary per month:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $row ['Salary']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                          
                                                          <div class="row">
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="email">Job Description:</label>
                                                                    <input type="text" class="form-control" name="Aj_Id" value="<?php echo $row ['Aj_Id']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="pwd">Hr Name:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $Hr_Name; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                          
                                                          <div class="row">
                                                                <div class="col-md-6">
                                                                   <div class="form-group">
                                                                    <label for="activities">Interviewer Name:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $row ['Iv_Name']; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                            <label for="date-start">Date & Time of Interview:</label>
                                                                            <input type="text" id="datetime" class="form-control" name="Date_Time" value="<?php echo $row ['Date_Time']; ?>"  readonly>
                                                                 </div>
                                                            </div>
                                                            
                                                                    <div class="row form-group">
                                                                        
                                                                        <div class="col-md-6">
                                                                            <label for="date-start">Marks Obtained:</label>
                                                                            <input type="text" id="marks" class="form-control" name="Marks" value="<?php echo $row ['Marks']; ?>" readonly>
                                                                        </div>
                                                                        
                                                                        <div class="col-md-6">
                                                                            <label for="date-start">Job Offer:</label>
                                                                            <select name="Job_Offer" id="activities" class="form-control" required>
                                                                            <option value="">Select</option>
                                                                            <option value="Hired">Hired</option>
                                                                            <option value="Not Hired">Not Hired</option>
                                                                        
                                                                        </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                  <div class="col-md-4">
                                                            <input type="submit" name="addjobsSubmit" value="Update" class="btn btn-primary" id="inputbtn">
                                                          </div>  
                                                               
                                                          
                                                        </form>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>
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
       <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">
                 <div class="container-fluid">
          <div class="card" id="card">
            <div class="card-body  table-responsive-sm">
                 <center><h4>Hired Applicants</h4></center><br>
                            <?php
                
                                  $Hr_Id=$_SESSION['Hr_Id'];
                                $Hr_Name=$_SESSION['Name'];
                                $Status="Hired";
                
                                $sql="SELECT * FROM appliedjobs INNER JOIN userinfo  ON appliedjobs.Applicant_id = userinfo.Applicant_id  INNER JOIN addjobs  ON appliedjobs.Job_id  = addjobs.Id INNER JOIN interviewerinfo  ON appliedjobs.Interviewer_id  = interviewerinfo.Iv_Id where appliedjobs.Hr_id='$Hr_Id' AND appliedjobs.Status='$Status'  ORDER BY appliedjobs.Job_id,appliedjobs.Marks DESC";
                
                                $res = mysqli_query($con,$sql);
                                    if (mysqli_num_rows($res)>0)
                                       {
                            ?>
                                         <table  class="table table-hover table-bordered">
                                           <thead>
                                            <tr class="table-primary">
                                                <th>JobTitle</th>
                                                <th>Interviewer Name</th>
                                                <th>Applicant Name</th>
                                                <th>Interview Schedule</th>
                                                <th>Marks</th>
                                                <th>Info</th>
                                                
                                              </tr>
                                            </thead>
                                          <?php
                                            while($row = mysqli_fetch_array($res))
                                            {
                                              $modalId=$row ['Aj_Id']."Hired_applicants";  
                                                
                                            ?>
                                            <tr>
                                                <td><?php echo $row ['JobTitle']; ?></td>
                                                <td><?php echo $row ['Iv_Name']; ?></td>
                                                <td><?php echo $row ['Applicant_Name']; ?></td>
                                                <td><?php echo $row ['Date_Time']; ?></td>
                                                <td><?php echo $row ['Marks']; ?></td>
                                                
                                                <td> <button class="btn-success btn" data-toggle="modal" data-target="#<?php echo $modalId; ?>"> Check </button> </td>
                                                 <!-- The Modal -->
                                                  <div class="modal fade" id="<?php echo $modalId; ?>">
                                                    <div class="modal-dialog modal-md">
                                                      <div class="modal-content">

                                                        <!-- Modal Header -->
                                                         <div class="modal-header">
                                                          <h4 class="modal-title">Job Details</h4>
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                         <div class="modal-body">
                                                          <form method="post" action="applyjobphpfiles/canJobOffer.php">
                                                          
                                                          <div class="row">
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="email">Job Title:</label>
                                                                    <input type="text" class="form-control" id="email" value="<?php echo $row ['JobTitle']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="pwd">Applicant Name:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $row ['Applicant_Name']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                    <label for="email">Vacancy:</label>
                                                                    <input type="text" class="form-control" id="email" value="<?php echo $row ['Vacancy']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="pwd">Salary per month:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $row ['Salary']; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                          
                                                          <div class="row">
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <label for="email">Job Description:</label>
                                                                    <input type="text" class="form-control" name="Aj_Id" value="<?php echo $row ['Job_Description']; ?>" readonly>
                                                                  </div>
                                                              </div>
                                                              </div>
                                                              <div class="row">
                                                              <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <label for="pwd">HR Name:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $Hr_Name; ?>" readonly>
                                                                  </div>
                                                                  
                                                              </div>
                                                          </div>
                                                          
                                                          <div class="row">
                                                                <div class="col-md-6">
                                                                   <div class="form-group">
                                                                    <label for="activities">Interviewer Name:</label>
                                                                    <input type="text" class="form-control" id="pwd" value="<?php echo $row ['Iv_Name']; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                            <label for="date-start">Date & Time of Interview:</label>
                                                                            <input type="text" id="datetime" class="form-control" name="Date_Time" value="<?php echo $row ['Date_Time']; ?>" readonly>
                                                                 </div>
                                                            </div>
                                                            
                                                                    <div class="row form-group">
                                                                        
                                                                        <div class="col-md-6">
                                                                            <label for="date-start">Marks Obtained:</label>
                                                                            <input type="text" id="marks" class="form-control" name="Marks" value="<?php echo $row ['Marks']; ?>" readonly>
                                                                        </div>
                                                                        
                                                                        <div class="col-md-6">
                                                                            <label for="date-start">Job Offer:</label>
                                                                           <input type="text" id="marks" class="form-control" name="Marks" value="<?php echo $row ['Status']; ?>" readonly>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                   
                                                               
                                                          
                                                        </form>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>

                                                      </div>
                                                    </div>
                                                  </div>
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
        
             
           <div class="tab-pane fade" id="list-myprofile" role="tabpanel" aria-labelledby="list-myprofile-list">
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
                              <div class="col-md-4"><label>Contact Number:</label></div>
                              <div class="col-md-8"><input type="text" class="form-control" id="contact" name="contact" placeholder="Phone No." pattern="^[6-9]\d{9}$"></div><br><br>
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
       </div><br>     
       
       
  </div>
</div>
   </div>
      </div>
      
  
      <script type="text/javascript">
        $("#datetime").datetimepicker({
            step:15,
            
         minDate: new Date(),
        });
    </script>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!--Sweet alert js-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
   
   <script type="text/javascript">
        function vacancy_valid()
        {
            if(document.getElementById("vacancy_check").value<=0)
            {
            alert("Vacancy should be a positive value.");
            document.getElementById("vacancy_check").focus();
            return false;
            }
       
            return true;
        }
    </script>
   
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
            
            else if(document.updateform.contact.value=="")
            {
            alert("Contact Filed is Empty !!");
            document.updateform.contact.focus();
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
                      
                       document.getElementById("contact").disabled=false;
                     
                       document.getElementById("address").disabled=false;
                       document.getElementById("editbtn").style.display='none';
                }
            
        }
      </script>
      
   
   
   
   
   
  </body>
</html>