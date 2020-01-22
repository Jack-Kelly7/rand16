<?php
    // Link config and objects
    include_once '../config/database.php';
    include_once 'process.php';

    // Open database
    $database = new Database();
    $db = $database->getConnection();

    // Pass database connection to process object
    $process = new process($db);

    // Post values
    $process->site = $_POST['site'];
    $process->string = $_POST['string'];
    $process->email = $_POST['email'];

    // Attempt to create To Do
    if ($process->create()) {
        $result = true;
    }   
    // If unable to create To Do, tell the user
    else {
        $result = false;
    }

    echo json_encode($result);
?>