<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include '../PHP/db.php';
session_start();
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="../CSS/Navigation.css">

    <title>FSU-PWS</title>

  </head>
  <body>
 

    <nav class = "navbar navbar-expand-md bg-dark">
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
                                    echo '<a class = "nav-link" href = "../PHP/Signup.php"  id = "SignUpLogIn"><span>Sign Up</span></a>';
                                }
                                ?>
                            </a>
                        </li>
                        <li class = "nav-item">
                            <a class = "nav-link" id = "SignUpLogIn">
                                <?php
                                if(isset($_SESSION["username"]) == true){
                                    echo '<a class = "nav-link" href = "../PHP/Logout.php"  id = "SignUpLogIn"><span>Log Out</span></a>';
                                }
                                else{
                                    echo '<a class = "nav-link" href = "../PHP/Login.php"  id = "SignUpLogIn"><span>Log In</span></a>';
                                }
                                ?>
                            </a>
                        </li>

                 </ul>
        </div>
   </nav>


<!-- McKee-Fisk Room 208 (2nd Floor) -->
<!-- McKee-Fisk Room 209 (2nd Floor) -->
<!-- McKee-Fisk Room 210 (2nd Floor) -->
<!-- McKee-Fisk Room 211 (2nd Floor) -->
<!-- McKee-Fisk Room 212 (2nd Floor) -->
<!-- McKee-Fisk Room 213 (2nd Floor) -->


    <div class = "container-fluid" style = "padding-left: 2%;padding-right: 2%; padding-top: 2%; height: 75%;">
        <div class = "row" >
            <div class = "col-lg-6" >
                <div>

                    <!-- This will be the section where the google maps 'To' 'From' placed at (temp text in place at this moment) -->
                    <div  style="border:0;border: 4px solid black;height:12vh;background: yellow;">

                        <div style = "width:80%;  display:block; float:left; height:100%; background:white;" class = "border">

                        	<form autocomplete="off" action="/action_page.php">
                              <div class="autocomplete" style = "width:100%;height:50%;" >
                                <input id="myInput" type="text" name="myBuilding" placeholder="From: (Origin)">
                              </div>
                            </form>

                            <form autocomplete="off" action="/action_page.php">
                              <div class="autocomplete" style = "width:100%;height:50%;">
                                <input id="myInput2" type="text" name="myBuilding2" placeholder="To: (Destination)">
                              </div>
                            </form>

                        </div>

                        <div style = "width:20%;  display:block; float:left; height:100%;background:blue;">
                            <button id = "buttonCalc" style = "width:100%;height:100%;background:lightblue;border:none;outline:none;"> Click Here to Find Route </button>
                        </div>
                        
                    </div>

                    <div id = "map" style="border:0;border: 4px solid black;width:100%;height:61vh;background:white;">
                    <!-- This will be the section where the google maps is placed at (temp is in place at this moment) -->
                    
                    </div>

                </div>
            </div>
            <div class = "col-lg-6">
                <div>
                    <div style = "height:8vh;border: 4px solid black; background: white;" id = "ToTITLE">
                            Section Showing Location Name - Building - Room Number - Floor Level
                    </div>

                    <div style="border-left: 4px solid black;border-right: 4px solid black;height:57vh;background: white;" id = "ToFLOORPLAN">
                       Correlating Floor plan image will be placed here (based on what the user selects as their destination for the 'To')
                    </div>

                    <div style = "height:8vh;border: 4px solid black; background: white;" id = "ToNOTES">
                            Note Section:
                    </div>

                </div>
            </div>
        </div>
    </div>
   
    <br><br><br>

    <footer class = "fixed-bottom">
        <div class="copyright-area bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2020, All Right Reserved CSU Fresno Pathwalking</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu text-info">
                            <ul>
                                <li><a href="About.php">About</a></li>
                                <li><a href="Navigation.php">Navigation</a></li>
                                <li><a href="Floorplans.php">Floorplans</a></li>
                                <li><a href="#">Contact</a></li>
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

    <script type = "text/javascript" src= "../JS/NavigationJS.js"></script>
    <script type = "text/javascript" src= "../JS/SearchBarJS.js"></script>
   
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <!-- <script src="js/scripts.js"></script> -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGoLAT9d2u6M-HLkvUHh-o-VbfC-phA4U&callback=initMap&libraries=&v=weekly"></script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>