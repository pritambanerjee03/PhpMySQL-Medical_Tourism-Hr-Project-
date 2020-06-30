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
    <link rel="stylesheet" href="book.css">
    <link rel="stylesheet" href="eventstyle.css">
    <link rel="stylesheet" href="restaurantstyle.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    
	<!-- Custom stlylesheet -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  <script>
       function gethotelname(x)
      {
          if(x==0)
                document.getElementById("hotelname").value="The Oberoi Grand";
          else if(x==1)
                document.getElementById("hotelname").value="The Peerless Inn";
          else if(x==2)
                document.getElementById("hotelname").value="JW Marriott Hotel";
          else if(x==3)
                document.getElementById("hotelname").value="The Lalit Great Eastern";
          else if(x==4)
                document.getElementById("hotelname").value="ITC Sonar";
          else if(x==5)
                document.getElementById("hotelname").value="Hyatt Regency";
      }
    </script>
  
  
</head>
<body id="carouselnew" data-spy="scroll" data-target=".navbar" data-offset="50">
   
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
    <div class="collapse navbar-collapse" id="myPage">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../index1.php">HOME</a></li>
        <li><a href="../myprofile/userprofile.php">MY PROFILE</a></li>
        <li><a href="#hotels">HOTELS</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav> 
   
    <section class="carouselnew padbottom" id="carouselnew"> 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/hotel/slidertop/slidertop1.jpg" alt="New York" width="1200" height="700">                
      </div>
      <div class="item">
        <img src="images/hotel/slidertop/slidertop2.jpg" alt="Chicago" width="1200" height="700">      
      </div>
      <div class="item">
        <img src="images/hotel/slidertop/slidertop3.jpg" alt="Los Angeles" width="1200" height="700">     
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div> 
    </section>
     
     <div>
         <div class="row padBottom20">
             <div class="col-md-6 ">
                 
             </div>
         </div>
     </div>
      
      <!--Hotel details for every hotel with a slider-->
      
    <div class="row" id="hotels">
         <div class="col-md-12 clearfix marBottom25" id="doctorsList">
            <div class="row">
                <div class="col-sm-12">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                   
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="heading43">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse43" aria-expanded="true" aria-controls="collapse43">
                            <center>The Oberoi Grand</center></a>
                        </h4>
                      </div>

                      <div id="collapse43" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading43">
                        <div class="panel-body">
                            <div class="row">
                              <div class="col-sm-6">
		                        <div class="media">
			                        <div class="media-left">
                                      
                                        <img class="media-object img-square img-responsive" width="125" height="125" src="images/hotel/oberoi/small.png" alt="">
                                        
                                        <a class="btn btn-success btn-block btn-sm marTop15" href="" title="Click to book hotel" data-toggle="modal" data-target="#myModal4" onclick="gethotelname(0)">BOOK NOW</a>
                                    </div>
                                    <div class="media-body">
                                        <a href="" title="The Oberoi Grand">
                                          <h4 class="media-heading"><strong>The Oberoi Grand,KolKata</strong></h4>
                                        </a>
                                        <h4>Address</h4>
                                        <h5>15, Jawaharlal Nehru Road, New Market Area, Dharmatala, Taltala, Kolkata, West Bengal 700013</h5>
                                        <dl class="drprofile">
                                            <dt>Special Features:</dt>
                                            <dd>Located at heart of Kolkata, transport availability is at its best.</dd>
                                        </dl>
							        </div>
  	                            </div>
                              </div>
             
    <div class="carouselnew col-md-6" id="carouselnew"> 
    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel1" data-slide-to="1"></li>
      <li data-target="#myCarousel1" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/hotel/oberoi/slider1.png" alt="New York" width="1200" height="700">
                           
      </div>  

      <div class="item">
        <img src="images/hotel/oberoi/slider2.png" alt="Chicago" width="1200" height="700">      
      </div>
    
      <div class="item">
        <img src="images/hotel/oberoi/slider3.png" alt="Los Angeles" width="1200" height="700">     
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div> 
    </div>
      
                          </div>
                      </div>
  </div></div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="heading43">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse44" aria-expanded="true" aria-controls="collapse44">
                            <center>The Peerless Inn</center></a>
                        </h4>
                      </div>

                      <div id="collapse44" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading43">
                        <div class="panel-body">
                            <div class="row">
                              <div class="col-sm-6">
		                        <div class="media">
			                        <div class="media-left">
                                      
                                        <img class="media-object img-square img-responsive" width="125" height="125" src="images/hotel/peerless/small.jpg" alt="">
                                        
                                        <a class="btn btn-success btn-block btn-sm marTop15" href="" title="Click to book hotel" data-toggle="modal" data-target="#myModal4" onclick="gethotelname(1)">BOOK NOW</a>
                                    </div>
                                    <div class="media-body">
                                        <a href="" title="The Peerless Inn">
                                          <h4 class="media-heading"><strong>The Peerless Inn,KolKata</strong></h4>
                                        </a>
                                        <h4>Address</h4>
                                        <h5>12, Jawaharlal Nehru Road, New Market Area, Dharmatala, Taltala, Kolkata, West Bengal 700013</h5>
                                        <dl class="drprofile">
                                            <dt>Special Features:</dt>
                                            <dd>Located at heart of Kolkata, transport availability is at its best.</dd>
                                        </dl>
							        </div>
  	                            </div>
                              </div>
             
    <div class="carouselnew col-md-6" id="carouselnew"> 
    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel2" data-slide-to="1"></li>
      <li data-target="#myCarousel2" data-slide-to="2"></li>
    </ol>

    
  <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/hotel/peerless/slider1.jpg" alt="New York" width="1200" height="700">
                           
      </div>  

      <div class="item">
        <img src="images/hotel/peerless/slider2.jpg" alt="Chicago" width="1200" height="700">      
      </div>
    
      <div class="item">
        <img src="images/hotel/peerless/slider3.jpg" alt="Los Angeles" width="1200" height="700">     
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div> 
    </div>
      
                          </div>
                      </div>
  </div></div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="heading43">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse45" aria-expanded="true" aria-controls="collapse45">
                            <center>JW Marriott Hotel</center></a>
                        </h4>
                      </div>

                      <div id="collapse45" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading43">
                        <div class="panel-body">
                            <div class="row">
                              <div class="col-sm-6">
		                        <div class="media">
			                        <div class="media-left">
                                      
                                        <img class="media-object img-square img-responsive" width="125" height="125" src="images/hotel/marriott/small.jpg" alt="">
                                        
                                        <a class="btn btn-success btn-block btn-sm marTop15" href="" title="Click to book hotel" data-toggle="modal" data-target="#myModal4" onclick="gethotelname(2)">BOOK NOW</a>
                                    </div>
                                    <div class="media-body">
                                        <a href="" title="JW Marriott Hotel">
                                          <h4 class="media-heading"><strong>JW Marriott Hotel,KolKata</strong></h4>
                                        </a>
                                        <h4>Address</h4>
                                        <h5>4A, JBS Haldane Ave, Tangra, Kolkata, West Bengal 700105</h5>
                                        <dl class="drprofile">
                                            <dt>Special Features:</dt>
                                            <dd>Situated nearest to airport.</dd>
                                        </dl>
							        </div>
  	                            </div>
                              </div>
             
    <div class="carouselnew col-md-6" id="carouselnew"> 
    <div id="myCarousel3" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel3" data-slide-to="1"></li>
      <li data-target="#myCarousel3" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/hotel/marriott/slider1.jpg" alt="New York" width="1200" height="700">
                           
      </div>  

      <div class="item">
        <img src="images/hotel/marriott/slider2.jpg" alt="Chicago" width="1200" height="700">      
      </div>
    
      <div class="item">
        <img src="images/hotel/marriott/slider3.jpg" alt="Los Angeles" width="1200" height="700">     
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div> 
    </div>
      
                          </div>
                      </div>
  </div></div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="heading43">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse46" aria-expanded="true" aria-controls="collapse46">
                            <center>The Lalit Great Eastern</center></a>
                        </h4>
                      </div>

                      <div id="collapse46" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading43">
                        <div class="panel-body">
                            <div class="row">
                              <div class="col-sm-6">
		                        <div class="media">
			                        <div class="media-left">
                                      
                                        <img class="media-object img-square img-responsive" width="125" height="125" src="images/hotel/great_eastern/small.jpg" alt="">
                                        
                                        <a class="btn btn-success btn-block btn-sm marTop15" href="" title="Click to book hotel" data-toggle="modal" data-target="#myModal4" onclick="gethotelname(3)">BOOK NOW</a>
                                    </div>
                                    <div class="media-body">
                                        <a href="" title="The Lalit Great Eastern">
                                          <h4 class="media-heading"><strong>The Lalit Great Eastern,KolKata</strong></h4>
                                        </a>
                                        <h4>Address</h4>
                                        <h5>Dalhousie Square 1, 2,3, Old Court House St, Kolkata, West Bengal 700069</h5>
                                        <dl class="drprofile">
                                            <dt>Special Features:</dt>
                                            <dd>Located at heart of Kolkata, transport availability is at its best.</dd>
                                        </dl>
							        </div>
  	                            </div>
                              </div>
             
    <div class="carouselnew col-md-6" id="carouselnew"> 
    <div id="myCarousel4" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel4" data-slide-to="1"></li>
      <li data-target="#myCarousel4" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/hotel/great_eastern/slider1.jpg" alt="New York" width="1200" height="700">
                           
      </div>  

      <div class="item">
        <img src="images/hotel/great_eastern/slider2.jpg" alt="Chicago" width="1200" height="700">      
      </div>
    
      <div class="item">
        <img src="images/hotel/great_eastern/slider3.jpg" alt="Los Angeles" width="1200" height="700">     
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel4" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel4" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div> 
    </div>
      
                          </div>
                      </div>
  </div></div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="heading43">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse47" aria-expanded="true" aria-controls="collapse47">
                            <center>ITC Sonar</center></a>
                        </h4>
                      </div>

                      <div id="collapse47" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading43">
                        <div class="panel-body">
                            <div class="row">
                              <div class="col-sm-6">
		                        <div class="media">
			                        <div class="media-left">
                                      
                                        <img class="media-object img-square img-responsive" width="125" height="125" src="images/hotel/itc/small.jpg" alt="">
                                        
                                        <a class="btn btn-success btn-block btn-sm marTop15" href="" title="Click to book hotel" data-toggle="modal" data-target="#myModal4" onclick="gethotelname(4)">BOOK NOW</a>
                                    </div>
                                    <div class="media-body">
                                        <a href="../doctor/dr-bhabatosh-biswas/index.html" title="The Peerless Inn">
                                          <h4 class="media-heading"><strong>ITC Sonar,KolKata</strong></h4>
                                        </a>
                                        <h4>Address</h4>
                                        <h5>1, JBS Haldane Ave, Tangra, Kolkata, West Bengal 700046</h5>
                                        <dl class="drprofile">
                                            <dt>Special Features:</dt>
                                            <dd>Situated nearest to airport.</dd>
                                        </dl>
							        </div>
  	                            </div>
                              </div>
             
    <div class="carouselnew col-md-6" id="carouselnew"> 
    <div id="myCarousel5" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel5" data-slide-to="1"></li>
      <li data-target="#myCarousel5" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/hotel/itc/slider1.jpg" alt="New York" width="1200" height="700">
                           
      </div>  

      <div class="item">
        <img src="images/hotel/itc/slider2.jpg" alt="Chicago" width="1200" height="700">      
      </div>
    
      <div class="item">
        <img src="images/hotel/itc/slider3.jpg" alt="Los Angeles" width="1200" height="700">     
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel5" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel5" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div> 
    </div>
      
                          </div>
                      </div>
  </div></div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="heading43">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse48" aria-expanded="true" aria-controls="collapse48">
                            <center>Hyatt Regency</center></a>
                        </h4>
                      </div>

                      <div id="collapse48" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading43">
                        <div class="panel-body">
                            <div class="row">
                              <div class="col-sm-6">
		                        <div class="media">
			                        <div class="media-left">
                                    
                                        <img class="media-object img-square img-responsive" width="125" height="125" src="images/hotel/hyatt/small.jpg" alt="">
                                        
                                        <a class="btn btn-success btn-block btn-sm marTop15" href="" title="Click to book hotel" data-toggle="modal" data-target="#myModal4" onclick="gethotelname(5)">BOOK NOW</a>
                                    </div>
                                    <div class="media-body">
                                        <a href="" title="Hyatt Regency">
                                          <h4 class="media-heading"><strong>Hyatt Regency,KolKata</strong></h4>
                                        </a>
                                        <h4>Address</h4>
                                        <h5>JA-1 Sector III, JA Block, Sector III, Salt Lake City, Kolkata, West Bengal 700098</h5>
                                        <dl class="drprofile">
                                            <dt>Special Features:</dt>
                                            <dd>Situated nearest to airport.</dd>
                                        </dl>
							        </div>
  	                            </div>
                              </div>
             
    <div class="carouselnew col-md-6" id="carouselnew"> 
    <div id="myCarousel6" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel6" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel6" data-slide-to="1"></li>
      <li data-target="#myCarousel6" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/hotel/hyatt/slider1.jpg" alt="New York" width="1200" height="700">
                           
      </div>  

      <div class="item">
        <img src="images/hotel/hyatt/slider2.jpg" alt="Chicago" width="1200" height="700">      
      </div>
    
      <div class="item">
        <img src="images/hotel/hyatt/slider3.jpg" alt="Los Angeles" width="1200" height="700">     
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel6" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel6" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div> 
    </div>
      
                          </div>
                      </div>
  </div></div>
                    
                    
                  
                    
                    
                  </div>
                </div>
            </div>
        </div>
    </div>  
    
<section class="customerComments">           
   <h2 class="text-center h2new">What our customers say</h2>
  <div id="myCarousel7" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel7" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel7" data-slide-to="1"></li>
      <li data-target="#myCarousel7" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4 class="h4new">"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4 class="h4new">"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4 class="h4new">"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel7" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel7" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>  
 
<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2 class="h2new">Pricing</h2>
    <h4 class="h4new">Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center panelmain">
        <div class="panel-heading panel-headingmain">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p>Accomodate <strong>2 people</strong></p>
        </div>
        <div class="panel-footer">
          <h3>800 Rs.</h3>
          <h4>per day</h4>
         <!-- <button class="btn btn-lg">Sign Up</button>-->
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center panelmain">
        <div class="panel-heading panel-headingmain">
          <h1>Supreme</h1>
        </div>
        <div class="panel-body">
          <p>Accomodate <strong>4 people</strong></p>
        </div>
        <div class="panel-footer">
          <h3>1100 Rs.</h3>
          <h4>per day</h4>
          <!--<button class="btn btn-lg">Sign Up</button>-->
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center panelmain">
        <div class="panel-heading panel-headingmain">
          <h1>Deluxe</h1>
        </div>
        <div class="panel-body">
         <p>Accomodate <strong>6 people</strong></p>
        </div>
        <div class="panel-footer">
          <h3>1500 Rs.</h3>
          <h4>per day</h4>
          <!--<button class="btn btn-lg">Sign Up</button>-->
        </div>
      </div>      
    </div>    
  </div>
</div>
 

    <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 id="newh4modal"><span class="glyphicon glyphicon glyphicon-pushpin"></span> BOOK NOW</h4>
                </div>
                <div class="modal-body" id="modal-body">
                <div class="booking-form">
						<form id="appointmentForm" action="../phpfiles/accappointment.php" method="post">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Hotel Name" name="HotelName" id="hotelname" readonly>
								<span class="form-label">Destination</span>
							</div>
							<div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group date form-group">
                                        <input type="text" class="form-control clickable" id="inputDate" name="CheckinDate" placeholder="DD-MM-YYYY [Check In]" value=""required >
                                           
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                             </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-group date form-group">
                                        <input type="text" class="form-control clickable" id="inputDate" name="CheckoutDate" placeholder="DD-MM-YYYY [Check Out]" value=""required >
                                           
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                             </div>
                                    </div>
                                </div>
                            </div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<select class="form-control" required name="Rooms">
											<option value="" selected hidden>no of rooms</option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Rooms</span>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<select class="form-control" required name="Guests">
											<option value="" selected hidden>no of guests</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Adults</span>
									</div>
								</div>
							
							</div>
							
							
							<div class="form-btn">
								<button class="submit-btn" name="HotelSubmitBtn">Book Now</button>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
  
  
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#carouselnew" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><b>This website is created and managed by Pritam Banerjee, Arnab Bhar & Anupam Mondal</b></p> 
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/datepickerCustom.js"></script>
<script src="js/jquery.min.js"></script>
	<script>
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
<script>
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
</script>

</body>
</html>