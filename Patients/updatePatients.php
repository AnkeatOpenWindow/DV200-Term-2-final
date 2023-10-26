<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $medicalaidnumber = $_POST['medicalaidnumber'];
    $previousappiontments = $_POST['previousappiontments'];
    

    // Check if a file was uploaded
    if (!empty($_FILES["profileimage"]["tmp_name"])) {
        // File upload handling
        $targetDirectory = "../uploads/";
        $targetFile = $targetDirectory . basename($_FILES["profileimage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["profileimage"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        if (file_exists($targetFile)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        if ($_FILES["profileimage"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["profileimage"]["tmp_name"], $targetFile)) {
                echo "The file " . basename($_FILES["profileimage"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    // Update database record using a prepared statement
    $sql = "UPDATE patients SET profileimage=?, surname=?, name=?, age=?, gender=?, email=?, phonenumber=?, medicalaidnumber=?, previousappiontments=?  WHERE id=?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param(
            "sssssssssi",
            $targetFile,
            $surname,
            $name,
            $age,
            $gender,
            $email,
            $phonenumber,
            $medicalaidnumber,
            $previousappiontments,            
            $id
        );
        if ($stmt->execute()) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

$conn->close();
header("location: ../Patients.php");
?>