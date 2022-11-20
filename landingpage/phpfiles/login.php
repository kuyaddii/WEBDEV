<?php

 require_once ('dbconnect.php');
 
 try {

  $username = "juan";
  $password = "juan2";

  $stmt = $conn->prepare("SELECT * FROM users WHERE username=:username and password=:password");
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
