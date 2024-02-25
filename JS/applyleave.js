// Get the modal
// Get the modal
var modal = document.getElementById('popupForm');

// Get the button that opens the modal
var btn = document.getElementById("openBtn");

// Get the <span> element that closes the modal
var span = document.getElementById("closeBtn");

// Get the element representing the background
var leaves_main = document.getElementById("leaves-main");

// When the user clicks the button, open the modal 
btn.onclick = function () {
    modal.style.display = "block";
    leaves_main.style.opacity = 0.6; // Adjust the opacity as desired
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
    leaves_main.style.opacity = 10; // Reset the opacity
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";// Reset the opacity
    }
}