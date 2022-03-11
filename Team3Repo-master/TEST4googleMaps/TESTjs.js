
		var map;
		var directionsService;
		var directionsDisplay;
		var currentPosition;
		var routeCount = [];
		var markers = [];
		var markernum = [];
		var prefRoute = 0;
		//var colourArray = ['blue', 'aqua',  'aqua', 'aqua','teal', 'navy', 'grey', 'fuchsia', 'black', 'white', 'lime', 'maroon', 'purple',  'red', 'green', 'silver', 'olive',  'yellow'];
		//colors for diferentiating routes
  
	
	function initialize(){
		navigator.geolocation.getCurrentPosition(function(position){
	  // create the map here, because we only have access to position inside of this function
	  // even if we store in a global variable, it only gets updated once this callback runs

  		currentPosition = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
		});

	}

    function initMap() {
      	directionsService = new google.maps.DirectionsService;
      	directionsDisplay = new google.maps.DirectionsRenderer;
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 36.812188, lng: -119.747827 },
          zoom: 16,
        });

        directionsDisplay.setMap(map);
        infoWindow = new google.maps.InfoWindow();
        initialize();
    }


    function calculateRoute(){


		//clear routes

		
		/*map = new google.maps.Map(document.getElementById("map"), {
			center: { lat: 36.812188, lng: -119.747827 },
			zoom: 16,
		  });
		directionsDisplay.setMap(map);*/
		

    	// variables for the building entrances lng and lat for the locations 
    	// used on the map for start and end points


    	//Mckee Fisk Entrances
    	var MckeeFisk1 = new google.maps.LatLng(36.813857,-119.749929); // WEST
		var MckeeFisk2 = new google.maps.LatLng(36.813756,-119.749134); // EAST
		var MckeeFisk3 = new google.maps.LatLng(36.813350,-119.749246); // SOUTH/MID near middle
		var MckeeFisk4 = new google.maps.LatLng(36.813775,-119.749500); // SOUTH(Absolute)

		//Social Sciences Entrances 
		var SocialScience1 = new google.maps.LatLng(36.813865,-119.750742); // WEST
		var SocialScience2 = new google.maps.LatLng(36.813529,-119.750611); // SOUTH
		var SocialScience3 = new google.maps.LatLng(36.813869,-119.750018); // EAST

		//Family Food Science Entrances
		var FamilyFoodScience1 = new google.maps.LatLng(36.813099,-119.750768); // WEST
		var FamilyFoodScience2 = new google.maps.LatLng(36.812973,-119.750583); // SOUTH
		var FamilyFoodScience3 = new google.maps.LatLng(36.813304,-119.750479); // NORTH
		var FamilyFoodScience4 = new google.maps.LatLng(36.812966,-119.750019); // EAST

		//Professional Human Services Entrances
		var ProfessionalHumanServices1 = new google.maps.LatLng(36.812964,-119.749958); // WEST
		var ProfessionalHumanServices2 = new google.maps.LatLng(36.812829,-119.749058); // EAST
		var ProfessionalHumanServices3 = new google.maps.LatLng(36.812771,-119.749399); // SOUTH
		var ProfessionalHumanServices4 = new google.maps.LatLng(36.813266,-119.749252); // NORTH

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
		

		// Industrial Technologies Entrances
		var IndustrialTech1 = new google.maps.LatLng(36.814791,-119.750130); // SOUTH
		var IndustrialTech2 = new google.maps.LatLng(36.814852,-119.750257); // Elevator
		var IndustrialTech3 = new google.maps.LatLng(36.814812,-119.749419); // Stairs^East
		var IndustrialTech4 = new google.maps.LatLng(36.815470,-119.750245); // by112South
		var IndustrialTech5 = new google.maps.LatLng(36.815562,-119.750104); // by112North
		var IndustrialTech6 = new google.maps.LatLng(36.815391,-119.750468); // WEST^South
		var IndustrialTech7 = new google.maps.LatLng(36.815570,-119.750455); // WEST^North
		var IndustrialTech8 = new google.maps.LatLng(36.815608,-119.749655); // Elevator^NorthEast

		// Satelite Student Union Entrances
		var SateliteStudentUnion = new google.maps.LatLng(36.813170,-119.745276); // Middle of Campus

		// University Student Union Entrances
		var USU1 = new google.maps.LatLng(36.812923,-119.748377); // 1stFloor North
		var USU2 = new google.maps.LatLng(36.812730,-119.748632); // 1stFloor West
		var USU3 = new google.maps.LatLng(36.812735,-119.748186); // 1stFloor East
		var USU4 = new google.maps.LatLng(36.812548,-119.748404); // 1stFloor South
		var USU5 = new google.maps.LatLng(36.812881,-119.748007); // Stairs to Bot North
		var USU6 = new google.maps.LatLng(36.812577,-119.748098); // Stairs to Bot South
		var USU7 = new google.maps.LatLng(36.812318,-119.748400); // Stairs to Bot South (MAIN STAIRS)

		// Mclane Hall Entrances (Based on classroom geolocations)

		// Henry Madden Libray Entrace
		var HenryMaddenLibrary = new google.maps.LatLng(36.812161,-119.749151); // Main Entrance

		// Kennel Bookstore Entrance
		var KennelBookstoreMain = new google.maps.LatLng(36.812559,-119.747723); // Main Entrance

		// Campus Police Department
		var CampusPoliceDepartment = new google.maps.LatLng(36.815584,-119.748343); // North of Campus

		// Dining Hall Entrance
		var DiningHall = new google.maps.LatLng(36.811159,-119.751124); // Main Entrance

		// TACO BELL Entrance
		var OnCampusTacoBell = new google.maps.LatLng(36.812256,-119.748255); // Main Entrance

		// Fountain
		var CampusFountain = new google.maps.LatLng(36.812262,-119.747852); // Main Entrance

		// North Gym Entrances

		// South Gym Entrances

		// Ag Building Entrances (by room)

		//Ag Mechanics Entrances (by room)

		// Lab School Entrances (by room and by kremen?)

		// Peters Business Building Entrances

		// Conley Art Entrances
		var ConleyArt1 = new google.maps.LatLng(36.812214,-119.744086); // NORTH
		var ConleyArt2 = new google.maps.LatLng(36.811755,-119.744413); // WEST
		var ConleyArt3 = new google.maps.LatLng(36.811560,-119.743878); // SOUTH

		// Kremen Education Entrances
		var KremenEducation1 = new google.maps.LatLng(36.809756,-119.747054); // WEST
		var KremenEducation2 = new google.maps.LatLng(36.809760,-119.746493); // Center^WEST
		var KremenEducation3 = new google.maps.LatLng(36.809687,-119.746348); // Center^SOUTH
		var KremenEducation4 = new google.maps.LatLng(36.809764,-119.746304); // Center^EAST
		var KremenEducation5 = new google.maps.LatLng(36.809564,-119.746230); // EAST^South
		var KremenEducation6 = new google.maps.LatLng(36.809718,-119.746004); // EAST^North

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

		// Frank W. Thomas Entrances
		var ThomasBuilding1 = new google.maps.LatLng(36.813856,-119.746818); // WEST
		var ThomasBuilding2 = new google.maps.LatLng(36.812710,-119.746168); // EAST
		var ThomasBuilding3 = new google.maps.LatLng(36.812401,-119.746225); // SOUTH

		// Student Rec Center Entrances

		// Jordan Ag Research Center
		var JordanAgResearchCenter = new google.maps.LatLng(36.815520,-119.740718); // Main Entrance WEST

		// Joyal Administration Building
		var Joyal_Admin_Main = new google.maps.LatLng(36.811054,-119.744770);
		var Joyal_Admin_RearNorth = new google.maps.LatLng(36.811260,-119.744193);
		var Joyal_Admin_RearSouth = new google.maps.LatLng(36.810825,-119.744210);





		//setting input1 and input2 to the values from the search bars
		Input1 = document.getElementById('myInput').value;
		Input2 = document.getElementById('myInput2').value;

		//used to test the inputs are being received
		console.log(Input1);
		console.log(Input2);

		var START = new google.maps.LatLng(36.812190,-119.747827);
		var END = new google.maps.LatLng(36.812188,-119.747827);
		//var CURRENT = new google.maps.LatLng(,);


		// switch used for testing as of right now\
		// need to actually manually get all floor names into the array
		// then need to get the segmentations for floor entrances
		// afterwards we can throw everything into a switch for a ease
		// 
		//
		// the switch cases for the origin and destination should be the
		// easier of the parts to do, however the longest parts will be
		// when segmeneting and adjusting the photos

		switch(Input1){
			case "McKee-Fisk Room 201 (2nd Floor)":
			case "McKee-Fisk Room 202 (2nd Floor)":
			case "McKee-Fisk Room 203 (2nd Floor)":
			case "McKee-Fisk Room 204 (2nd Floor)":
			case "McKee-Fisk Room 205 (2nd Floor)":
			case "McKee-Fisk Room 206 (2nd Floor)":
			case "McKee-Fisk Room 207 (2nd Floor)":
			case "McKee-Fisk Room 208 (2nd Floor)":
			case "McKee-Fisk Room 209 (2nd Floor)":
			case "McKee-Fisk Room 210 (2nd Floor)":
				console.log("Input1 = 1");
				START = MckeeFisk1;
				break;
			case "2":
				console.log("Input1 = 2");
				START = MckeeFisk2;
				break;
			case "Joyal Administration":
				console.log("Input1 = 3");
				START = Joyal_Admin_Main;
				break;
			case "4":
				console.log("Input1 = 4");
				START = MckeeFisk4;
				break;
			case "Current Location":
				console.log("Current Location");
				
				console.log("initialize hit");
				console.log(currentPosition);
				START = currentPosition;
				break;
		}

		switch(Input2){
			case "McKee-Fisk Room 201 (2nd Floor)":
			case "McKee-Fisk Room 202 (2nd Floor)":
			case "McKee-Fisk Room 203 (2nd Floor)":
			case "McKee-Fisk Room 204 (2nd Floor)":
			case "McKee-Fisk Room 205 (2nd Floor)":
			case "McKee-Fisk Room 206 (2nd Floor)":
			case "McKee-Fisk Room 207 (2nd Floor)":
			case "McKee-Fisk Room 208 (2nd Floor)":
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


		//this will be easier implementation for the switch statement
		// if the correct case is activated by the switch statement,
		// the result will fall until it hits the END = _ _ _ _ _ ...
		// and then the break. This is so that we do not need lots of break
		// statements, bnut instead 1 break statement to catch multiple different
		// outcomes for the same buiilding entrance

		/*
			switch(Input2){
				case "McKee-Fisk Room 201 (2nd Floor)":
				case "McKee-Fisk Room 202 (2nd Floor)":
				case "McKee-Fisk Room 203 (2nd Floor)":
				case "McKee-Fisk Room 204 (2nd Floor)":
				case "McKee-Fisk Room 205 (2nd Floor)":
				case "McKee-Fisk Room 206 (2nd Floor)":
				case "McKee-Fisk Room 207 (2nd Floor)":
				case "McKee-Fisk Room 208 (2nd Floor)":
				case "McKee-Fisk Room 209 (2nd Floor)":
				case "McKee-Fisk Room 210 (2nd Floor)":
					END = MckeeFisk1;
					break;
				case "McKee-Fisk Room 211 (2nd Floor)":
				case "McKee-Fisk Room 212 (2nd Floor)":
				case "McKee-Fisk Room 213 (2nd Floor)":
				case "McKee-Fisk Room 214 (2nd Floor)":
				case "McKee-Fisk Room 215 (2nd Floor)":
				case "McKee-Fisk Room 216 (2nd Floor)":
				case "McKee-Fisk Room 217 (2nd Floor)":
				case "McKee-Fisk Room 218 (2nd Floor)":
				case "McKee-Fisk Room 219 (2nd Floor)":
				case "McKee-Fisk Room 220 (2nd Floor)":
					END = MckeeFisk2;
					break;
			}

		*/





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
					//create a marker in order to display info window
					var posA = result.routes[i].legs[0].steps[stepL].lat_lngs[0].lat(result.routes[i].legs[0].steps[4].lat_lngs[0]);
					var posB = result.routes[i].legs[0].steps[stepL].lat_lngs[0].lng(result.routes[i].legs[0].steps[4].lat_lngs[0]);

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

    //---------------------------------------------------------------------------------
     //---------------------------------------------------------------------------------
      // ============= SEARCH BARS JAVASCRIPT UNDER (will put into sep file later)=======
      //---------------------------------------------------------------------------------
       //---------------------------------------------------------------------------------


function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  var LISTcountMAX = 0; // initially sets this so the function below can calc to 5 suggestions

  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/

      for (i = 0; i < arr.length; i++) { //checks all the possible rooms array
        /*check if the item starts with the same letters as the text field value:*/
        
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/

          	if (LISTcountMAX < 5){ // sets the max amount of possible suggestions results to 5
	          b = document.createElement("DIV");
	          /*make the matching letters bold:*/
	          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
	          b.innerHTML += arr[i].substr(val.length);
	          /*insert a input field that will hold the current array item's value:*/
	          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
	          /*execute a function when someone clicks on the item value (DIV element):*/
	      	
	          b.addEventListener("click", function(e) {
	              /*insert the value for the autocomplete text field:*/
	              inp.value = this.getElementsByTagName("input")[0].value;
	              /*close the list of autocompleted values,
	              (or any other open lists of autocompleted values:*/
	              closeAllLists();
	          });
	          a.appendChild(b);
	          LISTcountMAX = LISTcountMAX + 1; // increments so that only 5 in list
    		}

    	}


      } 
      LISTcountMAX = 0; // resets so that we always have only 5 shown when searching
      					// this helps removing cluter from the screen in forms of 
      					// unnecessary suggestions of all possible outcomes
   });

  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
   });
function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}



/*An array containing all the campus locations used in the search bars*/
// below contain some test cases, will fix to contain only what is needed
var CampusLocations = [
	"Current Location",
	"McKee-Fisk Room 208 (2nd Floor)",
	"McKee-Fisk Room 207 (2nd Floor)",
	"McKee-Fisk Room 206 (2nd Floor)",
	"McKee-Fisk Room 205 (2nd Floor)",
	"McKee-Fisk Room 204 (2nd Floor)",
	"McKee-Fisk Room 203 (2nd Floor)",
	"McKee-Fisk Room 202 (2nd Floor)",
	"McKee-Fisk Room 201 (2nd Floor)",
	"McKee-Fisk Room 209 (2nd Floor)",
	"McKee-Fisk Room 210 (2nd Floor)",
	"McKee-Fisk Room 211 (2nd Floor)",
	"McKee-Fisk Room 212 (2nd Floor)",
	"McKee-Fisk Room 213 (2nd Floor)",
	"McKee-Fisk Room 214 (2nd Floor)",
	"McKee-Fisk Room 215 (2nd Floor)",
	"McKee-Fisk Room 216 (2nd Floor)",
	"McKee-Fisk Room 217 (2nd Floor)",
	"McKee-Fisk Room 218 (2nd Floor)",
	"McKee-Fisk Room 308 (2nd Floor)",
	"McKee-Fisk Room 307 (2nd Floor)",
	"McKee-Fisk Room 306 (2nd Floor)",
	"McKee-Fisk Room 305 (2nd Floor)",
	"McKee-Fisk Room 304 (2nd Floor)",
	"McKee-Fisk Room 303 (2nd Floor)",
	"McKee-Fisk Room 302 (2nd Floor)",
	"McKee-Fisk Room 301 (2nd Floor)",
	"McKee-Fisk Room 309 (2nd Floor)",
	"McKee-Fisk Room 310 (2nd Floor)",
	"McKee-Fisk Room 311 (2nd Floor)",
	"McKee-Fisk Room 312 (2nd Floor)",
	"McKee-Fisk Room 313 (2nd Floor)",
	"McKee-Fisk Room 314 (2nd Floor)",
	"McKee-Fisk Room 315 (2nd Floor)",
	"McKee-Fisk Room 316 (2nd Floor)",
	"McKee-Fisk Room 317 (2nd Floor)",
	"McKee-Fisk Room 318 (2nd Floor)",
	"McKee-Fisk Room 408 (2nd Floor)",
	"McKee-Fisk Room 407 (2nd Floor)",
	"McKee-Fisk Room 406 (2nd Floor)",
	"McLane Hall Room 405 (2nd Floor)",
	"McKee-Fisk Room 404 (2nd Floor)",
	"McKee-Fisk Room 403 (2nd Floor)",
	"McKee-Fisk Room 402 (2nd Floor)",
	"McKee-Fisk Room 401 (2nd Floor)",
	"McKee-Fisk Room 409 (2nd Floor)",
	"McKee-Fisk Room 410 (2nd Floor)",
	"McKee-Fisk Room 411 (2nd Floor)",
	"McKee-Fisk Room 412 (2nd Floor)",
	"McKee-Fisk Room 413 (2nd Floor)",
	"McKee-Fisk Room 414 (2nd Floor)",
	"McKee-Fisk Room 415 (2nd Floor)",
	"McKee-Fisk Room 416 (2nd Floor)",
	"McKee-Fisk Room 417 (2nd Floor)",
	"McKee-Fisk Room 418 (2nd Floor)",
	"McKee-Fisk Room 508 (2nd Floor)",
	"McKee-Fisk Room 507 (2nd Floor)",
	"McKee-Fisk Room 506 (2nd Floor)",
	"McKee-Fisk Room 505 (2nd Floor)",
	"McKee-Fisk Room 504 (2nd Floor)",
	"McKee-Fisk Room 503 (2nd Floor)",
	"McKee-Fisk Room 502 (2nd Floor)",
	"McKee-Fisk Room 501 (2nd Floor)",
	"McKee-Fisk Room 509 (2nd Floor)",
	"McKee-Fisk Room 510 (2nd Floor)",
	"McKee-Fisk Room 511 (2nd Floor)",
	"McKee-Fisk Room 512 (2nd Floor)",
	"McKee-Fisk Room 513 (2nd Floor)",
	"McKee-Fisk Room 514 (2nd Floor)",
	"McKee-Fisk Room 515 (2nd Floor)",
	"McKee-Fisk Room 516 (2nd Floor)",
	"McKee-Fisk Room 517 (2nd Floor)",
	"McKee-Fisk Room 518 (2nd Floor)",
	"Joyal Administration"
];
//autocomplete for both the search bars
autocomplete(document.getElementById("myInput"), CampusLocations); //used in the seach bar 1
autocomplete(document.getElementById("myInput2"), CampusLocations); //used in the seach bar 2

