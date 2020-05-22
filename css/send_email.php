<?php 

$errors = '';
$myemail = 'sven.bollaerts@hotmail.com';
if(empty($_POST['formEmail'])  || 
   empty($_POST['formTitle']) || 
   empty($_POST['formMessage']))
    {
        $errors .= "\n Error: all fields are required";
    }
    
$email_address = $_POST['formEmail']; 
$title = $_POST['formTitle']; 
$message = $_POST['formMessage']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}


if( empty($errors))

{

$to = $myemail;

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email_address";

mail($to,$title,$message,$headers);

header('Location: http://svenbol.000webhostapp.com');

}
?>