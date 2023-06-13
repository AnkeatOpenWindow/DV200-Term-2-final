<?php
    include 'db.php';
   //Edit details of an Patients - All attributes should be editable except the ID Number
    $id = $_POST['id'];
    $profileimage = $_POST['profile image'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $medical_aid_number = $_POST['medical_aid_number'];
    $previous_appiontments = $_POST['previous_appiontments'];
    

    $sql = "UPDATE patients SET profile image='$profileimage', surname= '$surname', name='$name', age='$age', gender='$gender', email='$email', phone_number='$phone_number' , medical_aid_number='$medical_aid_number' , previous_appiontments='$previous_appiontments' WHERE id=$id";

    $result = $conn->query($sql);
    $conn->close();
    header("location: Patients.php");
?>