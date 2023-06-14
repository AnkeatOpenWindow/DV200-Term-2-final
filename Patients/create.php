<?php

    include '../db.php';
    //Show a list of all patients records
    $profileimage = $_POST['profileimage'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $medicalaidnumber = $_POST ['medicalaidnumber'];
    $previousappiontments = $_POST['previousappiontments'];
    
    //An attempted to try and up load images but i'm stugeling to understand how.
    
    $sql = "INSERT INTO patients (profileimage, name, surname, age, gender, email, phonenumber, medicalaidnumber, previousappiontments) VALUES ('$profileimage','$name', '$surname', '$age', '$gender', '$email', '$phonenumber', '$medicalaidnumber', '$previousappiontments')";
    
    $conn->query($sql);
    $conn->close();
    header("location: ../Patients.php");

    

?>