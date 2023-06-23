<?php
    include '../db.php';
    //Show a list of all Doctors records
    $profileimage = $_POST['profileimage'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $specialization = $_POST['specialization'];
    $room = $_POST['room'];
    
    //An attempted to try and up load images but i'm stugeling to understand how.
    $sql = "INSERT INTO doctors (profileimage, name, surname, age, gender, email, phonenumber, specialization, room) VALUES ('$profileimage','$name', '$surname', '$age', '$gender', '$email', '$phonenumber', '$specialization', '$room')";
    
    $conn->query($sql);
    $conn->close();
    header("location: ../Doctors.php");

?>

