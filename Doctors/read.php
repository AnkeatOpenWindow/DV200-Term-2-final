<?php
    include 'db.php';

    $sql = "SELECT * FROM doctors";

    $result = $conn->query($sql);
    //Show a list of all employee records
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        if ($row['id'] == $_GET['id']){
            echo '<td><input type="text" class="form-control" name="profile image" value="'.$row['profile image'].'"></td>';
            echo '<form class="form-inline m-2" action="update.php" method="POST">';
            echo '<td><input type="text" class="form-control" name="name" value="'.$row['name'].'"></td>';
            echo '<td><input type="text" class="form-control" name="surname" value="'.$row['surname'].'"></td>';
            echo '<td><input type="text" class="form-control" name="age" value="'.$row['age'].'"></td>';
            echo '<td><input type="text" class="form-control" name="gender" value="'.$row['gender'].'"></td>';
            echo '<td><input type="text" class="form-control" name="email" value="'.$row['email'].'"></td>';
            echo '<td><input type="text" class="form-control" name="phone-number" value="'.$row['phone-number'].'"></td>';
            echo '<td><input type="text" class="form-control" name="specialization" value="'.$row['specialization'].'"></td>';
            echo '<td><input type="text" class="form-control" name="room" value="'.$row['room'].'"></td>';
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '</tr>';
        }else{
            echo "<td>" . $row['profile image'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['surname'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone-number'] . "</td>";
            echo "<td>" . $row['specialization'] . "</td>";
            echo "<td>" . $row['room'] . "</td>";

            echo '<td><a class="btn btn-primary" href="Doctors.php?id=' . $row['id'] . '" role="button">Update</a></td>';//EDIT
        }
        
        echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';//UPDATE
        echo "</tr>";
    }

    $conn->close();

?>