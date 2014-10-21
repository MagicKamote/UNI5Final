<?php

require_once("..\PHPMailer-master\class.phpmailer.php");
require_once("..\PHPMailer-master\class.smtp.php");

$name = ($_POST['last_name']) . ', ';
$name .= ($_POST['first_name'] . ' ');
$name .= ($_POST['middle_name']);

$s_name = ($_POST['s_last_name']) . ', ';
$s_name .= ($_POST['s_first_name'] . ' ');
$s_name .= ($_POST['s_middle_name']);

$address = ($_POST['address']);
$zipcode = ($_POST['zipcode']);
$phone = ($_POST['phone']);
$email = ($_POST['email']);

$body = <<<EOD
Name: $name <br>
Spouse Name: $s_name <br>
Address: $address <br>
Zipcode: $zipcode <br>
Email: $email <br>
Phone: $phone
EOD;

// echo "Fullname: " . $name;
// echo "<br>";
// echo "Spouse Fullname: " . $s_name;
// echo "<br>";
// echo "Address: " . $address;
// echo "<br>";
// echo "Zipcode: " . $zipcode;
// echo "<br>";
// echo "Phone: " . $phone;
// echo "<br>";
// echo "Email: " . $email;

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = "ssl"; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // 587 or 465
$mail->IsHTML(true);
$mail->Username = "jeru.pajulas27@gmail.com";
$mail->Password = "mirashaine27";
$mail->SetFrom("jeru.pajulas27@gmail.com");
$mail->Subject = "Testing SMTP";
$mail->Body = $body;
$mail->AddAddress($email);
if(!$mail->Send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else{
    echo "Message has been sent";
}

?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<form action="career.php" method="post">
	<input type="submit" name="submit" value="Back">
</form>
</body>
</html>