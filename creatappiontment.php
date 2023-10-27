<?php
include 'db.php';

$date = $_POST['date'];
$time = $_POST['time'];
$doctor = $_POST['doctor'];
$patient = $_POST['patient'];

// Check if the patient ID exists in the "patients" table before inserting.
$checkPatientQuery = "SELECT id FROM patients WHERE id = ?";
$stmt = $conn->prepare($checkPatientQuery);
$stmt->bind_param("i", $patient);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // The patient ID is valid, so proceed with the insertion.
    $insertQuery = "INSERT INTO apointment (date, time, doctor, patient) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("ssii", $date, $time, $doctor, $patient);
    if ($stmt->execute()) {
        header("location: Appointments.php?success=Appointment created successfully");
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "Error: Invalid patient ID";
}

$stmt->close();
$conn->close();
?>
