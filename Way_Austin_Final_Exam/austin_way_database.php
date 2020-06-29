<?php
/* Name: Austin Way
Course: CSCI 4000
Final Exam
Due Date: May 6, 2020
Purpose: connect to db via PDO (PHP Data Objects)
*/

// starts the session, server side, to pass the $connection_db_error variable
session_start();

$servername = "localhost";
$username = "austinexam";
$password = "austindonut";
$dbname = "austin_way_final_db";

try {
    // connection string
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    $connection_db_error = "Error message: " . $e->getMessage();

    // A session is a way to store information (in variables) to be used across multiple pages.
    // Unlike a cookie, the information is not stored on the users computer.
    $_SESSION['$connection_db_error'] = $connection_db_error;

    // The header() function sends a raw HTTP header to a client.
    //Loads another php page called 'austin_way_database_error.php'
    header('Location:austin_way_database_error.php');

}
?>