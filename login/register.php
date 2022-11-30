<?php

require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body>

<div>

<?php

if(isset($_POST['create'])){

$username = $_POST['username'];
$password = $_POST['password'];
$email    = $_POST['email'];

$sql = "INSERT INTO users (username, userpass, email) VALUES (?,?,?)";
$stmtinsert = $db->prepare($sql);
$result = $stmtinsert->execute([$username, $password, $email]); 

if($result){
    echo 'Success!';
}

else {
    echo 'Error!';
}

}
?>
 
</div>

<div>
    <form action="register.php" method="post">
    <div class="container">

    <div class="row">
        <div class="col-sm-3">
        <h1>REGISTER</h1>
        <p>Please fill up the form properly.</p>
        <hr class="mb-3">

        <label for="username"><b>UserName</b></label>
        <input class="form-control" type="text" name="username" required>

        <label for="password"><b>Password</b></label>
        <input class="form-control" type="password" name="password" required>

        <label for="email"><b>Email</b></label>
        <input class="form-control" type="email" name="email" required>
        <hr class="mb-3">

        <input class="btn btn-primary" type="submit" name="create" value="Sign up">
    </div>
    </div>
    </div>
    </form>
</div>

</body>
</html>