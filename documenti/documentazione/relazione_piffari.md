Relazione Piffari
===============================================
# Svolgimento
## get_html_head("Titolo della pagina")
Non sono riuscita a creare questa funzione, ma la sua funzionalità è quella di restituire il titolo della pagina html.
## incapsula("Cerca i contatti", "h2")
La funzione incapsula che non sono riuscita a creare perché molto complessa, prende un testo ed una tipo di tag (qualsiasi, ma che deve esistere) e dopo determinati processi inserisce il testo passato dall’utente nel tag dato.
La funzione incapsula non è necessaria è solo una convenzione per il programmatore.
## get_html_select_from_query($sql,$default_selected, 'onchange="showUser(this.value)"')
Anche in questo caso non sono riuscita a riscrivere la funzione, ma è molto importante perché ti fa lo script in sql prendendo l’id della tua automobile (in questo caso).
La variabile onchange non contiene altro che la “lista” di tute le automobili con il loro id corrispondete.
## connetti_db()
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
Per connetersi al db è necessario avere i dati di accesso che sono stati inclusi nel file tramite la funzione include 'conf.php', successivamente la connessione del database sarà inserita nel file che naviga all’interno del database.
## commento("Errore connessione al db.")
	function commento($testo)
	{
			return "<$testo>";
	}
La funzione commento è stata creata per dare la possibilità all’utente di poter mettere dei messaggi di output significativi nel programma, con lo scopo di poter aiutare l’utente ad orientarsi ed anche per il programmatore.
## get_html_table_from_query($sql, "class=\"table-striped table-bordered\"")
La funzione data una query, cioè una SELECT in linguaggio MYSQL ne crea una tabella, il secondo parametro è solo una convenienza che serve per rendere più carino l’aspetto della tabella.
## Riporta una pagina d'esempio per generare una qualunque pagina che li utilizzi in un caso reale.
Il mio esercizio si connette correttamente, ma visto che mancano delle funzioni non posso verificarne il vero e proprio funzionamento.
