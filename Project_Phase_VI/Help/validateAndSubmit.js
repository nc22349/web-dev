$("#helpForm").submit(function() {
    event.preventDefault();

    $("#success").remove();

    validate();    
    var regex = /^.+@.+\..+(\..+)*$/; // one or more chars, followed by @, followed by one or more chars, followed by '.', followed by one or more chars, optionally followed by ('.' followed by one or more chars) zero or more times
    
    if (!regex.test($("#email").val())) {
        $("#email").addClass("is-invalid");
        return;
    }
    
    $("#email").removeClass("is-invalid");

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $("#helpForm").trigger("reset");
            $("#helpForm").after('<p id="success" class="text-success">Your help request has been received. Thank you!</p>');
        }
    };

    xhttp.open("POST", "submitHelp.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(
        "firstname=" + $("#firstname").val() +
        "&lastname=" + $("#lastname").val() +
        "&email=" + $("#email").val() +
        "&comments=" + $("#comments").val()
    );
});
