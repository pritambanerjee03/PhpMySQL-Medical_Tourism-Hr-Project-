<?php
session_start();

include('../../dbconfig/config.php');

$id = $_GET['id'];

$q = " SELECT * FROM `hotelappointment` INNER JOIN doctorappointment ON hotelappointment.docslno=doctorappointment.slno WHERE hotelappointment.slno = $id ";

$res=mysqli_query($con, $q);

$row = mysqli_fetch_array($res);

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Invoice with GST</title>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
  
  
      <link rel="stylesheet" href="invoice/css/style.css">

  
</head>

<body>

  <link rel="license" href="http://www.opensource.org/licenses/mit-license/">
<body id="form">
  <form>
    <header>
      <span>
        <img alt="logo" src="invoice/HMT%20Banner.png" class="center logo" id="logo" title="Mahindrakar Agency" draggable="false" style="-moz-user-select: none;">
        
      </span>
    </header>
	 
    <article class="invoicebody">
	    <div class="left_info">
	      <input type="text" class="clientDetails" id="company_name"  placeholder="Patient Name" value="<?php echo $row['name'];?>"><br>
	      <input type="text" class="clientDetails" id="customer_name" placeholder="Patient Address" value="<?php echo $row['address'];?>"><br>
	      <input type="text" class="clientDetails" id="occupation"    placeholder="Patient Address" value="<?php echo $row['town']." , ".$row['country'];?>"><br>
	      <input type="text" class="clientDetails" id="afm"           placeholder="Patient Contact No" value="<?php echo $row['mobile'];?>"><br>
	      <input type="text" class="clientDetails" id="doy"           placeholder="Patient Email" value="<?php echo $row['email'];?>">
		</div>
      <table class="meta" id="top_data_table">
         <tbody>
          <tr class="" id="invoice_number_row">
            <th class="bold"><span class="invoice" id="invoice">Appointment&nbsp;#</span></th> 
            <td id="time" hidden><?php echo $row['email'];?></td>
            <td><?php echo "HotelApp-".$id;?></td>
          </tr>

          <tr id="daterow">
            <th class="bold"><span class="date" id="date">Date</span></th>
            <td><span contenteditable=""><input type="date" id="theDate"></span></td>
          </tr>

          <!--<tr class="" id="total_block">
            <th class="bold"><span class="amount" id="amount">Ammout</span></th>
            <td><span id="prefix">&#8377;</span><span></span></td>
          </tr>-->

        </tbody>
      </table>
      <br><br>
	<div class="min_height">
      <table class="inventory">
        <thead>
          <tr>
            <th class="bold">
              <span class="item" id="item">Hotel Name</span>
            </th>
            <th class="bold">
              <span class="description" id="description">Check In</span>
            </th>
            <th class="bold">
              <span class="rate" id="rate">Check Out</span>
            </th>
            <th class="bold">
              <span class="quantity" id="quantity">Rooms & Guests</span>
            </th>
            <th class="bold">
              <span>Doctor App</span>
            </th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
             
              <span contenteditable><?php echo $row['hotel_name'];?></span>
            </td>
            <td >
              <span contenteditable><?php echo $row['check_in'];?></span>
              </td>
            <td>
              <span data-prefix><?php echo $row['check_out'];?></span>
              
            </td>
            <td>
              <span contenteditable><?php echo $row['rooms']." , ".$row['guests'];?></span>
            </td>
            
            <td>
              <p><?php echo $row['doc_app'];?></p>
            </td>
          </tr>
        </tbody>
      </table>
      
      <div class="left_btn">
      		<button class="mah_btn" onclick="myprint()">Print</button>
      		<button class="mah_btn"><a  href="../userprofile.php">Back</a></button>
      </div>
      <!--<div class="right_tax">
      <table class="balance" id="balance">
        <tbody>

          <tr>
            <th class="bold">
              <span class="subtotal" id="subtotal">Subtotal</span>
            </th>
            <td>
              <span>&#8377;</span><span>0.00</span>
            </td>
          </tr>

          <tr>
            <th class="bold">
              <span class="tax" id="tax" contenteditable="">Include GST&nbsp;</span>
              <span contenteditable="">12</span>%
            </th>
            <td>
              <span>&#8377;</span><span>0.00</span>
            </td>
          </tr>

          <tr>
            <th class="bold">
              <span class="total" id="total">Total</span>
            </th>
            <td>
              <span>&#8377; </span><span>0.00</span>
            </td>
          </tr>

        </tbody>
      </table> 
      </div> -->    
	</div>
    </article>
  </form>

<!--<div class="Signature">
	<ul>
		<li>Patient Signature</li>
		<li>Owner Signature</li>
	</ul>
</div>

<div class="marathi info">
	<p>उदगीर न्यायालय  अंतर्गत  </p>
		<p class="red" style="font-weight:700">नियम व अटी :</p>
		<p>१) शिलाई मशीनमध्ये खोबरे तेल व इतर चिकट ऑईल सोडू नये. जाम होते अशा वेळी चार्ज पडेल. </p>
		<p>२) मशीन दुरुस्तीसाठी घरी येणार नाही. मशीन दुरुस्ती फक्त दुकानात करून मिळेल. </p>
		<p>३) शिलाई मशीनची गॅरन्टी _______ वर्ष राहील.</p>
		<p>४) गॅरंटी काळात मशीनीचे फक्त पार्ट बदलून मिळेल. </p>
		<p>५) एकदा विकलेला माल परत घेतला जाणार नाही आणि बदली करून मिळणार नाही.  </p>
		<p>६) मी हा माल किंमत अटी व नियम तपासून खरेदी केलेला आहे. सर्व माल चांगल्या व चाली स्थितीत मिळाला त्याबद्दल कोणतीही तक्रार नाही. </p>
		<p>७) साटा व पाटा याची कुठलीही गॅरन्टी मिळणार नाही. </p>
		<p>८) मिशिनच्या कुठल्याही सामानाची तुटणे किंवा फुटणे गॅरंटीमध्ये येत नाही चार्ज पडेल. </p>
		<p>९) शिलाई मशीनच्या मोटारची ३ / ६ / १२ महिने वारंटी राहील. </p>
		<p class="red">१०) सोमवार सुट्टी. </p>
		<p class="red">११) कात्री हि वस्तु मशीनसोबत येत नाही. त्याचे वेगळे पैसे पडतील.</p>
		<p>&nbsp</p>
		<p style="font-weight:700">आमची महिंद्रकर या नावाने इतर कुठेही शाखा नाही. </p>
</div>-->
<script>

(function () {
    function checkTime(i) {
        return (i < 10) ? "0" + i : i;
    }

    function startTime() {
        var times = new Date(),
        
            hh = checkTime(times.getHours()),
            mm = checkTime(times.getMinutes()),
            ss = checkTime(times.getSeconds()),
            yy = checkTime(times.getFullYear().toString(10).substring(2, 4)),
            MM = checkTime(times.getMonth() + 1),
            dd = checkTime(times.getDate())
            ;
        document.getElementById('time').innerHTML = yy + "" + MM + "" + dd + "" + hh + "" + mm + "" + ss ;
        t = setTimeout(function () {
            startTime1()
        }, 500);
    }
    startTime();
})();

var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;


document.getElementById('theDate').value = today;
</script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

  

    <script  src="invoice/js/index.js"></script>




</body>

</html>



