var ProjectsDescription = {
    fenetre: document.getElementById("myModal"),
	btn: document.getElementById("myBtn"),
	close: document.getElementsByClassName("close")[0],
    window: window,

    // Open the window
	openBox: function () {
		var self = this;
		this.btn.addEventListener("click", afficherBox);
		function afficherBox(e) {
			self.fenetre.style.display = "block";
		}
	},
	
	// When the user clicks on <span> (x), close the modal
	close: function () {
		var self = this;
		this.close.addEventListener("click", closeBox);
		function closeBox(e) {
			self.fenetre.style.display = "none";
		}
  	},
    
    // User click out the window and close it
	clickOut: function () {
		var self = this;
		this.window.addEventListener("click", closeBox);
		function closeBox(event) {
			if (event.target == self.fenetre) {
				self.fenetre.style.display = "none";
			}
        }
    },
}

// // Get the modal
// var modal = document.getElementById("myModal");
// // Get the button that opens the modal
// var btn = document.getElementById("myBtn");
// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];
// // When the user clicks the button, open the modal 
// btn.onclick = function() {
// modal.style.display = "block";
// }
// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
// modal.style.display = "none";
// }
// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
// 	if (event.target == modal) {
// 		modal.style.display = "none";
// 	}
// }

	