<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "a4designs";  
    // Create connection 
    $conn = mysqli_connect($servername, $username, $password, $dbname); 
    // Check connection 
    if (!$conn) { 
        echo("Due To Some Server Errors Connection To The Site Is Failed...");
        die("Connection failed: " . mysqli_connect_error());
    }
?>
