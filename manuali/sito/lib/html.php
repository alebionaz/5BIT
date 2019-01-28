<?php
/*
 * Libreria con funzioni utili per gestire pagine html
 *
 * @author Picchio <picchio@mbtlc.it>
*/

/*! \brief Facilitare l'inserimento di tag html
 *
 * La funzione restituisce il testo passato nel tag html passato come secondo parametro.
 * @param $testo il testo da includere nel tag
 * @param $tag il nome del tag
 * @param $extra_open lo aggiunge nel tag di apertura
 * @return il testo incapsulato nel tag ed eventuale extra nel tag di apertura.
*/
function incapsula($testo, $tag, $extra_open = "") {
	 if ($extra_open=="") {
 	   $ans = "<$tag>$testo</$tag>";
	 } else {
	   $ans = "<$tag $extra_open>$testo</$tag>";
	 }
	 $ans .= PHP_EOL; 
	 return $ans; //! Restituisce la stringa elaborata
}

?>