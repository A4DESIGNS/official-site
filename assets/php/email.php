<?php 
$to = 'official.a4design@gmail.com'; 
$from = $_POST['email']; 
$fromName = $_POST['name']; 
 
$subject = $_POST['subject']; 
 
$message = $_POST['message']; 
 
// Additional headers 
$headers = 'From: '.$fromName.'<'.$from.'>'; 
 
// Send email 
if(mail($to, $subject, $message, $headers)){ 
   echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}

?>