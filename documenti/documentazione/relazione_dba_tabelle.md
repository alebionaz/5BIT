Relazione Scarpante Simone, Taut Denisa, Vergaro Jacopo.
========================================================
# Relazione DBA tabelle

# Esercizi di informatica assegnati il 09/01/2019

## Lavoro svolto
 Dopo aver recuperato la documentazione ferret creata dal professore abbiamo creato le relative tabelle e apportato le dovute modifiche:
##### Abbiamo modificato le chiavi e aggiunto gli autoincrement.

  > "CREATE TABLE argomenti (
      id_argomento     _int PRIMARY KEY AUTO_INCREMENT_,
      nome     varchar(255),
      descrizione     text,
      id_padre    _int NOT NULL_
     ); "
##### Abbiamo sostituito il nome dell'insert **_argomenti_id_padre_** con **_id_padre_** 

 > "INSERT into argomenti  (nome, descrizione, id_padre) VALUES ('root','Root dei manuali',1);"
 
##### Dopo aver sistemato lo schema SQL abbiamo provato in un server locale la corretta funzionalità del database, eseguendo degli Insert.

 > "INSERT into argomenti  (nome, descrizione, id_padre) VALUES ('Informatica','Argomenti vari di informatica 5bit as 2018-2019',1);
	INSERT into argomenti  (nome, descrizione, id_padre) VALUES ('Sistemi e reti','Argomenti vari di SER 5bit as 2018-2019',1);
	INSERT into argomenti  (nome, descrizione, id_padre) VALUES ('SQL','Linguaggio database',2);"

## Comandi utili
 
##### DROP
Il comando Drop viene utilizzato per eliminare le tabelle inserite in un database.
Si raccomanda di utilizzare questo comando con estrema cautela.

 > "DROP TABLE esempi; DROP TABLE comandi; DROP TABLE argomenti;"
 
##### DUMP
Con il comando Dump è possibile creare un Backup di un database specifico.

 > "**_mysqldump -u username -p db1 --single-transaction --quick --lock-tables=false > db1-backup-$(date +%F).sql_**"


 > "**--single-transaction**" 

 Specifica che il comando eseguirà il backup di solo un determinato database.
 
 > "**--quick**" 
 Con questo comando il backup verrà eseguito riga per riga. Inoltre quando si ha poca ram a disposizione oppure quando bisogna creare tante tabelle per conservare i dati, questo comando aiuta a non occupare troppo spazio al backup.


 > "**--lock-tables=false**" fa si che le tabelle su cui verrà eseguito il backup non siano bloccate.


## CODICE SQL

 	CREATE TABLE argomenti (
		id_argomento     int PRIMARY KEY AUTO_INCREMENT,
		nome     varchar(255),
		descrizione     text,
		id_padre    int NOT NULL
	);

	CREATE TABLE comandi (
		id_comando     int PRIMARY KEY AUTO_INCREMENT,
		nome     varchar(255),
		destrizione     text,
		sintassi     text,
		id_argomento     int NOT NULL
	);

	CREATE TABLE esempi (
		id     int PRIMARY KEY AUTO_INCREMENT,
		testo     text,
		id_comando     int NOT NULL
	);

	INSERT into argomenti  (nome, descrizione, id_padre) VALUES ('root','Root dei manuali',1);
	-- INSERT into argomenti  (id_argomento, nome, descrizione, id_padre) VALUES (0,'root','Root dei manuali',0); -- non funziona ma non chiaro (approfondire)
	ALTER TABLE argomenti ADD FOREIGN KEY (id_padre) REFERENCES argomenti (id_argomento); 

	INSERT into argomenti  (nome, descrizione, id_padre) VALUES ('Informatica','Argomenti vari di informatica 5bit as 2018-2019',1);
	INSERT into argomenti  (nome, descrizione, id_padre) VALUES ('Sistemi e reti','Argomenti vari di SER 5bit as 2018-2019',1);
	INSERT into argomenti  (nome, descrizione, id_padre) VALUES ('SQL','Linguaggio database',2);
	SELECT * FROM argomenti;


	ALTER TABLE comandi ADD FOREIGN KEY (id_argomento) REFERENCES argomenti (id_argomento);


	ALTER TABLE esempi ADD FOREIGN KEY (id_comando) REFERENCES comandi (id_comando);"
