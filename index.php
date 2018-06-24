<?php
if ($_POST['submit']) {
	if (!$_POST['name']) {
		$error="<br/>- Please enter your name.";
	} if (!$_POST['email']) {
		$error.="<br/>- Please enter your email.";
	} if (!$_POST['message']) {
		$error.="<br/>- Please enter a message.";
	}
	if ($error) {
		$result = '<div class="alert alert-danger" role="alert">The following errors have occurred:'.$error.'</div>';
	} else {
		mail("kassim.santone@gmail.com", "Contact Message.", "Name: ".$_POST['name']." Email: ".$_POST['email']." Message: ".$_POST['message']);
		{
			$result = '<div class="alert alert-success" role="alert">Thank you, I\'ll be in touch shortly.</div>';
		}
	}
}
include 'index.html';
?>