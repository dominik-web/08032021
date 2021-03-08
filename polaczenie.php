<?php
    $host="localhost";
    $user="root";
    $password="";
    $dbname="dominikbobiec";
    $port=3306;

    $polaczenie = @new Mysqli($host,$user,$password,$dbname,$port);
    if(mysqli_connect_errno()!=0){
        echo("Błąd połączenia do bazy danych, nr: ".mysqli_connect_error());
    } else {
        echo("Połączono do bazy danych :))))"."<br>");
    }
?>