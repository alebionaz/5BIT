Relazione Gyppaz & Gallo
========================

# Esercizi di informatica assegnati il 09/01/2019
## Documentazione
Crea la documentazione e i manuali utente.
## Lavoro richiesto
Creare un manuale per programmatori ed utenti.
## Relazioni e documentazioni
Creare una relazione con le informazioni utili a descrivere il lavoro fatto e le informazioni per gli altri utenti che devono utilizzare tale lavoro.
## Fonti
	1- Appunti presi in classe
	2- HTML.it
	3- w3school
# RELAZIONE INFORMATICA
## GRUPPO 
Gyppaz Mathieu & Gallo Alessandro;
## OGGETTO 
Creare un manuale per i programmatori e un manuale per gli utenti.
## CONSEGNA
Creare le funzioni get_head(), get_foot() e i modelli di pagina per utilizzarle.
## SVOLGIMENTO

• Esempio tipo della funzione get_head();
		<?php
		include 'sito.php';
			echo get_head();
		?>
	
		<?php
		function get_head() 
		{
			$string = “<!DOCTYPE html>” . “<html>” . “<body>”;
			return $string;
		}
		?>

• Esempio tipo della funzione get_foot();
		<?php
		include 'sito.php';
			echo get_foot();
		?>
      
		<?php
		function get_foot() 
		{
             $string2 = “</body>” . “</html>”;
             return $string2;
		}
		?>
## COMMENTO SUL LAVORO SVOLTO
Per l’esempio tipo della funzione “get_head()”, abbiamo incluso il file “sito.php” contenente il codice html che dovranno passarci i
 nostri compagni; successivamente nella funzione abbiamo indicato i tag del codice html che dovranno essere aperti.
Per l’esempio tipo della funzione “get_foot()”, abbiamo sempre incluso il file “sito.php”; successivamente nella funzione abbiamo indicato
 i tag del codice html che dovranno essere chiusi.
