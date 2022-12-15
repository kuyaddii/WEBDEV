<?php

require_once('config.php');

if (isset($_POST['username']) && isset($_POST['password'])){
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    

    if(empty($username)){
        header("Location: landingpage.html?error= User name is required");
        exit();
    }

    else if(empty($password)){
        header("Location: landingpage.html?error= pass word is required");
        exit();
    }

    else{
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username &&$row['password'] === $password){
                echo ("Success!");
            } else{
                header("Location: landingpage.html?error=Incorrect");
                exit();
            }
            
        }
    }
    
}else{
    header("Location: login.php");
    exit();
}

?>
