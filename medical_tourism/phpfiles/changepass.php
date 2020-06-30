<?php
    
       session_start();
    if(!isset($_SESSION['id']))
		{
			header('location: ../index.php');
		}

?>
<?php
        include('../dbconfig/config.php');
        date_default_timezone_set('Asia/Kolkata');// change according timezone
        $currentTime = date( 'd-m-Y h:i:s A', time () );
        if(isset($_POST['entry_submit']))
        {
            $sql=mysqli_query($con"SELECT password FROM userinfo where password='".$_POST['cpass']."' && email='".$_SESSION['email']."'");
            $num=mysqli_fetch_array($sql);
            if($num>0)
            {
             $con=mysql_query("update userinfo set password='".$_POST['npass']."', updationDate='$currentTime' where username='".$_SESSION['email']."'");
            $_SESSION['msg1']="Password Changed Successfully !!";
            }
            else
            {
            $_SESSION['msg1']="Old Password not match !!";
            }
        }
?>