<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$service = $_POST['service'];
$massage = $_POST['message'];

$email_from='info@hassan and hussain constructions';
$email_subject='New form submission';
$email_body="user Name:$name.\n".
            "user email:$visitor_email.\n".
            "user message:$service .\n".
            "user message:$massage.\n";
            

 $to='t25536497@gmail.com';
 $headers="From:$email_from \r\n";           
 $headers="Reply-to:$visitor_email \r\n";   
 
 mail($to,$email_service,$email_body,$haeders)
 header("location: contact.html")
 
?>