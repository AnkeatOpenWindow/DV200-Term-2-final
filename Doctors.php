<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Doctors</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>

    <body>
        <?php include 'Navbar.php' ?>
        <div class="container">
            <h1>Add new Doctor</h1>
                <form id="myform" action="Doctors/create.php" method="POST" enctype="multipart/form-data">
                    <label for="profileimage">
                        <h5>Upload profile image:</h5>
                    </label>
                    <input type="file" class="form-control m-1" id="profileimage" name="profileimage"><br>
                    <label for="name">
                        <h5>Name:</h5>
                    </label>
                    <input type="text" class="form-control m-1" id="name" name="name"><br>
                    <label for="surname">
                        <h5>Surname:</h5>
                    </label>
                    <input type="text" class="form-control m-1" id="surname" name="surname"><br>
                    <label for="age">
                        <h5>Age:</h5>
                    </label><br>
                    <input type="text" class="form-control m-1" id="age" name="age"><br>
                    <label for="gender">
                        <h5>Gender:</h5>
                    </label>
                    <input type="text" class="form-control m-1" id="gender" name="gender"><br>
                    <label for="email">
                        <h5>Email:</h5>
                    </label>
                    <input type="text" class="form-control m-1" id="email" name="email"><br>
                    <label for="phonenumber">
                        <h5>Phone number:</h5>
                    </label>
                    <input type="text" class="form-control m-1" id="phonenumber" name="phonenumber"><br>
                    <label for="specialization">
                        <h5>Specialization:</h5>
                    </label>
                    <input type="text" class="form-control m-1" id="specialization" name="specialization"><br>
                    <label for="room">
                        <h5>Room:</h5>
                    </label>
                    <input type="text" class="form-control m-1" id="room" name="room"><br>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Profile image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">Specialization</th>
                            <th scope="col">Room</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include 'Doctors/read.php'; ?>
                    </tbody>
                </table>
        </div>

        <?php include 'Footer.php' ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
    </body>

    </html>
    <?php
} else {
    header("Location: index.php");
    exit();
}
?>