<?php
/**
 * Test pagina php per output html
 * NB: utilizzo eccessivo di incapsula()
 * e complicazioni inutili su $PAGE con ".=" o solo "="
 * per assegnarne il valore.
 * Esempio utile anche per provare "doxygen".
*/
include('lib/html.php');

$PAGE = ""; //! La pagina da inviare al browser solo alla fine dell'elaborazione.

$titolo = "Pagina di prova";
$testa = incapsula($titolo, "title");
$testa = incapsula($testa,"head");

$PAGE.=$testa;

$corpo = incapsula($titolo, "h1");
$corpo = incapsula($corpo, "body");
$PAGE .= $corpo;

$PAGE = incapsula($PAGE, "html");
echo "<!DOCTYPE html>" . PHP_EOL;
echo $PAGE;
