<!DOCTYPE html>
<html lang="en">
<head>


  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="hoststyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"> 
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"> -->

   
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="thumbnail-gallery.css">
    <link rel="stylesheet" href="docstyle.css">

    


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
   
<nav class="navbar navbar-default navbar-fixed-top container">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myPage">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img class="img-brand" src="images/ss1.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       <li><a href="../index1.php">HOME</a></li>
        <li><a href="../myprofile/userprofile.php">MY PROFILE</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>    


    <div class="row" id="pageHeader" >
        <div id="headerImage">
          <div class="container">
           <div class="image">
            <img class="img-responsive padbottom" src="images/doc_clin.jpg" alt=""/>
            </div>
              <div class="pageHeaderName">
                <h1>Our Doctors</h1>
              </div>
          </div>
        </div>
      </div>

<!-- Container (Contact Section) -->
<div id="contact" class="container"> 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><img src="images/logo/CKB_700X350.jpg" alt="Park" height="80px" width="150px"><h4 class="text-center text-danger">Medicine</h4></a></li>
    <li><a data-toggle="tab" href="#menu1"><img src="images/logo/CTVS-Feature.jpg" alt="Park" height="80px" width="150px"><h4 class="text-center text-danger">Cardiology</h4></a></li>
    <li><a data-toggle="tab" href="#menu2"><img src="images/logo/Psychiatry-Feature.jpg" alt="Park" height="80px" width="150px"><h4 class="text-center text-danger">Neuro-Science</h4></a></li>
    <li><a data-toggle="tab" href="#menu3"><img src="images/logo/Dermatology-Feature.jpg" alt="Park" height="80px" width="150px"><h4 class="text-center text-danger">Dermatology</h4></a></li>
    <li><a data-toggle="tab" href="#menu4"><img src="images/logo/gastro-log.jpg" alt="Park" height="80px" width="150px"><h4 class="text-center text-danger">Gastro-Scineces</h4></a></li>
    <li><a data-toggle="tab" href="#menu5"><img src="images/logo/Gynae-Oncology-Featur.jpg" alt="Park" height="80px" width="150px"><h4 class="text-center text-danger">Gynae-Oncology</h4></a></li>
    
    
  </ul>

 <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <div class="container gallery-container">
            <div class="tz-gallery">
               <form action="doctorappointment.php" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Bhabatosh Biswas">
                                      <h4 class="media-heading"><strong>Dr. Bhabatosh Biswas</strong></h4>
                                    </a>
								    <h4>MBBS, MS, MCh, DNB</h4>
									<dl class="drprofile">
										  <dt>Speciality Timings :</dt>
					                      <dd>Mon to Fri, 10am to 12noon (by prior appointment only)</dd>
					                      <a href="" title="Know more about Desun Hospital & Heart Institute">
                                          <h4 class="media-heading"><strong>Desun Hospital & Heart Institute</strong></h4>
                                          </a>
								    </dl>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Bhabatosh Biswas">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/Dr-Bhabatosh-Biswas.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="A1" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                        
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                              
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Bimal Kumar Khetawat">
                                      <h4 class="media-heading"><strong>Dr. Bimal Kumar Khetawat</strong></h4>
                                    </a>
								    <h4>MBBS, MS</h4>
									<dl class="drprofile">
										  <dt>Speciality Timings :</dt>
					                      <dd>Mon to Fri, 12pm to 2noon</dd>
								    </dl>
								          <a href="" title="Know more about Apollo Gleneagles Hospital">
                                          <h4 class="media-heading"><strong>Apollo Gleneagles Hospital</strong></h4>
                                          </a>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Bimal Kumar Khetawat">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/abhijit-chatterjee.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="A2" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                                                                                            
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
			                 
                                <div class="media-body">
                                    <a href="" title="Know more about Dr. Chanchal Goswami">
                                      <h4 class="media-heading"><strong>Dr. Chanchal Goswami</strong></h4>
                                    </a>
								    <h4>MBBS, MS</h4>
									<dl class="drprofile">
										  <dt>Timings :</dt>
					                      <dd>Fri,Sat 10am to 12noon (by prior appointment only)</dd>
					                      <a href="" title="Know more about AMRI Hospital">
                                          <h4 class="media-heading"><strong>AMRI Hospital</strong></h4>
                                          </a>
								    </dl>
							    </div>
                                 <div class="media-left">
			                         <a href="" title="Know more about Dr. Chanchal Goswami">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/Arabinda-Mukherjee.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="A3" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
  	                        </div>
                        </div>
                    </div>                              
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Mrinal Kanti Das">
                                      <h4 class="media-heading"><strong>Dr. Mrinal Kanti Das</strong></h4>
                                    </a>
								    <h4>MBBS, MCh</h4>
									<dl class="drprofile">
										  <dt>Timings :</dt>
					                      <dd>sat to Sun, 6pm to 8pm </dd>
					                      <a href="" title="Know more about B.M. Birla Heart Research Center">
                                          <h4 class="media-heading"><strong>B.M. Birla Heart Research Center</strong></h4>
                                          </a>
								    </dl>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Mrinal Kanti Das">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/ajay-agarwal.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="A4" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                                                                                            
                </div>
                </form>
            </div>
        </div>
      </div>
      <!--Medical above-->
      
    <div id="menu1" class="tab-pane fade">
        <div class="container gallery-container">
           <div class="tz-gallery">
               <form action="doctorappointment.php" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Anirban Sarkar">
                                      <h4 class="media-heading"><strong>Dr. Anirban Sarkar</strong></h4>
                                    </a>
								    <h4>MBBS, MS, MCh, DNB</h4>
									<dl class="drprofile">
										  <dt>Speciality Timings :</dt>
					                      <dd>Mon to Wed, 10am to 12noon (by prior appointment only)</dd>
					                      <a href="" title="Know more about Desun Hospital & Heart Institute">
                                          <h4 class="media-heading"><strong>Desun Hospital & Heart Institute</strong></h4>
                                          </a>
								    </dl>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Anirban Sarkar">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/pahari-ghosh.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="B1" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                        
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                              
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Arindam Bhattacharya">
                                      <h4 class="media-heading"><strong>Dr. Arindam Bhattacharya</strong></h4>
                                    </a>
								    <h4>MBBS, MS</h4>
									<dl class="drprofile">
										  <dt>Speciality Timings :</dt>
					                      <dd>Fri to Sun, 12pm to 2noon</dd>
								    </dl>
								          <a href="" title="Know more about Apollo Gleneagles Hospital">
                                          <h4 class="media-heading"><strong>Apollo Gleneagles Hospital</strong></h4>
                                          </a>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Arindam Bhattacharya">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/samik-basu.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="B2" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                                                                                            
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
			                 
                                <div class="media-body">
                                    <a href="" title="Know more about Dr. Ashwini Ghatak">
                                      <h4 class="media-heading"><strong>Dr. Ashwini Ghatak</strong></h4>
                                    </a>
								    <h4>MBBS, MS</h4>
									<dl class="drprofile">
										  <dt>Timings :</dt>
					                      <dd>Fri,Sat 10am to 12noon (by prior appointment only)</dd>
					                      <a href="" title="Know more about AMRI Hospital">
                                          <h4 class="media-heading"><strong>AMRI Hospital</strong></h4>
                                          </a>
								    </dl>
							    </div>
                                 <div class="media-left">
			                         <a href="" title="Know more about Dr. Ashwini Ghatak">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/pavitra-chakraborty.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="B3" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
  	                        </div>
                        </div>
                    </div>                              
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Ritam Dasgupta">
                                      <h4 class="media-heading"><strong>Dr. Ritam Dasgupta</strong></h4>
                                    </a>
								    <h4>MBBS, MCh</h4>
									<dl class="drprofile">
										  <dt>Timings :</dt>
					                      <dd>Wed to Sun, 5pm to 8pm </dd>
					                      <a href="" title="Know more about B.M. Birla Heart Research Center">
                                          <h4 class="media-heading"><strong>B.M. Birla Heart Research Center</strong></h4>
                                          </a>
								    </dl>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Ritam Dasgupta">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/KS-Chajjer.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="B4" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                                                                                            
                </div>
                </form>
            </div>
        </div>
      </div>
      <!--Cardiology Above-->
      
    <div id="menu2" class="tab-pane fade">
        <div class="container gallery-container">
           <div class="tz-gallery">
               <form action="doctorappointment.php" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Debasish Banerjee">
                                      <h4 class="media-heading"><strong>Dr. Debasish Banerjee</strong></h4>
                                    </a>
								    <h4>MBBS, MS, MCh, DNB</h4>
									<dl class="drprofile">
										  <dt>Speciality Timings :</dt>
					                      <dd>Mon to Thurs, 10am to 12noon (by prior appointment only)</dd>
					                      <a href="" title="Know more about Desun Hospital & Heart Institute">
                                          <h4 class="media-heading"><strong>Desun Hospital & Heart Institute</strong></h4>
                                          </a>
								    </dl>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Debasish Banerjee">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/Kaushik-Das.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="C1" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                        
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                              
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Amal sekhar Dubey">
                                      <h4 class="media-heading"><strong>Dr. Amal sekhar Dubey</strong></h4>
                                    </a>
								    <h4>MBBS, MS</h4>
									<dl class="drprofile">
										  <dt>Speciality Timings :</dt>
					                      <dd>Mon to Fri, 12pm to 3noon</dd>
								    </dl>
								          <a href="" title="Know more about Apollo Gleneagles Hospital">
                                          <h4 class="media-heading"><strong>Apollo Gleneagles Hospital</strong></h4>
                                          </a>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Amal sekhar Dubey">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/kakoll-k-dey.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="C2" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                                                                                            
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
			                 
                                <div class="media-body">
                                    <a href="" title="Know more about Dr. Kamal Kochar">
                                      <h4 class="media-heading"><strong>Dr. Kamal Kochar</strong></h4>
                                    </a>
								    <h4>MBBS, MS</h4>
									<dl class="drprofile">
										  <dt>Timings :</dt>
					                      <dd>Fri,Sat 10am to 12noon</dd>
					                      <a href="" title="Know more about AMRI Hospital">
                                          <h4 class="media-heading"><strong>AMRI Hospital</strong></h4>
                                          </a>
								    </dl>
							    </div>
                                 <div class="media-left">
			                         <a href="" title="Know more about Dr. Kamal Kochar">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/indrajit-roy.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="C3" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
  	                        </div>
                        </div>
                    </div>                              
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Amitava Mitra">
                                      <h4 class="media-heading"><strong>Dr. Amitava Mitra</strong></h4>
                                    </a>
								    <h4>MBBS, MCh</h4>
									<dl class="drprofile">
										  <dt>Timings :</dt>
					                      <dd>sat to Sun, 6pm to 8pm </dd>
					                      <a href="" title="Know more about B.M. Birla Heart Research Center">
                                          <h4 class="media-heading"><strong>B.M. Birla Heart Research Center</strong></h4>
                                          </a>
								    </dl>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Amitava Mitra">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/GK-Prusty.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="C4" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                                                                                            
                </div>
                </form>
            </div>
        </div>
      </div>
      <!--Neuro Science Above-->
    <div id="menu3" class="tab-pane fade">
        <div class="container gallery-container">
           <div class="tz-gallery">
               <form action="doctorappointment.php" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Ketaki Maitra">
                                      <h4 class="media-heading"><strong>Dr. Ketaki Maitra</strong></h4>
                                    </a>
								    <h4>MBBS, MS, MCh, DNB</h4>
									<dl class="drprofile">
										  <dt>Speciality Timings :</dt>
					                      <dd>Wed to Fri, 10am to 12noon</dd>
					                      <a href="" title="Know more about Desun Hospital & Heart Institute">
                                          <h4 class="media-heading"><strong>Desun Hospital & Heart Institute</strong></h4>
                                          </a>
								    </dl>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Ketaki Maitra">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/madhushree-roy-naskar.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="D1" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                        
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                              
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Sunil Bhattacharya">
                                      <h4 class="media-heading"><strong>Dr. Sunil Bhattacharya</strong></h4>
                                    </a>
								    <h4>MBBS, MS</h4>
									<dl class="drprofile">
										  <dt>Speciality Timings :</dt>
					                      <dd>Mon to Fri, 8pm to 12noon</dd>
								    </dl>
								          <a href="" title="Know more about Apollo Gleneagles Hospital">
                                          <h4 class="media-heading"><strong>Apollo Gleneagles Hospital</strong></h4>
                                          </a>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Sunil Bhattacharya">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/Gautam-Mazumdar.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="D2" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                                                                                            
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
			                 
                                <div class="media-body">
                                    <a href="" title="Know more about Dr. Indrajit Basu">
                                      <h4 class="media-heading"><strong>Dr. Indrajit Basu</strong></h4>
                                    </a>
								    <h4>MBBS, MS</h4>
									<dl class="drprofile">
										  <dt>Timings :</dt>
					                      <dd>Fri,Sat 10am to 12noon (by prior appointment only)</dd>
					                      <a href="" title="Know more about AMRI Hospital">
                                          <h4 class="media-heading"><strong>AMRI Hospital</strong></h4>
                                          </a>
								    </dl>
							    </div>
                                 <div class="media-left">
			                         <a href="" title="Know more about Dr. Indrajit Basu">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/r.tandon.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="D3" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
  	                        </div>
                        </div>
                    </div>                              
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Jayanta Roy">
                                      <h4 class="media-heading"><strong>Dr. Jayanta Roy</strong></h4>
                                    </a>
								    <h4>MBBS, MCh</h4>
									<dl class="drprofile">
										  <dt>Timings :</dt>
					                      <dd>sat to Sun, 6pm to 8pm </dd>
					                      <a href="" title="Know more about B.M. Birla Heart Research Center">
                                          <h4 class="media-heading"><strong>B.M. Birla Heart Research Center</strong></h4>
                                          </a>
								    </dl>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Jayanta Roy">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/dheeraj-ranjan-sarkar.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="D4" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                                                                                            
                </div>
                </form>
            </div>
        </div>
      </div>
      <!--Dermatology Above-->
    <div id="menu4" class="tab-pane fade">
        <div class="container gallery-container">
           <div class="tz-gallery">
               <form action="doctorappointment.php" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Goutam Mondal">
                                      <h4 class="media-heading"><strong>Dr. Goutam Mondal</strong></h4>
                                    </a>
								    <h4>MBBS, MS, MCh, DNB</h4>
									<dl class="drprofile">
										  <dt>Speciality Timings :</dt>
					                      <dd>Mon,Tues 3pm to 6pm</dd>
					                      <a href="" title="Know more about Desun Hospital & Heart Institute">
                                          <h4 class="media-heading"><strong>Desun Hospital & Heart Institute</strong></h4>
                                          </a>
								    </dl>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Goutam Mondal">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/deep-das.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="E1" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                        
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                              
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Dipak Mazumdar">
                                      <h4 class="media-heading"><strong>Dr. Dipak Mazumdar</strong></h4>
                                    </a>
								    <h4>MBBS, MS</h4>
									<dl class="drprofile">
										  <dt>Speciality Timings :</dt>
					                      <dd>Mon to Fri, 12pm to 1noon</dd>
								    </dl>
								          <a href="" title="Know more about Apollo Gleneagles Hospital">
                                          <h4 class="media-heading"><strong>Apollo Gleneagles Hospital</strong></h4>
                                          </a>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Dipak Mazumdar">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/bhaskar-moni.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="E2" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                                                                                            
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
			                 
                                <div class="media-body">
                                    <a href="" title="Know more about Dr. Gourav Basu">
                                      <h4 class="media-heading"><strong>Dr. Gourav Basu</strong></h4>
                                    </a>
								    <h4>MBBS, MS</h4>
									<dl class="drprofile">
										  <dt>Timings :</dt>
					                      <dd>Wed to Sat 10am to 12noon</dd>
					                      <a href="" title="Know more about AMRI Hospital">
                                          <h4 class="media-heading"><strong>AMRI Hospital</strong></h4>
                                          </a>
								    </dl>
							    </div>
                                 <div class="media-left">
			                         <a href="" title="Know more about Dr. Gourav Basu">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/BB-Chandra.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="E3" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
  	                        </div>
                        </div>
                    </div>                              
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Kakoli Samanta">
                                      <h4 class="media-heading"><strong>Dr. Kakoli Samanta</strong></h4>
                                    </a>
								    <h4>MBBS, MCh</h4>
									<dl class="drprofile">
										  <dt>Timings :</dt>
					                      <dd>sat to Mon, 6pm to 8pm </dd>
					                      <a href="" title="Know more about B.M. Birla Heart Research Center">
                                          <h4 class="media-heading"><strong>B.M. Birla Heart Research Center</strong></h4>
                                          </a>
								    </dl>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Kakoli Samanta">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/kavita-garg.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="E4" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                                                                                            
                </div>
                </form>
            </div>
        </div>
      </div>
      <!--Gastro Sciences above-->
    <div id="menu5" class="tab-pane fade">
        <div class="container gallery-container">
           <div class="tz-gallery">
               <form action="doctorappointment.php" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Shabnam kar">
                                      <h4 class="media-heading"><strong>Dr. Shabnam kar</strong></h4>
                                    </a>
								    <h4>MBBS, MS, MCh, DNB</h4>
									<dl class="drprofile">
										  <dt>Speciality Timings :</dt>
					                      <dd>Fri to Mon, 10am to 12noon (by prior appointment only)</dd>
					                      <a href="" title="Know more about Desun Hospital & Heart Institute">
                                          <h4 class="media-heading"><strong>Desun Hospital & Heart Institute</strong></h4>
                                          </a>
								    </dl>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Shabnam kar">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/shabnam-zahir.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="F1" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                        
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                              
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Ruchi Banerjee">
                                      <h4 class="media-heading"><strong>Dr. Ruchi Banerjee</strong></h4>
                                    </a>
								    <h4>MBBS, MS</h4>
									<dl class="drprofile">
										  <dt>Speciality Timings :</dt>
					                      <dd>Mon to Wed, 12pm to 2noon</dd>
								    </dl>
								          <a href="" title="Know more about Apollo Gleneagles Hospital">
                                          <h4 class="media-heading"><strong>Apollo Gleneagles Hospital</strong></h4>
                                          </a>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Ruchi Banerjee">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/ruchi-golash.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="F2" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                                                                                            
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
			                 
                                <div class="media-body">
                                    <a href="" title="Know more about Dr. Swapna Kumar Abasthi">
                                      <h4 class="media-heading"><strong>Dr. Swapna Kumar Abasthi</strong></h4>
                                    </a>
								    <h4>MBBS, MS</h4>
									<dl class="drprofile">
										  <dt>Timings :</dt>
					                      <dd>Fri,Sat 12noon to 2noon</dd>
					                      <a href="" title="Know more about AMRI Hospital">
                                          <h4 class="media-heading"><strong>AMRI Hospital</strong></h4>
                                          </a>
								    </dl>
							    </div>
                                 <div class="media-left">
			                         <a href="" title="Know more about Dr. Swapna Kumar Abasthi">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/kakoli-acharya.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="F3" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
  	                        </div>
                        </div>
                    </div>                              
                    <div class="col-sm-6">
                        <div class="thumbnail">
		                    <div class="media">
		                        <div class="media-body">
                                    <a href="" title="Know more about Dr. Avishek Gayen">
                                      <h4 class="media-heading"><strong>Dr. Avishek Gayen</strong></h4>
                                    </a>
								    <h4>MBBS, MCh</h4>
									<dl class="drprofile">
										  <dt>Timings :</dt>
					                      <dd>Thur to Sun, 6pm to 9pm </dd>
					                      <a href="" title="Know more about B.M. Birla Heart Research Center">
                                          <h4 class="media-heading"><strong>B.M. Birla Heart Research Center</strong></h4>
                                          </a>
								    </dl>
							    </div>
			                    <div class="media-left">
			                         <a href="" title="Know more about Dr. Avishek Gayen">
			 		    		    		<img class="media-object img-square img-responsive" width="125" height="125" src="images/doctors/Anupam-Golash.jpg" alt="">
			  		                 </a>
                                        <button type="submit" class="btn btn-success btn-block btn-sm marTop15" name="F4" value="Submit now" title="Click to make Appointment"><span class="glyphicon glyphicon-flash"></span><strong>Book Appointment</strong> </button>
                                </div>
                                
  	                        </div>
                        </div>
                    </div>                                                                                            
                </div>
                <!--Gynae above-->
                </form>
            </div>
        </div>
      </div>
</div>


<!-- Add Google Maps 
<div id="googleMap"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>&copy; <b>This website is created and managed by Pritam Banerjee, Arnab Bhar & Anupam Mondal</b></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

</body>
</html>