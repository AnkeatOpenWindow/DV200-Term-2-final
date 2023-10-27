<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
  </head>

  <body>
        <?php include 'Navbar.php' ?>
            <div class="container">
                <div class="row">
                    <div class="col">
                    <h1 class="card-text" id="space">
                            Providing Quality Healthcare for a <br>
                            Brighter and Healthy Future
                        </h1>
                        <h4 class="card-text" id="space2">
                            At our clinic, we are dedicated to providing exceptional <br>
                            medical care to our patients and their needs.<br> 
                            Our experienced team of medical professionals, cutting-edge <br>
                            technology, and compassionate approach make us a leader <br>
                            in the healthcare industry
                        </h4>
                        <a href="Appointments.php">
                            <button type="button" class ="btn btn-info" >
                                <h5>Book appointment</h5>
                            </button>
                        </a>
                    </div>
                    <div class="col">
                    <div class="float-right">
                            <img src="images\Derek.jpg" width="300px">
                        </div><br>
                    </div>
                </div>
            </div>
            <div class="container">
                <table class="table">
                <h1 id="space">Appointments</h1>
                    <!-- i get the warning
                    Warning: Undefined array key "id" in C:\xampp\htdocs\DV200final\Doctors\read.php on line 10

                    Warning: Undefined array key "id" in C:\xampp\htdocs\DV200final\Doctors\read.php on line 10

                    Warning: Undefined array key "id" in C:\xampp\htdocs\DV200final\Doctors\read.php on line 10
                    -->
                        <thead class="thead-light">
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


            <div class="container">
                <h1 id="space">Meet some of our specialists</h1>
                <div class="row g-3">
                    <div class="col-4">
                        <div class="p-3 col text-center border border-info">
                            <h3>Dr. Derek Piano</h3>
                            <img src="images\Derek.jpg" width="200px" id="space">
                            <p class="text-left">
                                        Hi. I'm Doctor Piano and I specialize in one's Wrists muscles
                            </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 col text-center border border-info">
                            <h3>Dr. Calya Henry</h3>
                            <img src="images\Calya.jpg" width="187px"id="space">
                            <p class="text-left">
                                Hi. I'm Doctor Henry and I specialize in one's Back muscles
                            </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 col text-center border border-info">
                            <h3>Dr. Maddy Smith</h3>
                            <img src="images\Maddy.jpg" width="220px" id="space">
                            <p class="text-left">
                                Hi. I'm Doctor Smith and I specialize in one's Neck muscles
                            </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 col text-center border border-info">
                            <h3>Dr. Leo Dam</h3>
                            <img src="images\Leo.jpg" width="200px"id="space">
                            <p class="text-left">
                                Hi. I'm Doctor Dam and I specialize in one's Shoulders muscles
                            </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 col text-center border border-info">
                            <h3>Dr. Gabby Whitmore</h3>
                            <img src="images\Gabby.jpg" width="200px"id="space">
                            <p class="text-left">
                                Hi. I'm Doctor Whitmore and I specialize in one's Wrists muscles
                            </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 col text-center border border-info">
                            <h3>Dr. Jackie Xavier</h3>
                            <img src="images\Jakkie.jpg" width="200px"id="space">
                            <p class="text-left">
                                Hi. I'm Xavier Smith and I specialize in one's Neck muscles
                            </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 col text-center border border-info">
                            <h3>Dr. Rian Seth</h3>
                            <img src="images\Seth.jpg" width="200px"id="space">
                            <p class="text-left">
                                Hi. I'm Doctor Smith and I specialize in one's Feet muscles
                            </p>
                        </div>
                    </div>
                    
                </div>
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