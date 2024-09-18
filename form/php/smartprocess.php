<?php
if (!isset($_SESSION)) session_start();
if (!$_POST) exit;
include dirname(__FILE__) . '/settings/settings.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guestname = strip_tags(trim($_POST["firstname"]));
    $lastname = strip_tags(trim($_POST["lastname"]));
    $type = $_POST['type'];
    $state = $_POST['state'];
    $CleaningType = $_POST["CleaningType"];
    $emailaddress = strip_tags(trim($_POST["email"]));
    $telephone = strip_tags(trim($_POST["phone"]));
    $adresse = strip_tags(trim($_POST["Address"]));
    $Squarefootage = strip_tags(trim($_POST["Squarefootage"]));
    $City = strip_tags(trim($_POST["City"]));
    $PostelCode = strip_tags(trim($_POST["PostelCode"]));

    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'umarazam286@gmail.com';                     //SMTP username
    $mail->Password   = 'ulxs tdga myvg wddv';                               //SMTP password
    $mail->SMTPSecure = 'ssl';          //Enable implicit TLS encryption
    $mail->Port       = 465;
    $mail->CharSet = "UTF-8";
    $mail->SetFrom('umarazam286@gmail.com', 'Cleanfreak');
    $mail->AddAddress('umarazam286@gmail.com', 'Cleanfreak');
    $mail->AddReplyTo($emailaddress, $guestname);
    $mail->IsHTML(true);
    $mail->Subject = 'Bewerbung von ' . $guestname;

    $mail->Body    = '<html>

		 
		 <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
			
			     
            	 <p>Form Type: ' . $type . '</p>
            	 <p>Name: ' . $guestname . $lastname . '</p>
				 <p>E-Mail: ' . $emailaddress . '</p>
				 <p>Telefonnummer: ' . $telephone . '</p>
				 <p>Straße inklusive Hausnummer : ' . $adresse . '</p>             
				 <p>PostelCode: ' . $PostelCode . '</p>             
				 <p>state: ' . $state . '</p>             
 
				
							 
				
			
		 </body>

		 </html>';
    $mail->send();
    if ($redirectForm == true) {
        echo '<script>setTimeout(function () { window.location.replace("' . $redirectForm_url . '") }, 1000); </script>';
    }
}
