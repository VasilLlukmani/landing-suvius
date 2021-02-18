<?php
$field_email = $_POST["cf_email"];


$mail_to = "llukmani.v@gmail.com";
$subject = "New Subscriber from Landing Page";

$body_message .= "E-mail Subscriber: ".$field_email."\n";

$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: successive.testing@gmail.com" . "\r\n" .
$headers .= "Reply-To: successive.testing@gmail.com" . "\r\n" .
$headers .= "X-Mailer: PHP/" . phpversion();

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert("Mail was sent !");
		window.location = "index.html";
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert("Mail was not sent. Please try again later");
		window.location = "index.html";
	</script>
<?php
}
?>