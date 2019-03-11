<?php
/*
 * funzioni utili per l'utilizzo dei form
 * */
function get_form_insert($nome_file){
		$ans = '';
		$ans .='
	<h2>Form</h2>
	<form method="post" action="'.$nome_file.'">  
	Comando: <input type="text" name="comando">
	<br><br>
	Descrizione:<br><textarea name="descrizione" rows="5" cols="40"></textarea><br><br>
	Sintassi:<br><textarea name="sintassi" rows="5" cols="40"></textarea><br>
	<br><input type="submit" value="Invia"><br>
	</form>';
		return $ans;
}

function get_from_update($nome_file){
		$ans = '';
		$ans .='
	<h2>Form</h2>
	<form method="put" action="'.$nome_file.'">  
	Comando: <input type="text" name="comando">
	<br><br>
	Descrizione:<br><textarea name="descrizione" rows="5" cols="40"></textarea><br><br>
	Sintassi:<br><textarea name="sintassi" rows="5" cols="40"></textarea><br>
	<br><input type="submit" value="Modifica"><br>
	</form>';
		return $ans;
	}
