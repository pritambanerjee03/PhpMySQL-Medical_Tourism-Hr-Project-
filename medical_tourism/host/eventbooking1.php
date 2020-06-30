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



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
            #form
        {
            display: none;
        }
          
      #sectionSeminar
        {
            display: none;
        }
      #sectionYogaCamp
      {
            display: none;
        }
      #sectionBloodDonationCamp
      {
            display: none;
        }
      #food_allergy
      {
          display: none;
      }
      #medicine_details
      {
          display: none;
      }
      #medication_details
      {
          display: none;
      }
    </style>
  <script>
   function formblock(x)
      {
          if(x==0)
              {
                document.getElementById('form').style.display='block';  
              }
              
          else if(x==1)
              {
                  
                document.getElementById('sectionSeminar').style.display='none';
                document.getElementById('sectionYogaCamp').style.display='none';
                document.getElementById('sectionBloodDonationCamp').style.display='none';
                  document.getElementById('form').style.display='none';
              }
              
          return;
              
      }
      
      function sectionblocks(x)
      {
          if(x==0)
              {
                document.getElementById('sectionSeminar').style.display='block';
                document.getElementById('sectionYogaCamp').style.display='none';
                document.getElementById('sectionBloodDonationCamp').style.display='none';
              }
              
          else if(x==1)
              {
                document.getElementById('sectionYogaCamp').style.display='block';
                document.getElementById('sectionSeminar').style.display='none';
                document.getElementById('sectionBloodDonationCamp').style.display='none';
              }
          else if(x==2)
              {
                document.getElementById('sectionBloodDonationCamp').style.display='block';
                document.getElementById('sectionSeminar').style.display='none';
                document.getElementById('sectionYogaCamp').style.display='none';
                
              }
          return;
              
      }
    function foodrestriction(x)
      {
          if(x==0)
              document.getElementById('food_allergy').style.display='block';
          else
              {
                  document.getElementById('food_allergy').style.display='none';
                  
                
              }
              
          return;
      }
      
    function medicinerestriction(x)
      {
          if(x==0)
              document.getElementById('medicine_details').style.display='block';
          else
              {
                  document.getElementById('medicine_details').style.display='none';
                  
                
              }
              
          return;
      }
    function medication(x)
      {
          if(x==0)
              document.getElementById('medication_details').style.display='block';
          else
              {
                  document.getElementById('medication_details').style.display='none';
                  
                
              }
              
          return;
      }
      function buttonhide(x)
      {
          if(x==0)
              document.getElementById('button_feature').style.display='none';
          else
              {
                  document.getElementById('button_feature').style.display='block';
                  
                
              }
              
          return;
      }
    </script>
  
</head>
<body id="carouselnew" data-spy="scroll" data-target=".navbar" data-offset="50">
   
   
   
    <section class="carouselnew" id="carouselnew mypage"> 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/event_medical/seminar.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <!--<h3>Kolkata</h3>
          <p>The atmosphere in Kolkata is Awesome.</p> 
                  <P>
                    who is such a man as does not want to get success in the life.<br>
                    Life is not meant to work
                </P>
                <br><br> -->
                <div class="button">
                    <a href="" class="btn btn-first" data-toggle="modal" data-target="#myModal1">Get Started</a>
                    <a  onclick="formblock(0)" ondblclick="formblock(1)"  class="btn btn-second" title="Single click to open the form or Double click to close">Buy Now</a>
                </div>

        </div> 
                           
      </div>
      <div class="modal fade" id="myModal1" role="dialog">
                    <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 id="h4"><span class="glyphicon glyphicon glyphicon-pushpin"></span> Event Description</h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                      <div class="col-md-12">
                            <div class="thumbnail text-center">
                               <img src="images/event_medical/yoga.jpg" class="img-circle person" alt="kolkata" width="200" height="200">
                              <p><strong>Chandigarh</strong></p>
                              <p>Parade Ground,Sector 17 </p> 
                              <p>Friday 16 April 2019</p>
                              <p>The atmosphere in Chandigarh is Awesome.</p>
                                <a onclick="formblock(0)"><button class="btn btnl" data-toggle="modal" data-target="#myModal1">Buy Tickets</button></a>
                            </div>
                      </div>
                      
                  </div>
                </div>

              </div>
            </div>
                </div>  

      <div class="item">
        <img src="images/event_medical/yoga.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <!--<h3>Mumbai</h3>
          <p>Thank you, Mumbai - A night we won't forget.</p>
                  <P>
                    who is such a man as does not want to get success in the life.<br>
                    Life is not meant to work
                </P>
                <br><br> -->
                <div class="button">
                    <a href="" class="btn btn-first" data-toggle="modal" data-target="#myModal2">Get Started</a>
                    <a  onclick="formblock(0)" ondblclick="formblock(1)"  class="btn btn-second" title="Single click to open the form or Double click to close">Buy Now</a>
                    
                </div>

        </div>      
      </div>
                      <div class="modal fade" id="myModal2" role="dialog">
                    <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 id="h4"><span class="glyphicon glyphicon glyphicon-pushpin"></span> Event Description</h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                      
                      <div class="col-md-12">
                            <div class="thumbnail text-center">
                               <img src="images/event_medical/yoga.jpg" class="img-circle person" alt="mumbai" width="200" height="200">
                              <p><strong>Mumbai</strong></p>
                              <p>Andheri Park</p> 
                              <p>Sunday 10 February 2019</p>
                              <p>The atmosphere in Mumbai is Awesome.</p>
                                <a onclick="formblock(0)"><button class="btn btnl" data-toggle="modal" data-target="#myModal2">Buy Tickets</button></a>
                            </div>
                      </div>
                      
                      </div>
                    </div>

                  </div>
                </div>
                </div>
    
      <div class="item">
        <img src="images/event_medical/blood.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <!--<h3>Bangalore</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Bangalore!</p>
              <P>
                    who is such a man as does not want to get success in the life.<br>
                    Life is not meant to work
                </P>
                <br><br> -->
                <div class="button">
                    <a href="" class="btn btn-first" data-toggle="modal" data-target="#myModal3">Get Started</a>
                    <a  onclick="formblock(0)" ondblclick="formblock(1)"  class="btn btn-second" title="Single click to open the form or Double click to close">Buy Now</a>
                    
                </div>

        </div>      
      </div>
                      <div class="modal fade" id="myModal3" role="dialog">
                    <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 id="h4"><span class="glyphicon glyphicon glyphicon-pushpin"></span> Event Description</h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                      <div class="col-md-12">
                            <div class="thumbnail text-center">
                               <img src="images/event_medical/blood.jpg" class="img-circle person" alt="bangalore" width="200" height="200">
                              <p><strong>Bangalore</strong></p>
                              <p>Symphony Orchestra Club</p> 
                              <p>Saturday 12 November 2018</p>
                              <p>The atmosphere in South India is Awesome.</p>
                                <a onclick="formblock(0)"><button class="btn btnl" data-toggle="modal" data-target="#myModal3">Buy Tickets</button></a>
                            </div>
                      </div>
                      
                      </div>
                    </div>

                  </div>
                </div>
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
   
   
   <!-- <div class="row" id="pageHeader" >
        <div id="headerImage">
          <div class="container">
           <div class="image">
            <img class="img-responsive" src="images/CMRI_Doctors.jpg" alt=""/>
            </div>
              <div class="pageHeaderName">
                <h1><strong>Our Doctors</strong></h1>
              </div>
          </div>
        </div>
      </div>-->
     
      
       
        
        <div id="form" class="row padTop20 padBottom50 clearfix">



        <div class="container">



        



        <div class="row padBottom20">



        <div class="col-md-12">



        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">



			


        </div>



        </div>



        </div>



        



          <div class="row">



            <div class="col-md-9 marBottom30">



<main id="main" class="site-main page-content row" role="main">



                <div class="col-sm-12">



                  


                  






  									
<article id="post-36" class="post-36 page type-page status-publish hentry">
	<div class="entry-content">
			</div><!-- .entry-content -->
</article><!-- #post-## -->







  								


                </div>



              </main>


<div class="row marTop30">
    <div class="col-sm-12">
        <section class="appointment">



                    <legend>Fill up the form to <strong>Book an Event with Us</strong></legend>

			        <strong>Note:</strong>

			<ul class="marBottom25">

 				<li>This is an booking request only<br>Depending on the availability of the seats and premises, booking will be confirmed to you through mail/call</li>

 				<li>The booking requests can be made until seats available</li>

			</ul>



                    <form class="form-horizontal" id="appointmentForm" name="appointmentForm" action="../phpfiles/eventappointment.php" method="POST" enctype="">



                    <div class="clearfix text-right marBottom25">



                      <p class="text-danger">* <i>marked fields are Mandatory.</i></p>



                    </div>



                      <div class="form-group  ">



                        <label for="inputName" class="col-sm-2 control-label">Full Name *</label>



                        <div class="col-sm-10">



                          <input type="text" class="form-control" id="inputName" pattern="[a-zA-Z ]+" name="inputName" placeholder="Your full name" title="Only Alphabate &amp; Space allowed" value=""  required>



                          


                        </div>



                      </div>
                      
                        <div class="row">



                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputMobile" class="col-sm-4 control-label">Mobile no *</label>



                            <div class="col-sm-8">



                              <input type="text" class="form-control" id="inputMobile" name="inputMobile" placeholder="Your Mobile no" maxlength="14" value=""  required>



                              


                            </div>



                          </div>







                        </div>



                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputEmail" class="col-sm-4 control-label">Email Id *</label>



                            <div class="col-sm-8">



                              <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your valid Email Id" value=""   required>



                              


                            </div>



                          </div>



                        </div>



                      </div>



                      <div class="row">



                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputIdDetails" class="col-sm-4 control-label">Id Details*</label>



                            <div class="col-sm-8">



                              


                              <select class="form-control" id="inputIdDetails" name="inputIdDetails"   required>



<option value="">Select your Id Proof</option>






<option   value="Aadhar Card">Aadhar Card</option>






<option value="Voter Card">Voter Card</option>






<option  value="Pan Card">Pan Card</option>







</select>



                              


                            </div>



                          </div>



                        </div>



                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputIdNo" class="col-sm-4 control-label">Id no *</label>



                            <div class="col-sm-8">



                              <input type="text" class="form-control" id="inputIdNo" name="inputIdNo" placeholder="Your Id no" maxlength="12" value=""    required>



                              


                            </div>



                          </div>







                        </div>



                      </div>
                      

                      <div class="form-group ">



                        <label for="inputRegarding" class="col-sm-2 control-label">Address</label>



                        <div class="col-sm-10">



                          <textarea type="text" class="form-control" id="inputRegarding" name="inputAddress" placeholder="Write your Address here."   required></textarea>



                          


                        </div>



                      </div>
                       
                       
                       <!--Personal Details-->
                        
                        
                        
                   <div class="row">
                        <div class="col-sm-12">



                          <div class="form-group ">



                            <label for="inputBookingType" class="col-sm-2 control-label">Booking Type *</label>



                            <div class="col-sm-10">



                              <label class="radio-inline">



                                <input type="radio" onclick="sectionblocks(0)" name="inputBookingType" id="inlineRadio1" value="Seminar"   > SEMINAR



                              </label>



                              <label class="radio-inline">



                                <input type="radio"  onclick="sectionblocks(1)" name="inputBookingType" id="inlineRadio2"  value="Yoga Camp"> YOGA CAMP



                              </label>
                              
                              <label class="radio-inline">



                                <input type="radio" onclick="sectionblocks(2)" name="inputBookingType" id="inlineRadio2"  value="Blood Donation"> BLOOD DONATION CAMP



                              </label>



                            </div>



                            


                          </div>



                        </div>
                    </div>
                     
                         <!--Choosing Details-->
                     

                        
                      <div id="sectionSeminar">  
                         <div class="form-group ">



                        <label for="inputProgramName" class="col-sm-2 control-label">Program Name *</label>



                        <div class="col-sm-10">

                          <select class="form-control" id="inputProgramName" name="inputProgramName"  required>


                            <option value="">Select your Seminar</option>
                            

                            <option  value="Modern Day LifeStyle">Seminar on Modern Day LifeStyle</option>



                            


                              


                            <option  value="Workout vs Diet">Seminar on Workout vs Diet</option>



                            


                              


                            <option  value="Good Food, Good Health">Seminar on Good Food, Good Health</option>


                          </select>



                          


                        </div>



                      </div>
                            
                         
                         <div class="row">
                           
                            <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputSeminarDate" class="col-sm-4 control-label">Date *</label>



                            <div class="col-sm-8">



                              


                              <select class="form-control" id="inputSeminarDate" name="inputSeminarDate"  required>



                                <option value="">Select your Prefered Date</option>






                                <option   value="27th December">27th February</option>






                                <option value="28th December">28th February</option>






                                <option  value="29th December">29th February</option>







                                </select>



                              


                            </div>



                          </div>



                        </div>
                        
                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputSeminarTime" class="col-sm-4 control-label">Time *</label>



                            <div class="col-sm-8">



                              


                              <select class="form-control" id="inputSeminarTime" name="inputSeminarTime"  required>



                            <option value="">Select your Prefered Time</option>






                            <option   value="12:30PM - 3:30PM">12:30PM - 3:30PM</option>






                            <option value="5:00PM - 8:00PM">05:00PM - 08:00PM</option>





                            </select>



                              


                            </div>



                          </div>



                        </div>
                        
                        </div>
                        
                        
                        <div class="row">
                           
                            <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputSeminarSeatNo" class="col-sm-4 control-label">No of Seats *</label>



                            <div class="col-sm-8">



                              


                              <select class="form-control" id="inputSeminarSeatNo" name="inputSeminarSeatNo"  required>



                                <option value="">Select your Seats</option>


                                <option   value="1">1</option>
                                <option   value="2">2</option>
                                <option   value="3">3</option>
                                <option   value="4">4</option>
                                <option   value="5">5</option>

                                </select>



                              


                            </div>



                          </div>



                        </div>
                        
                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputSeminarSeatType" class="col-sm-4 control-label">Seat Type *</label>



                            <div class="col-sm-8">



                              


                              <select class="form-control" id="inputSeminarSeatType" name="inputSeminarSeatType" required >



                            <option value="">Select your Prefered Seats</option>


                            <option   value="Basic Rs.80 per seat">Basic Rs.80 per seat</option>

                            <option value="Premium Rs.120 per seat">Premium Rs.120 per seat</option>
                            
                            <option value="Enterprise Rs.180 per seat">Enterprise Rs.180 per seat</option>

                            </select>



                              


                            </div>



                          </div>



                        </div>
                        
                        </div>
                        
                        
                      
                      <div class="form-group">



                        <div class="col-sm-offset-2 col-sm-4">



                          <button type="submit" class="btn btn-lg btn-success" name="seminarsubmission" value="Submit Now">Submit Now</button>



                        </div>
                        
                        <div class="col-sm-offset-2 col-sm-4">



                          <button type="button" onclick="formblock(1)" class="btn btn-lg btn-primary" value="close Now">Close Form</button>



                        </div>
                        
                        



                      </div>

                    </div>
                       
                        <!--Seminar Details-->
                        
                       
                       
                       
                     
                        
                       <!--<div id="sectionYogaCamp"> 
                        
                         
                      <div class="row">



                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputAge" class="col-sm-4 control-label">Age *</label>



                            <div class="col-sm-8">



                              


                              <select class="form-control" id="inputAge" name="inputAge"  >



<option value="">Select your Age</option>






<option   value="1">1</option>






<option   value="2">2</option>






<option   value="3">3</option>






<option   value="4">4</option>






<option   value="5">5</option>






<option   value="6">6</option>






<option   value="7">7</option>






<option   value="8">8</option>






<option   value="9">9</option>






<option   value="10">10</option>






<option   value="11">11</option>






<option   value="12">12</option>






<option   value="13">13</option>






<option   value="14">14</option>






<option   value="15">15</option>






<option   value="16">16</option>






<option   value="17">17</option>






<option   value="18">18</option>






<option   value="19">19</option>






<option   value="20">20</option>






<option   value="21">21</option>






<option   value="22">22</option>






<option   value="23">23</option>






<option   value="24">24</option>






<option   value="25">25</option>






<option   value="26">26</option>






<option   value="27">27</option>






<option   value="28">28</option>






<option   value="29">29</option>






<option   value="30">30</option>






<option   value="31">31</option>






<option   value="32">32</option>






<option   value="33">33</option>






<option   value="34">34</option>






<option   value="35">35</option>






<option   value="36">36</option>






<option   value="37">37</option>






<option   value="38">38</option>






<option   value="39">39</option>






<option   value="40">40</option>






<option   value="41">41</option>






<option   value="42">42</option>






<option   value="43">43</option>






<option   value="44">44</option>






<option   value="45">45</option>






<option   value="46">46</option>






<option   value="47">47</option>






<option   value="48">48</option>






<option   value="49">49</option>






<option   value="50">50</option>






<option   value="51">51</option>






<option   value="52">52</option>






<option   value="53">53</option>






<option   value="54">54</option>






<option   value="55">55</option>






<option   value="56">56</option>






<option   value="57">57</option>






<option   value="58">58</option>






<option   value="59">59</option>






<option   value="60">60</option>






<option   value="61">61</option>






<option   value="62">62</option>






<option   value="63">63</option>






<option   value="64">64</option>






<option   value="65">65</option>






<option   value="66">66</option>






<option   value="67">67</option>






<option   value="68">68</option>






<option   value="69">69</option>






<option   value="70">70</option>






<option   value="71">71</option>






<option   value="72">72</option>






<option   value="73">73</option>






<option   value="74">74</option>






<option   value="75">75</option>






<option   value="76">76</option>






<option   value="77">77</option>






<option   value="78">78</option>






<option   value="79">79</option>






<option   value="80">80</option>






<option   value="81">81</option>






<option   value="82">82</option>






<option   value="83">83</option>






<option   value="84">84</option>






<option   value="85">85</option>






<option   value="86">86</option>






<option   value="87">87</option>






<option   value="88">88</option>






<option   value="89">89</option>






<option   value="90">90</option>






<option   value="91">91</option>






<option   value="92">92</option>






<option   value="93">93</option>






<option   value="94">94</option>






<option   value="95">95</option>






<option   value="96">96</option>






<option   value="97">97</option>






<option   value="98">98</option>






<option   value="99">99</option>






<option   value="100">100</option>









</select>



                              


                            </div>



                          </div>



                        </div>



                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputGender" class="col-sm-4 control-label">Gender *</label>



                            <div class="col-sm-8">



                              <label class="radio-inline">



                                <input type="radio" name="inputGender" id="inlineRadio1" value="Male" > Male



                              </label>



                              <label class="radio-inline">



                                <input type="radio" name="inputGender" id="inlineRadio2"  value="Female"> Female



                              </label>



                            </div>



                            


                          </div>



                        </div>



                      </div>
                         
                         <div class="form-group ">



                        <label for="inputYogaProgramName" class="col-sm-2 control-label">Program Name *</label>



                        <div class="col-sm-10">

                          <select class="form-control" id="inputYogaProgramName" name="inputYogaProgramName"  >


                            <option value="">Select your Yoga Camp</option>
                            

                            <option  value="Stay Fit, Stay Healthy">Camp on Stay Fit, Stay Healthy</option>



                          </select>



                          


                        </div>



                      </div>
                        
                        <div class="row">
                           
                            <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputYogaCampLocation" class="col-sm-4 control-label">Location *</label>



                            <div class="col-sm-8">



                              


                              <select class="form-control" id="inputYogaCampLocation" name="inputYogaCampLocation"  >



                                <option value="">Select your Location</option>


                                <option   value="Mumbai">Mumbai</option>
                                <option   value="Delhi">Delhi</option>
                                <option   value="Kolakata">Kolkata</option>
                                

                                </select>



                              


                            </div>



                          </div>



                        </div>
                        
                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputYogaCampDuration" class="col-sm-4 control-label">Duration *</label>



                            <div class="col-sm-8">



                              


                              <select class="form-control" id="inputYogaCampDuration" name="inputYogaCampDuration"  >



                            <option value="">Select your Prefered Duration</option>


                            <option   value="3 Days">3 Days</option>

                            <option   value="7 Days">7 Days</option>

                            </select>



                              


                            </div>



                          </div>



                        </div>
                        
                        </div>
                            
                         
                         <div class="row">
                           
                            <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputYogaCampDate" class="col-sm-4 control-label">Start Date *</label>



                            <div class="col-sm-8">



                              


                              <select class="form-control" id="inputYogaCampDate" name="inputYogaCampDate"  >



                                <option value="">Select your Prefered Date</option>






                                <option   value="27th February">27th February(7 days)</option>






                                <option value="31st February">31st February(3 days)</option>


                                </select>



                              


                            </div>



                          </div>



                        </div>
                        
                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputYogaCampFood" class="col-sm-4 control-label">Food Choice *</label>



                            <div class="col-sm-8">



                              


                              <select class="form-control" id="inputYogaCampFood" name="inputYogaCampFood"  >



                            <option value="">Select your Prefered Food Choice</option>






                            <option   value="Veg">Veg</option>






                            <option value="Non Veg">Non Veg</option>





                            </select>



                              


                            </div>



                          </div>



                        </div>
                        
                        </div>
                        
                        
                        <div class="form-group ">



                        <label for="inputYogaCampDiseaseName" class="col-sm-4 control-label">Do you have any Disease? *</label>



                        <div class="col-sm-8">

                          <select class="form-control" id="inputYogaCampDiseaseName" name="inputYogaCampDiseaseName"  >


                            <option value="">Select your Disease</option>
                            

                            <option  value="Aasthma">Aasthma</option>
                            <option  value="Diabetes">Diabetes</option>
                            <option  value="High Blood Pressure">High Blood Pressure</option>
                            <option  value="Heart Disease">Heart Disease</option>
                            <option  value="Arthritis">Arthritis</option>
                            <option value="none">None of the Above</option>



                          </select>



                          


                        </div>



                      </div>
                      
                       
                       <div class="form-group ">


                            <label for="inputYogaCampMedicineName" class="col-sm-8 control-label">Do you have any Prescribed Medicine? *</label>



                            <div class="col-sm-4">



                              <label class="radio-inline">



                                <input type="radio" onclick="medicinerestriction(0)" name="inputYogaCampMedicineName" id="inlineRadio1" value="YES"> YES



                              </label>



                              <label class="radio-inline">



                                <input type="radio" onclick="medicinerestriction(1)" name="inputYogaCampMedicineName" id="inlineRadio2"  value="NO"> NO



                              </label>



                            </div>



                            


                          </div>



                      <div class="form-group" id="medicine_details">



                        <label for="inputRegarding" class="col-sm-2 control-label">Details *</label>



                        <div class="col-sm-10">



                          <textarea type="text" class="form-control" id="inputRegarding" name="inputYogaCampMedicineDetails" placeholder="Write your Medicine Names here."></textarea>



                          


                        </div>



                      </div>
                       

                      <div class="form-group ">


                            <label for="inputYogaCampFoodAllergyName" class="col-sm-8 control-label">Do you have any Dietary Restriction/Food Allergies? *</label>



                            <div class="col-sm-4">



                              <label class="radio-inline">



                                <input type="radio" onclick="foodrestriction(0)" name="inputYogaCampFoodAllergyName" id="inlineRadio1" value="YES"> YES



                              </label>



                              <label class="radio-inline">



                                <input type="radio" onclick="foodrestriction(1)" name="inputYogaCampFoodAllergyName" id="inlineRadio2"  value="NO"> NO



                              </label>



                            </div>



                            


                          </div>



                      <div class="form-group" id="food_allergy">



                        <label for="inputRegarding" class="col-sm-2 control-label">Details *</label>



                        <div class="col-sm-10" >



                          <textarea type="text" class="form-control" id="inputRegarding" name="inputYogaCampFoodAllergyDetails" placeholder="Write those food details here."></textarea>



                          


                        </div>



                      </div>
                       
                      
                        
                        
                      <div class="form-group">



                        <div class="col-sm-offset-2 col-sm-4">



                          <button type="submit" class="btn btn-lg btn-success" name="yogacampsubmission" value="Submit Now">Submit Now</button>



                        </div>
                        
                        <div class="col-sm-offset-2 col-sm-4">



                          <button type="button" onclick="formblock(1)" class="btn btn-lg btn-primary" value="Submit Now">Close Form</button>



                        </div>
                        
                        



                      </div>

                     </div>
                       -->
                        <!--Yoga Camp Details--> 
                        
                        
                        
                        
                              <div id="sectionBloodDonationCamp">
                       
                    <div class="row">



                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputAge" class="col-sm-4 control-label">Age *</label>



                            <div class="col-sm-8">



                              


                              <select class="form-control" id="inputAge" name="inputAge"  required>



<option value="">Select your Age</option>






<option   value="1">1</option>






<option   value="2">2</option>






<option   value="3">3</option>






<option   value="4">4</option>






<option   value="5">5</option>






<option   value="6">6</option>






<option   value="7">7</option>






<option   value="8">8</option>






<option   value="9">9</option>






<option   value="10">10</option>






<option   value="11">11</option>






<option   value="12">12</option>






<option   value="13">13</option>






<option   value="14">14</option>






<option   value="15">15</option>






<option   value="16">16</option>






<option   value="17">17</option>






<option   value="18">18</option>






<option   value="19">19</option>






<option   value="20">20</option>






<option   value="21">21</option>






<option   value="22">22</option>






<option   value="23">23</option>






<option   value="24">24</option>






<option   value="25">25</option>






<option   value="26">26</option>






<option   value="27">27</option>






<option   value="28">28</option>






<option   value="29">29</option>






<option   value="30">30</option>






<option   value="31">31</option>






<option   value="32">32</option>






<option   value="33">33</option>






<option   value="34">34</option>






<option   value="35">35</option>






<option   value="36">36</option>






<option   value="37">37</option>






<option   value="38">38</option>






<option   value="39">39</option>






<option   value="40">40</option>






<option   value="41">41</option>






<option   value="42">42</option>






<option   value="43">43</option>






<option   value="44">44</option>






<option   value="45">45</option>






<option   value="46">46</option>






<option   value="47">47</option>






<option   value="48">48</option>






<option   value="49">49</option>






<option   value="50">50</option>






<option   value="51">51</option>






<option   value="52">52</option>






<option   value="53">53</option>






<option   value="54">54</option>






<option   value="55">55</option>






<option   value="56">56</option>






<option   value="57">57</option>






<option   value="58">58</option>






<option   value="59">59</option>






<option   value="60">60</option>






<option   value="61">61</option>






<option   value="62">62</option>






<option   value="63">63</option>






<option   value="64">64</option>






<option   value="65">65</option>






<option   value="66">66</option>






<option   value="67">67</option>






<option   value="68">68</option>






<option   value="69">69</option>






<option   value="70">70</option>






<option   value="71">71</option>






<option   value="72">72</option>






<option   value="73">73</option>






<option   value="74">74</option>






<option   value="75">75</option>






<option   value="76">76</option>






<option   value="77">77</option>






<option   value="78">78</option>






<option   value="79">79</option>






<option   value="80">80</option>






<option   value="81">81</option>






<option   value="82">82</option>






<option   value="83">83</option>






<option   value="84">84</option>






<option   value="85">85</option>






<option   value="86">86</option>






<option   value="87">87</option>






<option   value="88">88</option>






<option   value="89">89</option>






<option   value="90">90</option>






<option   value="91">91</option>






<option   value="92">92</option>






<option   value="93">93</option>






<option   value="94">94</option>






<option   value="95">95</option>






<option   value="96">96</option>






<option   value="97">97</option>






<option   value="98">98</option>






<option   value="99">99</option>






<option   value="100">100</option>









</select>



                              


                            </div>



                          </div>



                        </div>



                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputGender" class="col-sm-4 control-label">Gender *</label>



                            <div class="col-sm-8">



                              <label class="radio-inline">



                                <input type="radio" name="inputGender" id="inlineRadio1" value="Male" > Male



                              </label>



                              <label class="radio-inline">



                                <input type="radio" name="inputGender" id="inlineRadio2"  value="Female"> Female



                              </label>



                            </div>



                            


                          </div>



                        </div>



                      </div>
                        
                        <div class="row">
                           
                            <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputBloodDonationCampBloodGroup" class="col-sm-4 control-label">Blood Group *</label>



                            <div class="col-sm-8">



                              


                              <select class="form-control" id="inputBloodDonationCampBloodGroup" name="inputBloodDonationCampBloodGroup"  required>



                                <option value="">Select your Blood Group</option>


                                <option   value="O+">O Positive (O+)</option>
                                <option value="A+">A Positive (A+)</option>
                                <option value="AB+">AB Positive (AB+)</option>
                                <option value="B+">B Positive (B+)</option>



                                </select>



                              


                            </div>



                          </div>



                        </div>
                        
                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputYogaCampFood" class="col-sm-12 control-label">* Negative Blood groups are not allowed to donate blood</label>


                          </div>



                        </div>
                        
                        </div>
                        
                         <div class="form-group">


                            <label for="inputBloodDonationCamp90Days" class="col-sm-8 control-label">Have you donated blood in last 90 Days? *</label>



                            <div class="col-sm-4">



                              <label class="radio-inline">



                                <input type="radio" onclick="buttonhide(0)" name="inputBloodDonationCamp90Days" id="inlineRadio1" value="YES"> YES



                              </label>



                              <label class="radio-inline">



                                <input type="radio"  onclick="buttonhide(1)" name="inputBloodDonationCamp90Days" id="inlineRadio2"  value="NO"> NO



                              </label>



                            </div>



                            


                          </div>
                          
                        <div class="form-group">



                        <label for="inputRegarding" class="col-sm-2 control-label">Chronic Disease *</label>



                        <div class="col-sm-10">



                          <textarea type="text" class="form-control" id="inputRegarding" name="inputBloodDonationCampDiseaseDetails"   placeholder="Write those Disease details here."  required></textarea>



                          


                        </div>



                      </div>
                       
                       <div class="form-group">


                            <label for="inputBloodDonationCampMedication" class="col-sm-8 control-label">Are you on any Medication? *</label>



                            <div class="col-sm-4">



                              <label class="radio-inline">



                                <input type="radio" onclick="medication(0)" name="inputBloodDonationCampMedication" id="inlineRadio1" value="YES"> YES



                              </label>



                              <label class="radio-inline">



                                <input type="radio" onclick="medication(1)" name="inputBloodDonationCampMedication" id="inlineRadio2"  value="NO"> NO



                              </label>



                            </div>



                            


                          </div>



                      <div class="form-group" id="medication_details">



                        <label for="inputRegarding" class="col-sm-2 control-label">Details *</label>



                        <div class="col-sm-10">



                          <textarea type="text" class="form-control" id="inputRegarding" name="inputBloodDonationCampMedicationDetails"   placeholder="Write those details here."></textarea>



                          


                        </div>



                      </div>
                        
                       <div class="form-group">



                        <div class="col-sm-offset-2 col-sm-4" id="button_feature">



                          <button type="submit" class="btn btn-lg btn-success" name="blooddonationsubmission" value="Submit Now">Submit Now</button>



                        </div>
                        
                        <div class="col-sm-offset-2 col-sm-4">



                          <button type="button" onclick="formblock(1)" class="btn btn-lg btn-primary">Close Form</button>



                        </div>
                        
                        



                      </div>                       
                        
                    </div>
                        <!--Blood Donation Camp Details-->
                        
                        
                        
                        
                        
                        
                        

                      </form>



                  </section>

    </div>
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
<footer class="text-center" >
  <a class="up-arrow" href="#carouselnew" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Hosting Theme<a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools"> Beautified Design</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#carouselnew']").on('click', function(event) {

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

<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/datepickerCustom.js"></script>

</body>
</html>