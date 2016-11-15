<?php	
	if(empty($_POST['name_6141']) && strlen($_POST['name_6141']) == 0 || empty($_POST['input_1274_6141']) && strlen($_POST['input_1274_6141']) == 0 || empty($_POST['email_6141']) && strlen($_POST['email_6141']) == 0 || empty($_POST['input_1278_6141']) && strlen($_POST['input_1278_6141']) == 0 || empty($_POST['message_6141']) && strlen($_POST['message_6141']) == 0)
	{
		return false;
	}
	
	$name_6141 = $_POST['name_6141'];
	$input_1274_6141 = $_POST['input_1274_6141'];
	$email_6141 = $_POST['email_6141'];
	$input_1278_6141 = $_POST['input_1278_6141'];
	$message_6141 = $_POST['message_6141'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from dgusta.";
	$email_body = "You have received a new message. \n\n".
				  "Name_6141: $name_6141 \nInput_1274_6141: $input_1274_6141 \nEmail_6141: $email_6141 \nInput_1278_6141: $input_1278_6141 \nMessage_6141: $message_6141 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_1278_6141";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>