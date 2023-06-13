<?php

    include 'db.php';
    //Show a list of all Receptionists records
    $profileimage = $_POST['profile image'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone-number'];
    $rank = $_POST['rank'];
    
    //An attempted to try and up load images but i'm stugeling to understand how.
    if (isset($_POST['submit'])&& isset($_FILES['picture'])) {
        echo "hello";
    }else {
        header("Location: Receptionists.php");
    };
    
    $sql = "INSERT INTO receptionists (profile image, name, surname, age, gender, email, password, phone-number, rank) VALUES ('$profileimage','$name', '$surname', '$age', '$gender', '$email', '$password','$phone_number', '$rank')";
    
    $conn->query($sql);
    $conn->close();
    header("location: Receptionists.php");

?>