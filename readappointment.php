<?php
    include 'db.php';

    $sql = "SELECT * FROM apointment";

    $result = $conn->query($sql);
    //Show a list of all appiontments records
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        if ($row['id'] == $_GET['id']){
            echo '<form class="form-inline m-2" action="updateapointment.php" method="POST">';
            echo '<td><input type="date" class="form-control" name="date" value="'.$row['date'].'"></td>';
            echo '<td><input type="time" class="form-control" name="time" value="'.$row['time'].'"></td>';
            echo '<select name="doctor" class="form-control">';
                $sqlD = "SELECT name, surname, id FROM doctors ORDER BY surname ASC";
                $resultD = $conn->query($sqlD);
                  
                while ($rowD = $resultD->fetch_assoc()) {
                  echo '<option name="doctor" value="' . $rowD['id'] . '"> ' . $rowD['name'] . ' ' . $rowD['surname'] . '</option>';
                }
            echo '</select>';

            echo '<select name="patient" class="form-control">';
                $sqlD = "SELECT name, surname, id FROM patients ORDER BY surname ASC";
                $resultD = $conn->query($sqlD);
                  
                while ($rowD = $resultD->fetch_assoc()) {
                  echo '<option name="patient" value="' . $rowD['id'] . '"> ' . $rowD['name'] . ' ' . $rowD['surname'] . '</option>';
                }
            echo '</select>';
            
            echo '<td><button type="submit" class="btn btn-secondary">Save</button></td>';

            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '</form>';
        }else{
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
            $doc = $row['doctor'];
            $sql1 = "SELECT name, surname FROM doctors WHERE id = $doc";
            $result1 = $conn->query($sql1);
            while ($rowD = $result1->fetch_assoc()) {
                echo "<td>" . $rowD['name']." ".$rowD['surname'] . "</td>";
              }
            
            $patient = $row['patient'];
            $sql2 = "SELECT name, surname FROM patients WHERE id = $patient";
            $result2 = $conn->query($sql2);
            while ($rowD = $result2->fetch_assoc()) {
                echo "<td>" . $rowD['name']." ".$rowD['surname'] . "</td>";
              }

            echo '<td><a class="btn btn-primary" href="Appointments.php?id=' . $row['id'] . '" role="button">Update</a></td>';//EDIT
        }
        
        echo '<td><a class="btn btn-danger" href="deleteappointment.php?id=' . $row['id'] . '" role="button">Delete</a></td>';//DELETE
        echo "</tr>";
    }

    $conn->close();

?>

