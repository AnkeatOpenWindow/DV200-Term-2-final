<?php

    include '../db.php';
    //Show a list of all Receptionists records
    $profileimage = $_POST['profileimage'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $rank = $_POST['rank'];
    
    //An attempted to try and up load images but i'm stugeling to understand how.
        
    $sql = "INSERT INTO receptionists (profileimage, name, surname, age, gender, email, password, phonenumber, rank) VALUES ('$profileimage','$name', '$surname', '$age', '$gender', '$email', '$password','$phonenumber', '$rank')";
    
    $conn->query($sql);
    $conn->close();
    header("location: ../Receptionists.php");

?>