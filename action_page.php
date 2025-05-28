<?php        
        $fullname = $_POST['name'];
        $visitor_email = $_POST['email'];
        $phone_number = $_POST['phone'];
        $message = $_POST['message'];

        $email_from = 'info@royallisbenmontessori.com';

        $email_subject = 'New Website Form Submission';

        $email_body = "You have received a new message from the user $fullname.\n".
                        "With email address $visitor_email and phone number $phone_number.\n".
                            "Here is the message:\n $message" ;


        $to = 'info@royallisbenmontessori.com';

        $headers = "From: $email_from \r\n";

        $headers = "Reply-To: $visitor_email \r\n";

        mail($to, $email_subject, $email_body, $headers);

        header("Location: thankyou.html");           
?>