function validateForm() {
    var fn = document.forms["jsvalidation"]["firstname"].value;
    if (fn == "") {
        alert("Voornaam niet goed");
        document.forms["jsvalidation"]["firstname"].style.border = '1px solid red';
        return false;
    } else {
        document.forms["jsvalidation"]["firstname"].style.border = '1px solid gray';
    }

    var ln = document.forms["jsvalidation"]["lastname"].value;
    if (ln == "") {
        alert("Achternaam niet goed");
        document.forms["jsvalidation"]["lastname"].style.border = '1px solid red';
        return false;

    } else {
        document.forms["jsvalidation"]["lastname"].style.border = '1px solid gray';
    }
}