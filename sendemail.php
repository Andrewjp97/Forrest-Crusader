<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);

    $fname = @trim(stripslashes($_POST['fname'])); 
    $lname = @trim(stripslashes($_POST['lname'])); 
    $name = $fname . $lname;
    $email = @trim(stripslashes($_POST['email'])); 
    //$subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'Andrewp97@me.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $name . ' has a question | Forrest Crusader', $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;