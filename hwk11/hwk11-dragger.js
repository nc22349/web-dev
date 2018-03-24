var diffX;
var diffY;
var elt;

function grabber(event) {
    elt = event.currentTarget;
    
    // Position of the elt to be grabbed
    var bodyRect = document.body.getBoundingClientRect(),
        eltRect = elt.getBoundingClientRect(),
        posY = eltRect.top - bodyRect.top,
        posX = eltRect.left - bodyRect.left;
    
    // Difference between location and mouse click
    diffX = event.clientX - posX;
    diffY = event.clientY - posY;

    document.addEventListener("mousemove", mover, true);
    document.addEventListener("mouseup", dropper, true);
    event.stopPropagation();
    event.preventDefault();
}

function mover(event) {
    // Move the element
    elt.style.position = "absolute";
    elt.style.left = (event.clientX - diffX) + "px";
    elt.style.top = (event.clientY - diffY) + "px";

    event.stopPropagation();
}

function dropper(event) {
    document.removeEventListener("mouseup", dropper, true);
    document.removeEventListener("mousemove", mover, true);

    event.stopPropagation();
}