<?php
  
  $receiving_email_address = 'mr.abdulrehman.ar@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();

	// if(isset($_POST['submit'])){
	// 	$name=$_POST['name'];
	// 	$email=$_POST['email'];
	// 	$phone=$_POST['subject'];
	// 	$msg=$_POST['message'];

	// 	$to='mr.abdulrehman.ar@gmail.com'; 
	// 	$subject='Form Submission';
	// 	$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
	// 	$headers="From: ".$email;

	// 	if(mail($to, $subject, $message, $headers)){
	// 		echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
	// 	}
	// 	else{
	// 		echo "Something went wrong!";
	// 	}
	// }

?> 
