<?php
    include 'db.php';
    //Delete details of an doctors
    $id = $_GET['id'];

    $sql = "DELETE FROM doctors WHERE id = $id";

    $conn->query($sql);
    $conn->close();
    header("location: Doctors.php");
?>