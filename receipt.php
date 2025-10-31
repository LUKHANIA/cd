<?php 

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$payment_token = $_POST['payment_token'];

$url = 'https://secure.transactiongateway.com/api/transact.php';
$vars = "security_key= " 
 "&type=sale" 
 "&amount=9.99" 
 "&first_name=" . $fname
 "&last_name=" . $lname
 "&email=". $email
 "&payment_token=". $payment_token; 

  $ch = curl_init( $url );
  curl_setopt( $ch, CURLOPT_POST, 1 );
  curl_setopt( $ch, CURLOPT_POSTFIELDS, $vars );
  curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt( $ch, CURLOPT_HEADER, 0);
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
?>
