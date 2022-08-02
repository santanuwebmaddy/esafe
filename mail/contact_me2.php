<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	$solutions = $_POST['solutions'];
		
	// PUT THE EMAIL ID WHERE YOU WANT TO RECIEVE THE CONTACT FORM DETAILS	
	$to = 'santanuchowdhury04@gmail.com';

	// EMAIL ID WHICH SHOWS IN THE FROM SECTION OF MAIL
	$from = 'email@your-domain.com';

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Create email headers
	$headers .= 'From: '.$from."\r\n".
	    'Reply-To: '.$from."\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	// Compose a simple HTML email message
	$body = '<html><body>';
	$body .= '<h2>DE PEST 2</h2>';
	$body .= '<table border="1">
	            <tr><th>NAME</th><td>'.$name.'</td></tr>
	            <tr><th>EMAIL</th><td>'.$email.'</td></tr>
	            <tr><th>PHONE</th><td>'.$phone.'</td></tr>
	            <tr><th>MESSAGE</th><td>'.$message.'</td></tr>
	            <tr><th>SOLUTIONS</th><td>'.$solutions.'</td></tr>';
	            
	$body .= '</table>';
	$body .= '</body></html>';

	// Sending email
	if(mail($to, $subject, $body, $headers)){
	  echo "success";
	} else{
	  echo "fail"; 

	}
?>
