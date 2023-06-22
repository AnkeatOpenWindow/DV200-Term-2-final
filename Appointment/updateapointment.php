<?php
    include 'db.php';
   //Edit details of an Patients - All attributes should be editable except the ID Number
    $id = $_POST['id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $doctor = $_POST['doctor'];
    $patient = $_POST['patient'];
    

    $sql = "UPDATE apointment SET date='$date', time= '$time', doctor='$doctor', patient='$patient' WHERE id=$id";

    $result = $conn->query($sql);
    $conn->close();
    header("location: ../Appointments.php");
?>