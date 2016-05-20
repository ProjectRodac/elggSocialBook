<?php
/**
 * Responsive Elgg theme [Landing]
 * @author RiverVanRain
 * @package L1
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright (c) wZm 2k15
 * @link http://wzm.me
**/
$sender_name = trim(stripslashes($_POST['sender_name'])); 
$sender_email = trim(stripslashes($_POST['sender_email']));
$email_message = trim(stripslashes($_POST['email_message']));
$to = elgg_get_config('siteemail');
$subject = 'Message from Community';
$message = '
    <html><head><title>'.$subject.'</title></head>
    <body><p>Name: '.$sender_name.'</p>
    <p>E-mail: '.$sender_email.'</p>
    <p>Message: '.$email_message.'</p> 	
    </body></html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $success = mail($to, $subject, $message, $headers);


if ( empty($sender_name) || empty($sender_email) || empty($email_message) ) {
	forward('/wrong');
}
 
if (!is_email_address($sender_email)) {
	forward('/wrong');
}

if ($success){
  forward('/thanks');
}
else{
  forward('/wrong');
}
