<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $medicalaidnumber = $_POST['medicalaidnumber'];
    $previousappiontments = $_POST['previousappiontments'];

    // File upload handling 
    $targetDirectory = "../uploads/"; // Specify the directory where you want to store uploaded files
    $targetFile = $targetDirectory . basename($_FILES["profileimage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a valid image
    $check = getimagesize($_FILES["profileimage"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size (adjust as needed)
    if ($_FILES["profileimage"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (you can customize this)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // if everything is ok, try to upload the file
        if (move_uploaded_file($_FILES["profileimage"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["profileimage"]["name"]) . " has been uploaded.";

            // Insert into the database
            $sql = "INSERT INTO patients (profileimage, name, surname, age, gender, email, phonenumber, medicalaidnumber, previousappiontments) VALUES ('$targetFile', '$name', '$surname', '$age', '$gender', '$email', '$phonenumber', '$medicalaidnumber', '$previousappiontments')";

            if ($conn->query($sql) === TRUE) {
                echo "New patient record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$conn->close();
header("location: ../Patients.php");
?>
