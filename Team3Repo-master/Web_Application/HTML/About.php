<?php
session_start();
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, =4">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="../CSS/About.css">
    <title>FSU-PWS</title>

  </head>
  <body>
 

     <div class = "parallax" id = "TOP">
        <nav class = "navbar navbar-expand-md bg-dark" >
            <a class = "navbar-brand"><img src = "../Pictures/FresnoStateSeal.png" style = "height:5vh";></a>
            <span class = "navbar-text text-white" style = "padding:10px;">CSU Fresno Pathwalking</span>

            <button class = "navbar-toggler navbar-dark" data-toggle = "collapse" data-target = "#collapse_target">
                    <span class = "navbar-toggler-icon "></span>
            </button>
            <div class = "collapse navbar-collapse font-weight-bold bg-dark" id = "collapse_target">
                    <ul class = "navbar-nav mr-auto" >
                     </ul>
                     <ul class = "navbar-nav" >
                            <li class = "nav-item">
                                <a class = "nav-link" href = "Navigation.php" id = "NavHoverColor">Navigation</a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "Floorplans.php" id = "NavHoverColor">Floorplans</a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "About.php" id = "NavHoverColor">About</a>
                            </li>
                            <!--Sign up And Log in need special Attention -->
                            <li class = "nav-item">
                               <a class = "nav-link" id = "SignUpLogIn">
                                <?php
                                if(isset($_SESSION["username"]) == true){

                                 echo $_SESSION["username"];
                                }
                                else{
                                    echo '<a href="../PHP/Signup.php"><span>Sign Up</span></a>';
                                }
                                ?>
                            </a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" id = "SignUpLogIn">
                                <?php
                                if(isset($_SESSION["username"]) == true){
                                    echo '<a href="../PHP/Logout.php"><span>Log Out</span></a>';
                                }
                                else{
                                    echo '<a href="../PHP/Login.php"><span>Log In</span></a>';
                                }
                                ?>
                            </a>
                            </li>

                     </ul>
            </div>
       </nav>
       <br>
       <br>
       <br>
       <br>
       <br>

       <div class = "row" > <!-- TEXT IN CENTER -->
            <span  class = "col-12 text-center display-1 text-responsive" style = "color:white;-webkit-text-stroke-width: 2.7px;
            -webkit-text-stroke-color: black;font-family: Verdana, 'Arial', Times, serif;">Why FSU Pathwalking System?</span>
            <br><br><br><br><br><br><br><br><br><br>
            <span  class = "col-12 text-center text-responsive2" style = "color:white;-webkit-text-stroke-width: 2.7px;
            -webkit-text-stroke-color: black;font-family: Verdana, 'Arial', Times, serif;">- See Below -</span>
            <br>
            <img src="../Pictures/ArrowDown.png" class="mx-auto" height = "150">
        </div>

    </div>


        <div class = "container shadow">
            <br>
            <br>
            <h1 class = "text-center" style = "font-family: Georgia, 'Times New Roman', Times, serif;text-decoration: underline;font-style: italic;">About FSU Pathwalking System</h1>
            <div class = "row">
                <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <br><br>
                </div>
            </div>

            <div class = "row">
                <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <img src="../Pictures/FresnoStateSealFromBottom.jpg" class="shadow center-block img-fluid"><br>
                </div>
            </div>

            <br>

            <div class = "row">
                <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>

                <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center">
                    <p class = "TEXT_TIMES">
                        Stepping foot onto a large campus can be overwhelming at times. With new students and visitors stepping foot on campus each year, it is often the case that many individuals will feel lost at one point in time or another. FSU Pathwalking System (PWS) was created to help these indivudals not only search the specific location they are looking for, but also see in-depth, associative floorplan images to better give them a sense of direction. Now, anybody has the ability to have an easy campus naviagtion system to help guide them to where they need to go on Fresno State campus.
                    </p>
                    </div>

                <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
            </div>

            <br>
            <br>
            <hr>

            <div class = "row">
                <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <br><br>
                </div>
            </div>

            <div class = "row"> <!-- google maps app image row -->

                    <div class = "col-xl-1 col-lg-1 col-md-1 col-sm-1">
                    </div>

                    <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 my-auto">
                        <img src="../Pictures/MapsAppImage.jpeg" class="rounded-circle shadow-sm center-block img-fluid" alt="Google Maps App" 
                        width = "450" height = "350">
                    </div>

                
                    <div class = "col-xl-1 col-lg-1 col-md-1 col-sm-1">
                    </div>

                    <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-5">
                        <hr style = "border: 1px solid black;">

                            <p class = "TEXT_TIMES">
                                Built on top of Google Maps, FSU Pathwalking System (PWS) calculates and optomizes
                                the shortest route to the users destination of choice. With current defined paths for
                                transportation through campus, users can be sure to receive accurate route pathing.
                            </p>

                        <hr style = "border: 1px solid black;">
                    </div>

                    <div class = "col-xl-1 col-lg-1 col-md-1 col-sm-1">
                    </div>
            </div>

            <br><br><br><br><br>
            

            <div class = "row">
                <!-- text above transportation modes -->
                <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-3">
                </div>
                <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center">
                    <p class = "TEXT_TIMES">
                        FSU-PWS covers 3 modes of route calculations: walking, cycling, and driving. All paths 
                        are mapped accordingly.
                    </p>
                </div>
                <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-3">
                </div>
            </div>
            <div class = "row"> <!-- transportation modes -->
                <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
                <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-6 my-auto">
                    <img src="../Pictures/WalkBikeDrive.png" class=" center-block img-fluid" alt="Walk Bike Drive">
                </div>
                <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
            </div>

            <br><br><br><br><br>
            

            <div class = "row"> <!-- floorplans image row -->
                    <div class = "col-xl-1 col-lg-1 col-md-1 col-sm-1">
                    </div>

                    <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-5">
                        <hr style = "border: 1px solid black;">

                             <p class = "TEXT_TIMES">
                                With the integration of campus floorplans, there is now an additional layer provided to 
                                user to help aid them in locating their destination. Upon selecting and choosing to route to a given location, the respective floorplan shall be shown to the user, highlighting the location of desire. In doing this, the FSU-PWS removes the confusion of finding a specific room/location that may be had if the app simply only directed users to the building where a desired location is inside.
                            </p>

                        <hr style = "border: 1px solid black;">
                    </div>

                    <div class = "col-xl-1 col-lg-1 col-md-1 col-sm-1">
                    </div>


                    <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 my-auto">
                        <img src="../Pictures/MCFSnip.png" class="rounded-circle border border-dark shadow-sm center-block img-fluid" alt="Google Maps App" 
                        width = "450" height = "350">
                    </div>

                    <div class = "col-xl-1 col-lg-1 col-md-1 col-sm-1">
                    </div>
            </div>

            <br><br><br><br><br>

            <hr><br>

            <div class = "row">
                <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2">
                    
                    </div>

                <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <p class = "TEXT_TIMES">
                        "The ease of use for the user and accurate functionality as a whole are the foundational points FSU-PWS aims to build upon to create an experience like no other. Now, anybody can have the peace of mind knowing they have a tool to help them find their way around a large, bustling campus that is Fresno State." <br>
                        <span style = "float:right;">-FSU Pathwalking System Team</span>
                    </p>
                    </div>

                <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2">
                    
                    </div>
            </div>

            <br><hr><br><br><br><!-- BELOW IS USED FOR IMAGE LOGOS -->

            <div class = "row">
                <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <br>
                </div>
            </div>

            <div class = "row">
                <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 my-auto">
                    <img src="../Pictures/FresnoStateSeal.png" class="img-fluid"> 
                </div>
                <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 border-right">
                    <span style = "font-size: 15px; color:blue">California State University, Fresno</span><br>
                    <p style = "font-size: 10px;">
                        5241 N. Maple Ave. <br>
                        Fresno, CA 93740 <br>
                        P 5590.278.4240
                    </p>
                </div>
                <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 my-auto">
                    <img src="../Pictures/TheCSUwithColor.png" class="img-fluid"> 
                </div>
                <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 my-auto">
                    <img src="../Pictures/TheCSU.png" class="img-fluid">
                </div>
                <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 my-auto">
                    <img src="../Pictures/PWSlogo.jpeg" class="img-fluid">
                </div>
                <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 my-auto">
                    <img src="../Pictures/FSUBulldogLogo.png" class="img-fluid">
                </div>
            </div>

            <div class = "row">
                <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <br>
                </div>
            </div>


        </div>
    </div>
    

    <footer >
        <div class="copyright-area bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2020, All Right Reserved CSU Fresno Path Walking System</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu text-info">
                            <ul>
                                <li><a href="About.php">About</a></li>
                                <li><a href="Navigation.php">Navigation</a></li>
                                <li><a href="Floorplans.php">Floorplans</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>






    <!------------------------------------------------------>
    <!-- SCRIPTS USED AT END OF BODY ----------------------->
    <!------------------------------------------------------>

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGoLAT9d2u6M-HLkvUHh-o-VbfC-phA4U&callback=initMap&libraries=&v=weekly"></script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>