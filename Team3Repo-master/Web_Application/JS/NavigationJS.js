    var map;
    var directionsService;
    var directionsDisplay;
    var currentPosition;
    var routeCount = [];
    var markers = [];
    var markernum = [];
    var prefRoute = 0;

    var ModeOfTransportation; //used for the walking, cycling, and driving button on map
    var ToFloorplan; // used for the Nav Page
    var ToNotes; // used for the Nav Page
    var ToTitle; // used for the Nav Page
  
  
  function initialize(){ 
    // Called to calculate current position each 'route'
    navigator.geolocation.getCurrentPosition(function(position){
      currentPosition = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    });
  }



  function initMap() {
      directionsService = new google.maps.DirectionsService;
      directionsDisplay = new google.maps.DirectionsRenderer;
      map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 36.812188, lng: -119.747827 },
        zoom: 16,
        streetViewControl: true

      });

      directionsDisplay.setMap(map);
      infoWindow = new google.maps.InfoWindow();
      initialize();
  }

  

    function calculateRoute(){


    //clear routes
    

      // variables for the building entrances lng and lat for the locations 
      // used on the map for start and end points
      var TITLE = document.getElementById("ToTITLE");
      var FLOORPLAN = document.getElementById("ToFLOORPLAN");
      var NOTES = document.getElementById("ToNOTES");

    

      //MISC LOCATIONS
    // Henry Madden Libray Entrace
    var HenryMaddenLibrary = new google.maps.LatLng(36.812161,-119.749151); // Main Entrance

    // Kennel Bookstore Entrance
    var KennelBookstoreMain = new google.maps.LatLng(36.812559,-119.747723); // Main Entrance

    // Campus Police Department
    var CampusPoliceDepartment = new google.maps.LatLng(36.815584,-119.748343); // North of Campus

    // Dining Hall Entrance
    var DiningHall = new google.maps.LatLng(36.811159,-119.751124); // Main Entrance

    // Fountain
    var CampusFountain = new google.maps.LatLng(36.812262,-119.747852); // Main Entrance

    // TACO BELL Entrance
    var OnCampusTacoBell = new google.maps.LatLng(36.812256,-119.748255); // Main Entrance

    // Fresno State Creamery
    var FresnoStateCreamery = new google.maps.LatLng(36.815774,-119.743524);

    // THE BUCKET Entrance
    var OnCampusTheBucket = new google.maps.LatLng(36.812157,-119.748390); 






    // Ag Building Entrances (by room)
    var AgScience1 = new google.maps.LatLng(36.813901,-119.746289); // NORTH
    var AgScience2 = new google.maps.LatLng(36.813787,-119.746746); // Stairwell West North
    var AgScience3 = new google.maps.LatLng(36.813522,-119.746739); // Stairwell West South
    var AgScience4 = new google.maps.LatLng(36.813703,-119.746312); // Stairwell Center Mid
    var AgScience5 = new google.maps.LatLng(36.813631,-119.746130); // Entrance East
    var AgScience6 = new google.maps.LatLng(36.813786,-119.746513); // Mid North Wing
    var AgScience7 = new google.maps.LatLng(36.813514,-119.746502); // Mid South Wing
    var AgScience8 = new google.maps.LatLng(36.813508,-119.746286); // SOUTH EAST Entrance (bot)

    // Conley Art Entrances
    var ConleyArt1 = new google.maps.LatLng(36.812214,-119.744086); // NORTH
    var ConleyArt2 = new google.maps.LatLng(36.811755,-119.744413); // WEST
    var ConleyArt3 = new google.maps.LatLng(36.811560,-119.743878); // SOUTH

    // Engineering West Entrances
    var EngineeringWest1 = new google.maps.LatLng(36.814242,-119.750139); // SOUTH
    var EngineeringWest2 = new google.maps.LatLng(36.814658,-119.750130); // NORTH
    var EngineeringWest3 = new google.maps.LatLng(36.814360,-119.749173); // EAST

    // Engineering East Entrances
    var EngineeringEast1 = new google.maps.LatLng(36.814485,-119.748680); // WEST^North
    var EngineeringEast2 = new google.maps.LatLng(36.814426,-119.748677); // WEST^South
    var EngineeringEast3 = new google.maps.LatLng(36.814288,-119.748058); // SOUTH^West
    var EngineeringEast4 = new google.maps.LatLng(36.814280,-119.748000); // SOUTH^East
    var EngineeringEast5 = new google.maps.LatLng(36.814495,-119.747404); // EAST

    //Family Food Science Entrances
    var FamilyFoodScience1 = new google.maps.LatLng(36.813099,-119.750768); // WEST
    var FamilyFoodScience2 = new google.maps.LatLng(36.812973,-119.750583); // SOUTH
    var FamilyFoodScience3 = new google.maps.LatLng(36.813304,-119.750479); // NORTH
    var FamilyFoodScience4 = new google.maps.LatLng(36.812966,-119.750019); // EAST

    // Frank W. Thomas Entrances
    var ThomasBuilding1 = new google.maps.LatLng(36.813856,-119.746818); // WEST
    var ThomasBuilding2 = new google.maps.LatLng(36.812710,-119.746168); // EAST
    var ThomasBuilding3 = new google.maps.LatLng(36.812401,-119.746225); // SOUTH

    // Industrial Technologies Entrances
    var IndustrialTech1 = new google.maps.LatLng(36.814791,-119.750130); // SOUTH
    var IndustrialTech2 = new google.maps.LatLng(36.814852,-119.750257); // Elevator
    var IndustrialTech3 = new google.maps.LatLng(36.814812,-119.749419); // Stairs^East
    var IndustrialTech4 = new google.maps.LatLng(36.815470,-119.750245); // by112South
    var IndustrialTech5 = new google.maps.LatLng(36.815562,-119.750104); // by112North
    var IndustrialTech6 = new google.maps.LatLng(36.815391,-119.750468); // WEST^South
    var IndustrialTech7 = new google.maps.LatLng(36.815570,-119.750455); // WEST^North
    var IndustrialTech8 = new google.maps.LatLng(36.815608,-119.749655); // Elevator^NorthEast

    // Jordan Ag Research Center
    var JordanAgResearchCenter = new google.maps.LatLng(36.815520,-119.740718); // Main Entrance WEST

    // Joyal Administration Building
    var Joyal_Admin_Main = new google.maps.LatLng(36.811054,-119.744770);
    var Joyal_Admin_RearNorth = new google.maps.LatLng(36.811260,-119.744193);
    var Joyal_Admin_RearSouth = new google.maps.LatLng(36.810825,-119.744210);

    // Kremen Education Entrances
    var KremenEducation1 = new google.maps.LatLng(36.809756,-119.747054); // WEST
    var KremenEducation2 = new google.maps.LatLng(36.809760,-119.746493); // Center^WEST
    var KremenEducation3 = new google.maps.LatLng(36.809687,-119.746348); // Center^SOUTH
    var KremenEducation4 = new google.maps.LatLng(36.809764,-119.746304); // Center^EAST
    var KremenEducation5 = new google.maps.LatLng(36.809564,-119.746230); // EAST^South
    var KremenEducation6 = new google.maps.LatLng(36.809718,-119.746004); // EAST^North

      //Mckee Fisk Entrances
    var MckeeFisk1 = new google.maps.LatLng(36.813857,-119.749929); // WEST
    var MckeeFisk2 = new google.maps.LatLng(36.813756,-119.749134); // EAST
    var MckeeFisk3 = new google.maps.LatLng(36.813350,-119.749246); // SOUTH/MID near middle
    var MckeeFisk4 = new google.maps.LatLng(36.813775,-119.749500); // SOUTH(Absolute)

    // Mclane Hall Entrances (Based on classroom geolocations)
    var MclaneHall1 = new google.maps.LatLng(36.813677,-119.747887); // Top
    var MclaneHall2 = new google.maps.LatLng(36.813539,-119.748582); // Stairs West North
    var MclaneHall3 = new google.maps.LatLng(36.813254,-119.748606); // Stairs West South
    var MclaneHall4 = new google.maps.LatLng(36.813533,-119.747170); // Stairs East North
    var MclaneHall5 = new google.maps.LatLng(36.813254,-119.747170); // Stairs East South- Smittcamp College
    var MclaneHall6 = new google.maps.LatLng(36.813242,-119.747952); // Stairs South Mid Mid
    var MclaneHall7 = new google.maps.LatLng(36.813545,-119.748257); // West North Wing Center
    var MclaneHall8 = new google.maps.LatLng(36.813260,-119.748225); // West South Wing Center
    var MclaneHall9 = new google.maps.LatLng(36.813530,-119.747490); // East North Wing Center
    var MclaneHall10 = new google.maps.LatLng(36.813265,-119.747570); // East South(mid) Wing Center
    var MclaneHall11 = new google.maps.LatLng(36.813527,-119.747783); // Stairs Mid North Wing Center
    var MclaneHall12 = new google.maps.LatLng(36.812909,-119.747886); // Bottom South
    var MclaneHall13 = new google.maps.LatLng(36.813008,-119.747138); // East Bottom Entrance
    var MclaneHall14 = new google.maps.LatLng(36.813200,-119.747270); // J wing entrance

    // Music
    var Music1 = new google.maps.LatLng(36.810680,-119.746433); // Bottom West
    var Music2 = new google.maps.LatLng(36.810700,-119.745970); // Bottom East
    var Music3 = new google.maps.LatLng(36.811010,-119.745970); // Middle East
    var Music4 = new google.maps.LatLng(36.811270,-119.746010); // Middle Top East
    var Music5 = new google.maps.LatLng(36.811530,-119.746070); // Top

    // North Gym Entrances
    var NorthGym1 = new google.maps.LatLng(36.813866,-119.751379); // Main Entrance
    var NorthGymAnnex1 = new google.maps.LatLng(36.813905,-119.751739); // Main Entrance

    // Peters Business Building Entrances
    var PetersBusiness1 = new google.maps.LatLng(36.812515,-119.743332); // South/Center Stairs/Elevator
    var PetersBusiness2 = new google.maps.LatLng(36.812570,-119.743935); // West Stairs on South Side
    var PetersBusiness3 = new google.maps.LatLng(36.812800,-119.743937); // West Stairs on North Side
    var PetersBusiness4 = new google.maps.LatLng(36.812610,-119.742773); // East Side, has stairs
    var PetersBusiness5 = new google.maps.LatLng(36.812782,-119.743038); // East/Center entrance (middle)
    var PetersBusiness6 = new google.maps.LatLng(36.812822,-119.743316); // North Center

    //Professional Human Services Entrances
    var ProfessionalHumanServices1 = new google.maps.LatLng(36.812964,-119.749958); // WEST
    var ProfessionalHumanServices2 = new google.maps.LatLng(36.812829,-119.749058); // EAST
    var ProfessionalHumanServices3 = new google.maps.LatLng(36.812771,-119.749399); // SOUTH
    var ProfessionalHumanServices4 = new google.maps.LatLng(36.813266,-119.749252); // NORTH

    // Satellite Student Union Entrances
    var SatelliteStudentUnion = new google.maps.LatLng(36.813170,-119.745276); // Middle of Campus

    // Science 1 Entrances
    var Science1_1 = new google.maps.LatLng(36.813499,-119.744578); // WEST
    var Science1_2 = new google.maps.LatLng(36.813656,-119.744069); // NORTH
    var Science1_3 = new google.maps.LatLng(36.813473,-119.744067); // SOUTH
    var Science1_4 = new google.maps.LatLng(36.813451,-119.743464); // EAST

    // Science 2 Entrances
    var Science2_1 = new google.maps.LatLng(36.814452,-119.743376); // WEST
    var Science2_2 = new google.maps.LatLng(36.814750,-119.743010); // NORTH
    var Science2_3 = new google.maps.LatLng(36.814830,-119.743204); // SOUTH
    var Science2_4 = new google.maps.LatLng(36.814420,-119.743804); // EAST
    var Science2_5 = new google.maps.LatLng(36.814936,-119.743851); // SOUTH
    var Science2_6 = new google.maps.LatLng(36.814743,-119.743622); // EAST

    //Social Sciences Entrances 
    var SocialScience1 = new google.maps.LatLng(36.813865,-119.750742); // WEST
    var SocialScience2 = new google.maps.LatLng(36.813529,-119.750611); // SOUTH
    var SocialScience3 = new google.maps.LatLng(36.813869,-119.750018); // EAST

    // South Gym Entrances
    var SouthGym1 = new google.maps.LatLng(36.812225,-119.751115); // South Closest Dorm Lot
    var SouthGym2 = new google.maps.LatLng(36.812407,-119.751053); // South East Closest Dorm Lot
    var SouthGym3 = new google.maps.LatLng(36.812708,-119.751147); // North East Sliding Doors
    var SouthGym4 = new google.maps.LatLng(36.812138,-119.746254); // North 
    var SouthGym5 = new google.maps.LatLng(36.812184,-119.751735); // South West Closest Dorm Lot

    // Speech Arts
    var SpeechArts1 = new google.maps.LatLng(36.811679,-119.747493); // West Entrance
    var SpeechArts2 = new google.maps.LatLng(36.811855,-119.747031); // West North Entrance
    var SpeechArts3 = new google.maps.LatLng(36.811923,-119.747489); // North Center Entrance
    var SpeechArts4 = new google.maps.LatLng(36.811679,-119.747493); // North North
    var SpeechArts5 = new google.maps.LatLng(36.811549,-119.746203); // South East Entrance

    // Temp Lab School
    var TempLabSchool1 = new google.maps.LatLng(36.809756,-119.748519); // West Entrance
    var TempLabSchool2 = new google.maps.LatLng(36.809967,-119.747895); // North 1st Layer
    var TempLabSchool3 = new google.maps.LatLng(36.809702,-119.747870); // North 2nd Layer
    var TempLabSchool4 = new google.maps.LatLng(36.809480,-119.747945); // North 3rd Layer

    // University Student Union Entrances
    //      For Future uses the multiple entrances can be for use when calculating 
    //      the From long and lat to give a more optimal shorter route
    //      The optimal will check which entrance is more optimal based on starting location
    var USU1 = new google.maps.LatLng(36.812923,-119.748377); // 1stFloor North
    var USU2 = new google.maps.LatLng(36.812730,-119.748632); // 1stFloor West
    var USU3 = new google.maps.LatLng(36.812735,-119.748186); // 1stFloor East
    var USU4 = new google.maps.LatLng(36.812548,-119.748404); // 1stFloor South
    var USU5 = new google.maps.LatLng(36.812881,-119.748007); // Stairs to Bot North
    var USU6 = new google.maps.LatLng(36.812577,-119.748098); // Stairs to Bot South
    var USU7 = new google.maps.LatLng(36.812318,-119.748400); // Stairs to Bot South (MAIN STAIRS) PANDA SUBWAYS ETC.



    //setting input1 and input2 to the values from the search bars
    Input1 = document.getElementById('myInput').value; // To
    Input2 = document.getElementById('myInput2').value; // From



                    //used to test the inputs are being received
                    console.log(Input1);
                    console.log(Input2);



    // Starts at the fountain as default parameters
    // Will need to add alert if 1 or both To and From boxes are empty
    // User will need to have both search bars complete with correct locations before they can proceed
    // Any user input strings that are not identified will alert with (Please Use Defined Locations Only)
    var START = new google.maps.LatLng(36.812190,-119.747827);
    var END = new google.maps.LatLng(36.812188,-119.747827);

    



    // NEW
    switch(Input1){

      case "Current Location":
        console.log("Current Location");
        console.log("initialize hit");
        console.log(currentPosition);
        START = currentPosition;
        break;

      case "Joyal Administration":
        START = Joyal_Admin_Main;
        break;

      // AG SCIENCE BUILDING
      case "Agricultural Sciences 105":
      case "Agricultural Sciences 106":
      case "Agricultural Sciences 107":
      case "Agricultural Sciences 108":
      case "Agricultural Sciences 109":
      case "Agricultural Sciences 110":
        START = AgScience1;
        break;
      case "Agricultural Sciences 116":
      case "Agricultural Sciences 118":
      case "Agricultural Sciences 232":
      case "Agricultural Sciences 234":
      case "Agricultural Sciences 236":
      case "Agricultural Sciences 238":
      case "Agricultural Sciences 240":
      case "Agricultural Sciences 242":
        START = AgScience2;
        break;
      case "Agricultural Sciences 115":
      case "Agricultural Sciences 117":
      case "Agricultural Sciences 119":
      case "Agricultural Sciences 221":
      case "Agricultural Sciences 223":
      case "Agricultural Sciences 225":
      case "Agricultural Sciences 227":
      case "Agricultural Sciences 229":
        START = AgScience3;
        break;
      case "Agricultural Sciences 220":
      case "Agricultural Sciences 222":
      case "Agricultural Sciences 224":
      case "Agricultural Sciences 226":
      case "Agricultural Sciences 228":
      case "Agricultural Sciences 230":
      case "Agricultural Sciences 243":
      case "Agricultural Sciences 244":
        START = AgScience4;
        break;
      case "Agricultural Sciences 100":
      case "Agricultural Sciences 102":
      case "Agricultural Sciences 103":
      case "Agricultural Sciences 104":
        START = AgScience5;
        break;
      case "Agricultural Sciences 112":
      case "Agricultural Sciences 114":
        START = AgScience6;
        break;
      case "Agricultural Sciences 111":
      case "Agricultural Sciences 113":
        START = AgScience7;
        break;
      case "Agricultural Sciences 101":
        START = AgScience8;
        break;


      // CONLEY ART BUILDING
      case "Conley Art 101":
      case "Conley Art 103":
      case "Conley Art 104":
      case "Conley Art 105":
      case "Conley Art 106":
      case "Conley Art 107":
      case "Conley Art 108":
        START = ConleyArt1;
        break;
      case "Conley Art 110":
      case "Conley Art 111":
      case "Conley Art 112":
      case "Conley Art 113":
      case "Conley Art 115":
      case "Conley Art 210":
      case "Conley Art 211":
      case "Conley Art 212":
      case "Conley Art 213":
      case "Conley Art 215":
      case "Conley Art 217":
      case "Conley Art 219":
      case "Conley Art 221":
      case "Conley Art 223":
        START = ConleyArt2;
        break;
      case "Conley Art 116":
      case "Conley Art 122":
      case "Conley Art 123":
      case "Conley Art 124":
      case "Conley Art 129":
      case "Conley Art 131":
      case "Conley Art 132":
      case "Conley Art 133":
      case "Conley Art 134":
      case "Conley Art 135":
      case "Conley Art 136":
      case "Conley Art 137":
      case "Conley Art 214":
      case "Conley Art 216":
      case "Conley Art 218":
      case "Conley Art 220":
      case "Conley Art 222":
      case "Conley Art 224":
      case "Conley Art 225":
      case "Conley Art 226":
      case "Conley Art 227":
      case "Conley Art 228":
      case "Conley Art 229":
      case "Conley Art 231":
      case "Conley Art 233":
      case "Conley Art 235":
      case "Conley Art 237":
      case "Conley Art 239":
      case "Conley Art 241":
        START = ConleyArt3;
        break;



      // ENGINEERING WEST BUILDING
      case "Engineering West 105":
      case "Engineering West 106":
      case "Engineering West 107":
      case "Engineering West 108":
      case "Engineering West 109":
      case "Engineering West 120":
      case "Engineering West 121":
      case "Engineering West 122":
      case "Engineering West 123":
        START = EngineeringWest1;
        break;
      case "Engineering West 101":
      case "Engineering West 103":
      case "Engineering West 104":
      case "Engineering West 110":
      case "Engineering West 111":
      case "Engineering West 113":
      case "Engineering West 130":
      case "Engineering West 131":
      case "Engineering West 137":
      case "Engineering West 138":
        START = EngineeringWest2;
        break;
      case "Engineering West Annex 101":
      case "Engineering West Annex 102":
      case "Engineering West Annex 103":
      case "Engineering West 124":
      case "Engineering West 125A":
      case "Engineering West 125B":
      case "Engineering West 127":
      case "Engineering West 128":
      case "Engineering West 132":
      case "Engineering West 135":
      case "Engineering West 136":
        START = EngineeringWest3;
        break;



      // ENGINEERING EAST BUILDING
      case "Engineering East 101":
      case "Engineering East 102":
      case "Engineering East 103":
      case "Engineering East 105":
      case "Engineering East 106":
      case "Engineering East 107":
      case "Engineering East 108":
      case "Engineering East 201":
      case "Engineering East 202":
      case "Engineering East 205":
      case "Engineering East 206":
      case "Engineering East 207":
      case "Engineering East 208":
      case "Engineering East 209":
      case "Engineering East 213":
      case "Engineering East 214":
      case "Engineering East 217":
      case "Engineering East 218":
      case "Engineering East 220":
      case "Engineering East 221":
      case "Engineering East 222":
      case "Engineering East 223":
        START = EngineeringEast1;
        break;
      case "Engineering East 120":
      case "Engineering East 121":
      case "Engineering East 122":
      case "Engineering East 123":
      case "Engineering East 124":
      case "Engineering East 139":
      case "Engineering East 140":
        START = EngineeringEast2;
        break;
      case "Engineering East 104":
      case "Engineering East 109":
      case "Engineering East 110":
      case "Engineering East 111":
      case "Engineering East 112":
      case "Engineering East 113":
      case "Engineering East 114":
      case "Engineering East 115":
      case "Engineering East 125":
      case "Engineering East 126":
      case "Engineering East 127":
      case "Engineering East 128":
      case "Engineering East 129":
      case "Engineering East 130":
      case "Engineering East 131":
      case "Engineering East 132":
      case "Engineering East 133":
      case "Engineering East 135":
      case "Engineering East 203":
      case "Engineering East 204":
      case "Engineering East 210":
      case "Engineering East 211":
      case "Engineering East 212":
      case "Engineering East 224":
      case "Engineering East 226":
      case "Engineering East 228":
      case "Engineering East 229":
      case "Engineering East 231":
      case "Engineering East 232":
      case "Engineering East 233":
      case "Engineering East 234":
      case "Engineering East 235":
      case "Engineering East 236":
        START = EngineeringEast3;
        break;
      case "Engineering East 154":
      case "Engineering East 158":
      case "Engineering East 159":
      case "Engineering East 160":
      case "Engineering East 161":
      case "Engineering East 162":
      case "Engineering East 163":
      case "Engineering East 164":
      case "Engineering East 165":
      case "Engineering East 166":
      case "Engineering East 167":
      case "Engineering East 168":
      case "Engineering East 170":
      case "Engineering East 172":
      case "Engineering East 173":
      case "Engineering East 174":
      case "Engineering East 182":
      case "Engineering East 193":
      case "Engineering East 195":
      case "Engineering East 252":
      case "Engineering East 254":
      case "Engineering East 258":
      case "Engineering East 260":
      case "Engineering East 261":
      case "Engineering East 262":
      case "Engineering East 263":
      case "Engineering East 264":
      case "Engineering East 265":
      case "Engineering East 266":
      case "Engineering East 268":
      case "Engineering East 280":
      case "Engineering East 281":
      case "Engineering East 282":
      case "Engineering East 284":
      case "Engineering East 295":
      case "Engineering East 311":
      case "Engineering East 331":
      case "Engineering East 333":
      case "Engineering East 334":
      case "Engineering East 354":
      case "Engineering East 356":
      case "Engineering East 361":
      case "Engineering East 362":
      case "Engineering East 383":
        START = EngineeringEast4;
        break;
      case "Engineering East 176":
      case "Engineering East 178":
      case "Engineering East 183":
      case "Engineering East 184":
      case "Engineering East 185":
      case "Engineering East 186":
      case "Engineering East 187":
      case "Engineering East 188":
      case "Engineering East 189":
      case "Engineering East 190":
      case "Engineering East 191":
      case "Engineering East 192":
      case "Engineering East 194":
      case "Engineering East 196":
      case "Engineering East 198":
      case "Engineering East 199":
      case "Engineering East 270":
      case "Engineering East 272":
      case "Engineering East 274":
      case "Engineering East 275":
      case "Engineering East 276":
      case "Engineering East 278":
      case "Engineering East 283":
      case "Engineering East 285":
      case "Engineering East 286":
      case "Engineering East 287":
      case "Engineering East 288":
      case "Engineering East 289":
      case "Engineering East 290":
      case "Engineering East 292":
      case "Engineering East 294":
      case "Engineering East 296":
      case "Engineering East 298":
      case "Engineering East 363":
      case "Engineering East 368":
      case "Engineering East 374":
      case "Engineering East 376":
      case "Engineering East 385":
      case "Engineering East 387":
      case "Engineering East 390":
        START = EngineeringEast5;
        break;



      // FAMILY FOOD SCIENCE BUILDING
      case "Family Food Science 102":
      case "Family Food Science 103":
      case "Family Food Science 104":
      case "Family Food Science 130":
      case "Family Food Science 201":
      case "Family Food Science 202":
      case "Family Food Science 203":
      case "Family Food Science 204":
      case "Family Food Science 205":
      case "Family Food Science 206":
      case "Family Food Science 207":
      case "Family Food Science 208A":
      case "Family Food Science 214":
      case "Family Food Science 215":
      case "Family Food Science 216A":
      case "Family Food Science 216B":
      case "Family Food Science 300":
      case "Family Food Science 301":
      case "Family Food Science 302":
      case "Family Food Science 303":
      case "Family Food Science 304":
      case "Family Food Science 305":
      case "Family Food Science 306":
      case "Family Food Science 317":
      case "Family Food Science 318":
        START = FamilyFoodScience1;
        break;
      case "Family Food Science 105":
      case "Family Food Science 112":
        START = FamilyFoodScience2;
        break;
      case "Family Food Science 118":
      case "Family Food Science 119":
      case "Family Food Science 122":
      case "Family Food Science 123":
      case "Family Food Science 124":
      case "Family Food Science 125":
        START = FamilyFoodScience3;
        break;
      case "Family Food Science 107":
      case "Family Food Science 108":
      case "Family Food Science 110":
      case "Family Food Science 111":
      case "Family Food Science 208B":
      case "Family Food Science 209":
      case "Family Food Science 210":
      case "Family Food Science 211":
      case "Family Food Science 212A":
      case "Family Food Science 212B":
      case "Family Food Science 213":
      case "Family Food Science 308":
      case "Family Food Science 311":
      case "Family Food Science 312":
      case "Family Food Science 313":
      case "Family Food Science 314":
      case "Family Food Science 315":
      case "Family Food Science 316":
        START = FamilyFoodScience4;
        break;



      // FRANK W THOMAS BUILDING
      case "Frank W Thomas 100":
      case "Frank W Thomas 113":
      case "Frank W Thomas 115":
      case "Frank W Thomas 117":
      case "Frank W Thomas 121":
      case "Frank W Thomas 126":
      case "Frank W Thomas 128":
      case "Frank W Thomas 130":
      case "Frank W Thomas 132":
        START = ThomasBuilding1;
        break;
      case "Frank W Thomas 107":
      case "Frank W Thomas 109":
      case "Frank W Thomas 109A":
      case "Frank W Thomas 109B":
      case "Frank W Thomas 110":
      case "Frank W Thomas 110A":
      case "Frank W Thomas 111":
      case "Frank W Thomas 114":
      case "Frank W Thomas 116":
      case "Frank W Thomas 118":
      case "Frank W Thomas 119":
      case "Frank W Thomas 120":
      case "Frank W Thomas 122":
      case "Frank W Thomas 123":
      case "Frank W Thomas 124":
        START = ThomasBuilding2;
        break;
      case "Frank W Thomas 102":
      case "Frank W Thomas 103A":
      case "Frank W Thomas 103B":
      case "Frank W Thomas 103C":
      case "Frank W Thomas 103D":
      case "Frank W Thomas 103E":
      case "Frank W Thomas 103F":
      case "Frank W Thomas 104":
      case "Frank W Thomas 105":
        START = ThomasBuilding3;
        break;



      // INDUSTRIAL TECHNOLOGIES BUILDING
      case "Grosse Industrial Tech 117":
      case "Grosse Industrial Tech 119":
      case "Grosse Industrial Tech 121":
      case "Grosse Industrial Tech 123":
      case "Grosse Industrial Tech 125":
      case "Grosse Industrial Tech 152":
      case "Grosse Industrial Tech 154":
      case "Grosse Industrial Tech 156":
      case "Grosse Industrial Tech 288":
      case "Grosse Industrial Tech 290":
      case "Grosse Industrial Tech 292":
        START = IndustrialTech1;
        break;
      case "Industrial Tech Elevator": // single use location for elevator
        START = IndustrialTech2;
        break;
      case "Grosse Industrial Tech 158":
      case "Grosse Industrial Tech 160":
      case "Grosse Industrial Tech 294":
      case "Grosse Industrial Tech 296":
      case "Grosse Industrial Tech 298":
        START = IndustrialTech3;
        break;
      case "Grosse Industrial Tech 104":
      case "Grosse Industrial Tech 106":
      case "Grosse Industrial Tech 108":
      case "Grosse Industrial Tech 113":
      case "Grosse Industrial Tech 115":
        START = IndustrialTech4;
        break;
      case "Grosse Industrial Tech 110":
        START = IndustrialTech5;
        break;
      case "Grosse Industrial Tech 103":
      case "Grosse Industrial Tech 107":
      case "Grosse Industrial Tech 109":
      case "Grosse Industrial Tech 111":
        START = IndustrialTech6;
        break;
      case "Grosse Industrial Tech 101":
        START = IndustrialTech7;
        break;
      case "Grosse Industrial Tech 112":
      case "Grosse Industrial Tech 114":
      case "Grosse Industrial Tech 116":
      case "Grosse Industrial Tech 118":
      case "Grosse Industrial Tech 120":
      case "Grosse Industrial Tech 122":
      case "Grosse Industrial Tech 124":
      case "Grosse Industrial Tech 138":
      case "Grosse Industrial Tech 140":
      case "Grosse Industrial Tech 144":
      case "Grosse Industrial Tech 204":
      case "Grosse Industrial Tech 208":
      case "Grosse Industrial Tech 210":
      case "Grosse Industrial Tech 212":
      case "Grosse Industrial Tech 214":
      case "Grosse Industrial Tech 216":
      case "Grosse Industrial Tech 218":
      case "Grosse Industrial Tech 220":
      case "Grosse Industrial Tech 228":
      case "Grosse Industrial Tech 230":
      case "Grosse Industrial Tech 232":
      case "Grosse Industrial Tech 234":
      case "Grosse Industrial Tech 236":
      case "Grosse Industrial Tech 238":
      case "Grosse Industrial Tech 240":
      case "Grosse Industrial Tech 242":
      case "Grosse Industrial Tech 244":
      case "Grosse Industrial Tech 246":
      case "Grosse Industrial Tech 248":
      case "Grosse Industrial Tech 250":
      case "Grosse Industrial Tech 252":
      case "Grosse Industrial Tech 254":
      case "Grosse Industrial Tech 256":
      case "Grosse Industrial Tech 258":
      case "Grosse Industrial Tech 260":
      case "Grosse Industrial Tech 262":
      case "Grosse Industrial Tech 264":
      case "Grosse Industrial Tech 268":
        START = IndustrialTech8;
        break;



      // JORDAN AG RESEARCH BUILDING
      case "Jordan Ag Research 108":
      case "Jordan Ag Research 110":
      case "Jordan Ag Research 112":
      case "Jordan Ag Research 114":
      case "Jordan Ag Research 116":
      case "Jordan Ag Research 118":
      case "Jordan Ag Research 120":
      case "Jordan Ag Research 122":
      case "Jordan Ag Research 208":
      case "Jordan Ag Research 210":
      case "Jordan Ag Research 212":
      case "Jordan Ag Research 213":
      case "Jordan Ag Research 214":
      case "Jordan Ag Research 216":
      case "Jordan Ag Research 218":
      case "Jordan Ag Research 220":
      case "Jordan Ag Research 223":
      case "Jordan Ag Research 308":
      case "Jordan Ag Research 310":
      case "Jordan Ag Research 313":
      case "Jordan Ag Research 314":
      case "Jordan Ag Research 316":
      case "Jordan Ag Research 318":
      case "Jordan Ag Research 320":
      case "Jordan Ag Research 321":
      case "Jordan Ag Research 322":
      case "Jordan Ag Research 323":
      case "Jordan Ag Research 324":
      case "Jordan Ag Research 326":
        START = JordanAgResearchCenter;
        break;



      // JOYAL ADMIN BUILDING
      case " ":
        START = Joyal_Admin_Main;
        break;
      case " ":
        START = Joyal_Admin_RearNorth;
        break;
      case " ":
        START = Joyal_Admin_RearSouth;
        break;



      // INDUSTRIAL TECHNOLOGIES BUILDING
      case " ":
        START = KremenEducation1;
        break;
      case " ":
        START = KremenEducation2;
        break;
      case " ":
        START = KremenEducation3;
        break;
      case " ":
        START = KremenEducation4;
        break;
      case " ":
        START = KremenEducation5;
        break;
      case " ":
        START = KremenEducation6;
        break;
  



      // MCKEE FISK BUILDING
      case "McKee-Fisk Room 204":
      case "McKee-Fisk Room 205":
      case "McKee-Fisk Room 206":
      case "McKee-Fisk Room 207":
      case "McKee-Fisk Room 208":
      case "McKee-Fisk Room 209":
      case "McKee-Fisk Room 210":
      case "McKee-Fisk Room 211":
      case "McKee-Fisk Room 212":
      case "McKee-Fisk Room 213":
      case "McKee-Fisk Room 214":
      case "McKee-Fisk Room 215":
      case "McKee-Fisk Room 216":
      case "McKee-Fisk Room 217":
      case "McKee-Fisk Room 218":
        START = MckeeFisk1;
        break;
      case "McKee-Fisk Room 201":
      case "McKee-Fisk Room 202":
      case "McKee-Fisk Room 203":
      case "McKee-Fisk Room 219":
      case "McKee-Fisk Room 227":
      case "McKee-Fisk Room 229":
      case "McKee-Fisk Room 230":
      case "McKee-Fisk Room 231":
      case "McKee-Fisk Room 243":
      case "McKee-Fisk Room 244":
      case "McKee-Fisk Room 245":
      case "McKee-Fisk Room 247":
      case "McKee-Fisk Room 255":
        START = MckeeFisk2;
        break;
      case "McKee-Fisk Room 106":
      case "McKee-Fisk Room 110":
      case "McKee-Fisk Room 135":
      case "McKee-Fisk Room 136":
      case "McKee-Fisk Room 137":
      case "McKee-Fisk Room 139":
      case "McKee-Fisk Room 141":
      case "McKee-Fisk Room 143":
      case "McKee-Fisk Room 145":
      case "McKee-Fisk Room 147":
      case "McKee-Fisk Room 149":
      case "McKee-Fisk Room 150":
      case "McKee-Fisk Room 151":
      case "McKee-Fisk Room 154":
      case "McKee-Fisk Room 158":
      case "McKee-Fisk Room 232":
      case "McKee-Fisk Room 233":
      case "McKee-Fisk Room 234":
      case "McKee-Fisk Room 235":
      case "McKee-Fisk Room 236":
      case "McKee-Fisk Room 237":
      case "McKee-Fisk Room 238":
      case "McKee-Fisk Room 240":
      case "McKee-Fisk Room 241":
      case "McKee-Fisk Room 242":
        START = MckeeFisk3;
        break;
      case "McKee-Fisk Room 111":
      case "McKee-Fisk Room 112":
      case "McKee-Fisk Room 113":
      case "McKee-Fisk Room 114":
      case "McKee-Fisk Room 115":
      case "McKee-Fisk Room 116":
      case "McKee-Fisk Room 117":
        START = MckeeFisk4;
        break;




      // MCLANE HALL BUILDING
      case "McLane Hall Room 162":
      case "McLane Hall Room 164":
        START = MclaneHall1;
        break;
      case "McLane Hall Room 103":
      case "McLane Hall Room 104":
      case "McLane Hall Room 202":
      case "McLane Hall Room 204":
      case "McLane Hall Room 209":
      case "McLane Hall Room 210":
      case "McLane Hall Room 211":
        START = MclaneHall2;
        break;
      case "McLane Hall Room 124":
      case "McLane Hall Room 126":
      case "McLane Hall Room 127":
      case "McLane Hall Room 129":
      case "McLane Hall Room 221":
      case "McLane Hall Room 222":
      case "McLane Hall Room 224":
      case "McLane Hall Room 225":
        START = MclaneHall3;
        break;
      case "McLane Hall Room 175":
      case "McLane Hall Room 258":
      case "McLane Hall Room 260":
      case "McLane Hall Room 261":
      case "McLane Hall Room 262":
      case "McLane Hall Room 264":
        START = MclaneHall4;
        break;
      case "McLane Hall Room 155":
      case "McLane Hall Room 157":
      case "McLane Hall Room 159":
      case "McLane Hall Room 200":
      case "McLane Hall Room 242":
      case "McLane Hall Room 243":
      case "McLane Hall Room 244":
      case "McLane Hall Room 247":
      case "McLane Hall Room 249":
      case "McLane Hall Room 251":
        START = MclaneHall5;
        break;
      case "McLane Hall Room 140":
      case "McLane Hall Room 144":
      case "McLane Hall Room 149":
      case "McLane Hall Room 161":
      case "McLane Hall Room 226":
      case "McLane Hall Room 229":
      case "McLane Hall Room 235":
      case "McLane Hall Room 238":
      case "McLane Hall Room 239":
      case "McLane Hall Room 240":
      case "McLane Hall Room 241":
        START = MclaneHall6;
        break;
      case "McLane Hall Room 109":
      case "McLane Hall Room 111":
      case "McLane Hall Room 121":
        START = MclaneHall7;
        break;
      case "McLane Hall Room 130":
      case "McLane Hall Room 132":
      case "McLane Hall Room 133":
      case "McLane Hall Room 134":
      case "McLane Hall Room 135":
        START = MclaneHall8;
        break;
      case "McLane Hall Room 167":
      case "McLane Hall Room 173":
      case "McLane Hall Room 174":
        START = MclaneHall9;
        break;
      case "McLane Hall Room 151":
      case "McLane Hall Room 152":
      case "McLane Hall Room 154":
        START = MclaneHall10;
        break;
      case "McLane Hall Room 212":
      case "McLane Hall Room 213":
      case "McLane Hall Room 214":
      case "McLane Hall Room 216":
      case "McLane Hall Room 218":
      case "McLane Hall Room 220":
      case "McLane Hall Room 254":
      case "McLane Hall Room 255":
      case "McLane Hall Room 257":
        START = MclaneHall11;
        break;
      case "McLane Hall Room 176":
      case "McLane Hall Room 177":
      case "McLane Hall Room 178":
      case "McLane Hall Room 179":
      case "McLane Hall Room 188":
      case "McLane Hall Room 189":
      case "McLane Hall Room 191":
      case "McLane Hall Room 193":
      case "McLane Hall Room 194":
      case "McLane Hall Room 276":
      case "McLane Hall Room 277":
      case "McLane Hall Room 288":
      case "McLane Hall Room 289":
      case "McLane Hall Room 290":
      case "McLane Hall Room 291":
      case "McLane Hall Room 292":
      case "McLane Hall Room 293":
      case "McLane Hall Room 294":
        START = MclaneHall12;
        break;
      case "McLane Hall Room 180":
      case "McLane Hall Room 182":
      case "McLane Hall Room 183":
      case "McLane Hall Room 184":
      case "McLane Hall Room 185":
      case "McLane Hall Room 186":
      case "McLane Hall Room 187":
      case "McLane Hall Room 278":
      case "McLane Hall Room 279":
      case "McLane Hall Room 280":
      case "McLane Hall Room 282A":
      case "McLane Hall Room 282B":
      case "McLane Hall Room 283":
      case "McLane Hall Room 283A":
      case "McLane Hall Room 284":
      case "McLane Hall Room 285":
      case "McLane Hall Room 286":
      case "McLane Hall Room 287":
        START = MclaneHall13;
        break;
      case "McLane Hall Room 10":
      case "McLane Hall Room 11":
      case "McLane Hall Room 12":
      case "McLane Hall Room 13":
      case "McLane Hall Room 14":
      case "McLane Hall Room 15":
      case "McLane Hall Room 16":
      case "McLane Hall Room 17":
      case "McLane Hall Room 18":
      case "McLane Hall Room 19":
      case "McLane Hall Room 20":
      case "McLane Hall Room 21":
      case "McLane Hall Room 22":
      case "McLane Hall Room 23":
      case "McLane Hall Room 24":
        START = MclaneHall14;
        break;



      // MUSIC BUILDING
      case " ":
        START = Music1;
        break;
      case " ":
        START = Music2;
        break;
      case " ":
        START = Music3;
        break;
      case " ":
        START = Music4;
        break;
      case " ":
        START = Music5;
        break;



      // NORTH GYM BUILDING
      case " ":
        START = NorthGym1; // NORTH GYM MAIN
        break;
      case " ":
        START = NorthGymAnnex1; // NORTH GYM ANNEX
        break; 



      // PETERS BUSINESS BUILDING
      case " ":
        START = PetersBusiness1;
        break;
      case " ":
        START = PetersBusiness2;
        break;
      case " ":
        START = PetersBusiness3;
        break;
      case " ":
        START = PetersBusiness4;
        break;
      case " ":
        START = PetersBusiness5;
        break;
      case " ":
        START = PetersBusiness6;
        break;



      // PROF HUMAN SERVICES BUILDING
      case " ":
        START = ProfessionalHumanServices1;
        break;
      case " ":
        START = ProfessionalHumanServices2;
        break;
      case " ":
        START = ProfessionalHumanServices3;
        break;
      case " ":
        START = ProfessionalHumanServices4;
        break;



      // SSU
      case " ":
        START = SatelliteStudentUnion;
        break;



      // SCIENCE 1 BUILDING
      case " ":
        START = Science1_1;
        break;
      case " ":
        START = Science1_2;
        break;
      case " ":
        START = Science1_3;
        break;
      case " ":
        START = Science1_4;
        break;



      // SCIENCE 2 BUILDING
      case " ":
        START = Science2_1;
        break;
      case " ":
        START = Science2_2;
        break;
      case " ":
        START = Science2_3;
        break;
      case " ":
        START = Science2_4;
        break;
      case " ":
        START = Science2_5;
        break;
      case " ":
        START = Science2_6;
        break;



      // SOCIAL SCIENCE BUILDING
      case "Social Science 101":
      case "Social Science 102":
      case "Social Science 103":
      case "Social Science 111":
      case "Social Science 112":
      case "Social Science 113":
      case "Social Science 114":
      case "Social Science 115":
      case "Social Science 129":
      case "Social Science 201":
      case "Social Science 202":
      case "Social Science 203":
      case "Social Science 210":
      case "Social Science 211":
      case "Social Science 212":
      case "Social Science 213":
      case "Social Science 226A":
      case "Social Science 227":
        START = SocialScience1;
        break;
      case "Social Science 116":
      case "Social Science 117":
      case "Social Science 118":
      case "Social Science 119":
      case "Social Science 120":
      case "Social Science 121":
      case "Social Science 123":
      case "Social Science 124":
      case "Social Science 125":
      case "Social Science 126":
      case "Social Science 127":
      case "Social Science 128":
      case "Social Science 215":
      case "Social Science 216":
      case "Social Science 217":
      case "Social Science 218":
      case "Social Science 219":
      case "Social Science 220":
      case "Social Science 221":
      case "Social Science 222":
      case "Social Science 223":
      case "Social Science 224":
      case "Social Science 225":
      case "Social Science 226":
        START = SocialScience2;
        break;
      case "Social Science 104":
      case "Social Science 105":
      case "Social Science 106":
      case "Social Science 108":
      case "Social Science 109":
      case "Social Science 110":
      case "Social Science 204":
      case "Social Science 205A":
      case "Social Science 205B":
      case "Social Science 207":
      case "Social Science 208":
      case "Social Science 209A":
      case "Social Science 209B":
        START = SocialScience3;
        break;



      // SOUTH GYM BUILDING
      case "South Gym 101":
      case "South Gym 102":
      case "South Gym 104":
        START = SouthGym1;
        break;
      case "South Gym 109":
      case "South Gym 112":
      case "South Gym 113":
      case "South Gym 114":
      case "South Gym 115":
        START = SouthGym2;
        break;
      case "South Gym 116":
      case "South Gym 117":
      case "South Gym 120":
      case "South Gym 121":
        START = SouthGym3;
        break;
      case "South Gym 124":
      case "South Gym 125":
      case "South Gym 126":
      case "South Gym 127":
      case "South Gym 128":
      case "South Gym 129":
      case "South Gym 130":
      case "South Gym 131":
      case "South Gym 132":
      case "South Gym 133":
      case "South Gym 134":
      case "South Gym 136":
      case "South Gym 137":
      case "South Gym 139":
      case "South Gym 141":
      case "South Gym 142":
        START = SouthGym4;
        break;
      case "South Gym 143":
      case "South Gym 145":
      case "South Gym 149":
      case "South Gym 150":
      case "South Gym 153":
        START = SouthGym5;
        break;



      // SPEECH ARTS BUILDING
      case " ":
        START = SpeechArts1;
        break;
      case " ":
        START = SpeechArts2;
        break;
      case " ":
        START = SpeechArts3;
        break;
      case " ":
        START = SpeechArts4;
        break;
      case " ":
        START = SpeechArts5;
        break;



      // TEMP LAB SCHOOL
      case "Lab School 100":
      case "Lab School 101":
      case "Lab School 102":
      case "Lab School 108":
      case "Lab School 110":
      case "Lab School 112":
      case "Lab School 116":
      case "Lab School 117":
      case "Lab School 118":
      case "Lab School 119":
      case "Lab School 120":
      case "Lab School 121":
      case "Lab School 122":
      case "Lab School 123":
      case "Lab School 124":
      case "Lab School 125":
      case "Lab School 126":
      case "Lab School 185":
      case "Lab School 187":
      case "Lab School 188":
        START = TempLabSchool1;
        break;
      case "TEMPLABSCHOOL2":
        START = TempLabSchool2;
        break;
      case "Lab School 130":
      case "Lab School 131":
      case "Lab School 132":
      case "Lab School 133":
      case "Lab School 158":
      case "Lab School 159":
        START = TempLabSchool3;
        break;
      case "Lab School 134":
      case "Lab School 135":
      case "Lab School 136":
      case "Lab School 137":
      case "Lab School 163":
      case "Lab School 164":
      case "Lab School 166":
      case "Lab School 167":
      case "Lab School 169":
      case "Lab School 170":
      case "Lab School 171":
      case "Lab School 173":
      case "Lab School 176":
      case "Lab School 177":
      case "Lab School 178":
      case "Lab School 181":
      case "Lab School 182":
      case "Lab School 184":
        START = TempLabSchool4;
        break;



      // USU cases are same as variable names as placeholders
      case "USU1":
        START = USU1;
        break;
      case "USU2":
        START = USU2;
        break;
      case "USU3":
        START = USU3;
        break;
      case "USU4":
        START = USU4;
        break;
      case "USU5":
        START = USU5;
        break;
      case "USU6":
        START = USU6;
        break;
      case "Panda Express (On Campus)":
      case "Subway (On Campus)":
      case "Robertito's Taco (On Campus)":
      case "Taco Bell (On Campus)":
      case "Juice It Up! (On Campus)":
      case "Bulldog Bowl":
        START = USU7;
        break;


        // DINING HALL
      case "University Dining Hall":
      case "Dining Hall":
        START = DiningHall;
        break;

        // HENRY MADDEN LIBRARY
      case "Henry Madden Library":
      case "Library (On Campus)":
        START = HenryMaddenLibrary;
        break;

      // CAMPUS POLICE DEPARTMENT
      case "Police Department (On Campus)":
        START = CampusPoliceDepartment;
        break;

        // KENNEL BOOKSTORE
      case "Kennel Bookstore":
        START = KennelBookstoreMain;
        break;

        // BULLDOG TESTING AND TACO BELL (SAME LOCATION)
      case "Bulldog Testing Center":
      case "Taco Bell (On Campus)":
        START = OnCampusTacoBell;
        break;


        // FOUNTAIN CENTER OF CAMPUS
      case "Fountain":
        START = CampusFountain;
        break;


        //CREAMERY
      case "Fresno State Creamery":
        START = FresnoStateCreamery;
        break;

          //THE BUCKET
      case "The Bucket (On Campus)":
        START = OnCampusTheBucket;
        break;


    } // END OF SWITCH STATEMENT 1

    switch(Input2){
      //test example
      case "McKee-Fisk Room 208 (2nd Floor)":
        console.log("Input1 = 1");
        END = MckeeFisk1;
        FLOORPLAN.innerHTML = "<img width = \"100%\" height = \"100%\" src = \"../BuildingFloorplans/PDFsnips/McKeeFisk/MCFFloor2.png \">"
        TITLE.innerHTML = "<div width = \"100%\" height = \"100%\" class = \"text-center\" style = \"vertical-align: middle;margin-top:1%;font-size: calc(1% + 1vw + 1vh);\">McKee-Fisk Room 208 (2nd Floor)</div>";
        NOTES.innerHTML = "<div width = \"100%\" height = \"100%\" style = \"font-size: calc(.5% + .75vw + .75vh);margin-left:3px;\">Take the 1st floor stairs or the elevator up to the 2nd floor. Room 208 will be the first room on the left.";
        break;
      case "McKee-Fisk Room 201 (2nd Floor)":
      case "McKee-Fisk Room 202 (2nd Floor)":
      case "McKee-Fisk Room 203 (2nd Floor)":
      case "McKee-Fisk Room 204 (2nd Floor)":
      case "McKee-Fisk Room 205 (2nd Floor)":
      case "McKee-Fisk Room 206 (2nd Floor)":
      case "McKee-Fisk Room 207 (2nd Floor)":
      case "McKee-Fisk Room 209 (2nd Floor)":
      case "McKee-Fisk Room 210 (2nd Floor)":
        console.log("Input2 = 1");
        END = MckeeFisk1;
        break;
      case "2":
        console.log("Input2 = 2");
        END = MckeeFisk2;
        break;
      case "Joyal Administration":
        console.log("Input2 = 3");
        END = Joyal_Admin_Main;
        break;
      case "4":
        console.log("Input2 = 4");
        END = MckeeFisk4;
        break;
      case "Current Location":
        console.log("Current Location");
        console.log("initialize hit");
        console.log(currentPosition);
        END = currentPosition;
        break;
    }


/*
    var request = new google.maps.DistanceMatrixService();
    request.getDistanceMatrix( {
        origin: START,
        destination: END,
      travelMode: google.maps.DirectionsTravelMode.WALKING,
      provideRouteAlternatives: true
    },callback);
    
    function callback(result, status) {
      if (status == 'OK') {
        //var START = result.originAddresses;
        //var END = result.destinationAddresses;
      
        
          var distance = element.distance.text;
          var duration = element.duration.text;
          var from = origin;
          var to = destination;
      
      }
      }
    /////////////////////////////////////////////////////////////////
    // used to get the start and end locations for the pins on the map to
    // do the mapping from
      */ var request = { //sets the settings for the request
        origin: START, //sets start point
        destination: END, //sets end point
        travelMode: google.maps.DirectionsTravelMode.WALKING, //sets mode of trasportation
        provideRouteAlternatives: true //allows for multiple routes
      };

    // does the action of completing the route
    

        //console.log(routeCount);
        //console.log(result.routes);
        if(routeCount != null) {
          for (var i = 0;i<routeCount.length; i++) {
            
              routeCount[i].setMap(null);
              routeCount[i] = null; //clears the routes currently on the map
              console.log(routeCount[i]);
            }
            routeCount = []; //resets array
          }

          if(markers != null) {
            for (var i = 0;i<markers.length; i++) {
                console.log(markers[i]);
                console.log(markers);
                markers[i].setMap(null);
                markers[i] = null; //clears the routes currently on the map
                //console.log(routeCount[i]);
              }
            markers = [];
            markernum = []; //resets array
          }


      directionsService.route(request,function(result, status){

        //makes sure there is an OK status given before path can be drawn
        if(status === "OK"){ 
        //directionsDisplay.setDirections(result);


        
          
        //routeCount = result.routes.length;
        //console.log(result.routes);
        
        
        for (var i = 0, len = result.routes.length; i < len; i++) {
          routeCount[i]=result.routes[i];
          console.log(routeCount[i]);
        }

        
        var temp;

        for (var i = 0, len = result.routes.length; i < len; i++) {

          infoWindow = new google.maps.InfoWindow({
            content: result.routes[i].legs[0].duration.text,
          })
          
          //routeCount[i]= new google.maps.DirectionsRenderer();
          //routeCount[i].setMap(map);
          //routeCount[i].setDirections(result);

          //console.log("hey");


          //renders route
          ////////
          
          ////// 
          
          if(i == prefRoute){ //this makes sure the first route is the most visible
            routeCount[i] =  new google.maps.DirectionsRenderer({
              
                polylineOptions:{ strokeColor: 'blue'}, //chooses color on array
                map: map,
                directions: result, //places route on map
                routeIndex: i
                
              
            });
            //temp = routeCount[i];
            console.log(infoWindow);
            
            
          }
          else{ //following/alternatives routes are shown in lower opacity

            routeCount[i] =  new google.maps.DirectionsRenderer({
              
              polylineOptions:{ strokeColor: 'blue', strokeOpacity: 0.25}, //chooses color on array, first being blue
              map: map,
              directions: result, //places route on map
              routeIndex: i
            
            });
            //temp = routeCount[i];
          }
          
           /////////

           var stepL = Math.floor((result.routes[i].legs[0].steps.length - 1)/2); //gets the middle loction of the route
           console.log(stepL);
           if(stepL==1){
             stepL = 0;
           }
           
           //create a marker in order to display info window
           var posA = result.routes[i].legs[0].steps[i+1].lat_lngs[0].lat(result.routes[i].legs[0].steps[i].lat_lngs[0]);
           var posB = result.routes[i].legs[0].steps[i+1].lat_lngs[0].lng(result.routes[i].legs[0].steps[i].lat_lngs[0]);
 
          console.log(posA);
          console.log(posB);
          
          //we place a marker on the middle of the route
          marker = new google.maps.Marker({
            position:  new google.maps.LatLng(posA,posB),
            map,
            title: "Click to select route.",
            icon: {path: google.maps.SymbolPath.BACKWARD_CLOSED_ARROW,
                 scale: 5,
                 fillColor: 'red',
                 fillOpacity: 1.0,
                 strokeOpacity: 0,
                 }
          });
          markers[i] = marker; //pushes marker into array
          console.log(markers[i]);
          console.log(markers);
          markernum.push(i);
          console.log("markernum is "+i);

          //console.log(result.routes[i].overview_polyline);
          //marker.addListener("mouseover", ()=>{infoWindow.open(map,marker);});
          infoWindow.open(map,marker); //shows ETA for ith route

          google.maps.event.addListener(marker, 'click',(function(marker,i){

            return function(){
            prefRoute = i;
            console.log(prefRoute);
            calculateRoute();}
          })(marker,i));


        } 

        //change color of selected route 


        //create clear routes function
      
      }

      });
  }


  //////////////////////////////////////////////////////


    //when route button on the screen is clicked
    document.getElementById('buttonCalc').onclick = function(){
    //clearRoutes();
    prefRoute = 0;
      calculateRoute();
    };


   


