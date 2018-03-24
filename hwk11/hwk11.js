var directories = ["images1", "images2", "images3"];
main();

function main() {
    var dir = directories[getRandom(directories.length)];
    var imgs = getImageNames(dir);
    addToHtml(imgs);
}

function getRandom(ceiling) {
    return Math.floor(Math.random() * ceiling);
}

function getImageNames(dir) {
    var names = [];
    for (var i=0; i<12; i++) {
        names.push(dir + "/img" + dir.slice(-1) + '-' + (i+1) + ".jpg");
    }
    return shuffle(names);
}

function shuffle(a) {
    for (var i=a.length-1; i>0; i--) {
        var j = getRandom(i+1);
        var x = a[i];
        a[i] = a[j];
        a[j] = x;
    }
    return a;
}

function addToHtml(imgs) {
    var parent = document.getElementById("imgs-wrapper");
    for (var i=0; i<imgs.length; i++) {
        var divElt = document.createElement("div");
        divElt.style = "margin: 0 15px 15px 0; display: inline-block";
        divElt.setAttribute("onmousedown", "grabber(event);");
        
        var imgElt = document.createElement("img");
        imgElt.src = imgs[i];
        imgElt.alt = "jigsaw-piece";
        
        divElt.appendChild(imgElt);
        parent.appendChild(divElt);
    }
}