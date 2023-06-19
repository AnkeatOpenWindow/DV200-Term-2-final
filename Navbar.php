<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
<!--Nav 2-->
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top;" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images\Logo.jpg" alt="" srcset="" height="30px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="Receptionists.php">Receptionists</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Doctors.php">Doctors Records</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Patients.php">Patients Records</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Appointments.php">Appointments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Profile.php">Profile</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <!--Add name of Login-->
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log-out</a></li>
        </ul>
    </div>
  </div>
</nav>


</body>
</html>
