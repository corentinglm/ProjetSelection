<?php

//  HANDLING ROW DELETION LETS GO

// requiring connection.php to connect to db
require_once(".//connection.php");

if (isset($_GET['id'])) {

    $id = $_GET["id"];

    $sql = "DELETE FROM eleve WHERE id=:id ";

    $res = $conn->prepare($sql);
    $res->execute(array(':id' => $id));


    // redirection
    header("location: make?action=see-table");
} else {
    header("location: ./errors/fatalError.php");
}
