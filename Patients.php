<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<body>
    
    <?php include 'Navbar.php' ?>
    <div class="container">
        <h1>Add new Patient</h1>
        <form id="myform" action="Patients/create.php" method="POST">
            <label for="profile image"><h5>Upload profile image:</h5></label>
            <input type="file" class="form-control m-1" id="profileimage" name="profileimage"><br>
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
            <label for="name"><h5>Medical aid number:</h5></label>
            <input type="text" class="form-control m-1" id="medicalaidnumber" name="medicalaidnumber"><br>
            <label for="name"><h5>Previous appiontments:</h5></label>
            <input type="text" class="form-control m-1" id="previousappiontments" name="previousappiontments"><br>
            <button type="submit" class="btn btn-primary" >Add</button>
        </form>
        <table class="table">
            <!-- ii get the warning
            Warning: Undefined array key "id" in C:\xampp\htdocs\DV200final\Patients\read.php on line 10

            Warning: Undefined array key "id" in C:\xampp\htdocs\DV200final\Patients\read.php on line 10
            -->
            <thead class="thead-dark">
              <tr>
                <th scope="col">Profile image</th>
                <th scope="col">Name</th>
                <th scope="col">Suranme</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">E-mail</th>
                <th scope="col">Phone number</th>
                <th scope="col">Medical aid number</th>
                <th scope="col">Previous Appiontments</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                <?php include 'Patients/read.php'; ?>
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