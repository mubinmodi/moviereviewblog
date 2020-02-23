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
        $output = 'User not found';
        $sql = "SELECT * FROM `users` WHERE 1";
        $result = mysqli_query($conn,$sql);
    	if(mysqli_num_rows($result)>0)
    	{
    		while($row = mysqli_fetch_array($result))
    		{
    			if($form_password === $row["password"] && $form_username === $row["username"])
    			{
    				 $output = 'User exists';
                }
    		}
    	}
    	echo $output;
        $conn->close();

    
?>
