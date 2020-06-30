<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
   <script src="../js/login.js"></script>
    <style>
    
/*@import url('https://fonts.googleapis.com/css?family=Mukta');*/
 
/* devanagari */
@font-face {
  font-family: 'Mukta';
  font-style: normal;
  font-weight: 400;
  src: local('Mukta Regular'), local('Mukta-Regular'), url(https://fonts.gstatic.com/s/mukta/v5/iJWKBXyXfDDVXbnArXyi0A.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Mukta';
  font-style: normal;
  font-weight: 400;
  src: local('Mukta Regular'), local('Mukta-Regular'), url(https://fonts.gstatic.com/s/mukta/v5/iJWKBXyXfDDVXbnPrXyi0A.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Mukta';
  font-style: normal;
  font-weight: 400;
  src: local('Mukta Regular'), local('Mukta-Regular'), url(https://fonts.gstatic.com/s/mukta/v5/iJWKBXyXfDDVXbnBrXw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
body{
  font-family: 'Mukta', sans-serif;
	height:100vh;
	min-height:550px;
	background-image:url(adult-beautiful-beauty-915051.jpg);
	background-repeat: no-repeat;
	background-size:cover;
	background-position:center;
	position:relative;
    overflow-y: hidden;
}
a{
  text-decoration:none;
  color:#444444;
}
.login-reg-panel{
    position: relative;
    top: 50%;
    transform: translateY(-50%);
	text-align:center;
    width:70%;
	right:0;left:0;
    margin:auto;
    height:400px;
    background-color: rgba(30,30,30, 0.9);
}
.white-panel{
    background-color: rgba(255,255, 255, 1);
    height:500px;
    position:absolute;
    top:-50px;
    width:50%;
    right:calc(50% - 50px);
    transition:.3s ease-in-out;
    z-index:0;
}
.login-reg-panel input[type="radio"]{
    position:relative;
    display:none;
}
.login-reg-panel{
    color:#B8B8B8;
}
.login-reg-panel #label-login, 
.login-reg-panel #label-register{
    border:1px solid #9E9E9E;
    padding:0 5px;
    width:150px;
    display:block;
    text-align:center;
    border-radius:3px;
    cursor:pointer;
}
.login-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    left:0;
    position:absolute;
    text-align:left;
}
.register-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    right:0;
    position:absolute;
    text-align:left;
    
}
.right-log{right:50px !important;}

.login-show, 
.register-show{
    z-index: 1;
    display:none;
    opacity:0;
    transition:0.3s ease-in-out;
    color:#242424;
    text-align:left;
    padding:50px;
}
.show-log-panel{
    display:block;
    opacity:0.9;
}
.login-show input[type="email"], .login-show input[type="password"]{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.login-show button {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.login-show a{
    display:inline-block;
    padding:10px 0;
}

.register-show input[type="email"], .register-show input[type="password"]{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.register-show button {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.credit {
    position:absolute;
    bottom:10px;
    left:10px;
    color: #3B3B25;
    margin: 0;
    padding: 0;
    font-family: Arial,sans-serif;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 1px;
    z-index: 99;
}
a{
  text-decoration:none;
  color:#eaeaea;
}
    
    
    
    </style>
</head>
<body>
     
  	<div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<p>Click Below Fast</p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<p>Register and Connect With Us</p>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
						
		<div class="white-panel">
			<div class="login-show">
			    <form action="../phpfiles/loginregister.php" name="emailpwd" method="post" onSubmit="return validemailpwd();">	
				<h2>LOGIN</h2>
				<input type="email" name="email" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
				<a href="">Forgot password?</a>
                <button type="submit" name="login_btn">Login</button>
                </form>
			</div>
			<div class="register-show">
			    <form action="../phpfiles/loginregister.php" name="chngpwd" method="post" onSubmit="return valid();">
				<h2>REGISTER</h2>
				<input type="email" name="email" placeholder="Email" pattern = "^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$">
				<input type="password" name="password" placeholder="Password">
				<input type="password" name="cpassword" placeholder="Confirm Password">
				<button type="submit" name="register_btn">Register</button>
				</form>
			</div>
		</div>
		
	</div>
	
  <script>
    $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
  
</script>
    <script type="text/javascript">
        function valid()
        {
        if(document.chngpwd.email.value=="")
        {
        alert("Email Filed is Empty !!");
        document.chngpwd.email.focus();
        return false;
        }
        else if(document.chngpwd.password.value=="")
        {
        alert("Password Filed is Empty !!");
        document.chngpwd.password.focus();
        return false;
        }
        else if(document.chngpwd.cpassword.value=="")
        {
        alert("Confirm Password Filed is Empty !!");
        document.chngpwd.cpassword.focus();
        return false;
        }
        else if(document.chngpwd.password.value!= document.chngpwd.cpassword.value)
        {
        alert("Password and Confirm Password Field do not match  !!");
        document.chngpwd.cpassword.focus();
        return false;
        }
        return true;
        }
    </script>
    
     <script type="text/javascript">
        function validemailpwd()
        {
            if(document.emailpwd.email.value=="")
            {
            alert("Email Filed is Empty !!");
            document.emailpwd.email.focus();
            return false;
            }
            else if(document.emailpwd.password.value=="")
            {
            alert("Password Filed is Empty !!");
            document.emailpwd.password.focus();
            return false;
            }
            return true;
        }
    </script>

</body>
</html>