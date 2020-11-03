<?php
    $dbservername = "localhost";
    $dbusername   = "root";
    $dbpassword   = "";
    $dbname   = "itrans";

    $db = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    
    if($db->connect_error) {   
        die("Dogodila se pogrješka pri spajanju s bazom podataka: " . $db->connect_error);
    }
?>