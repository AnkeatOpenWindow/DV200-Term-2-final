<?php
    include '../db.php';
    //Delete details of an Patients
    $id = $_GET['id'];

    $sql = "DELETE FROM patients WHERE id = $id";

    $conn->query($sql);
    $conn->close();
    header("location: ../Patients.php");
?>