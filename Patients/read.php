<?php
    include 'db.php';

    $sql = "SELECT * FROM patients";

    $result = $conn->query($sql);
    //Show a list of all employee records
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        if ($row['id'] == $_GET['id']){
            echo '<form class="form-inline m-2" action="Patients/updatePatients.php" method="POST">';
            echo '<td><input type="text" class="form-control" name="profileimage" value="'.$row['profileimage'].'"></td>';
            echo '<td><input type="text" class="form-control" name="name" value="'.$row['name'].'"></td>';
            echo '<td><input type="text" class="form-control" name="surname" value="'.$row['surname'].'"></td>';
            echo '<td><input type="text" class="form-control" name="age" value="'.$row['age'].'"></td>';
            echo '<td><input type="text" class="form-control" name="gender" value="'.$row['gender'].'"></td>';
            echo '<td><input type="text" class="form-control" name="email" value="'.$row['email'].'"></td>';
            echo '<td><input type="text" class="form-control" name="phonenumber" value="'.$row['phonenumber'].'"></td>';
            echo '<td><input type="text" class="form-control" name="medicalaidnumber" value="'.$row['medicalaidnumber'].'"></td>';
            echo '<td><input type="text" class="form-control" name="previousappiontments" value="'.$row['previousappiontments'].'"></td>';
            echo '<td><button type="submit" class="btn btn-secondary">Save</button></td>';

            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '</form>';
            
        }else{
            echo "<td>" . $row['profileimage'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['surname'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phonenumber'] . "</td>";
            echo "<td>" . $row['medicalaidnumber'] . "</td>";
            echo "<td>" . $row['previousappiontments'] . "</td>";

            echo '<td><a class="btn btn-primary" href="Patients.php?id=' . $row['id'] . '" role="button">Update</a></td>';//EDIT
        }
        
            echo '<td><a class="btn btn-danger" href="Patients/delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';//UPDATE
            echo "</tr>";
    }

    $conn->close();

?>