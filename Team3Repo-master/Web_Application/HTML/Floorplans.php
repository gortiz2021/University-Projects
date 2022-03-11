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

    <link rel="stylesheet" href="../CSS/Floorplans.css">
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




    
        
        
        <br> <!-- USED TO VERTICALLY ALIGN CONTAINER-->
        <br>

    
       <div class = "container">

            <div class = "row">
                <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center" style = "border-left:3px solid black;border-top:3px solid black;border-right:3px solid black;"> <!-- Left Column -->
                </div>

                <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-transparent"> <!-- Left Column -->   
                </div>

                <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center" style = "border-left:3px solid black;border-top:3px solid black;border-right:3px solid black;"> <!-- Right Column -->
                    <hr class = "HRbold">
                        <span class = "text-responsive">Quickly Jump to a Specific Building <span>
                    <hr class = "HRbold">
                </div>
            </div>



            <div class = "row">

                <!-- =================================== Left Column ======================================= -->
                <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center" style = "border-left:3px solid black;border-bottom:3px solid black;border-right:3px solid black;">

                    <br>
                    
                    <img src="../Pictures/FSUBulldogLogo.png" alt="Fresno State Bulldog" width = "160" height = "120">
                    <hr class = "HRbold">
                        <span class = "text-responsive2">UNIVERSITY FLOORPLANS</span>
                    <hr class = "HRbold">
                    <img src="../Pictures/PWSlogo.jpeg" alt="PWS logo" width = "160" height = "150">

                    <br>
                    <br>
                    
                    
                    


                </div>

                 <!-- =================================== Mid Column ======================================= -->
                <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-transparent">
                </div>


                <!-- =================================== Right Column ====================================== -->
                <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 bg-white" style = "border-left:3px solid black;border-bottom:3px solid black;"> 
                        <ul class = "LinkUL">
                            <li class = "text-responsive3"><a href = "#AgricultureBuilding">- Agriculture</a></li>
                            <li class = "text-responsive3"><a href = "#AnimalScienceBuilding">- Animal Science</a></li>
                            <li class = "text-responsive3"><a href = "#ConleyArtBuilding">- Conley Art</a></li>
                            <li class = "text-responsive3"><a href = "#EngineeringEastBuilding">- Engineering East</a></li>
                            <li class = "text-responsive3"><a href = "#EngineeringWestBuilding">- Engineering West</a></li>
                            <li class = "text-responsive3"><a href = "#FamilyFoodScienceBuilding">- Family Food Science</a></li>
                            <li class = "text-responsive3"><a href = "#FoodAndAgresearchBuilding">- Food & Ag. Research</a></li>
                            <li class = "text-responsive3"><a href = "#FrankWThomasBuilding">- Frank W. Thomas</a></li>
                            <li class = "text-responsive3"><a href = "#GrosseIndustrialTechBuilding">- Grosse Industrial Tech.</a></li>
                            <li class = "text-responsive3"><a href = "#JordanAgResearchBuilding">- Jordan Ag. Research</a></li>
                            <li class = "text-responsive3"><a href = "#JoyalAdministrationBuilding">- Joyal Administration</a></li>
                            <li class = "text-responsive3"><a href = "#KremenEduHumDevlpBuilding">- Kremen Edu-Hum Devlpt</a></li>
                            <li class = "text-responsive3"><a href = "#McKeeFiskBuilding">- McKee Fisk</a></li>
                            <li class = "text-responsive3"><a href = "#McLaneHallBuilding">- Mclane Hall</a></li>
                            <li class = "text-responsive3"><a href = "#MusicBuilding">- Music</a></li>
                            <li class = "text-responsive3"><a href = "#NorthGym">- North Gym</a></li>
                            <li class = "text-responsive3"><a href = "#PetersBusinessBuilding">- Peters Business</a></li>                        
                        </ul>
                </div>

                <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 bg-white" style = "border-right:3px solid black;border-bottom:3px solid black;"> <!-- Right Column -->
                        <ul class = "LinkUL">
                            <li class = "text-responsive3"><a href = "#PhysicalTherapyAndIntercollegiateAthleticsBuilding">- Physical Therapy and Intercollegiate Athletics</a></li>
                            <li class = "text-responsive3"><a href = "#ProfessionalAndHumanServicesBuilding">- Professional and Human Services</a></li>
                            <li class = "text-responsive3"><a href = "#SatelliteStudentUnion">- Satellite Student Union</a></li>
                            <li class = "text-responsive3"><a href = "#Science1Building">- Science 1</a></li>
                            <li class = "text-responsive3"><a href = "#Science2Building">- Science 2</a></li>
                            <li class = "text-responsive3"><a href = "#SocialScienceBuilding">- Social Science</a></li>
                            <li class = "text-responsive3"><a href = "#SouthGym">- South Gym</a></li>
                            <li class = "text-responsive3"><a href = "#SpeechArtsBuilding">- Speech Arts</a></li>
                            <li class = "text-responsive3"><a href = "#TempLabSchool">- Temp. Lab School</a></li>
                            <li class = "text-responsive3"><a href = "#UniversityStudentUnionBuilding">- University Student Union</a></li>
                        </ul>
                </div>

            </div>


            <br><br>

       </div>
    </div>



   <div class = "parallax HenryMBackground"> <!-- MAIN DIV STARTS --> 

            <!-- =========================================================================================================== -->
            <!-- ======================================== Agriculture Building ============================================ -->
            <!-- =========================================================================================================== -->
            <!-- WHITE ACROSS DIV START-->
            <!-- <div class = "bg-white"> -->

                <a name = "AgricultureBuilding" ></a> <!-- ALLOWS THE JUMP TO-->

                <!-- CONTAINER OPEN-->
               <div class = "container"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Agriculture Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px; background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px; background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/Agriculture/AgFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/Agriculture/AgFloor1.png" alt="Agriculture 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/Agriculture/AgFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/Agriculture/AgFloor2.png" alt="Agriculture 2nd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->

            <!--</div> WHITE ACROSS DIV END-->



            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>



            <!-- =========================================================================================================== -->
            <!-- ======================================== Animal Science Building ========================================= -->
            <!-- =========================================================================================================== -->

                <a name = "AnimalScienceBuilding" ></a> <!-- ALLOWS THE JUMP TO-->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Animal Science Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw"> 
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/AnimalScience/AnimalSci_1st.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/AnimalScience/AnimalSci_1st.png" alt="Animal Science 1st Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->



            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ======================================== Conley Art Building ============================================ -->
            <!-- =========================================================================================================== -->

                <a name = "ConleyArtBuilding" ></a> <!-- ALLOWS THE JUMP TO             2 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Conley Art Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/ConleyArt/ConleyArtFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/ConleyArt/ConleyArtFloor1.png" alt="Conley Art 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/ConleyArt/ConleyArtFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/ConleyArt/ConleyArtFloor2.png" alt="Conley Art 2nd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->




            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ======================================== Engineering East Building ========================================= -->
            <!-- =========================================================================================================== -->

                <a name = "EngineeringEastBuilding" ></a> <!-- ALLOWS THE JUMP TO             3 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Engineering East Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/EngineeringEast/EEFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/EngineeringEast/EEFloor1.png" alt="Engineering East 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/EngineeringEast/EEFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/EngineeringEast/EEFloor2.png" alt="Engineering East 2nd Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 5 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">3rd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/EngineeringEast/EEFloor3.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/EngineeringEast/EEFloor3.png" alt="Engineering East 3rd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ======================================== Engineering West Building ========================================= -->
            <!-- =========================================================================================================== -->

                <a name = "EngineeringWestBuilding" ></a> <!-- ALLOWS THE JUMP TO             2 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Engineering West Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/EngineeringWest/EWFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/EngineeringWest/EWFloor1.png" alt="Engineering West 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">Engineering West Annex 1st Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/EngineeringWestAnnex/EWAnnexFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/EngineeringWestAnnex/EWAnnexFloor1.png" alt="Engineering West 2nd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ======================================= Family Food Science Building ===================================== -->
            <!-- =========================================================================================================== -->

                <a name = "FamilyFoodScienceBuilding" ></a> <!-- ALLOWS THE JUMP TO             3 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Family Food Science Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/FamilyFoodScience/FFSFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/FamilyFoodScience/FFSFloor1.png" alt="Family Food Science 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/FamilyFoodScience/FFSFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/FamilyFoodScience/FFSFloor2.png" alt="Family Food Science 2nd Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 5 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">3rd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/FamilyFoodScience/FFSFloor3.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/FamilyFoodScience/FFSFloor3.png" alt="Family Food Science 3rd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->



            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ==================================== Food and Ag. Research Building ======================================= -->
            <!-- =========================================================================================================== -->

                <a name = "FoodAndAgresearchBuilding" ></a> <!-- ALLOWS THE JUMP TO             1 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Food and Ag. Research</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/FoodAndAgResearch/FaARFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/FoodAndAgResearch/FaARFloor1.png" alt="Food and Ag. Research 1st Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ======================================== Frank W. Thomas Building ========================================= -->
            <!-- =========================================================================================================== -->

                <a name = "FrankWThomasBuilding" ></a> <!-- ALLOWS THE JUMP TO             1 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Frank W. Thomas Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/FrankWThomas/FWTFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/FrankWThomas/FWTFloor1.png" alt="Frank W. Thomas 1st Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->



            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ==================================== Grosse Industrial Tech Building ====================================== -->
            <!-- =========================================================================================================== -->

                <a name = "GrosseIndustrialTechBuilding" ></a> <!-- ALLOWS THE JUMP TO             2 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Grosse Industrial Tech Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/GrosseIndustrialTech/GITFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/GrosseIndustrialTech/GITFloor1.png" alt="Grosse Industrial Tech 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/GrosseIndustrialTech/GITFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/GrosseIndustrialTech/GITFloor2.png" alt="Grosse Industrial Tech 2nd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ======================================= Jordan Ag. Research Building ===================================== -->
            <!-- =========================================================================================================== -->

                <a name = "JordanAgResearchBuilding" ></a> <!-- ALLOWS THE JUMP TO             3 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Jordan Ag. Research Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/JordanAgriculturalResearchCenter/JARFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/JordanAgriculturalResearchCenter/JARFloor1.png" alt="Jordan Ag. Research 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/JordanAgriculturalResearchCenter/JARFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/JordanAgriculturalResearchCenter/JARFloor2.png" alt="Jordan Ag. Research 2nd Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 5 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">3rd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/JordanAgriculturalResearchCenter/JARFloor3.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/JordanAgriculturalResearchCenter/JARFloor3.png" alt="Jordan Ag. Research 3rd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->

            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ==================================== Joyal Administration Building ====================================== -->
            <!-- =========================================================================================================== -->

                <a name = "JoyalAdministrationBuilding" ></a> <!-- ALLOWS THE JUMP TO             2 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Joyal Administration Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/JoyalAdministration/JoyalAdmin_1st.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/JoyalAdministration/JoyalAdmin_1st.png" alt="Joyal Admin 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/JoyalAdministration/JoyalAdmin_2nd.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/JoyalAdministration/JoyalAdmin_2nd.png" alt="Joyal Admin 2nd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ================================= Kremen Education-Human Development ===================================== -->
            <!-- =========================================================================================================== -->

                <a name = "KremenEduHumDevlpBuilding" ></a> <!-- ALLOWS THE JUMP TO             5 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Kremen Education-Human Development Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">Basement  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/KremenEducationAndHumanDevelopment/KremenBasement.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/KremenEducationAndHumanDevelopment/KremenBasement.png" alt="Kremen Basement">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/KremenEducationAndHumanDevelopment/KremenFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/KremenEducationAndHumanDevelopment/KremenFloor1.png" alt="Kremen 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 5 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black;border-bottom:0px; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/KremenEducationAndHumanDevelopment/KremenFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/KremenEducationAndHumanDevelopment/KremenFloor2.png" alt="Kremen 2nd Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 6 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black;border-bottom:0px; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">3rd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/KremenEducationAndHumanDevelopment/KremenFloor3.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/KremenEducationAndHumanDevelopment/KremenFloor3.png" alt="Kremen 3rd Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 7 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">4th Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/KremenEducationAndHumanDevelopment/KremenFloor4.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/KremenEducationAndHumanDevelopment/KremenFloor4.png" alt="Kremen 4th Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ==================================== McKee Fisk Building ====================================== -->
            <!-- =========================================================================================================== -->

                <a name = "McKeeFiskBuilding" ></a> <!-- ALLOWS THE JUMP TO             2 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">McKee Fisk Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/McKeeFisk/MCFFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/McKeeFisk/MCFFloor1.png" alt="McKee Fisk 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/McKeeFisk/MCFFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/McKeeFisk/MCFFloor2.png" alt="McKee Fisk 2nd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ==================================== McLane Hall Building ====================================== -->
            <!-- =========================================================================================================== -->

                <a name = "McLaneHallBuilding" ></a> <!-- ALLOWS THE JUMP TO             2 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">McLane Hall Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/McLaneHall/McLaneFloor1All.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/McLaneHall/McLaneFloor1All.png" alt="McLane Hall (All) 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/McLaneHall/McLaneFloor2All.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/McLaneHall/McLaneFloor2All.png" alt="McLane Hall (All) 2nd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- =========================================== Music Building ================================================= -->
            <!-- =========================================================================================================== -->

                <a name = "MusicBuilding" ></a> <!-- ALLOWS THE JUMP TO             2 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Music Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/Music/NewMusic/MusicFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/Music/NewMusic/MusicFloor1.png" alt="Music 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/Music/NewMusic/MusicFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/Music/NewMusic/MusicFloor2.png" alt="Music 2nd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- =========================================== North Gym  ==================================================== -->
            <!-- =========================================================================================================== -->

                <a name = "NorthGym" ></a> <!-- ALLOWS THE JUMP TO             3 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">North Gym</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/NorthGym/NGFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/NorthGym/NGFloor1.png" alt="North Gym 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor Annex <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/NorthGym/NGFloor1Annex.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/NorthGym/NGFloor1Annex.png" alt="North Gym 1st Floor Annex">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 5 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/AnimalScience/AnimalSci_1st.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/AnimalScience/AnimalSci_1st.png" alt="Animal Science 1st Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ================================= Peters Business Building ================================================ -->
            <!-- =========================================================================================================== -->

                <a name = "PetersBusinessBuilding" ></a> <!-- ALLOWS THE JUMP TO             5 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Peters Business Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">Basement  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/PetersBusinessBuilding/PetersBasement.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/PetersBusinessBuilding/PetersBasement.png" alt="Peters Business Basement">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/PetersBusinessBuilding/PetersFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/PetersBusinessBuilding/PetersFloor1.png" alt="Peters Business 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 5 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black;border-bottom:0px; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/PetersBusinessBuilding/PetersFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/PetersBusinessBuilding/PetersFloor2.png" alt="Peters Business 2nd Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 6 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black;border-bottom:0px; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">3rd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/PetersBusinessBuilding/PetersFloor3.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/PetersBusinessBuilding/PetersFloor3.png" alt="Peters Business 3rd Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 7 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black;border-bottom:0px; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">4th Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/PetersBusinessBuilding/PetersFloor4.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/PetersBusinessBuilding/PetersFloor4.png" alt="Peters Business 4th Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 8 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">5th Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/PetersBusinessBuilding/PetersFloor5.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/PetersBusinessBuilding/PetersFloor5.png" alt="Peters Business 5th Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ========================== Physical Therapy and Intercollegiate Athletics ================================= -->
            <!-- =========================================================================================================== -->

                <a name = "PhysicalTherapyAndIntercollegiateAthleticsBuilding" ></a> <!-- ALLOWS THE JUMP TO             2 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Physical Therapy and Intercollegiate Athletics Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/PhysicalTherapyAndIntercollegiateAthletics/PTIAFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/PhysicalTherapyAndIntercollegiateAthletics/PTIAFloor1.png" alt="PTIA 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/PhysicalTherapyAndIntercollegiateAthletics/PTIAFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/PhysicalTherapyAndIntercollegiateAthletics/PTIAFloor2.png" alt="PTIA 2nd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ========================== Professional and Human Services Building ======================================== -->
            <!-- =========================================================================================================== -->

                <a name = "ProfessionalAndHumanServicesBuilding" ></a> <!-- ALLOWS THE JUMP TO             2 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Professional and Human Services Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/ProfessionalAndHumanServices/PHSFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/ProfessionalAndHumanServices/PHSFloor1.png" alt="P & HS 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/ProfessionalAndHumanServices/PHSFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/ProfessionalAndHumanServices/PHSFloor2.png" alt="P & HS 2nd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ================================= Satellite Student Union Building ======================================== -->
            <!-- =========================================================================================================== -->

                <a name = "SatelliteStudentUnion" ></a> <!-- ALLOWS THE JUMP TO             1 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Satellite Student Union Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>


                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/AnimalScience/AnimalSci_1st.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/SatelliteStudentUnion/SSU.png" alt="Satellite Student Union 1st Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- =========================================== Science 1 Building  ========================================== -->
            <!-- =========================================================================================================== -->

                <a name = "Science1Building" ></a> <!-- ALLOWS THE JUMP TO             3 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Science 1 Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/Science1/S1Floor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/Science1/S1Floor1.png" alt="Science1 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/Science1/S1Floor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/Science1/S1Floor2.png" alt="Science1 2nd Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 5 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">3rd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/Science1/S1Floor3.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/Science1/S1Floor3.png" alt="Science1 3rd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- =========================================== Science 2 Building  ========================================== -->
            <!-- ================================ FOR IMAGES THE USER SEES IN THE NAV PAGE ================================ -->
            <!-- =============================================USE A B C WINGS ============================================= -->

                <a name = "Science2Building" ></a> <!-- ALLOWS THE JUMP TO             3 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Science 2 Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/Science2/S2Floor1All.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/Science2/S2Floor1All.png" alt="Science2 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/Science2/S2Floor2All.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/Science2/S2Floor2All.png" alt="Science2 2nd Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 5 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">3rd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/Science2/S2Floor3All.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/Science2/S2Floor3All.png" alt="Science2 3rd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ======================================== Social Science Building ========================================== -->
            <!-- =========================================================================================================== -->

                <a name = "SocialScienceBuilding" ></a> <!-- ALLOWS THE JUMP TO             2 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Social Science Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/SocialScience/SSFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/SocialScience/SSFloor1.png" alt="Social Science 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/SocialScience/SSFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/SocialScience/SSFloor2.png" alt="Social Science 2nd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ================================= South Gym ======================================== -->
            <!-- =========================================================================================================== -->

                <a name = "SouthGym" ></a> <!-- ALLOWS THE JUMP TO             1 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">South Gym</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>


                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span>  <br> 
                            (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/AnimalScience/AnimalSci_1st.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/SouthGym/SGFloor1.png" alt="South Gym 1st Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->



            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ======================================== Speech Arts Building ========================================== -->
            <!-- =========================================================================================================== -->

                <a name = "SpeechArtsBuilding" ></a> <!-- ALLOWS THE JUMP TO             2 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Speech Arts Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/SpeechArts/SAFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/SpeechArts/SAFloor1.png" alt="Speech Arts 1st Floor">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor  <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/SpeechArts/SAFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/SpeechArts/SAFloor2.png" alt="Speech Arts 2nd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ================================= Temp. Lab School ======================================== -->
            <!-- =========================================================================================================== -->

                <a name = "TempLabSchool" ></a> <!-- ALLOWS THE JUMP TO             1 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4">Temp. Lab School</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>


                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor  <span>&#8594;</span> </span>  <br> 
                            (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/AnimalScience/AnimalSci_1st.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/TempLabSchool/TLSFloor1.png" alt="Temp. Lab School 1st Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->

            <br>
            <br>       <!--  USED FOR SPACING AND CREATING DEPTH  -->
            <br>
            <br>


            <!-- =========================================================================================================== -->
            <!-- ================================ University Student Union Building ======================================== -->
            <!-- =========================================================================================================== -->

                <a name = " UniversityStudentUnionBuilding" ></a> <!-- ALLOWS THE JUMP TO             2 -->

                <!-- CONTAINER OPEN-->
               <div class = "container" style = "border-collapse: collapse;"> 



                    <!-- ============================================== ROW 1 ============================================ -->
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white text-center" style = "border:3px solid black;">
                            <hr class = "HRbold">
                                <span class = "text-responsive4"> University Student Union Building</span>
                            <hr class = "HRbold">
                        </div>
                    </div>


                    <!-- ============================================== ROW 2 ============================================ --> 
                    <div class = "row">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center" style = "border-left:3px solid black; padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORS
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center" style = "border-left:3px solid black;border-right:3px solid black;padding:10px;background-color: #13284C; color:white;">
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                            FLOORPLANS 
                            <img src = "../Pictures/PAWfs.png" width= "20" height = "20" alt = "Paw">
                        </div>
                    </div>

                    <!-- ============================================== ROW 3 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; border-bottom:0px;">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">1st Floor (Food Court) <span>&#8594;</span> </span> <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/UniversityStudentUnion/USUFloor1.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/UniversityStudentUnion/USUFloor1.png" alt="USU 1st Floor (Food Court)">
                            </a>

                        </div>
                    </div>

                    <!-- ============================================== ROW 4 ============================================ -->
                    <div class = "row bg-white" style = "border: 3px solid black; ">
                        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-4 bg-white text-center my-auto">
                            <span class = "text-responsive4">2nd Floor (Above Food Court) <span>&#8594;</span> </span>  <br> (Click to Enlarge)
                        </div>

                        <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-white text-center" style = "border-left:3px solid black;">

                            <a href = "../BuildingFloorplans/PDFsnips/UniversityStudentUnion/USUFloor2.png" target="_blank">
                                <img  class = "img-thumbnail shadow rounded" width = "90%" height = "90%" src = "../BuildingFloorplans/PDFsnips/UniversityStudentUnion/USUFloor2.png" alt="USU 2nd Floor">
                            </a>

                        </div>
                    </div>
                </div>  <!-- CONTAINER CLOSE-->


            
    </div> <!-- MAIN DIV ENDS -->



    

    <footer>
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