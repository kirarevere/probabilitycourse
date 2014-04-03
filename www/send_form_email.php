<?php
 require_once('recaptchalib.php');
  $privatekey = "6Lf8IPESAAAAAITIGGKJHHzGfUbmdD6460tFlTKL";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")\n" . 
				 "(<a href='http://probabilitycourse.com/comments.php'>Return to Comments</a>)");
  } else {
    // Your code here to handle a successful verification
	if(isset($_POST['email'])) {
			 
			// EDIT THE 2 LINES BELOW AS REQUIRED
			$email_to = "h.pishronik@gmail.com";
			$email_subject = "probabilitycourse.com";
			 
			 
			function died($error) {
					// your error code can go here
					echo "We are very sorry, but there were error(s) found with the form you submitted. ";
					echo "These errors appear below.<br /><br />";
					echo $error."<br /><br />";
					echo "Please go back and fix these errors.<br /><br />";
					die();
			}
			 
			// validation expected data exists
			if(!isset($_POST['name']) ||
					!isset($_POST['email']) ||
					!isset($_POST['comments'])) {
					died('We are sorry, but there appears to be a problem with the form you submitted.');      
			}
			 
			$name = $_POST['name']; // required
			$email_from = $_POST['email']; // required
			$comments = $_POST['comments']; // required
			 
			$error_message = "";
			$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		if(!preg_match($email_exp,$email_from)) {
			$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
		}
			$string_exp = "/^[A-Za-z .'-]+$/";
		if(!preg_match($string_exp,$name)) {
			$error_message .= 'The Name you entered does not appear to be valid.<br />';
		}
		if(strlen($comments) < 2) {
			$error_message .= 'The Comments you entered do not appear to be valid.<br />';
		}
		if(strlen($error_message) > 0) {
			died($error_message);
		}
			$email_message = "Sent from the comment form on probabilitycourse.com. Form details below.\n\n";
			 
			function clean_string($string) {
				$bad = array("content-type","bcc:","to:","cc:","href");
				return str_replace($bad,"",$string);
			}
			 
			$email_message .= "Name: ".clean_string($name)."\n";
			$email_message .= "Email: ".clean_string($email_from)."\n";
			$email_message .= "Comments: ".clean_string($comments)."\n";
			 
			 
	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers); 
	
	}
?>
	 
	<!-- include your own success html here -->
	 
	Thank you for your feedback.
	 
<?php
	}
?>
