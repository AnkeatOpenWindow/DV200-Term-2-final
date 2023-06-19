<?php
 include 'db.php';
    $date = $_POST['date'];
    $time = $_POST['time'];
    $doctor = $_POST['doctor'];
    $patient = $_POST['patient'];
    $sql = "INSERT INTO apointment(date, patient, doctor, time) VALUES ('$date','$time','$doctor','$patient')";
    $conn->query($sql);
    $conn->close();
    header("location: Appointments.php?succsess=Appointment created successfully");

?>