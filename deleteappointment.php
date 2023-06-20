<?php
    include 'db.php';
    //Delete details of an doctors
    $id = $_GET['id'];

    $sql = "DELETE FROM apointment WHERE id = $id";

    $conn->query($sql);
    $conn->close();
    header("location: Appointments.php");
?>
