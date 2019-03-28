// Get the modal
var image_modal_wrapper = document.getElementById('image_modal_wrapper');
var image_modal_image = document.getElementById("image_modal_image");
var image_modal_close = document.getElementById("image_modal_close");

function open_image_modal(caller){
    
    // Make the wrapper appear
    image_modal_wrapper.style.visibility = "visible";
    image_modal_wrapper.style.opacity = "1";
    
    // Give the same src as image that has been clicked
    image_modal_image.src = caller.src;
    
    // Make the content appear
    image_modal_image.style.opacity = "1";
    image_modal_image.style.maxWidth = "80%";
    image_modal_image.style.maxHeight = "80%";
}

function close_image_modal(){
    // Revert values back to original CSS stylesheet
    // Image
    image_modal_image.style.opacity = null;
    image_modal_image.style.maxWidth = null;
    image_modal_image.style.maxHeight = null;
    
    // Container
    image_modal_wrapper.style.opacity = null;
    image_modal_wrapper.style.visibility = null;
}

// When the user clicks on <span> (x), close the modal
image_modal_close.onclick = function() {
  close_image_modal();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == image_modal_wrapper) {
        close_image_modal();
    }
}
