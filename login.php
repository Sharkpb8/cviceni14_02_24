<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = $_POST["jmeno"];
    $email = $_POST["email"];

    // Vypíše přijatá data
    echo "Jméno: " . $jmeno . "<br>";
    echo "Email: " . $email . "<br>";
} else {
    // Pokud by se někdo pokusil přistupovat k tomuto skriptu přímo přes URL, můžete přesměrovat nebo zobrazit chybovou zprávu
    echo "Přístup nepovolen!";
}
?>