<?php
    include 'db.php';

    $sql = "SELECT * FROM doctors";

    $result = $conn->query($sql);
    //Show a list of all employee records
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        if (isset($_GET['id']) && $row['id'] == $_GET['id']){
            echo '<form class="form-inline m-2" action="Doctors/updateDoctors.php" method="POST" enctype="multipart/form-data">';
            echo '<td><input type="file" class="form-control" name="profileimage"></td>';
            echo '<td><input type="text" class="form-control" name="name" value="'.$row['name'].'"></td>';
            echo '<td><input type="text" class="form-control" name="surname" value="'.$row['surname'].'"></td>';
            echo '<td><input type="text" class="form-control" name="age" value="'.$row['age'].'"></td>';
            echo '<td><input type="text" class="form-control" name="gender" value="'.$row['gender'].'"></td>';
            echo '<td><input type="text" class="form-control" name="email" value="'.$row['email'].'"></td>';
            echo '<td><input type="text" class="form-control" name="phonenumber" value="'.$row['phonenumber'].'"></td>';
            echo '<td><input type="text" class="form-control" name="specialization" value="'.$row['specialization'].'"></td>';
            echo '<td><input type="text" class="form-control" name="room" value="'.$row['room'].'"></td>';
            echo '<td><button type="submit" class="btn btn-secondary">Save</button></td>';

            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '</form>';
        }else{
            echo "<td><img src='".$row['profileimage']."' alt='Profile Image' width='100'></td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['surname'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phonenumber'] . "</td>";
            echo "<td>" . $row['specialization'] . "</td>";
            echo "<td>" . $row['room'] . "</td>";

            echo '<td><a class="btn btn-primary" href="Doctors.php?id=' . $row['id'] . '" role="button">Update</a></td>';//EDIT
        }
        
        echo '<td><a class="btn btn-danger" href="Doctors/delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';//UPDATE
        echo "</tr>";
    }

    $conn->close();

?>