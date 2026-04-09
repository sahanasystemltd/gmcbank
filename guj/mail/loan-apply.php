<?php
//include("../../dbconfig.php");
session_start();
//print_r($_POST);exit;
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$massage = $_POST['message'];

$_SESSION["username"] = $_POST['name'];

//print_r($_POST); exit();
if (!session_id()) {
    session_start();
}
error_reporting(0);


//$qeury = "INSERT INTO `contact_master`(`id`, `name`, `email`, `phone`, `country`, `msg`) VALUES ('','$name','$email','$phone','$country','$massage')";

//$result1 = mysqli_query($con, $qeury);

$emailtemplate = '';

$email_subject = 'Mail from : "Apply For Loan"';
$msg = '<table class="table_full editable-bg-color bg_color_e6e6e6 editable-bg-image" bgcolor="#e6e6e6" width="100%" align="center"  mc:repeatable="castellab" mc:variant="Header" cellspacing="0" cellpadding="0" border="0">
        <!-- header -->
        <tr>
            <td>
                <!-- container -->
                <table class="table1 editable-bg-color bg_color_303f9f" bgcolor="#373435" width="600" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
                    <!-- padding-top -->
                    <tr><td height="25"></td></tr>
                    <tr>
                        <td>
                            <!-- Inner container -->
                            <table class="table1" width="520" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
                                <!-- horizontal gap -->
                                <tr><td height="60"></td></tr>

                                <tr>
                                    <td align="center">
                                        <div class="editable-img">
                                            <img editable="true" mc:edit="image003" src="https://www.oceanstechnologies.com/ahmoceans/gmcbank_live/images/Gujarat_Mercantile_Bank_Logo-03_white_footer.png"  style="display:block; line-height:0; font-size:0; border:0;" border="0" alt="" />
                                        </div>
                                    </td>
                                </tr>

                                <!-- horizontal gap -->
                                <tr><td height="40"></td></tr>

                                <tr>
                                    <td mc:edit="text001" align="center" class="text_color_ffffff" style="color: #ffffff; font-size: 30px; font-weight: 700; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;">
                                        <div class="editable-text">
                                            <span class="text_container">
                                                <multiline>Loan Apply</multiline>
                                            </span>
                                        </div>
                                    </td>
                                </tr>

                                <!-- horizontal gap -->
                                <tr><td height="30"></td></tr>

                                
                            </table><!-- END inner container -->
                        </td>
                    </tr>
                    <!-- padding-bottom -->
                    <tr><td height="60"></td></tr>
                </table><!-- END container -->
            </td>
        </tr>
        
        <!-- body -->
        <tr>
            <td>
                <!-- container -->
                <table class="table1 editable-bg-color bg_color_ffffff" bgcolor="#ffffff" width="600" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
                    <!-- padding-top -->
                    <tr><td height="60"></td></tr>

                    <tr>
                        <td>
                            <!-- inner container -->
                            <table class="table1" width="520" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
                                
                                <!-- horizontal gap -->
                                


                                <!-- horizontal gap -->
                                
                                
                                <!-- table -->
                                <tr>
                                    <td>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-radius: 10px">
                                            
                                            <!-- list of products -->
                                            <tr>
                                                <td style="border-top: 1px solid #e6e6e6;border-right: 1px solid #e6e6e6;border-left: 1px solid #e6e6e6;border-bottom: 1px solid #e6e6e6; padding-right: 30px; padding-left:30px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <!-- product-item -->
                                                        <tr>
                                                            <td width="100%" style="border-bottom: 1px solid #e6e6e6; padding-top: 30px;">
                                                                <!-- column-1  -->
                                                                <table class="table1-3" width="80" align="left" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td align="center">
                                                                            <label style="font-size: 15px;">Name</label>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- margin-bottom -->
                                                                    <tr><td height="30"></td></tr>
                                                                </table><!-- END column-1 -->

                                                                <!-- vertical gap -->
                                                                <table class="tablet_hide" width="20" align="left" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr><td height="1"></td></tr>
                                                                </table>

                                                                <!-- column-2  -->
                                                                <table class="table1-3" width="210" align="left" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td mc:edit="text006" align="left" class="center_content text_color_282828" style="color: #282828; font-size: 13px;line-height: 1.5; font-weight: 700; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;">
                                                                            <div class="editable-text" style="line-height: 1.5;">
                                                                                <span class="text_container">
                                                                                    <multiline>' . $name . '</multiline>
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <!-- horizontal gap -->
                                                                    <tr><td height="10"></td></tr>

                                                                    
                                                                    <!-- margin-bottom -->
                                                                    <tr><td height="30"></td></tr>
                                                                </table><!-- END column-2 -->


                                                                <!-- column-3  -->
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" style="border-bottom: 1px solid #e6e6e6; padding-top: 30px;">
                                                                <!-- column-1  -->
                                                                <table class="table1-3" width="80" align="left" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td align="center">
                                                                            <label style="font-size: 15px;">Email</label>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- margin-bottom -->
                                                                    <tr><td height="30"></td></tr>
                                                                </table><!-- END column-1 -->

                                                                <!-- vertical gap -->
                                                                <table class="tablet_hide" width="20" align="left" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr><td height="1"></td></tr>
                                                                </table>

                                                                <!-- column-2  -->
                                                                <table class="table1-3" width="210" align="left" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td mc:edit="text006" align="left" class="center_content text_color_282828" style="color: #282828; font-size: 13px;line-height: 1.5; font-weight: 700; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;">
                                                                            <div class="editable-text" style="line-height: 1.5;">
                                                                                <span class="text_container">
                                                                                    <multiline>' . $email . '</multiline>
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <!-- horizontal gap -->
                                                                    <tr><td height="10"></td></tr>

                                                                    
                                                                    <!-- margin-bottom -->
                                                                    <tr><td height="30"></td></tr>
                                                                </table><!-- END column-2 -->


                                                                <!-- column-3  -->
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" style="border-bottom: 1px solid #e6e6e6; padding-top: 30px;">
                                                                <!-- column-1  -->
                                                                <table class="table1-3" width="80" align="left" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td align="center">
                                                                            <label style="font-size: 15px;">Contact</label>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- margin-bottom -->
                                                                    <tr><td height="30"></td></tr>
                                                                </table><!-- END column-1 -->

                                                                <!-- vertical gap -->
                                                                <table class="tablet_hide" width="20" align="left" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr><td height="1"></td></tr>
                                                                </table>

                                                                <!-- column-2  -->
                                                                <table class="table1-3" width="210" align="left" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td mc:edit="text006" align="left" class="center_content text_color_282828" style="color: #282828; font-size: 13px;line-height: 1.5; font-weight: 700; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;">
                                                                            <div class="editable-text" style="line-height: 1.5;">
                                                                                <span class="text_container">
                                                                                    <multiline>+91 ' . $phone . '</multiline>
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <!-- horizontal gap -->
                                                                    <tr><td height="10"></td></tr>

                                                                    
                                                                    <!-- margin-bottom -->
                                                                    <tr><td height="30"></td></tr>
                                                                </table><!-- END column-2 -->


                                                                <!-- column-3  -->
                                                                
                                                            </td>
                                                        </tr>
                                                      
                                                        <tr>
                                                            <td width="100%" style="border-bottom: 1px solid #e6e6e6; padding-top: 30px;">
                                                                <!-- column-1  -->
                                                                <table class="table1-3" width="80" align="left" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td align="center">
                                                                            <label style="font-size: 15px;">Message</label>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- margin-bottom -->
                                                                    <tr><td height="30"></td></tr>
                                                                </table><!-- END column-1 -->

                                                                <!-- vertical gap -->
                                                                <table class="tablet_hide" width="20" align="left" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr><td height="1"></td></tr>
                                                                </table>

                                                                <!-- column-2  -->
                                                                <table class="table1-3" width="210" align="left" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td mc:edit="text006" align="left" class="center_content text_color_282828" style="color: #282828; font-size: 13px;line-height: 1.5; font-weight: 700; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;">
                                                                            <div class="editable-text" style="line-height: 1.5;">
                                                                                <span class="text_container">
                                                                                    <multiline>' . $massage . '</multiline>
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <!-- horizontal gap -->
                                                                    <tr><td height="10"></td></tr>

                                                                    
                                                                    <!-- margin-bottom -->
                                                                    <tr><td height="30"></td></tr>
                                                                </table><!-- END column-2 -->


                                                                <!-- column-3  -->
                                                                
                                                            </td>
                                                        </tr>                                                                                                                                                                        
                                                        <!-- product-item -->
                                                        
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                            </table><!-- END inner container -->
                        </td>
                    </tr>

                    <!-- padding-bottom -->
                    <tr><td height="60"></td></tr>
                </table><!-- END container -->
            </td>
        </tr>
        <!-- footer -->
    </table><!-- END wrapper -->';

$from_o = "info@gmcbank.in";
$headers = "From:" . $from_o . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";

$to1 = "paresh.d.oceans@gmail.com";
//    $to = "mack@oceanstechnologies.com";
//    $to2 = "chahak@oceanstechnologies.com";

//    mail($to, $email_subject, $msg, $headers);
@mail($to1, $email_subject, $msg, $headers);
//    mail($to2, $email_subject, $msg, $headers);
$msgThank = '<table class="table_full editable-bg-color bg_color_e6e6e6 editable-bg-image" bgcolor="#e6e6e6" width="100%" align="center" mc:repeatable="castellab" mc:variant="Header" cellspacing="0" cellpadding="0" border="0">
    <!-- header -->
    <tr>
        <td>
            <!-- container -->
            <table class="table1 editable-bg-color bg_color_303f9f" bgcolor="#373435" width="600" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
                <!-- padding-top -->
                <tr>
                    <td height="25"></td>
                </tr>
                <tr>
                    <td>
                        <!-- Inner container -->
                        <table class="table1" width="520" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
                            <!-- horizontal gap -->
                            <tr>
                                <td height="60"></td>
                            </tr>

                            <tr>
                                <td align="center">
                                    <div class="editable-img">
                                        <img editable="true" mc:edit="image003" src="https://www.oceanstechnologies.com/ahmoceans/gmcbank_live/images/Gujarat_Mercantile_Bank_Logo-03_white_footer.png" style="display:block; line-height:0; font-size:0; border:0;" border="0" alt=""/>
                                    </div>
                                </td>
                            </tr>

                            <!-- horizontal gap -->
                            <tr>
                                <td height="40"></td>
                            </tr>

                            <tr>
                                <td mc:edit="text001" align="center" class="text_color_ffffff" style="color: #ffffff; font-size: 30px; font-weight: 700; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;">
                                    <div class="editable-text">
                                        <span class="text_container">
                                            <multiline>
                                                Thank You !
                                            </multiline>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <!-- horizontal gap -->
                            <tr>
                                <td height="30"></td>
                            </tr>
                        </table><!-- END inner container -->
                    </td>
                </tr>
                <!-- padding-bottom -->
                <tr>
                    <td height="60"></td>
                </tr>
            </table><!-- END container -->
        </td>
    </tr>

    <!-- body -->
    <tr>
        <td>
            <!-- container -->
            <table class="table1 editable-bg-color bg_color_ffffff" bgcolor="#ffffff" width="600" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
                <!-- padding-top -->
                <tr>
                    <td height="60"></td>
                </tr>

                <tr>
                    <td>
                        <!-- inner container -->
                        <table class="table1" width="520" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">

                            <tr>
                                <td mc:edit="text003" align="left" class="center_content text_color_282828" style="color: #282828; font-size: 18px; font-weight: 700; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;">
                                    <div class="editable-text">
                                        <span class="text_container">
                                            <multiline>
                                                Hello ' . $name . ',
                                            </multiline>
                                        </span>
                                    </div>
                                </td>
                            </tr>

                            <!-- horizontal gap -->
                            <tr>
                                <td height="10"></td>
                            </tr>

                            <tr>
                                <td mc:edit="text004" align="left" class="center_content text_color_282828" style="color: #282828; font-size: 14px;line-height: 2; font-weight: 500; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;">
                                    <div class="editable-text" style="line-height: 2;">
                                        <span class="text_container">
                                            <multiline>
                                                Greetings, Thank you for contacting us. We will reach you in short period of time.
                                            </multiline>
                                        </span>
                                    </div>
                                </td>
                            </tr>

                            <!-- horizontal gap -->
                            <tr>
                                <td height="50"></td>
                            </tr>

                        </table><!-- END inner container -->
                    </td>
                </tr>
                <!-- padding-bottom -->
                <tr>
                    <td height="30"></td>
                </tr>
            </table><!-- END container -->
        </td>
    </tr>

    <!-- footer -->
    <tr>
        <td>
            <!-- container -->
            <table class="table1" width="600" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
                <!-- padding-top -->
                <tr>
                    <td height="20"></td>
                </tr>

                <tr>
                    <td>
                        <!--  column-1 -->
                        <table class="table1-2" width="350" align="left" border="0" cellspacing="0" cellpadding="0">



                            <tr>
                                <td mc:edit="text012" align="left" class="center_content" style="font-size: 14px;font-weight: 400; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;">
                                    <div class="editable-text">
                                        <span class="text_container">
                                            <multiline>
                                                <span  class="text_color_929292" style="color:#082d2f; text-decoration: none;">Regards, <br>Management Dept. , Gujarat Mercantile Co-Operative Bank <br> Ph: 079-25397610,25399754 | <a href="http://gmcbank.in/">www.gmcbank.in</a> Panchali Apartments, Opposite Cadila Laboratory, Ghodasar, Ahmedabad – 380050</span>
                                            </multiline>
                                        </span>
                                    </div>
                                </td>
                            </tr>

                            <!-- horizontal gap -->
                            <tr>
                                <td height="10"></td>
                            </tr>


                            <!-- margin-bottom -->
                            <tr>
                                <td height="30"></td>
                            </tr>
                        </table><!-- END column-1 -->

                        <!-- vertical gap -->
                        <table class="tablet_hide" width="130" align="left" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="1"></td>
                            </tr>
                        </table>

                        <!-- column-2  -->
                        <table class="table1-2" width="120" align="right" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <t
                                </td>
                            </tr>
                            <!-- margin-bottom -->
                            <tr>
                                <td height="30"></td>
                            </tr>
                        </table><!-- END column-2 -->
                    </td>
                </tr>

                <!-- padding-bottom -->
                <tr>
                    <td height="70"></td>
                </tr>
            </table><!-- END container -->
        </td>
    </tr>
</table>';

$email_subject = 'Gujarat Mercantile Co-operative Bank Support';
$from_o = " info@gmcbank.in";
$headers = "From:" . $from_o . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";
@mail($email, $email_subject, $msgThank, $headers);

header("Location: http://gmcbank.in/guj/");

exit;

?>

