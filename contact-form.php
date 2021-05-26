<?php 
$message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != '')
    {
        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
        {
            $name = $_POST['name'];
            $visitor_email = $_POST['email'];
            $message = $_POST['message'];

            $email_from = 'priyasadh@hotmail.com';
            $email_subject = "New Asano form submission";
            $email_body = "";
            $email_body .= "You have received a new message from the Asano website: \n\n";
            $email_body .= "User Name: ".$name."\r\n";
            $email_body .= "User Email: ".$visitor_email."\r\n";
            $email_body .= "User Message: ".$message."\r\n";

            $email_to = "P.Sadh@sms.ed.ac.uk";

            $headers = "From: $email_from \r\n";
            $headers .= "Reply-To: $visitor_email \r\n";

            mail($email_to,$email_subject,$email_body,$headers);
            
            $message_sent = true;
        }
        
    }
    header("Location: contact-us");
?>