<?php
    //start session
    session_start();
    // Adding a constants for dry code
    define('SITEURL', 'http://localhost/cafejava');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'cafe_java');
    //Database connection
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die("Error Posting" . mysqli_error($conn));
    // Selecting which database to post to
    $db_select = mysqli_select_db($conn, DB_NAME) or die("Error Connecting to database" . mysqli_error($conn));
    
?>