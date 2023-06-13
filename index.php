<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>

  <body>
        <?php include 'Navbar.php' ?>
        <div class="container">
            <div class="container-fluid">
                <div class="card-body" id="space">
                    <div class="right" >
                        <img src="images\Doc1.jpg" width="300px">
                    </div>
                    <h1 class="card-text" id="space">
                        Providing Quality Healthcare for a <br>
                        Brighter and Healthy Future
                    </h1>
                    <h4 class="card-text" id="space2">
                        At our hospital, we are dedicated to providing exceptional <br>
                        medical care to our patients and their needs.<br> 
                        Our experienced team of medical professionals, cutting-edge <br>
                        technology, and compassionate approach make us a leader <br>
                        in the healthcare industry
                    </h4>
                </div>
                <button class ="apointment-button">
                    <a href="Appointments.php">Appointments</a>
                </button>
            </div>
            <div class="doctors">
                <h1 id="space">Meet our specialists</h1>
                <div class="container">
                    <div class="row" >
                        <div class="col text-center" id="doctors">
                            <h3>Dr. Derek Piano</h3>
                            <img src="images\Doc1.jpg" width="200px" id="space">
                            <p class="text-left">
                                Hi. I'm Doctor Pian and I specialize in one's Wrists muscles
                            </p>
                        </div>
                        <div class="col text-center" id="doctors">
                            <h3>Dr. Calya Henry</h3>
                            <img src="images\Doc2.jpg" width="400px"id="space">
                            <p class="text-left">
                                Hi. I'm Doctor Henry and I specialize in one's Back muscles
                            </p>
                        </div>
                        <div class="col text-center" id="doctors">
                            <h3>Dr. Maddy Smith</h3>
                            <img src="images\Doc4.jpg" width="400px"id="space">
                            <p class="text-left">
                                Hi. I'm Doctor Smith and I specialize in one's Neck muscles
                            </p>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col text-center" id="doctors">
                            <h3>Dr. Leo Dam</h3>
                            <img src="images\Doc7.jpg" width="200px"id="space">
                            <p class="text-left">
                                Hi. I'm Doctor Dam and I specialize in one's Shoulders muscles
                            </p>
                        </div>
                        <div class="col text-center" id="doctors">
                            <h3>Dr. Gabby Whitmore</h3>
                            <img src="images\Doc5.jpg" width="200px"id="space">
                            <p class="text-left">
                                Hi. I'm Doctor Whitmore and I specialize in one's Wrists muscles
                            </p>
                        </div>
                        <div class="col text-center" id="doctors">
                            <h3>Dr. Jackie Xavier</h3>
                            <img src="images\Doc6.jpg" width="200px"id="space">
                            <p class="text-left">
                                Hi. I'm Xavier Smith and I specialize in one's Neck muscles
                            </p>
                        </div>
                    </div>
                    <div class="row justify-content-start" >
                        <div class="col text-center" id="doctors">
                            <h3>Dr. Rian Seth</h3>
                            <img src="images\Doc3.jpg" width="400px"id="space">
                            <p>
                                Hi. I'm Doctor Smith and I specialize in one's Feet muscles
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>







        </div>
        <?php include 'Footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>