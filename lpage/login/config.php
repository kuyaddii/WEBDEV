<?php

$db_user = "root";
$db_pass = "";
$dbname = "taurusstore";

$conn = mysqli_connect($db_user, $db_pass, $dbname);

if(!$conn){
    echo ("failed");
}

?>