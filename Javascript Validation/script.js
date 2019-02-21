var square = document.getElementById("square");

function validateForm() {
    var fn = document.forms["jsvalidation"]["firstname"].value;
    if (fn == "") {
        square.style.backgroundColor = "#fa4";
        alert("Voornaam niet goed");
        return false;
    } else {
        square.style.backgroundColor = "transparent";
    }

    var ln = document.forms["jsvalidation"]["lastname"].value;
    if (ln == "") {
        alert("Achternaam niet goed");
        return false;
    }

}