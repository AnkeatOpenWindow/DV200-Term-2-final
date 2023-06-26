<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
  </head>
<body>
    <?php include 'Navbar.php' ?>
    <?php include 'db.php' ?>
    
    <div class="container">
      <h1>Book an appointment</h1>
      <form id="myform"  action="creatappiontment.php" method="POST">
      <?php if (isset($_GET['success'])) { ?>

        <b><p class="successmessage">

          <?php echo $_GET['success']; ?></p></b>
        <?php } ?>

        <div class="form-outline mb-4">
          <label class="form-label" for="date">Date</label>
          <input type="date" name="date" class="form-control"/>
        </div>

        <div class="form-outline mb-4">
              <label class="form-label" for="form6Example2">Doctor</label>
              <?php
                echo '<select name="doctor" class="form-control">';
                $sqlD = "SELECT name, surname, id FROM doctors ORDER BY surname ASC";
                $resultD = $conn->query($sqlD);
                  
                while ($rowD = $resultD->fetch_assoc()) {
                  echo '<option name="doctor" value="' . $rowD['id'] . '"> ' . $rowD['name'] . ' ' . $rowD['surname'] . '</option>';
                }
          
                echo '</select>';
              ?>
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example3">Patient</label>
          <?php
              echo '<select name="patient" class="form-control">';
              $sqlD = "SELECT name, surname, id FROM patients ORDER BY surname ASC";
              $resultD = $conn->query($sqlD);

              while ($rowD = $resultD->fetch_assoc()) {
              echo '<option name="patient" value="' . $rowD['id'] . '"> ' . $rowD['name'] . ' ' . $rowD['surname'] . '</option>';
              }
          
              echo '</select>';
              ?>
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="time">Time</label>
          <input type="time" name="time" class="form-control" />
        </div>

        <button type="submit" class="btn btn-primary">Book appointment</button>
      </form>
      <table class="table">
            <!-- i get the warning
            Warning: Undefined array key "id" in C:\xampp\htdocs\DV200final\Doctors\read.php on line 10

            Warning: Undefined array key "id" in C:\xampp\htdocs\DV200final\Doctors\read.php on line 10

            Warning: Undefined array key "id" in C:\xampp\htdocs\DV200final\Doctors\read.php on line 10
            -->
            <thead >
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Doctor</th>
                <th scope="col">Patient</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php include 'readappointment.php'; ?>
            </tbody>
        </table>
    </div>

    <?php include 'Footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>