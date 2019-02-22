<?php
function filterName($field){
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);

    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
}
function filterEmail($field){
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);

    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    } else{
        return FALSE;
    }
}

$nameErr = $emailErr = "";
$name = $email = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Voer je naam in";
    } else {
        $name = filterName($_POST["name"]);
        if ($name == FALSE) {
            $nameErr = "Voer een geldige naam in";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Voer je e-mail adres in";
    } else {
        $email = filterEmail($_POST["email"]);
        if ($email == FALSE) {
            $emailErr = "Voer een geldig e-mail adres in";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>PHP Validatie Form</title>
</head>
<body>
<form action="form.php" method="post" class="w3-container">
        <label for="inputName">Roepnaam:</label><br>
        <input type="text" name="name" id="inputName" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>
        <br>
        Achternaam:<br>
        <input type="text" name="lastname" value="" >
        <br>
        Postcode:<br>
        <input type="text" pattern="[1-9][0-9]{3}\s?[a-zA-Z]{2}" name="zipcode" value="" >
        <br>
        Telefoonnummer:<br>
        <input type="tel" pattern="[0-9]{2}[0-9]{8}" name="phonenr" value="" >
        <br>
        <label for="inputEmail">Email:</label><br>
        <input type="text" name="email" id="inputEmail" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>
        <br>
        Geboortedatum:<br>
        <input type="date" value="" >
        <br>
        Wachtwoord:<br>
        <input type="password" value="" >
        <br>
        <input type="checkbox" value="" > Ik ga akkoord
        <br>
    <input type="submit" value="Opslaan">
</form>
</body>
</html>