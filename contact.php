<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pinky";

    // connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("conncetion failed");
    }

    $fname = $_POST['fname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $anu = "INSERT INTO pink (fname, mobile, email) VALUES ('$fname', '$mobile', '$email')";

    if ($conn->query($anu) == true) {
        echo "connection successfully";
    } else {
        echo "error";
    }
    $conn->close();
    ?>
