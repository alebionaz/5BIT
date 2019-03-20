Appunti per progetto database noleggio biciclette
===============

## Simulazione tema d'esame
[Vedere il file con la bozza di soluzione](./bozza_soluzione.md)

## Compiti da svolgere per ogni alunno
Ogni alunno è tenuto a:

### Crea un archivio github riservato

Per tutelare la privacy crea un archivio github e insercsi l'utente github _rpicchio_
come collaboratore.

### Crea una dir di lavoro personale
- creare una directory che inizi con nn.nome dove nn va sostituito con le due cifre del numero di registro (es 01.tizio)
- in ogni directory posizionare i documenti richiesti senza modificare gli originali

### Crea un file README.md
Inserisci le istruzioni e i commenti che ritieni opportuni.

### Crea un database 
Riporta il codice SQL utilizzato e fai le corrette considerazioni sull'utente che deve eseguire i comandi.

### Crea gli utenti del database in grado di gestire i dati
Indica i comandi utilizzati e l'utente che li esegue.

### Sistemare file sql generato da ferret

Il file sql generato da ferret contiene parecchi errori. Crea il file, correggi gli errori, e crea le tabelle per il database.

### Inserimento dei dati d'esempio

Crea un file con estensione .sql con i comandi per:

- creare le tabelle
- inserire un insieme di dati significativo.

### Nel README.md 

Inserisci le informazioni necessarie a comprendere ed eseguire le operazioni che hai svolto.

## I documenti MarkDown in questa directory
Scritti in markdown, possono essere trasformati in pdf, html o odt con il comando _pandoc_:

```sh
$ pandoc -o README.odt  README.md
$ pandoc -o README.html  README.md
$ pandoc -o README.pdf  README.md
```

Per l'esportazione in pdf è stato creato un semplice _makefile_ e quindi è possibile
dare semplicemente il comando:

```sh
$ make
```

## TODO

Segnalazioni migliorie al progetto

### Documento master
Creare un documento master che inglobi i file odt dando un aspetto omogeneo

### Presentazione

Partendo dal documento master inviare a presentazione o pensare ad un documento master che possa fungere da presentazione.

Vedere se possibile creare la presentazione direttamente da linea di comando e inserire il comando nel makefile

### altro 
....
