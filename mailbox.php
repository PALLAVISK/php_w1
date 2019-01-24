<?php

$to      = 'pallaviskadam95@gmail.com'; // Send email to our user
         $subject = 'Signup | Verification'; // Give the email a subject
         $message = "hello
                    boy
                     ";
         $headers = 'From: pallaviskadam95@gmail.com' . "\r\n"; // Set from headers
         mail($to, $subject, $message, $headers); // Send our email

?>