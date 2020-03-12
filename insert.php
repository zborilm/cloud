<?php
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";
    

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    #echo "Email: " . $email;
    #echo "Password: " . $pass;

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO auth VALUES ('". $email . "','" . $pass . "')";
    #$sql = "INSERT INTO auth VALUES ('asu','aso')";
    
    #echo "SQL: " . $sql;

    #if (mysqli_query($conn, $sql)) {
    #    echo "New record created successfully";
    #} else {
    #    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    #}

    mysqli_close($conn);
?>