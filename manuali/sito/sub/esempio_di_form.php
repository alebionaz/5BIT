<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
	<?php
	$comandoErr = "";
	$comando = $descrizione = $sintassi ="";
	
	//controllo campi obbligatori
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["comando"])) {
			$comandoErr = "Errore: il campo e' vuoto!";
		} else {
			$comando = test_input($_POST["comando"]);
		}
	}

	$descrizione = test_input($_POST["descrizione"]);
	
	$sintassi = test_input($_POST["sintassi"]);
	
	//validazione dei dati inseriti
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>

<h2>Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	Comando: <input type="text" name="comando">
	<span class="error">* <?php echo $comandoErr;?></span>
	<br><br>
	Descrizione:<br><textarea name="descrizione" rows="5" cols="40"></textarea><br><br>
	Sintassi:<br><textarea name="sintassi" rows="5" cols="40"></textarea><br>
	<br><input type="submit" value="Invia"><br>
</form>

<?php
echo "<h2>Cio' che hai inserito:</h2>";
echo $comando;
echo "<br>";
echo $descrizione;
echo "<br>";
echo $sintassi;
echo "<br>";
?>

</body>
</html>
