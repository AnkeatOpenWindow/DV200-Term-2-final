<?php
    include '../db.php';
    //Delete details of an Receptionists
    $id = $_GET['id'];

    $sql = "DELETE FROM receptionists WHERE id = $id";

    $conn->query($sql);
    $conn->close();
    header("location: ../Receptionists.php");
?>