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
		//$ans = "Lavori in corso...";
		
		//$result = mysqli_query($mysqli,$sql);
		$result = $mysqli->query($sql);
		/*
		$ans = "<table>
		<tr>
		<th>Nome</th>
		<th>Marca</th>
		<th>Prezzo</th>
		</tr>";
		
		while($row = $result->fetch_assoc()) {
			$ans .= "<tr>" .
			 "<td>" . $row['modello'] . "</td>" .
			 "<td>" .  $row['marca'] .  "</td>" .
			 "<td>" . "€ " . $row['prezzo'] .  "</td>" .
			 "</tr>";
		}
		$ans .= "</table>";
		return $ans;
		*/
		$ans="";
		if($result->num_rows>0)
			{
			$ans="<table><tr>";
			$array=array();
			for($i=0;$i<$result->field_count;$i++)
				{
				$array[] = $result->fetch_fields()[$i]->name;
				$ans.="<th>".$result->fetch_fields()[$i]->name."</th>";
				}
			$ans.="</tr>";
			while($row=$result->fetch_assoc())
				{
				$ans.="<tr>";
				for($j=0;$j<count($array);$j++)
					{
					$ans.="<td>";
					$ans.=$row[$array[$j]]." ";
					$ans.="</td>";
					}
				$ans.="</tr>";
				}
			$ans.="</table>";
			}
		return $ans;
		}

?>
