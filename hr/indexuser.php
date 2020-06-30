<?php
    session_start();
  
        if(!isset($_SESSION['UserName']))
		{
			header('location: admin/index.php');
		}

    include('dbconfig/config.php');
    $User_Name=$_SESSION['UserName'];
?>
<?php
    
    
    
    include('dbconfig/config.php');
        $_SESSION['msg1']="";
        date_default_timezone_set('Asia/Kolkata');// change according timezone
        $currentTime = date( 'd-m-Y h:i:s A', time () );
        if(isset($_POST['entry_submit']))
        {
            $sql=mysqli_query($con,"SELECT Applicant_Password FROM userinfo where Applicant_Password='".$_POST['cpass']."' && Applicant_Email='".$_SESSION['App_Email']."'");
            $num=mysqli_fetch_array($sql);
            if($num>0)
            {
             $con=mysqli_query($con,"update userinfo set Applicant_Password='".$_POST['npass']."' where Applicant_Email='".$_SESSION['App_Email']."'");
                header("location: indexuser.php");
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
             $con=mysqli_query($con,"update userinfo set Applicant_Name='".$_POST['fname']."', Applicant_Mobile='".$_POST['contact']."',Applicant_Address='".$_POST['address']."' where Applicant_Email='".$_SESSION['App_Email']."'");
             
            if($con == TRUE)
            {
            $_SESSION['msg2']="User Details Updated Successfully !!";
                header("location: indexuser.php");
            }
            else
            {
            $_SESSION['msg2']="Check Your Details Again !!";
            }
        }
        
        if(isset($_SESSION['App_Email']))
        {
        $sql=mysqli_query($con,"SELECT * FROM `userinfo` WHERE Applicant_Email='".$_SESSION['App_Email']."'");
        $row = mysqli_fetch_array($sql);
        if($row > 0)
        {
           ?>
               <script>
                   window.onload=function(){
                       document.getElementById("fname").value="<?php echo $row['Applicant_Name']; ?>";
                       document.getElementById("contact").value="<?php echo $row['Applicant_Mobile']; ?>";
                       document.getElementById("address").value="<?php echo $row['Applicant_Address']; ?>";
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
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#"> HRMS</a>
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Welcome <?php echo $User_Name; ?></a>
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
  <div class="col-md-3">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Recent Jobs</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">View Applied Jobs</a>
       <a class="list-group-item list-group-item-action" id="list-attend-list" data-toggle="list" href="#list-attend" role="tab" aria-controls="settings">My Profile</a>
    </div><br>
  </div>
  <div class="col-md-9">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        <div class="container-fluid">
          <div class="card" id="card">
            <div class="card-body  table-responsive-sm">
                 <center><h4>View Jobs</h4></center><br>
                            <?php
                            
                          $sql="SELECT * FROM addjobs INNER JOIN hrinfo  ON addjobs.Hr_Id = hrinfo.Hr_Id";
                                
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
                                                
                                              </tr>
                                            </thead>
                                          <?php
                                            while($row = mysqli_fetch_array($res))
                                            {
                                                
                                            $App_Id=$_SESSION['App_Id'];
                                            $Job_Id=$row ['Id'];
                                            $sql1="SELECT * FROM `appliedjobs` WHERE Applicant_id='$App_Id' AND Job_id='$Job_Id'";
                                            $res1 = mysqli_query($con,$sql1);

                                                if (mysqli_num_rows($res1)==0)
                                                   {
                                                    $modalId=$row ['Id']."viewjobs";
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
                                            
                                                          <button type="submit" class="btn btn-success btn-md"><a href="applyjobphpfiles/jobenroll.php?id=<?php echo $row ['Id']; ?>" class="text-white"> Apply</a></button>
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
                 <center><h4>Applied Jobs</h4></center><br>
                            <?php
                
                             $App_Id=$_SESSION['App_Id'];
                
                          $sql="SELECT * FROM appliedjobs INNER JOIN addjobs  ON appliedjobs.Job_id = addjobs.Id INNER JOIN hrinfo  ON hrinfo.Hr_Id = appliedjobs.Hr_id where Applicant_id='$App_Id' ORDER BY appliedjobs.Job_id";
                                
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
                                                
                                              </tr>
                                            </thead>
                                          <?php
                                            while($row = mysqli_fetch_array($res))
                                            {
                                                
                                                $modalId=$row ['Id']."appliedjobs";
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
                                                          <?php
                                                            
                                                            if($row ['Status']=="Not Scheduled")
                                                            {
                                                                ?>
                                                                <div class="row">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                        <label for="email">Job Status:</label>
                                                                        <input type="text" class="form-control" id="email" value="<?php echo $row ['Status']; ?>" readonly>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="row">
                                                                  <div class="col-md-12">
                                                                     <div class="form-group">
                                                                        <p><b>Interview schedule is not yet done.<br>You Will Be Notified Soon.</b></p>
                                                                      </div>

                                                                  </div>
                                                              </div>
                                                           <?php
                                                            }
                                                            
                                                            
                                                            else if($row ['Status']=="Scheduled")
                                                            {
                                                                ?>
                                                                <div class="row">
                                                                  <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label for="email">Job Status:</label>
                                                                        <input type="text" class="form-control" id="email" value="<?php echo $row ['Status']; ?>" readonly>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label for="email">Date of Interview:</label>
                                                                        <input type="text" class="form-control" id="email" value="<?php echo $row ['Date_Time']; ?>" readonly>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="row">
                                                                  <div class="col-md-12">
                                                                     <div class="form-group">
                                                                        <p><b>Interview is scheduled.<br>You are requested to be there in time.</b></p>
                                                                      </div>

                                                                  </div>
                                                              </div>
                                                           <?php
                                                            }
                                                            
                                                            
                                                            else if($row ['Status']=="Not Hired")
                                                            {
                                                                ?>
                                                                <div class="row">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                        <label for="email">Job Status:</label>
                                                                        <input type="text" class="form-control" id="email" value="<?php echo $row ['Status']; ?>" readonly>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="row">
                                                                  <div class="col-md-12">
                                                                     <div class="form-group">
                                                                        <p><b>Sorry to inform you that,<br>You are not eligible for the job.</b></p>
                                                                      </div>

                                                                  </div>
                                                              </div>
                                                           <?php
                                                            }
                                                            
                                                            
                                                            else if($row ['Status']=="Hired")
                                                            {
                                                                ?>
                                                                <div class="row">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                        <label for="email">Job Status:</label>
                                                                        <input type="text" class="form-control" id="email" value="<?php echo $row ['Status']; ?>" readonly>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="row">
                                                                  <div class="col-md-12">
                                                                     <div class="form-group">
                                                                        <p><b>You are right match for the job.<br>You will be contacted soon through email and phone.</b></p>
                                                                      </div>

                                                                  </div>
                                                              </div>
                                                           <?php
                                                            }
                                                            ?>
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
                                               // }
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
       </div>
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