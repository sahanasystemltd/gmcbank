<?php
$name = $_POST['enquiryName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$msg = $_POST['message'];

$to_email = 'fd@gmcbank.in';
$subject = 'Enquiry for Fixed Deposit';


$message = '<html><body>';
$message .= '<h1>Enquiry for Fixed Deposit</h1>';
$message .= '</body></html>';
$message .= '<table rules="all" style="border-color: #666;" >';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($phoneNumber) . "</td></tr>";
$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($msg) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

$headers = "From:".$email."\r\n";
$headers .= 'Cc: gujcobank@yahoo.co.in' . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";
$result = mail($to_email,$subject,$message,$headers);
if(!$result) {   
    echo "Error";   
} else {
    header("Location: https://gmcbank.in/gmcfd/kamlesh-k-modekar");
}
?>