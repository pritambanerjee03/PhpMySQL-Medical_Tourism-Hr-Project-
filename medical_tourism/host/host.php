<?php
    session_start();
    if(!isset($_SESSION['username']))
		{
			header('location: ../index.php');
		}

?>



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





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button> 
      <a class="navbar-brand" href="#myPage"><img src="images/events3.png" alt="Logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage"><h5>HOME</h5></a></li>
        <!-- <li><a href="#band">BAND</a></li>
        <li><a href="#tour">TOUR</a></li> -->
        <li><a href="#contact"><h5>EVENTS</h5></a></li>
         <li><a href="../ticketbooking/bookshow.php"  id="book"><h5 id="">BOOK NOW</h5></a></li>
        <!-- <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li> 
          </ul>
        </li> -->
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
</br></br></br></br>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/kol11.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <!-- <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p> -->
        </div>      
      </div>

      <div class="item">
        <img src="images/music11.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <!-- <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p> -->
        </div>      
      </div>
    
      <div class="item">
        <img src="images/art11.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <!-- <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p> -->
        </div>      
      </div>

      <div class="item">
        <img src="images/music31.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <!-- <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p> -->
        </div>      
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






<!-- Container (Contact Section) -->
<div id="contact" class="container">

  <br>
  <h3 class="text-center">HOSTED EVENTS</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><h4>Art and Exhibition</h4></a></li>
    <li><a data-toggle="tab" href="#menu1"><h4>Musical Events</h4></a></li>
    <li><a data-toggle="tab" href="#menu2"><h4>Kolkata</h4></a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

    <div class="container gallery-container">

       <!--  <h1>Bootstrap 3 Gallery</h1> 

        <p class="page-description text-center">Thumbnails With Title And Description</p>  -->
        
        <div class="tz-gallery">

            <div class="row">

                <div class=" col-md-6">
                    <div class="thumbnail">
                        <a class="lightbox" href="images/art1.jpg">
                            <img src="images/art1.jpg" alt="Park">
                        </a>
                        <div class="caption">
                            <h5><strong>Hosted By: Pradip Mukherjee</strong></h5>
                            <h3>Jyothi Basu: Portraits & Landscapes on Paper</h3>
                            <p><span>July 12, 2017 - August 24, 2017</span></p>
                            <h5><strong>Galerie Mirchandani + Steinruecke, 1st Floor, Sunny House 16/18, Colaba, Mumbai, India</strong></h5>
                            <p>The exhibition V.N. Jyothi Basu — Portraits and Landscapes on Paper at Galerie Mirchandani + Steinruecke, will present works the artist made largely between 1984.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="thumbnail">
                        <a class="lightbox" href="images/art2.jpg">
                            <img src="images/art2.jpg" alt="Bridge">
                        </a>
                        <div class="caption">
                             <h5><strong>Hosted By: Harsh Saxchena</strong></h5>
                            <h3>S.H. Raza: Traversing Terrains</h3>
                            <p><span>June 19, 2017 - October 28, 2017</span></p>
                            <h5><strong>Piramal Museum of Art, Piramal Tower Peninsula Corporate Park Lower Parel, Mumbai</strong></h5>
                            <p>One of the most significant artists in Indian Modernism and a founder member of the Bombay Progressives, S.H. Raza’s diverse body</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <a class="lightbox" href="images/art3.jpg">
                            <img src="images/art3.jpg" alt="Tunnel">
                        </a>
                        <div class="caption">
                            <h5><strong>Hosted By:Nawab Qureshi</strong></h5>
                            <h3>Indigenous Australia: Masterworks from the National Gallery of Australia</h3>
                            <p><span>June 21, 2017 - August 26, 2017</span></p>
                            <h5><strong>National Gallery of Modern Art,</strong></h5>
                            <p>The National Gallery of Australia is proud to partner with National Gallery of Modern Art, New Delhi to present significant </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <a class="lightbox" href="images/art4.jpg">
                            <img src="images/art4.jpg" alt="Coast">
                        </a>
                        <div class="caption">
                           <h5><strong>Hosted By:Pranab Chattarjee</strong></h5>
                            <h3>C. Douglas: In Search of Fragments</h3>
                            <p><span>July 7, 2017 - July 28, 2017</span></p>
                            <h5><strong>Akar Prakar, D 43, Defence Colony, First Floor, New Delhi, India</strong></h5>
                            <p>C. Douglas’s works contain repetitions of images but in his case these repetitions could be seen as retracing of paths already</p>
                        </div>
                    </div>
                </div>
               
            </div>

        </div>

    </div>
  



      <!-- <h2>Mike Ross, Manager</h2>
      <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p> -->
    
    <div id="menu1" class="tab-pane fade">
      <!-- <h2>Chandler Bing, Guitarist</h2>
      <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p> -->

      <div class="container gallery-container">

       <!--  <h1>Bootstrap 3 Gallery</h1> 

        <p class="page-description text-center">Thumbnails With Title And Description</p>  -->
        
        <div class="tz-gallery">

            <div class="row">

                <div class=" col-md-6">
                    <div class="thumbnail">
                        <a class="lightbox" href="images/music11.jpg">
                            <img src="images/music1.jpg" alt="Park">
                        </a>
                        <div class="caption">
                            <h5><strong>Hosted By: Pradip Mukherjee</strong></h5>
                            <h3>Shreya Ghoshal with Symphony Orchestra</h3>
                            <p><span>July 12, 2017 </span></p>
                            <h5><strong>Behind Gandhi Market, Comrade Harbanslal Marg, Sion, Mumbai, Maharashtra 400022, India</strong></h5>
                            <p>Playback singer Shreya Ghoshal started her illustrious career in 2002 after she was noticed by Sanjay Leela Bhansali when she won the musical reality show Sa Re Ga Ma Pa at the age of sixteen and subsequently sang five songs in his film, Devdas. </p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="thumbnail">
                        <a class="lightbox" href="images/music21.jpg">
                            <img src="images/music2.jpg" alt="Bridge">
                        </a>
                        <div class="caption">
                             <h5><strong>Hosted By: Harsh Saxchena</strong></h5>
                            <h3>Moods Of Kishore</h3>
                            <p><span>June 19, 2017</span></p>
                            <h5><strong>Shanmukhananda Hall: Mumbai,
                            Behind Gandhi Market, Comrade Harbanslal Marg, Sion, Mumbai, Maharashtra 400022, India</strong></h5>
                            <p>Babul Supriyo, is an Indian playback singer, actor and politician. Currently he is a Minister of State for Heavy Industries and Public Enterprises</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <a class="lightbox" href="images/music31.jpg">
                            <img src="images/music3.jpg" alt="Tunnel">
                        </a>
                        <div class="caption">
                            <h5><strong>Hosted By:Nawab Qureshi</strong></h5>
                            <h3>An Evening With Ustad Rashid Khan</h3>
                            <p><span>June 21, 2017</span></p>
                            <h5><strong>Dinanath Mangeshkar Natya Griha Hall: Mumbai,
                              Natawariya Dutta Bhatt Marg, Vile Parle - East, Mongibhai Road, Mumbai, Maharashtra 400057, India</strong></h5>
                            <p>From the Rampur-Sahaswan gharana Ustad Rashid Khan is the great-grandson of gharana founder Inayat Hussain Khan. He has been awarded the Padma Shri, as well as the Sangeet Natak Akademi Award in 2006. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <a class="lightbox" href="images/music41.jpg">
                            <img src="images/music4.jpg" alt="Coast">
                        </a>
                        <div class="caption">
                           <h5><strong>Hosted By:Pranab Chattarjee</strong></h5>
                            <h3>Romantic Rafi</h3>
                            <p><span>July 7, 2017</span></p>
                            <h5><strong>Prabodhankar Thackeray Audi: Borivali(W),
                                Near Chamunda Circle, Sodawala Lane, Borivali (W), Mumbai, Maharashtra 400092, India</strong></h5>
                            <p>Manjeera Ganguly was born in Kolkata. Inspite of being academically strong, she always had an inclination towards music.</br>Music Is Everything To Mohammed Salamat He Had Participated In Many Shows. A Moment Of Great Pride Come When Renowned Music Director Usha Khannaji Gave The Prize For Best Singer Award 1996 In Delhi.</p>
                        </div>
                    </div>
                </div>
               
            </div>

        </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <!-- <h2>Peter Griffin, Bass player</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p> -->
      <div class="container gallery-container">

       <!--  <h1>Bootstrap 3 Gallery</h1> 

        <p class="page-description text-center">Thumbnails With Title And Description</p>  -->
        
        <div class="tz-gallery">

            <div class="row">

                <div class=" col-md-6">
                    <div class="thumbnail">
                        <a class="lightbox" href="images/kol11.jpg">
                            <img src="images/kol1.jpg" alt="Park">
                        </a>
                        <div class="caption">
                            <h5><strong>Hosted By: Pradip Mukherjee</strong></h5>
                            <h3>Visit to Victoria Memorial Hall, Kolkata</h3>
                            <p><span>July 12, 2017 </span></p>
                            <h5><strong>Victoria Memorial Hall: Kolkata</strong></h5>
                            <p> 1.Age limit: Open for all.
                                2.Smoking is prohibited.
                                3.Plucking of flowers is prohibited.
                                4.Pets are not </br>
                                5.Feeding of dogs, birds, fish and insects is prohibited.
                                6.Shooting of films is not allowed.
                                7.The place is a plastic-free zone.
                                8.Playing, including flying discs, is prohibited</p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="thumbnail">
                        <a class="lightbox" href="images/kol21.jpg">
                            <img src="images/kol2.jpg" alt="Bridge">
                        </a>
                        <div class="caption">
                             <h5><strong>Hosted By: Harsh Saxchena</strong></h5>
                            <h3>Tomay Poreche Mone</h3>
                            <p><span>June 19, 2017</span></p>
                            <h5><strong>Science City Auditorium: Kolkata,
                                Mirania Gardens, East Topsia, Dhapa, Kolkata, West Bengal 700105, India</strong></h5>
                            <p>Artists:</br>
                                1.AMIT KUMAR.
                                2.ABHIJEET BHATTACHARYA.
                                3.USHA UTHUP.
                                4.PRIYANKA MITRA.</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <a class="lightbox" href="images/kol31.jpg">
                            <img src="images/kol3.jpg" alt="Tunnel">
                        </a>
                        <div class="caption">
                            <h5><strong>Hosted By:Nawab Qureshi</strong></h5>
                            <h3>PRIYANKA MITRA</h3>
                            <p><span>June 21, 2017</span></p>
                            <h5><strong>Bakstage: Kolkata,
                            1st Floor, EN Block, Sector V, Salt Lake City, Kolkata, West Bengal 700091, India</strong></h5>
                            <p>
                            Yadav is effortless with his jokes. If you dig Hindi comedy then he can prove to be a refreshing entry to your watchlist. His jokes mainly surround Haryana, Haryanvis, his friends, and family. He stereotypesthem like a pro </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <a class="lightbox" href="images/kol41.jpg">
                            <img src="images/kol4.jpg" alt="Coast">
                        </a>
                        <div class="caption">
                           <h5><strong>Hosted By:Pranab Chattarjee</strong></h5>
                            <h3>A High Power Motivational Seminar by Dr Vivek Bindra</h3>
                            <p><span>July 7, 2017</span></p>
                            <h5><strong>Nazrul Mancha: Kolkata,
                            Southern Ave, Golpark, Beside Ramkrishna Mission, Near Rabindra Sarobar, Kolkata, West Bengal 700029, India</strong></h5>
                            <p>Dr. Vivek Bindra is a thought leader, a motivational speaker, leadership trainer and a business coach. He specializes in spiriting and empowering people to realize their true potential. As a keynote speaker, millions of people have benefitted from his energetic workshops worldwide.</p>
                        </div>
                    </div>
                </div>
               
            </div>

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
  <p>Hosting Theme<a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools"> Beautified Design</a></p> 
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