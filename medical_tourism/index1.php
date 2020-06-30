<?php
  
    session_start();
        if(!isset($_SESSION['id']))
		{
			header('location: index.php');
		}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Medical Tourism in KOLKATA</title>

    <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="host/css/style.css">
  <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/styleband.css">
    <link rel="stylesheet" href="css/style_particle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <style>
   .navbar-brand {
    float: left;
    height: 60px;
   
    font-size: 18px;
    line-height: 20px;
  }
  .img-brand
  {
    margin:-15px;
    padding-left: 10px;
  }
 </style>

</head>

    
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div id="space">
  
    <div class="row">
               <div class="col-xs-12 text-center jumbo">
                <h2><b>Healthcare & Medical Tourism Management</b></h2><br>
                <h3 class="a"><b class="text"></b></h3>
                <a href="logout.php" class="btn btn-primary btn-md"><h5 class="a"><b>LOG OUT</b></h5></a>
                
                </div>
            </div>
</div>



  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img class="img-brand" src="images/ss1.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myCarousel">HOME</a></li>
        <li><a href="myprofile/userprofile.php">MY PROFILE</a></li>
        <li><a href="#ourservices">OUR SERVICES</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>  
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/Medical-Tourism-For-Groups-In-Tunisia-1-960x460.jpg" alt="New York" width="1200" height="550">
        <!--<div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div> -->     
      </div>

      <div class="item">
        <img src="images/Wellness%20Banner.jpg" alt="Chicago" width="1200" height="550">
        <!--<div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p>
        </div> -->     
      </div>
    
      <div class="item">
        <img src="images/health-seminar-banner.jpg" alt="Los Angeles" width="1200" height="550">
        <!--<div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div>-->      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
      
<section class="ourservices color" id="ourservices"> 
      
       <div class="container">
          <h3 class="text-center">OUR SERVICES</h3>
              <p class="text-center">
                  We manage medical appointments & events<br>provide facilities of accomodation and fooding<br>provide information of local tourism
              </p> 
       </div>
       
       <div class="container gaps">
       
        <div class="row">
          <a href="host/doctorlist.php">
            <div class="col-md-4 text-center" id="reference">
              <i class="fa fa-laptop"></i>
              <h4>Medical Appointment Booking</h4>
              <p>
                  Book an appointment in leading hospitals for renowned doctors
              </p> 
           </div>
          </a>
           
           <a class="" href="" title="Click to check Availability" data-toggle="modal" data-target="#myModal5">
           <div class="col-md-4 text-center" id="reference">
              <i class="fa fa-building"></i>
              <h4>Accommodation</h4>
              <p>
                  A solution to patient parties from far locations to stay in a reasonable price
              </p> 
           </div>
            </a>
            <a class="" href="" title="Click to check Availability" data-toggle="modal" data-target="#myModal6">
           <div class="col-md-4 text-center" id="reference">
              <i class="fa fa-cutlery"></i>
              <h4>Fooding</h4>
              <p>
                  A solution to patient parties for food in a reasonable price
              </p> 
           </div>
           </a>
           
        </div>
        
        <div class="row gapping">
          <a href="host/eventbooking.php">
           <div class="col-md-4 text-center" id="reference">
              <i class="fa fa-newspaper-o"></i>
              <h4>Event Organization</h4>
              <p>
                  Reserve your seats for various social or medical events
              </p> 
           </div>
            </a>
            <a class="" href="local_tourism/index.html">
           <div class="col-md-4 text-center" id="reference">
              <i class="fa fa-car"></i>
              <h4>Local Tourism</h4>
              <p>
                  Information about renowned local sight spots
              </p> 
           </div>
            </a>
            <a href="host/hostingappointment.php">
           <div class="col-md-4 text-center" id="reference">
              <i class="fa fa-calendar-check-o "></i>
              <h4>Event Planning</h4>
              <p>
                  Want to organise your own event?<br>Get it managed by us
              </p> 
           </div>
            </a>
        </div>
        
       </div>   
    </section>
        
    
               
    <section class="contact-img" id="contact">
    <div class="container contact-form ">
      <h1>Contact form</h1>
      <hr>

      <div class="row">
       
           <div class="col-sm-5">
           
            <h4>St. Thomas` College of Engineering and Technology</h4>
            <h4>Email:- test@gmail.com</h4>
            <h4>Phone:- 03326692365</h4>
          </div>

           <div class="col-sm-7">
            <form action="phpfiles/feedback.php" class="form" method="post">
             <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" required>
             </div>

             <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required>
             </div>

             <div class="form-group">
              <label>Massage</label>
              <textarea  class="form-control" name="msg" rows="7" required></textarea>
             </div>

             <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit" name="submit_btn" id="feedbackBtn">Send</button>
             </div>
               </form>
           </div>

        </div>

    </div>
</section>        
                
 <footer class="footer container-fluid text-center">
          <a href="#myPage" title="To Top">
              <span class="glyphicon glyphicon-chevron-up"></span>
          </a>
           <div class="container">
               <div class="row">
                   <div class="col-sm-12 text-center">
                      
                       <div class="social-icon">
                           <a href=""><i class="fa fa-facebook"></i></a>
                           <a href="#myPage" title="To Top"><i class="fa fa-twitter"></i></a>
                           <a href=""><i class="fa fa-google-plus"></i></a>
                           <a href=""><i class="fa fa-pinterest"></i></a>
                           <a href=""><i class="fa fa-rss"></i></a>
                           <a href=""><i class="fa fa-linkedin"></i></a>
                           <a href=""><i class="fa fa-vimeo-square"></i></a>
                           <a href=""><i class="fa fa-youtube-square"></i></a>
                           <a href=""><i class="fa fa-dribbble"></i></a>
                       </div>
        
                       <div>
                           <div class="copyright">
                               <p class="white">
                                   &copy; <b>This website is created and managed by Pritam Banerjee, Arnab Bhar & Anupam Mondal</b>
                               </p>
                               <div class="bordernow"></div>
                           </div>
                       </div>
                       
                   </div>
               </div>
           </div>
        </footer>                  
                        
     <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4><span class="glyphicon glyphicon glyphicon-pushpin"></span> Check Availability</h4>
                </div>
                <div class="modal-body" id="modal-body">
                <div class="booking-form">
						<form id="appointmentForm" action="phpfiles/availabilitycheck.php" method="post">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Your Id" name="Id" id="email" value="<?php echo $_SESSION['id'];?>" readonly required>
								<span class="form-label">Booking Id</span>
							</div>
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Patient Name" name="PatientName" id="PatientName" required>
								<span class="form-label">Patient Name</span>
							</div>
							<div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group date form-group">
                                        <input type="text" class="form-control" id="inputDate" name="AppDate" placeholder="Appointment Date" value=""required >
                                        <span class="form-label">Doctor AppDate</span>   
                                            <div class="input-group-addon form-group">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                             </div>
                                    </div>
                                </div>
                            </div>
							<div class="form-btn">
								<button class="submit-btn" name="AvailibilitySubmitBtn">Book Now</button>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
  
    <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4><span class="glyphicon glyphicon glyphicon-pushpin"></span> Check Availability</h4>
                </div>
                <div class="modal-body" id="modal-body">
                <div class="booking-form">
						<form id="appointmentForm" action="phpfiles/foodcheck.php" method="post">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Your Id" name="Id" id="email" value="<?php echo $_SESSION['id'];?>" readonly required>
								<span class="form-label">Booking Id</span>
							</div>
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Patient Name" name="PatientName" id="PatientName" required>
								<span class="form-label">Patient Name</span>
							</div>
							<div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group date form-group">
                                        <input type="text" class="form-control" id="inputDate" name="AppDate" placeholder="Appointment Date" value=""required >
                                        <span class="form-label">Doctor AppDate</span>   
                                            <div class="input-group-addon form-group">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                             </div>
                                    </div>
                                </div>
                            </div>
							<div class="form-btn">
								<button class="submit-btn" name="AvailibilityFoodBtn">Book Now</button>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
  
  
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
    <script  src="js/index_particle.js"></script>
    <script type="text/javascript" src="host/js/datepickerCustom.js"></script>
    <script type="text/javascript" src="host/js/bootstrap-datepicker.min.js"></script>
    <!--<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>
	<script type="text/javascript">
$(document).ready(function(){
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
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>-->
<script src="js/scramble.js"></script>
</body>
</html>