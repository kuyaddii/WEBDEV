<?php

 require_once ('dbconnect.php');
 
 try {

  $username = 'username';
  $password = 'password';

  $stmt = $conn->prepare("SELECT * FROM users WHERE username=:username and userpass=:password");
  $stmt->execute(['username' => $username, 'password' => $password]); 
  $user = $stmt->fetchAll(PDO::FETCH_ASSOC);


  if(!$user){
    echo "Record not fulfill";
  } else {
    echo "Success";
  }

 } catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
 }
?>
