<?php
include 'db.php';

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

    // File upload handling
    $targetDirectory = "uploads/"; // Specify the directory where you want to store uploaded files
    $targetFile = $targetDirectory . basename($_FILES["profileimage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
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
        // if everything is ok, try to upload file
        if (move_uploaded_file($_FILES["profileimage"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["profileimage"]["name"]) . " has been uploaded.";

            // Update database record
            $sql = "UPDATE receptionists SET 
                        name='$name', 
                        surname='$surname', 
                        age='$age', 
                        gender='$gender', 
                        email='$email', 
                        phonenumber='$phonenumber', 
                        medicalaidnumber='$medicalaidnumber', 
                        previousappiontments='$previousappiontments',
                        profileimage='$targetFile' 
                        WHERE id='$id'";

            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
$sql = "SELECT * FROM patients";

$result = $conn->query($sql);
//Show a list of all employee records
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    if (isset($_GET['id']) && $row['id'] == $_GET['id']) {
        echo '<form class="form-inline m-2" action="Patients/updatePatients.php" method="POST" enctype="multipart/form-data">';
        echo '<td><input type="file" class="form-control" name="profileimage"></td>';
        echo '<td><input type="text" class="form-control" name="name" value="' . $row['name'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="surname" value="' . $row['surname'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="age" value="' . $row['age'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="gender" value="' . $row['gender'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="email" value="' . $row['email'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="phonenumber" value="' . $row['phonenumber'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="medicalaidnumber" value="' . $row['medicalaidnumber'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="previousappiontments" value="' . $row['previousappiontments'] . '"></td>';
        echo '<td><button type="submit" class="btn btn-secondary">Save</button></td>';

        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '</form>';

    } else {
        echo "<td><img src='" . substr($row['profileimage'], 3) . "' alt='Profile Image' width='100'></td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['surname'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phonenumber'] . "</td>";
        echo "<td>" . $row['medicalaidnumber'] . "</td>";
        echo "<td>" . $row['previousappiontments'] . "</td>";

        echo '<td><a class="btn btn-primary" href="Patients.php?id=' . $row['id'] . '" role="button">Update</a></td>'; //EDIT
    }

    echo '<td><a class="btn btn-danger" href="Patients/delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>'; //UPDATE
    echo "</tr>";
}

$conn->close();

?>