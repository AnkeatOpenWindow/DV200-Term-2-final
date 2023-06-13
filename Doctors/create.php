<?php

    include 'db.php';
    //Show a list of all Doctors records
    $profileimage = $_POST['profile image'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone-number'];
    $specialization = $_POST['specialization'];
    $room = $_POST['room'];
    
    //An attempted to try and up load images but i'm stugeling to understand how.
    if (isset($_POST['submit'])&& isset($_FILES['picture'])) {
        echo "hello";
    }else {
        header("Location: Doctors.php");
    };
    
    $sql = "INSERT INTO doctors (profile image, name, surname, age, gender, email, phone-number, specialization, room) VALUES ('$profileimage','$name', '$surname', '$age', '$gender', '$email', '$phone_number', '$specialization', '$room')";
    
    $conn->query($sql);
    $conn->close();
    header("location: Doctors.php");

?>