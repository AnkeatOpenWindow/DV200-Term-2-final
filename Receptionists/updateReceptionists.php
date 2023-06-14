<?php
    include '../db.php';
   //Edit details of an Receptionist - All attributes should be editable except the ID Number
    $id = $_POST['id'];
    $profileimage = $_POST['profileimage'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $rank = $_POST['rank'];
    

    $sql = "UPDATE receptionists SET profileimage='$profileimage', surname= '$surname', name='$name', age='$age', gender='$gender', email='$email', password='$password', phonenumber='$phonenumber' ,  rank='$rank' WHERE id='$id'";

    $result = $conn->query($sql);
    $conn->close();
    header("location: ../Receptionists.php");
?>