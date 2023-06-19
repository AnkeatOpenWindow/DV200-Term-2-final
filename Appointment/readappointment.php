<?php
    include 'db.php';

    $sql = "SELECT * FROM apointment";

    $result = $conn->query($sql);
    //Show a list of all employee records
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        if ($row['id'] == $_GET['id']){
            echo '<form class="form-inline m-2" action="../Appointment.php" method="POST">';
            echo '<td><input type="text" class="form-control" name="date" value="'.$row['date'].'"></td>';
            echo '<td><input type="text" class="form-control" name="time" value="'.$row['time'].'"></td>';
            echo '<td><input type="text" class="form-control" name="doctor" value="'.$row['doctor'].'"></td>';
            echo '<td><input type="text" class="form-control" name="patient" value="'.$row['patient'].'"></td>';
            echo '<td><button type="submit" class="btn btn-secondary">Save</button></td>';

            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '</form>';
        }else{
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
            echo "<td>" . $row['doctor'] . "</td>";
            echo "<td>" . $row['patient'] . "</td>";
            echo '<td><a class="btn btn-primary" href="../Appointments.php?id=' . $row['id'] . '" role="button">Update</a></td>';//EDIT
        }
        
        echo '<td><a class="btn btn-danger" href="Appointment/deleteappointment.php?id=' . $row['id'] . '" role="button">Delete</a></td>';//UPDATE
        echo "</tr>";
    }

    $conn->close();

?>