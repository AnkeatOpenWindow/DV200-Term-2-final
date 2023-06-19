<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>
<body>
<?php include 'Navbar.php' ?>
    <div class="container">
        <table class="table">
            <!-- i get the warning
            Warning: Undefined array key "id" in C:\xampp\htdocs\DV200final\Doctors\read.php on line 10

            Warning: Undefined array key "id" in C:\xampp\htdocs\DV200final\Doctors\read.php on line 10

            Warning: Undefined array key "id" in C:\xampp\htdocs\DV200final\Doctors\read.php on line 10
            -->
            <tbody>
            <?php include 'Doctors/read.php'; ?>
            </tbody>
        </table>
        
        <h1>Add new Doctor</h1>
        <form id="myform" action="Doctors/create.php" method="POST">
            <label for="profile image"><h5>Up load profile image:</h5></label>
            <input type="text" class="form-control m-1" id="profileimage" name="profileimage"><br>
            <label for="name"><h5>Name:</h5></label>
            <input type="text" class="form-control m-1" id="name" name="name"><br>
            <label for="name"><h5>Surname:</h5></label>
            <input type="text" class="form-control m-1" id="surname" name="surname"><br>
            <label for="name"><h5>Age</h5></label><br>
            <input type="text" class="form-control m-1" id="age" name="age"><br>
            <label for="name"><h5>Gender:</h5></label>
            <input type="text" class="form-control m-1" id="gender" name="gender"><br>
            <label for="name"><h5>Email:</h5></label>
            <input type="text" class="form-control m-1" id="email" name="email"><br>
            <label for="name"><h5>Phone number:</h5></label>
            <input type="text" class="form-control m-1" id="phonenumber" name="phonenumber"><br>
            <label for="name"><h5>Specialization:</h5></label>
            <input type="text" class="form-control m-1" id="specialization" name="specialization"><br>
            <label for="name"><h5>Room:</h5></label>
            <input type="text" class="form-control m-1" id="room" name="room"><br>
            <button type="submit" class="btn btn-primary" >Add</button>
        </form>

    </div>
    
    
    <?php include 'Footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>