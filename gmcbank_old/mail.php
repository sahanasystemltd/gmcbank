<?php
session_start();
$action = $_POST["action"];
$email = $_POST["email"];

if($action == "send_message" && !empty($email) && $_POST['t1'] == $_SESSION['my_captcha'])
{	
		$name = $_POST["name"];
		$email = $_POST["email"];
		$mobile = $_POST["phone"];
		$message = $_POST["message"];
		//////// Send mail to admin
			$to = 'gujcobank@yahoo.co.in';
			
// 			$to = 'ankitpatelphoenix@gmail.com';
			$from    = $email;
			$subject = 'New Enquiry from Gujarat Mercantile Co-operative Bank ltd. ';
			
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.$name.'<' .$from.'>'. "\r\n";
			$headers .= 'Reply-To: <'.$from . '>'."\r\n";
			$headers .= 'Return-Path: <'.$from.'>' . "\r\n";
			$headers .= 'Cc: info@gmcbank.in' . "\r\n";
			
			$body = 'Name: '.$name.'
			 <br />Email: '.$email.'
			 <br />Phone No: '.$mobile.'
			 <br />Message: '.$message;
						 
			if(@mail($to, $subject, $body, $headers))
			{
				echo '<script language="javascript" type="text/javascript">alert("We thank you for the enquiry."); window.location="contact-us.html";</script>';
			}
			else
			{
				echo '<script language="javascript" type="text/javascript">alert("Server error occured while processing your request. Please try again."); window.location="contact-us.html";</script>';
			}
}
else {
    echo '<script language="javascript" type="text/javascript">alert("Wrong Captcha. Please try again."); window.location="contact-us.html";</script>';
}

unset($_SESSION['my_captcha']);

?>