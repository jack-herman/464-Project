var isShowing = false;
var dropdownMenu = null;
//Show the drop-down menu with the given id, if it exists, and set flag
function show(id){
hide(); /* First hide any previously showing dropdown menu */
dropdownMenu = document.getElementById(id);
if (dropdownMenu != null){
dropdownMenu.style.visibility = 'visible';
isShowing = true;
}
}
//Hide the currently visible dropdown menu and set flag
function hide(){ 
if (isShowing) dropdownMenu.style.visibility = 'hidden';
isShowing = false;
}
