<?php

        $form_username = $_POST['username'];
        $form_password = $_POST['password']; 

        $servername = "localhost";
        $username = "id11209517_nerd";
	    $password = "nerd123";
	    $dbname = "id11209517_nerd";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //start code
        $sql = "INSERT INTO `users`(`username`, `password`, `futureuse`) VALUES ('$form_username','$form_password','a');";
        if ($conn->query($sql) === TRUE) {
            echo "Team Info Added";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

    
?>
