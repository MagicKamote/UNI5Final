<?php

require_once("PHPMailer-master\class.phpmailer.php");
require_once("PHPMailer-master\class.smtp.php");

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
$gender = ($_POST['gender']);

$body = <<<EOD
Name: $name <br>
Spouse Name: $s_name <br>
Address: $address <br>
Zipcode: $zipcode <br>
Email: $email <br>
Phone: $phone <br>
Gender: $gender
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
$mail->Username = "aldrinlim81@gmail.com";
$mail->Password = "32n1u5ynvr";
$mail->SetFrom("aldrinlim81@gmail.com");
$mail->Subject = "New Member Applied";
$mail->Username = "uni5wellness@gmail.com";
$mail->Password = "uni5wellness123";
$mail->SetFrom("uni5wellness@gmail.com");
$mail->Subject = "<bold>Welcome to Uni5Wellness International</bold>";
>>>>>>> d5795e3be06a71e0023825d86e54ce1efd032243
$mail->Body = $body;
$mail->AddAddress($email);
if(!$mail->Send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else{
    echo "Message has been sent";
    echo $body;
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