<?php

//  HANDLING ROW DELETION LETS GO

// requiring connection.php to connect to db
require_once("./connection.php");


$sql = "TRUNCATE TABLE logs";

$res = $conn->prepare($sql);
$res->execute();


// redirection
header("location: make?action=logs");
