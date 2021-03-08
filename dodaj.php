<?php 

/**
 * Dokument odbierający zmienną nazwa jako supergrobalą
 * dodaje do bazy danych mysqli: insert into 
 
    
* 
 *   echo("
 *   $nazwa <br>
  *  ");
*/

    include_once("polaczenie.php");
    $nazwa = $_POST['nazwa'];
    echo("moja nazwa: ".$_POST['nazwa']."<br>");

    $zaptyanie_insert = $polaczenie->query("INSERT INTO nazwa(nazwa) values('$nazwa')");
    $polaczenie -> close();
?>