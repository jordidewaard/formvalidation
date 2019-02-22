function validateForm() {
    var fn = document.forms["jsvalidation"]["firstname"].value;
    if (fn == "") {
        alert("Voornaam niet goed");
        return false;
    }

    var ln = document.forms["jsvalidation"]["lastname"].value;
    if (ln == "") {
        alert("Achternaam niet goed");
        return false;
    }
    console.log(ln);
}