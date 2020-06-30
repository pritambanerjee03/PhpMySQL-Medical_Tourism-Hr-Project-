<?php
                            include('../dbconfig/config.php');
                            if (isset($_POST['A1'])) 
                                $query="select * from doctorlist where id = 'A1'";
                            else if (isset($_POST['A2'])) 
                                $query="select * from doctorlist where id = 'A2'";
                            else if (isset($_POST['A3'])) 
                                $query="select * from doctorlist where id = 'A3'";
                            else if (isset($_POST['A4'])) 
                                $query="select * from doctorlist where id = 'A4'";

                            else if (isset($_POST['B1'])) 
                                $query="select * from doctorlist where id = 'B1'";
                            else if (isset($_POST['B2'])) 
                                $query="select * from doctorlist where id = 'B2'";
                            else if (isset($_POST['B3'])) 
                                $query="select * from doctorlist where id = 'B3'";
                            else if (isset($_POST['B4'])) 
                                $query="select * from doctorlist where id = 'B4'";
                            
                            else if (isset($_POST['C1'])) 
                                $query="select * from doctorlist where id = 'C1'";
                            else if (isset($_POST['C2'])) 
                                $query="select * from doctorlist where id = 'C2'";
                            else if (isset($_POST['C3'])) 
                                $query="select * from doctorlist where id = 'C3'";
                            else if (isset($_POST['C4'])) 
                                $query="select * from doctorlist where id = 'C4'";

                            else if (isset($_POST['D1'])) 
                                $query="select * from doctorlist where id = 'D1'";
                            else if (isset($_POST['D2'])) 
                                $query="select * from doctorlist where id = 'D2'";
                            else if (isset($_POST['D3'])) 
                                $query="select * from doctorlist where id = 'D3'";
                            else if (isset($_POST['D4'])) 
                                $query="select * from doctorlist where id = 'D4'";

                            else if (isset($_POST['E1'])) 
                                $query="select * from doctorlist where id = 'E1'";
                            else if (isset($_POST['E2'])) 
                                $query="select * from doctorlist where id = 'E2'";
                            else if (isset($_POST['E3'])) 
                                $query="select * from doctorlist where id = 'E3'";
                            else if (isset($_POST['E4'])) 
                                $query="select * from doctorlist where id = 'E4'";

                            else if (isset($_POST['F1'])) 
                                $query="select * from doctorlist where id = 'F1'";
                            else if (isset($_POST['F2'])) 
                                $query="select * from doctorlist where id = 'F2'";
                            else if (isset($_POST['F3'])) 
                                $query="select * from doctorlist where id = 'F3'";
                            else if (isset($_POST['F4'])) 
                                $query="select * from doctorlist where id = 'f4'";



                                    $query_run=mysqli_query($con,$query);

                                    if($query_run)
                                    {

                                    $row=mysqli_fetch_array($query_run);
                                    $doc_name=$row['docname'];
                                    $speciality=$row['speciality'];
                                    $hospital_name=$row['hospital_name'];
                                    }
                             
                            
?>



<!DOCTYPE html>
<html lang="en">
<head>


  <meta charset="utf-8">
    <meta http-equiv="X-UB-Compatible" content="IE=edge">
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
                <h1><strong>Our Doctors</strong></h1>
              </div>
          </div>
        </div>
      </div>
      
      
      

<div class="row padTop20 padBottom50 clearfix">



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



                    <legend>Fill up the form to <strong>Make an Appointment with Us</strong></legend>

			        <strong>Note:</strong>

			<ul class="marBottom25">

 				<li>This is an appointment request only<br>Depending on the availability of the consultant, appointment will be confirmed to you through mail/call</li>

 				<li>The appointment requests can be made minimum 48 hrs in advance</li>
 				
			</ul>



                    <form class="form-horizontal" id="appointmentForm" name="appointmentForm" action="../phpfiles/appointment.php" method="POST" enctype="">



                    <div class="clearfix text-right marBottom25">



                      <p class="text-danger">* <i>marked fields are Mandatory.</i></p>



                    </div>



                      <div class="form-group  ">



                        <label for="inputName" class="col-sm-2 control-label">Patient Name *</label>



                        <div class="col-sm-10">



                          <input type="text" class="form-control" id="inputName" pattern="[a-zA-Z ]+" name="inputName" placeholder="Your full name" title="Only Alphabate &amp; Space allowed" value="" required>



                          


                        </div>



                      </div>



                      <div class="row">



                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputAge" class="col-sm-4 control-label">Age *</label>



                            <div class="col-sm-8">



                              


                              <select class="form-control" id="inputAge" name="inputAge">



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



                                <input type="radio" name="inputGender" id="inlineRadio1" value="Male"  required> Male



                              </label>



                              <label class="radio-inline">



                                <input type="radio" name="inputGender" id="inlineRadio2"  value="Female"> Female



                              </label>



                            </div>



                            


                          </div>



                        </div>



                      </div>



                      <div class="form-group ">



                        <label for="inputRegarding" class="col-sm-2 control-label">Address</label>



                        <div class="col-sm-10">



                          <textarea type="text" class="form-control" id="inputRegarding" name="inputAddress" placeholder="Write your Address here."></textarea>



                          


                        </div>



                      </div>



                      <div class="row">



                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputDate" class="col-sm-4 control-label">Preferred Date *</label>



                            <div class="col-sm-8">



                              <div class="input-group date">



                                <input type="text" class="form-control" id="inputDate" name="inputDate" placeholder="Format: DD-MMM-YYYY" value=""required >



                                <div class="input-group-addon">



                                    <span class="glyphicon glyphicon-calendar"></span>



                                </div>



                              </div>



                              


                            </div>



                          </div>



                        </div>



                        <div class="col-sm-6">



                          


                          <p>&nbsp;</p>



                        </div>



                      </div>



                      <div class="form-group ">



                        <label for="inputSpeciality" class="col-sm-2 control-label">Department *</label>



                        <div class="col-sm-10">



                        


                          



                          <select class="form-control" id="inputSpeciality" name="inputSpeciality" required readonly>


                            <option value="<?php echo $speciality ?>">Department of <?php echo $speciality ?></option>
                            
                           <!-- <option value="">Select Department</option>



                            


                              


                            <option  value="43">CMRI Department of Cardiology</option>



                            


                              


                            <option  value="44">CMRI Department of CTVS</option>



                            


                              


                            <option  value="45">CMRI Department of Dermatology</option>



                            


                              


                            <option  value="47">CMRI Department of Gynae. Oncology</option>



                            


                              


                            <option  value="48">CMRI Department of Haematology</option>



                            


                              


                            <option  value="49">CMRI Department of Oncology</option>



                            


                              


                            <option  value="51">CMRI Department of Neuro Psychiatry</option>



                            


                              


                            <option  value="52">CMRI Department of Clinical Psychology</option>



                            


                              


                            <option  value="54">CMRI Department of Sports Medicine</option>



                            


                              


                            <option  value="55">CMRI Department of Infection Medicine</option>



                            


                              


                            <option  value="56">CMRI Department of Surgical Oncology</option>



                            


                              


                            <option  value="12">CMRI Department of Gastro Sciences</option>



                            


                              


                            <option  value="7">CMRI Department of Neurosciences</option>



                            


                              


                            <option  value="17">CMRI Department of Plastic, Reconstructive &amp; Hand Surgery</option>



                            


                              


                            <option  value="14">CMRI Department of Renal Sciences</option>



                            


                              


                            <option  value="13">CMRI Department of Orthopaedics &amp; Joint Replacement</option>



                            


                              


                            <option  value="21">CMRI Department of Obstetrics and Gynaecology</option>



                            


                              


                            <option  value="10">CMRI Department of Obesity &amp; Diabetic Surgery (Bariatric)</option>



                            


                              


                            <option  value="16">CMRI Department of Radiology</option>



                            


                              


                            <option  value="29">CMRI Department of Intervention Radiology</option>



                            


                              


                            <option  value="22">CMRI Department of Audiology and Speech Therapy</option>



                            


                              


                            <option  value="4">CMRI Department of Dental Sciences</option>



                            


                              


                            <option  value="5">CMRI Department of Otolaryngology (ENT)</option>



                            


                              


                            <option  value="Medicine">Department of Medicine</option> 



                            


                              


                            <option  value="Cardiology">Department of Cardiology</option>



                            


                              


                            <option  value="Neuro-Science">Department of Neuro-Science</option>



                            


                              


                            <option  value="Dermatology">Department of Dermatology</option>



                            


                              


                            <option  value="Gastro-Sciences">Department of Gastro-Sciences</option>



                            


                              


                            <option  value="Gynae-Oncology">Department of Gynae-Oncology</option>


                            -->
                            


                          </select>



                          


                        </div>



                      </div>



                      <div class="form-group">



                        <label for="inputDoctor" class="col-sm-2 control-label">Preferred Doctor*</label>



                        <div class="col-sm-10">



                          


                          <select class="form-control" id="inputDoctor" name="inputDoctor" readonly>



                            <!--<option value="docname">Select a Doctor of your choice (if any)</option>-->
                            <option value="<?php echo $doc_name ?>"><?php echo $doc_name ?></option>


                           


                          </select>



                        </div>



                      </div>
                      
                      <div class="form-group">



                        <label for="inputHospital" class="col-sm-2 control-label">Preferred Hospital*</label>



                        <div class="col-sm-10">



                          


                          <select class="form-control" id="inputHospital" name="inputHospital" readonly>



                            <!--<option value="docname">Select a Doctor of your choice (if any)</option>-->
                            <option value="<?php echo $hospital_name ?>"><?php echo $hospital_name ?></option>


                           


                          </select>



                        </div>



                      </div>



                      <div class="row">



                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputMobile" class="col-sm-4 control-label">Mobile no *</label>



                            <div class="col-sm-8">



                              <input type="text" class="form-control" id="inputMobile" name="inputMobile" placeholder="Your Mobile no" maxlength="14" value="" required>



                              


                            </div>



                          </div>







                        </div>



                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputEmail" class="col-sm-4 control-label">Email Id *</label>



                            <div class="col-sm-8">



                              <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your valid Email Id" value="" required>



                              


                            </div>



                          </div>



                        </div>



                      </div>



                      <div class="row">



                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputTown" class="col-sm-4 control-label">City/Town *</label>



                            <div class="col-sm-8">



                              <input type="text" class="form-control" id="inputTown" name="inputTown" placeholder="Name of your Town/City" value="" required>



                              


                            </div>



                          </div>



                        </div>



                        <div class="col-sm-6">



                          <div class="form-group ">



                            <label for="inputCountry" class="col-sm-4 control-label">Country *</label>



                            <div class="col-sm-8">



                              <input type="text" class="form-control" id="inputCountry" name="inputCountry" placeholder="Your Country" value="" required >



                              


                            </div>



                          </div>



                        </div>



                      </div>



                      <!--<div class="form-group">



                        <div class="col-sm-offset-2 col-sm-10">



                          <input type="text" class="form-control" id="inputHoney" name="inputHoney">



                        </div>



                      </div>-->



                      <div class="form-group">



                        <div class="col-sm-offset-2 col-sm-10">



                          <button type="submit" class="btn btn-lg btn-success" name="appsubmission" value="Submit Now">Submit Now</button>



                        </div>



                      </div>



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
<footer class="text-center container">
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

<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/datepickerCustom.js"></script>

</body>
</html>