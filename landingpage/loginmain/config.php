<?php

$db_user = "root";
$db_pass = "";
$dbname = "taurusstore";

$db = new PDO("mysql:host=localhost;dbname=taurusstore;port=3306", $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>