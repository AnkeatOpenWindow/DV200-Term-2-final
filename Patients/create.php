<?php

    include 'db.php';
    //Show a list of all patients records
    $profileimage = $_POST['profile image'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $medical_aid_number = $_POST['medical_aid_number'];
    $previous_appiontments = $_POST['previous_appiontments'];
    
    //An attempted to try and up load images but i'm stugeling to understand how.
    if (isset($_POST['submit'])&& isset($_FILES['picture'])) {
        echo "hello";
    }else {
        header("Location: Patients.php");
    };
    
    $sql = "INSERT INTO patients (profile image, name, surname, age, gender, email, phone_number, medical_aid_number, previous_appiontments) VALUES ('$profileimage','$name', '$surname', '$age', '$gender', '$email', '$phone_number', '$medical_aid_number', '$previous_appiontments')";
    
    $conn->query($sql);
    $conn->close();
    header("location: Patients.php");

?>