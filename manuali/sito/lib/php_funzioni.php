<?php

/*
 * Nella funzione connetti le variabili di configurazione 
 * devono essere chiamate nello stesso modo in cui vengono chiamati
 * nel file conf.conf
**/
function connetti()
	{
	global $mysqli;
	global $servername,$username,$password,$dbname;
	$mysqli= new mysqli($servername,$username,$password,$dbname);
	if ($mysqli->connect_error)
		{
		//die("Connection failed: " . $conn->connect_error); 	debug_message
		return false;
		}
	//echo "Connected successfully";	debug_message
	return true;
	
	}

//problemi con la il metodo all'interno del while
function get_html_table_from_query($sql)
		{
		$ans = "Lavori in corso...";
		/*
		$result = mysqli_query(connetti(),$sql);

		echo "<table>
		<tr>
		<th>Nome</th>
		<th>Marca</th>
		<th>Prezzo</th>
		</tr>";
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $row['modello'] . "</td>";
			echo "<td>" .  $row['marca'] .  "</td>";
			echo "<td>" . "€ " . $row['prezzo'] .  "</td>";
			echo "</tr>";
		}
		echo "</table>";*/
		return $ans;
		}

?>
