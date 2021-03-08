<?php
    include_once("polaczenie.php");
    $zapytanie_SELECT = $polaczenie->query("SELECT idn,nazwa FROM nazwa;");

    while(list($idn,$nazwa)=mysqli_fetch_array($zapytanie_SELECT)){
        echo("
            IDN: $idn, Nazwa: $nazwa <br>
        ");
    }

    $polaczenie->close();
?>