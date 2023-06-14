<?php
    include 'db.php';
   //Edit details of an Patients - All attributes should be editable except the ID Number
    $id = $_POST['id'];
    $profileimage = $_POST['profileimage'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $specialization = $_POST['specialization'];
    $room = $_POST['room'];
    

    $sql = "UPDATE doctors SET profileimage='$profileimage', surname= '$surname', name='$name', age='$age', gender='$gender', email='$email', phonenumber='$phonenumber' , specialization='$specialization' , room='$room' WHERE id=$id";

    $result = $conn->query($sql);
    $conn->close();
    header("location: ../Doctors.php");
?>