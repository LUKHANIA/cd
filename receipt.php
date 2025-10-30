<?php 

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$url = 'https://secure.transactiongateway.com/api/transact.php';
$vars = "security_key= " 
 "&type=sale" 
 "&amount=9.99" 
 "&first_name"= . $fname
 "&last_name"= . $lname
  
  
