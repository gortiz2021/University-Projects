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
	"Agricultural Sciences 100", //ok
	"Agricultural Sciences 101", //ok
	"Agricultural Sciences 102", //ok
	"Agricultural Sciences 103", //ok
	"Agricultural Sciences 104", //ok
	"Agricultural Sciences 105", //ok
	"Agricultural Sciences 106", //ok
	"Agricultural Sciences 107", //ok
	"Agricultural Sciences 108", //ok
	"Agricultural Sciences 109", //ok
	"Agricultural Sciences 110", //ok
	"Agricultural Sciences 111", //ok
	"Agricultural Sciences 112", //ok
	"Agricultural Sciences 113", //ok
	"Agricultural Sciences 114", //ok
	"Agricultural Sciences 115", //ok
	"Agricultural Sciences 116", //ok
	"Agricultural Sciences 117", //ok
	"Agricultural Sciences 118", //ok
	"Agricultural Sciences 119", //ok

	"Agricultural Sciences 220", //ok
	"Agricultural Sciences 221", //ok
	"Agricultural Sciences 222", //ok
	"Agricultural Sciences 223", //ok
	"Agricultural Sciences 224", //ok
	"Agricultural Sciences 225", //ok
	"Agricultural Sciences 226", //ok
	"Agricultural Sciences 227", //ok
	"Agricultural Sciences 228", //ok
	"Agricultural Sciences 229", //ok
	"Agricultural Sciences 230", //ok
	"Agricultural Sciences 232", //ok
	"Agricultural Sciences 234", //ok
	"Agricultural Sciences 236", //ok
	"Agricultural Sciences 238", //ok
	"Agricultural Sciences 240", //ok
	"Agricultural Sciences 242", //ok
	"Agricultural Sciences 243", //ok
	"Agricultural Sciences 244", //ok

	"Conley Art 101", //ok
	"Conley Art 103", //ok
	"Conley Art 104", //ok
	"Conley Art 105", //ok
	"Conley Art 106", //ok
	"Conley Art 107", //ok
	"Conley Art 108", //ok
	"Conley Art 110", //ok
	"Conley Art 111", //ok
	"Conley Art 112", //ok
	"Conley Art 113", //ok
	"Conley Art 115", //ok
	"Conley Art 116", //ok
	"Conley Art 122", //ok
	"Conley Art 123", //ok
	"Conley Art 124", //ok
	"Conley Art 129", //ok
	"Conley Art 131", //ok
	"Conley Art 132", //ok
	"Conley Art 133", //ok
	"Conley Art 134", //ok
	"Conley Art 135", //ok
	"Conley Art 136", //ok
	"Conley Art 137", //ok

	"Conley Art 210", //ok
	"Conley Art 211", //ok
	"Conley Art 212", //ok
	"Conley Art 213", //ok
	"Conley Art 214", //ok
	"Conley Art 215", //ok
	"Conley Art 216", //ok
	"Conley Art 217", //ok
	"Conley Art 218", //ok
	"Conley Art 219", //ok
	"Conley Art 220", //ok
	"Conley Art 221", //ok
	"Conley Art 222", //ok
	"Conley Art 223", //ok
	"Conley Art 224", //ok
	"Conley Art 225", //ok
	"Conley Art 226", //ok
	"Conley Art 227", //ok
	"Conley Art 228", //ok
	"Conley Art 229", //ok
	"Conley Art 231", //ok
	"Conley Art 233", //ok
	"Conley Art 235", //ok
	"Conley Art 237", //ok
	"Conley Art 239", //ok
	"Conley Art 241", //ok

	"Engineering East 101", //ok
	"Engineering East 102", //ok
	"Engineering East 103", //ok
	"Engineering East 104", //ok
	"Engineering East 105", //ok
	"Engineering East 106", //ok
	"Engineering East 107", //ok
	"Engineering East 108", //ok
	"Engineering East 109", //ok
	"Engineering East 110", //ok
	"Engineering East 111", //ok
	"Engineering East 112", //ok
	"Engineering East 113", //ok
	"Engineering East 114", //ok
	"Engineering East 115", //ok
	"Engineering East 120", //ok
	"Engineering East 121", //ok
	"Engineering East 122", //ok
	"Engineering East 123", //ok
	"Engineering East 124", //ok
	"Engineering East 125", //ok
	"Engineering East 126", //ok
	"Engineering East 127", //ok
	"Engineering East 128", //ok
	"Engineering East 129", //ok
	"Engineering East 130", //ok
	"Engineering East 131", //ok
	"Engineering East 132", //ok
	"Engineering East 133", //ok
	"Engineering East 135", //ok
	"Engineering East 139", //ok
	"Engineering East 140", //ok
	"Engineering East 154", //ok
	"Engineering East 158", //ok
	"Engineering East 159", //ok
	"Engineering East 160", //ok
	"Engineering East 161", //ok
	"Engineering East 162", //ok
	"Engineering East 163", //ok
	"Engineering East 164", //ok
	"Engineering East 165", //ok
	"Engineering East 166", //ok
	"Engineering East 167", //ok
	"Engineering East 168", //ok
	"Engineering East 170", //ok
	"Engineering East 172", //ok
	"Engineering East 173", //ok
	"Engineering East 174", //ok
	"Engineering East 175", //ok
	"Engineering East 176", //ok
	"Engineering East 178", //ok
	"Engineering East 182", //ok
	"Engineering East 183", //ok
	"Engineering East 184", //ok
	"Engineering East 185", //ok
	"Engineering East 186", //ok
	"Engineering East 187", //ok
	"Engineering East 188", //ok
	"Engineering East 189", //ok
	"Engineering East 190", //ok
	"Engineering East 191", //ok
	"Engineering East 192", //ok
	"Engineering East 193", //ok
	"Engineering East 194", //ok
	"Engineering East 195", //ok
	"Engineering East 196", //ok
	"Engineering East 198", //ok
	"Engineering East 199", //ok

	"Engineering East 201", //ok
	"Engineering East 202", //ok
	"Engineering East 203", //ok
	"Engineering East 204", //ok
	"Engineering East 205", //ok
	"Engineering East 206", //ok
	"Engineering East 207", //ok
	"Engineering East 208", //ok
	"Engineering East 209", //ok
	"Engineering East 210", //ok
	"Engineering East 211", //ok
	"Engineering East 212", //ok
	"Engineering East 213", //ok
	"Engineering East 214", //ok
	"Engineering East 217", //ok
	"Engineering East 218", //ok
	"Engineering East 220", //ok
	"Engineering East 221", //ok
	"Engineering East 222", //ok
	"Engineering East 223", //ok
	"Engineering East 224", //ok
	"Engineering East 226", //ok
	"Engineering East 228", //ok
	"Engineering East 229", //ok
	"Engineering East 231", //ok
	"Engineering East 232", //ok
	"Engineering East 233", //ok
	"Engineering East 234", //ok
	"Engineering East 235", //ok
	"Engineering East 236", //ok
	"Engineering East 252", //ok
	"Engineering East 254", //ok
	"Engineering East 258", //ok
	"Engineering East 260", //ok
	"Engineering East 261", //ok
	"Engineering East 262", //ok
	"Engineering East 263", //ok
	"Engineering East 264", //ok
	"Engineering East 265", //ok
	"Engineering East 266", //ok
	"Engineering East 268", //ok
	"Engineering East 270", //ok
	"Engineering East 272", //ok
	"Engineering East 274", //ok
	"Engineering East 275", //ok
	"Engineering East 276", //ok
	"Engineering East 278", //ok
	"Engineering East 280", //ok
	"Engineering East 281", //ok
	"Engineering East 282", //ok
	"Engineering East 283", //ok
	"Engineering East 284", //ok
	"Engineering East 285", //ok
	"Engineering East 286", //ok
	"Engineering East 287", //ok
	"Engineering East 288", //ok
	"Engineering East 289", //ok
	"Engineering East 290", //ok
	"Engineering East 292", //ok
	"Engineering East 294", //ok
	"Engineering East 295", //ok
	"Engineering East 296", //ok
	"Engineering East 298", //ok

	"Engineering East 311", //ok
	"Engineering East 331", //ok
	"Engineering East 333", //ok
	"Engineering East 334", //ok
	"Engineering East 354", //ok
	"Engineering East 356", //ok
	"Engineering East 361", //ok
	"Engineering East 362", //ok
	"Engineering East 363", //ok
	"Engineering East 368", //ok
	"Engineering East 374", //ok
	"Engineering East 376", //ok
	"Engineering East 383", //ok
	"Engineering East 385", //ok
	"Engineering East 387", //ok
	"Engineering East 389", //ok
	"Engineering East 390", //ok

	"Engineering West 101", //ok
	"Engineering West 103", //ok
	"Engineering West 104", //ok
	"Engineering West 105", //ok
	"Engineering West 106", //ok
	"Engineering West 107", //ok
	"Engineering West 108", //ok
	"Engineering West 109", //ok
	"Engineering West 110", //ok
	"Engineering West 111", //ok
	"Engineering West 113", //ok
	"Engineering West 120", //ok
	"Engineering West 121", //ok
	"Engineering West 122", //ok
	"Engineering West 123", //ok
	"Engineering West 124", //ok
	"Engineering West 125A", //ok
	"Engineering West 125B", //ok
	"Engineering West 127", //ok
	"Engineering West 128", //ok
	"Engineering West 130", //ok
	"Engineering West 131", //ok
	"Engineering West 132", //ok
	"Engineering West 135", //ok
	"Engineering West 136", //ok
	"Engineering West 137", //ok
	"Engineering West 138", //ok

	"Engineering West Annex 101", //ok
	"Engineering West Annex 102", //ok
	"Engineering West Annex 103", //ok

	"Family Food Science 102", //ok
	"Family Food Science 103", //ok
	"Family Food Science 104", //ok
	"Family Food Science 105", //ok
	"Family Food Science 107", //ok
	"Family Food Science 108", //ok
	"Family Food Science 110", //ok
	"Family Food Science 111", //ok
	"Family Food Science 112", //ok
	"Family Food Science 118", //ok
	"Family Food Science 119", //ok
	"Family Food Science 122", //ok
	"Family Food Science 123", //ok
	"Family Food Science 124", //ok
	"Family Food Science 125", //ok
	"Family Food Science 130", //ok

	"Family Food Science 201", //ok
	"Family Food Science 202", //ok
	"Family Food Science 203", //ok
	"Family Food Science 204", //ok
	"Family Food Science 205", //ok
	"Family Food Science 206", //ok
	"Family Food Science 207", //ok
	"Family Food Science 208A", //ok
	"Family Food Science 208B", //ok
	"Family Food Science 209", //ok
	"Family Food Science 210", //ok
	"Family Food Science 211", //ok
	"Family Food Science 212A", //ok
	"Family Food Science 212B", //ok
	"Family Food Science 213", //ok
	"Family Food Science 214", //ok
	"Family Food Science 215", //ok
	"Family Food Science 216A", //ok
	"Family Food Science 216B", //ok

	"Family Food Science 300", //ok
	"Family Food Science 301", //ok
	"Family Food Science 302", //ok
	"Family Food Science 303", //ok
	"Family Food Science 304", //ok
	"Family Food Science 305", //ok
	"Family Food Science 306", //ok
	"Family Food Science 308", //ok
	"Family Food Science 311", //ok
	"Family Food Science 312", //ok
	"Family Food Science 313", //ok
	"Family Food Science 314", //ok
	"Family Food Science 315", //ok
	"Family Food Science 316", //ok
	"Family Food Science 317", //ok
	"Family Food Science 318", //ok

	"Frank W Thomas 100", //ok
	"Frank W Thomas 102", //ok
	"Frank W Thomas 103A", //ok
	"Frank W Thomas 103B", //ok
	"Frank W Thomas 103C", //ok
	"Frank W Thomas 103D", //ok
	"Frank W Thomas 103E", //ok 
	"Frank W Thomas 103F", //ok
	"Frank W Thomas 104", //ok
	"Frank W Thomas 105", //ok
	"Frank W Thomas 107", //ok
	"Frank W Thomas 109", //ok
	"Frank W Thomas 109A", //ok
	"Frank W Thomas 109B", //ok
	"Frank W Thomas 110", //ok
	"Frank W Thomas 110A", //ok
	"Frank W Thomas 111", //ok
	"Frank W Thomas 113", //ok
	"Frank W Thomas 114", //ok
	"Frank W Thomas 115", //ok
	"Frank W Thomas 116", //ok
	"Frank W Thomas 117", //ok
	"Frank W Thomas 118", //ok
	"Frank W Thomas 119", //ok
	"Frank W Thomas 120", //ok
	"Frank W Thomas 121", //ok
	"Frank W Thomas 122", //ok
	"Frank W Thomas 123", //ok
	"Frank W Thomas 124", //ok
	"Frank W Thomas 126", //ok
	"Frank W Thomas 128", //ok
	"Frank W Thomas 130", //ok
	"Frank W Thomas 132", //ok

	"Grosse Industrial Tech 101", //ok
	"Grosse Industrial Tech 103", //ok
	"Grosse Industrial Tech 104", //ok
	"Grosse Industrial Tech 106", //ok
	"Grosse Industrial Tech 107", //ok
	"Grosse Industrial Tech 108", //ok
	"Grosse Industrial Tech 109", //ok
	"Grosse Industrial Tech 110", //ok
	"Grosse Industrial Tech 111", //ok
	"Grosse Industrial Tech 112", //ok
	"Grosse Industrial Tech 113", //ok
	"Grosse Industrial Tech 114", //ok
	"Grosse Industrial Tech 115", //ok
	"Grosse Industrial Tech 116", //ok
	"Grosse Industrial Tech 117", //ok
	"Grosse Industrial Tech 118", //ok
	"Grosse Industrial Tech 119", //ok
	"Grosse Industrial Tech 120", //ok
	"Grosse Industrial Tech 121", //ok
	"Grosse Industrial Tech 122", //ok
	"Grosse Industrial Tech 123", //ok
	"Grosse Industrial Tech 124", //ok
	"Grosse Industrial Tech 125", //ok
	"Grosse Industrial Tech 138", //ok
	"Grosse Industrial Tech 140", //ok
	"Grosse Industrial Tech 144", //ok
	"Grosse Industrial Tech 152", //ok
	"Grosse Industrial Tech 154", //ok
	"Grosse Industrial Tech 156", //ok
	"Grosse Industrial Tech 158", //ok
	"Grosse Industrial Tech 160", //ok

	"Grosse Industrial Tech 204", //ok
	"Grosse Industrial Tech 208", //ok
	"Grosse Industrial Tech 210", //ok
	"Grosse Industrial Tech 212", //ok
	"Grosse Industrial Tech 214", //ok
	"Grosse Industrial Tech 216", //ok
	"Grosse Industrial Tech 218", //ok
	"Grosse Industrial Tech 220", //ok
	"Grosse Industrial Tech 228", //ok
	"Grosse Industrial Tech 230", //ok
	"Grosse Industrial Tech 232", //ok
	"Grosse Industrial Tech 234", //ok
	"Grosse Industrial Tech 236", //ok
	"Grosse Industrial Tech 238", //ok
	"Grosse Industrial Tech 240", //ok
	"Grosse Industrial Tech 242", //ok
	"Grosse Industrial Tech 244", //ok
	"Grosse Industrial Tech 246", //ok
	"Grosse Industrial Tech 248", //ok
	"Grosse Industrial Tech 250", //ok
	"Grosse Industrial Tech 252", //ok
	"Grosse Industrial Tech 254", //ok
	"Grosse Industrial Tech 256", //ok
	"Grosse Industrial Tech 258", //ok
	"Grosse Industrial Tech 260", //ok
	"Grosse Industrial Tech 262", //ok
	"Grosse Industrial Tech 264", //ok
	"Grosse Industrial Tech 268", //ok
	"Grosse Industrial Tech 288", //ok
	"Grosse Industrial Tech 290", //ok
	"Grosse Industrial Tech 292", //ok
	"Grosse Industrial Tech 294", //ok
	"Grosse Industrial Tech 296", //ok
	"Grosse Industrial Tech 298", //ok

	"Jordan Ag Research 108", //ok
	"Jordan Ag Research 110", //ok
	"Jordan Ag Research 112", //ok
	"Jordan Ag Research 114", //ok
	"Jordan Ag Research 116", //ok
	"Jordan Ag Research 118", //ok
	"Jordan Ag Research 120", //ok
	"Jordan Ag Research 122", //ok

	"Jordan Ag Research 208", //ok
	"Jordan Ag Research 210", //ok
	"Jordan Ag Research 212", //ok
	"Jordan Ag Research 213", //ok
	"Jordan Ag Research 214", //ok
	"Jordan Ag Research 216", //ok
	"Jordan Ag Research 218", //ok
	"Jordan Ag Research 220", //ok
	"Jordan Ag Research 223", //ok

	"Jordan Ag Research 308", //ok
	"Jordan Ag Research 310", //ok
	"Jordan Ag Research 313", //ok
	"Jordan Ag Research 314", //ok
	"Jordan Ag Research 316", //ok
	"Jordan Ag Research 318", //ok
	"Jordan Ag Research 320", //ok
	"Jordan Ag Research 321", //ok
	"Jordan Ag Research 322", //ok
	"Jordan Ag Research 323", //ok
	"Jordan Ag Research 324", //ok
	"Jordan Ag Research 326", //ok

	"Joyal Administration 101",
	"Joyal Administration 106", 
	"Joyal Administration 121",
	"Joyal Administration 123",
	"Joyal Administration 124",
	// NEED TO COMPLETE JOYAL


	"McKee-Fisk Room 106", //ok
	"McKee-Fisk Room 110", //ok
	"McKee-Fisk Room 111", //ok
	"McKee-Fisk Room 112", //ok
	"McKee-Fisk Room 113", //ok
	"McKee-Fisk Room 114", //ok
	"McKee-Fisk Room 115", //ok
	"McKee-Fisk Room 116", //ok
	"McKee-Fisk Room 117", //ok
	"McKee-Fisk Room 135", //ok
	"McKee-Fisk Room 136", //ok
	"McKee-Fisk Room 137", //ok
	"McKee-Fisk Room 139", //ok
	"McKee-Fisk Room 141", //ok
	"McKee-Fisk Room 143", //ok
	"McKee-Fisk Room 145", //ok
	"McKee-Fisk Room 147", //ok
	"McKee-Fisk Room 149", //ok
	"McKee-Fisk Room 150", //ok
	"McKee-Fisk Room 151", //ok
	"McKee-Fisk Room 154", //ok
	"McKee-Fisk Room 158", //ok

	"McKee-Fisk Room 201", //ok
	"McKee-Fisk Room 202", //ok
	"McKee-Fisk Room 203", //ok
	"McKee-Fisk Room 204", //ok
	"McKee-Fisk Room 205", //ok
	"McKee-Fisk Room 206", //ok
	"McKee-Fisk Room 207", //ok
	"McKee-Fisk Room 208", //ok
	"McKee-Fisk Room 209", //ok
	"McKee-Fisk Room 210", //ok
	"McKee-Fisk Room 211", //ok
	"McKee-Fisk Room 212", //ok
	"McKee-Fisk Room 213", //ok
	"McKee-Fisk Room 214", //ok
	"McKee-Fisk Room 215", //ok
	"McKee-Fisk Room 216", //ok
	"McKee-Fisk Room 217", //ok
	"McKee-Fisk Room 218", //ok
	"McKee-Fisk Room 219", //ok
	"McKee-Fisk Room 227", //ok
	"McKee-Fisk Room 229", //ok
	"McKee-Fisk Room 230", //ok
	"McKee-Fisk Room 231", //ok
	"McKee-Fisk Room 232", //ok
	"McKee-Fisk Room 233", //ok
	"McKee-Fisk Room 234", //ok
	"McKee-Fisk Room 235", //ok
	"McKee-Fisk Room 236", //ok
	"McKee-Fisk Room 237", //ok
	"McKee-Fisk Room 238", //ok
	"McKee-Fisk Room 240", //ok
	"McKee-Fisk Room 241", //ok
	"McKee-Fisk Room 242", //ok
	"McKee-Fisk Room 243", //ok
	"McKee-Fisk Room 244", //ok
	"McKee-Fisk Room 245", //ok
	"McKee-Fisk Room 247", //ok
	"McKee-Fisk Room 255", //ok

	// FIRST FLOOR J WING
	"McLane Hall Room 10", //ok
	"McLane Hall Room 11", //ok
	"McLane Hall Room 12", //ok
	"McLane Hall Room 13", //ok
	"McLane Hall Room 14", //ok
	"McLane Hall Room 15", //ok
	"McLane Hall Room 16", //ok
	"McLane Hall Room 17", //ok
	"McLane Hall Room 18", //ok
	"McLane Hall Room 19", //ok
	"McLane Hall Room 20", //ok
	"McLane Hall Room 21", //ok
	"McLane Hall Room 22", //ok
	"McLane Hall Room 23", //ok
	"McLane Hall Room 24", //ok

	"McLane Hall Room 103", //ok
	"McLane Hall Room 104", //ok
	"McLane Hall Room 109", //ok
	"McLane Hall Room 111", //ok
	"McLane Hall Room 121", //ok
	"McLane Hall Room 124", //ok
	"McLane Hall Room 126", //ok
	"McLane Hall Room 127", //ok
	"McLane Hall Room 129", //ok
	"McLane Hall Room 130", //ok
	"McLane Hall Room 132", //ok
	"McLane Hall Room 133", //ok
	"McLane Hall Room 134", //ok
	"McLane Hall Room 135", //ok
	"McLane Hall Room 140", //ok
	"McLane Hall Room 144", //ok
	"McLane Hall Room 149", //ok
	"McLane Hall Room 151", //ok
	"McLane Hall Room 152", //ok
	"McLane Hall Room 154", //ok
	"McLane Hall Room 155", //ok
	"McLane Hall Room 157", //ok
	"McLane Hall Room 159", //ok
	"McLane Hall Room 161", //ok
	"McLane Hall Room 162", //ok
	"McLane Hall Room 164", //ok
	"McLane Hall Room 167", //ok
	"McLane Hall Room 173", //ok
	"McLane Hall Room 174", //ok
	"McLane Hall Room 175", //ok
	"McLane Hall Room 176", //ok
	"McLane Hall Room 177", //ok
	"McLane Hall Room 178", //ok
	"McLane Hall Room 179", //ok
	"McLane Hall Room 180", //ok
	"McLane Hall Room 182", //ok
	"McLane Hall Room 183", //ok
	"McLane Hall Room 184", //ok
	"McLane Hall Room 185", //ok
	"McLane Hall Room 186", //ok
	"McLane Hall Room 187", //ok
	"McLane Hall Room 188", //ok
	"McLane Hall Room 189", //ok
	"McLane Hall Room 191", //ok
	"McLane Hall Room 193", //ok
	"McLane Hall Room 194", //ok

	"McLane Hall Room 200", //ok
	"McLane Hall Room 202", //ok
	"McLane Hall Room 204", //ok
	"McLane Hall Room 209", //ok
	"McLane Hall Room 210", //ok
	"McLane Hall Room 211", //ok
	"McLane Hall Room 212", //ok
	"McLane Hall Room 213", //ok
	"McLane Hall Room 214", //ok
	"McLane Hall Room 216", //ok
	"McLane Hall Room 218", //ok
	"McLane Hall Room 220", //ok
	"McLane Hall Room 221", //ok
	"McLane Hall Room 222", //ok
	"McLane Hall Room 224", //ok
	"McLane Hall Room 225", //ok
	"McLane Hall Room 226", //ok
	"McLane Hall Room 229", //ok
	"McLane Hall Room 235", //ok
	"McLane Hall Room 238", //ok
	"McLane Hall Room 239", //ok
	"McLane Hall Room 240", //ok
	"McLane Hall Room 241", //ok
	"McLane Hall Room 242", //ok
	"McLane Hall Room 243", //ok
	"McLane Hall Room 244", //ok
	"McLane Hall Room 247", //ok
	"McLane Hall Room 249", //ok
	"McLane Hall Room 251", //ok
	"McLane Hall Room 254", //ok
	"McLane Hall Room 255", //ok
	"McLane Hall Room 257", //ok
	"McLane Hall Room 258", //ok
	"McLane Hall Room 260", //ok
	"McLane Hall Room 261", //ok
	"McLane Hall Room 262", //ok
	"McLane Hall Room 264", //ok
	"McLane Hall Room 276", //ok
	"McLane Hall Room 277", //ok
	"McLane Hall Room 278", //ok
	"McLane Hall Room 279", //ok
	"McLane Hall Room 280", //ok
	"McLane Hall Room 282A", //ok
	"McLane Hall Room 282B", //ok
	"McLane Hall Room 283", //ok
	"McLane Hall Room 283A", //ok
	"McLane Hall Room 284", //ok
	"McLane Hall Room 285", //ok
	"McLane Hall Room 286", //ok
	"McLane Hall Room 287", //ok
	"McLane Hall Room 288", //ok
	"McLane Hall Room 289", //ok
	"McLane Hall Room 290", //ok
	"McLane Hall Room 291", //ok
	"McLane Hall Room 292", //ok
	"McLane Hall Room 293", //ok
	"McLane Hall Room 294", //ok

	"Science II 101",

	"Social Science 101", //ok
	"Social Science 102", //ok
	"Social Science 103", //ok
	"Social Science 104", //ok
	"Social Science 105", //ok
	"Social Science 106", //ok
	"Social Science 108", //ok
	"Social Science 109", //ok
	"Social Science 110", //ok
	"Social Science 111", //ok
	"Social Science 112", //ok
	"Social Science 113", //ok
	"Social Science 114", //ok
	"Social Science 115", //ok
	"Social Science 116", //ok
	"Social Science 117", //ok
	"Social Science 118", //ok
	"Social Science 119", //ok
	"Social Science 120", //ok
	"Social Science 121", //ok
	"Social Science 123", //ok
	"Social Science 124", //ok
	"Social Science 125", //ok
	"Social Science 126", //ok
	"Social Science 127", //ok
	"Social Science 128", //ok
	"Social Science 129", //ok

	"Social Science 201", //ok
	"Social Science 202", //ok
	"Social Science 203", //ok
	"Social Science 204", //ok
	"Social Science 205A", //ok
	"Social Science 205B", //ok
	"Social Science 207", //ok
	"Social Science 208", //ok
	"Social Science 209A", //ok
	"Social Science 209B", //ok
	"Social Science 210", //ok
	"Social Science 211", //ok
	"Social Science 212", //ok
	"Social Science 213", //ok
	"Social Science 215", //ok
	"Social Science 216", //ok
	"Social Science 217", //ok
	"Social Science 218", //ok
	"Social Science 219", //ok
	"Social Science 220", //ok
	"Social Science 221", //ok
	"Social Science 222", //ok
	"Social Science 223", //ok
	"Social Science 224", //ok
	"Social Science 225", //ok
	"Social Science 226", //ok
	"Social Science 226A", //ok
	"Social Science 227", //ok

	"South Gym 101", //ok
	"South Gym 102", //ok 
	"South Gym 104", //ok
	"South Gym 109", //ok
	"South Gym 112", //ok
	"South Gym 113", //ok
	"South Gym 114", //ok
	"South Gym 115", //ok
	"South Gym 116", //ok
	"South Gym 117", //ok
	"South Gym 120", //ok
	"South Gym 121", //ok
	"South Gym 124", //ok
	"South Gym 125", //ok
	"South Gym 126", //ok
	"South Gym 127", //ok
	"South Gym 128", //ok
	"South Gym 129", //ok
	"South Gym 130", //ok
	"South Gym 131", //ok
	"South Gym 132", //ok
	"South Gym 133", //ok
	"South Gym 134", //ok
	"South Gym 136", //ok
	"South Gym 137", //ok
	"South Gym 139", //ok
	"South Gym 141", //ok
	"South Gym 142", //ok
	"South Gym 143", //ok
	"South Gym 145", //ok
	"South Gym 149", //ok
	"South Gym 150", //ok
	"South Gym 153", //ok

	"Speech Arts 4",
	"Speech Arts 5",
	"Speech Arts 6",
	"Speech Arts 7",
	"Speech Arts 8",
	"Speech Arts 9",
	"Speech Arts 10",
	"Speech Arts 11",
	"Speech Arts 13",
	"Speech Arts 14",
	"Speech Arts 15",
	"Speech Arts 32",
	"Speech Arts 33",
	"Speech Arts 34",
	"Speech Arts 35",
	"Speech Arts 36",
	"Speech Arts 37",
	"Speech Arts 38",
	"Speech Arts 104",
	"Speech Arts 105",
	"Speech Arts 106",
	"Speech Arts 107",
	"Speech Arts 115",
	"Speech Arts 116",
	"Speech Arts 117",
	"Speech Arts 118",
	"Speech Arts 119",
	"Speech Arts 120",
	"Speech Arts 121",
	"Speech Arts 122",
	"Speech Arts 124",
	"Speech Arts 130",
	"Speech Arts 131",
	"Speech Arts 136",
	"Speech Arts 137",
	"Speech Arts 139",
	"Speech Arts 144",
	"Speech Arts 146",
	"Speech Arts 147",
	"Speech Arts 150",
	"Speech Arts 151",
	"Speech Arts 153",
	"Speech Arts 154",
	"Speech Arts 156",
	"Speech Arts 157",
	"Speech Arts 158",
	"Speech Arts 160",
	"Speech Arts 161",
	"Speech Arts 163",
	"Speech Arts 164",
	"Speech Arts 169",
	"Speech Arts 170A",
	"Speech Arts 170B",
	"Speech Arts 170C",
	"Speech Arts 171",
	"Speech Arts 172",
	"Speech Arts 174",
	"Speech Arts 176",
	"Speech Arts 178",
	"Speech Arts 180",
	"Speech Arts 181",
	"Speech Arts 182",
	"Speech Arts 183",
	"Speech Arts 184",
	"Speech Arts 188",
	"Speech Arts 190",

	"Speech Arts 202",
	"Speech Arts 203",
	"Speech Arts 204",
	"Speech Arts 205",
	"Speech Arts 206",
	"Speech Arts 207",
	"Speech Arts 208",
	"Speech Arts 210",
	"Speech Arts 211",
	"Speech Arts 212",
	"Speech Arts 213",
	"Speech Arts 214",
	"Speech Arts 215",
	"Speech Arts 216",
	"Speech Arts 220",

	"Lab School 100", //ok
	"Lab School 101", //ok
	"Lab School 102", //ok
	"Lab School 108", //ok
	"Lab School 110", //ok
	"Lab School 112", //ok
	"Lab School 116", //ok
	"Lab School 117", //ok
	"Lab School 118", //ok
	"Lab School 119", //ok
	"Lab School 120", //ok
	"Lab School 121", //ok
	"Lab School 122", //ok
	"Lab School 123", //ok
	"Lab School 124", //ok
	"Lab School 125", //ok
	"Lab School 126", //ok
	"Lab School 130", //ok
	"Lab School 131", //ok
	"Lab School 132", //ok
	"Lab School 133", //ok
	"Lab School 134", //ok
	"Lab School 135", //ok
	"Lab School 136", //ok
	"Lab School 137", //ok
	"Lab School 158", //ok
	"Lab School 159", //ok
	"Lab School 163", //ok
	"Lab School 164", //ok
	"Lab School 166", //ok
	"Lab School 167", //ok
	"Lab School 169", //ok
	"Lab School 170", //ok
	"Lab School 171", //ok
	"Lab School 173", //ok
	"Lab School 176", //ok
	"Lab School 177", //ok
	"Lab School 178", //ok
	"Lab School 181", //ok
	"Lab School 182", //ok
	"Lab School 184", //ok
	"Lab School 185", //ok
	"Lab School 187", //ok
	"Lab School 188", //ok

	// USU AND OTHER FOOD OPTIONS
	"Panda Express (On Campus)", //ok
	"Subway (On Campus)", //ok
	"Robertito's Taco (On Campus)", //ok
	"Taco Bell (On Campus)", //ok
	"Juice It Up! (On Campus)", //ok
	"Bulldog Bowl", //ok
	"The Bucket (On Campus)", //ok
	"Fresno State Creamery", //ok

	"University Dining Hall", //ok
	"Dining Hall", //ok
	"Kennel Bookstore", //ok
	"Henry Madden Library", //ok
	"Library (On Campus)", //ok
	"Bulldog Testing Center", //ok
	"Fountain", //ok
	"Police Department (On Campus)" //ok
];
//autocomplete for both the search bars
autocomplete(document.getElementById("myInput"), CampusLocations); //used in the seach bar 1
autocomplete(document.getElementById("myInput2"), CampusLocations); //used in the seach bar 2