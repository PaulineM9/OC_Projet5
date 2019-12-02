// Get the modal
var modal = document.querySelector(".modal");
// Get the button that opens the modal
var btn = document.querySelectorAll(".description_btn");
// Get the <span> element that closes the modal
var span = document.querySelectorAll(".close");

// When the user clicks the button, open the modal 
btn.forEach(element => {
    element.onclick = function() {
        document.querySelector('div[data-modal="'+this.getAttribute("data-btn")+'"]').style.display = "block";
    }
});

// When the user clicks on <span> (x), close the modal
span.forEach(element => {
    element.onclick = function() {
        document.querySelector('div[data-modal="'+this.getAttribute("data-close")+'"]').style.display = "none";
    }
});

