<?php
$action = $_POST["action"];
if($action == "send_message")
{	
		$name = $_POST["name"];
		$email = $_POST["email"];
		$mobile = $_POST["phone"];
		$message = $_POST["message"];
		$subject1=$_POST["subject"];
		//////// Send mail to admin
			$to = 'gujcobank@yahoo.co.in';
			
			$from    = $email;
			$subject = 'New Enquiry from www.gmcbank.in';
			
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.$name.'<' .$from.'>'. "\r\n";
			$headers .= 'Reply-To: <'.$from . '>'."\r\n";
			$headers .= 'Return-Path: <'.$from.'>' . "\r\n";
			
			$body = 'Name: '.$name.'
			 <br />Email: '.$email.'
			 <br />Phone No: '.$mobile.'
			 <br /><br />Subject : '.$subject1.'
			 <br />Message: '.$message;
			
							 
			
			if(@mail($to, $subject, $body, $headers))
			{
				echo '<script language="javascript" type="text/javascript">alert("We thank you for the enquiry."); window.location="index.html";</script>';
			}
			else
			{
				echo '<script language="javascript" type="text/javascript">alert("Server error occured while processing your request. Please try again."); window.location="index.html";</script>';
			}
}

?>