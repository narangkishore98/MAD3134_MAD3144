<?php
    // Creating a database connection

    $servername = "localhost";
    $username = "root";
    $password = "";

    //creating a PDO object;

    try
    {
        $db = new PDO("mysql:host=$servername;db=test", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo("Connection Successfull");
        $query = "select * from student";
        $db->exec($query);
    }
    catch(PDOException $e)
    {
        echo($e->getMessage());
    }
?>