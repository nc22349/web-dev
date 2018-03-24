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
    return names;
}

function addToHtml(imgs) {
    var parent = document.getElementById("imgs");
    for (var i=0; i<imgs.length; i++) {
        var elt = document.createElement("img");
        elt.src = imgs[i];
        elt.alt = "jigsaw-piece";
        elt.class = "jigsaw-piece";
        parent.appendChild(elt);
    }
}