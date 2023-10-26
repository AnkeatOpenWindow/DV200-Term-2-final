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
    $specialization = $_POST['specialization'];
    $room = $_POST['room'];

    // File upload handling
    $targetDirectory = "uploads2/"; // Specify the directory where you want to store uploaded files
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
        // If everything is ok, try to upload the file
        if (move_uploaded_file($_FILES["profileimage"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["profileimage"]["name"]) . " has been uploaded.";

            // Update database record
            $sql = "UPDATE doctors SET 
                        name='$name', 
                        surname='$surname', 
                        age='$age', 
                        gender='$gender', 
                        email='$email', 
                        phonenumber='$phonenumber', 
                        specialization='$specialization', 
                        room='$room', 
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

$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);

// Show a list of all doctor records
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    if (isset($_GET['id']) && $row['id'] == $_GET['id']) {
        echo '<form class="form-inline m-2" action="Doctors/updateDoctors.php" method="POST" enctype="multipart/form-data">';
        echo '<td><input type="file" class="form-control" name="profileimage"></td>';
        echo '<td><input type="text" class="form-control" name="name" value="' . $row['name'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="surname" value="' . $row['surname'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="age" value="' . $row['age'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="gender" value="' . $row['gender'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="email" value="' . $row['email'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="phonenumber" value="' . $row['phonenumber'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="specialization" value="' . $row['specialization'] . '"></td>';
        echo '<td><input type="text" class="form-control" name="room" value="' . $row['room'] . '"></td>';
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
        echo "<td>" . $row['specialization'] . "</td>";
        echo "<td>" . $row['room'] . "</td>";

        echo '<td><a class="btn btn-primary" href="Doctors.php?id=' . $row['id'] . '" role="button">Update</a></td>'; //EDIT
    }

    echo '<td><a class="btn btn-danger" href="Doctors/delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>'; //UPDATE
    echo "</tr>";
}

$conn->close();
?>
