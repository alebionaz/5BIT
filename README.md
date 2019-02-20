
Materiale per la classe 5bit AS 2018-2019 (I. Manzetti - Aosta)
=================
# Clonare il repository
Da fare solo una volta.
```
$ git clone https://github.com/simonemastella/5BIT.git
```
# Aggiornamento
Si chiede algi alunni di aggiungere informazioni sui lavori svolti e sugli incarichi ricevuti.

# Docente: Roberto Picchiottino
Sono il docente di riferimento.

## Alcuni consigli
Leggere e produrre documentazione, l'alunno (gli alunni) che curano la documentazione avranno cura di informare come procedere nel migiore dei modi. Io inizio con md. Attendo fiducioso di sapere quali strategie individuate per documentare il progetto. :boom:

### Copia ...
Strano! Ti consiglio di copiare! Non è una svista!

Quando trovi una soluzione che ti piace, cerca di capire come è stata implememntata e utilizza il codice che la mette in pratica.

Fai molta attenzione alla licenza d'uso: deve essere compatibile con quella che utilizzi.

### Documentazione per GIT
[Guida tascabile GIT](https://rogerdudler.github.io/git-guide/index.it.html)
### Aggiorna il repository
Alcuni comandi utili ...
```
git add .
git commit -m "Messaggio con indicazioni del commit"
git status
git pull
git push origin master
```

### URL utili
* [Guida a MarkDown](https://guides.github.com/features/mastering-markdown/)
* [Sintassi di base](https://help.github.com/articles/basic-writing-and-formatting-syntax/)

# Alunno 1
Adamo Elia lavoro per il database.
Sto aiutato Raffa nei test di connessione e raccolta dei vari comandi.

##Per connettersi al database: 
$ mysql -h 192.168.21.100(+ numero di registro) -u user -ppass documentazione.

(se si hanno problemi di accesso al server chiedere al sottscritto o a Raffa).

# Alunno 2, [GIT Master](#git-master)
 Principalmente mi occupo di gestire il corretto funzionamento e l'ordine generale della repo, aggiungendo migliorie, documentando ciò che serve e sistemando i commit errati ma quando necessario, risolvo i problemi riscontrati dagli altri contributors nello svolgimento dei loro compiti. In pratica sono una specie di **maintainer**.
## Info Utili
### Struttura Repo
Lo schema seguente mostra una struttura semplificata con solo le directory significative della repo, in modo da mostrare quali file sono contenuti in ogni directory.
```
├───documenti
│   └───documentazione
├───GPOI
│   ├───Relazioni
│   └───Sito
└───manuali
    └───sito
```
#### La cartella documenti
Questa cartella contiene varie relazioni fatte da tutti i contributors, il file ferret del database della casa discografica, varie guide e una delle parti più importanti di tutto il progetto: [La documentazione!](#documentazione).
#### La cartella GPOI
La cartella GPOI (Gestione Progetto e Organizzazione d'Impresa) contiene tutti i file relativi alla coperativa scolastica che stiamo gestendo.
#### La cartella manuali
Questa cartella ha lo scopo di contenere dei manuali cartacei contenenti la documentazione base di tutti gli argomenti svolti durante l'anno, in modo da poterli consultare durante i compiti in classe o durante l'Esame di Stato.
## File Utili
In questa sezione sono riportati i file più importanti e significativi, come file di configurazione o simili.
* [File di configurazione di Doxygen (Doxyfile)](Doxyfile)
## To-Do
Questa sezione contiene letteralmente una lista delle cose da fare (To-Do) e anche una lista di idee che ho intenzione di implementare per migliorare la repo. 
* Creare README.md alle cartelle GPOI e Documentazione
* Ristrutturare il contenuto delle directory per renderlo più ordinato ed intuitivo
### Idee
* Implementare docker nel progetto (In modo da svincolare la repo dalla directory public_html e da renderla usabile su ogni Distro / Sistema Operativo). In modo da avere:
    *  Un webserver apache in un'immagine docker che renda visualizzabili tutte le pagine
    *  Un dockerfile che generi le immagini dei database utilizzati dal progetto partendo da un file SQL (Al posto dei file .ger di ferret)
* Uno script che configuri il sistema per usufruire correttamente del progetto, in modo da utilizzare un comando solo, come nell'esempio successivo.
    ```
    $ bash <(curl -s linkfile.sh)
    ```
## Lavoro Svolto
Per adesso mi sono occupato e mi sto occupando tuttora di mantenere la repo ordinata e pulita, infatti, oltre a sistemare il file README correggendo vari errori e applicando uno stile di formattazione omogenea, ho modificato il file **.gitignore** per gestire i file temporanei di _emacs_. Inoltre, ho aiutato gli altri utenti in difficoltà.
# Alunno 3
Ciao sono Bionaz.
# Alunno 4
Cecilia Corbara, 11 DB e form
# Alunno 5
Ciao sono **Edoardo Di Vita**, 6 git master, mi occupo della gestione di git. In primo luogo abbiamo analizzato il funzionamento di Git confrontandolo con validi rivali come BitBucket e GitLab. Nostante i loro punti di forza, presentano molteplici difetti che abbiamo elencato nella seguente relazione:

[Analisi di Git](https://gist.github.com/simonemastella/1792e8dd3cc8a8878825a4d2df676300)

Inoltre abbiamo creato un manuale con i comandi principali per aiutare gli utenti alle prime armi. Il manuale in questione è il seguente:

[Manuale Git](https://github.com/simonemastella/5BIT/blob/master/documenti/MANUALE_GIT.odt)
# Alunno 6
Sono **Fabrizi** e lavoro per la documentazione (n°7).
Il mio obiettivo è quello di creare una documentazione e un manuale che possa essere utile a tutta la classe 
e facilitare lo studio. Il programma utilizzato è **Doxygen**, strumento standard di fatto per generare documentazione 
da sorgenti di vari linguaggi di programmazione popolari. Dopo aver capito il suo funzionamento, l’ho scaricato 
(_apt-get_ _install_ _doxygen_), creato una cartella di lavoro dove eseguire i comandi.

#### Link per comandi utili:
[Commentare e Documentare con Doxygen](http://www.lotar.altervista.org/wiki/programming/php-and-doxygen)
# Alunno 7
Sono _Gallo_, ho lavorato sulla documentazione 5 insieme a _Gyppaz_. Il nostro compito era quello di creare le
funzioni **get_head()** e **get_foot()**. Per ciò che riguarda la prima funzione abbiamo rivisto ciò che avevamo
già fatto in classe, per ciò che riguarda la seconda funzione ci siamo dovuti documentare su internet. Ci abbiamo
messo piu' tempo del previsto perchè sul foglio della consegna la funzione get_foot() era chiamata get_food() e 
ciò ci ha bloccato. La relazione relativa al nostro lavoro può essere trovata e consultata nella
cartella documenti con il nome relazione_5...
# Alunno 8
Sono Guerini,il mio lavoro è connettere il Db a libreoffice.
Sono Guerini,il mio lavoro è il numero 9. L'obbiettivo è quello di 
connettere il Db a libreofffice. Nella prima parte del compito era 
richiesto di creare un collegamento al database. Per creare il 
collegamento con libreoffice base era necessario avere un database. Dopo 
aver creato su mariaDB il database chiamato “discografia” con annessa 
password *************, ho creato le tabelle con il codice proposto 
dall’esercizio su ferret dato dal professore.
Una volta controllato il procedimento per la giusta creazione del 
database, ho fatto il collegamento con libreoffice base. È stato 
necessario eseguire tutti i passaggi su base per riuscire ad avere una 
connessione riuscita. Dopodichè ho creato tutte le relazioni su base ed 
ho fatto la parte grafica base del database
# Alunno 9
Sono _Gyppaz_, ho lavorato sulla documentazione 5 insieme a _Gallo_. Il nostro compito era quello di creare le
funzioni **get_head()** e **get_foot()**. Per ciò che riguarda la prima funzione abbiamo rivisto ciò che avevamo
già fatto in classe, per ciò che riguarda la seconda funzione ci siamo dovuti documentare su internet. Ci abbiamo
messo piu' tempo del previsto perchè sul foglio della consegna la funzione get_foot() era chiamata get_food() e 
ciò ci ha bloccato. La relazione relativa al nostro lavoro può essere trovata e consultata nella
cartella documenti con il nome relazione_5...
# Alunno 10
Ciao, sono l'alunno **Hermann Hausherr** e mi sono occupato della documentazione con doxygen. Spiegherò come installarlo e usarlo opportunamente.
## Installazione Doxygen
per installare doxygen basta avviare il comando
```
# apt-get install doxygen
```
## Configurazione cartella di lavoro Doxygen
per creare la prima cartella per la documentazione bisogna innanzitutto generare il file di configurazione di doxygen con il comando:
```
$ doxygen -g doxyfile
```
(**N.B.** si consiglia di usare il nome doxyfile, ma può essere a piacere) 
una volta creato il file di configurazione bisogna modificarlo per impostare i parametri a piacere. Per farlo basta aprire il file doxyfile con un qualsiasi editor di testo.

Successivamente bisogna generare la documentazione con il comando:
```
$ doxygen doxyfile
```
Una volta generata si vedranno apparire le cartelle "html" e "latex". Nella cartella html sarà presente il sito visualizzabile dalla pagina _html/index.html_.
## Utilizzo cartella documentazione 
tutti i successivi file della documentazione (in markdown) dovranno essere presenti nella directory in cui è presente il file di configurazione (documenti/documentazione) e per rendere effettive le modifiche prima di caricarle su git bisogna rigenerare la documentazione con
```
$ doxygen doxyfile
```
## Visualizzare la documentazione
Per visualizzare l'effettiva lista della documentazione aprire la pagina web _documenti/documentazione/html/index.html_ e procedere su "*related pages*" oppure utilizzare lo strumento di ricerca nella navbar.

# Alunno 11
Ciao! Sono l'alunno **Gabriele Marchesano**
## Sono un Web Master
Il mio lavoro consiste nell'immaginare un ipotetico sito web, strutturato con i linguaggi _html_, _css_ e altri tipi di linguaggi utilizzando anche dei framework.

[Guida HTML](https://www.w3schools.com/html/)

[Guida CSS](https://www.w3schools.com/css/)

### In questo momento siamo in attesa dei creatori delle funzioni in php per rendere più omogeneo il sito.

#### Software utilizzato: Bootstrap.

# Alunno 12, Simone Mastella
Ciao, sono l'alunno **Simone Mastella**.
Per questo lavoro ho avuto il compito di numero 6, cioè di gestire git e una sua repository condivisa.

[Come inizializare una repository](https://gist.github.com/simonemastella/1792e8dd3cc8a8878825a4d2df676300)

[Quali comandi usare per un uso ordinario](https://gist.github.com/simonemastella/90364ec267d65a5328bd97c23aee1864)

[Come creare un .gitignore](https://gist.github.com/simonemastella/e69cd0a0d9fe151e52c0fc53ac4ad3ea)

[Come creare la tua GPG Key](https://gist.github.com/simonemastella/2ad4f08ed6f18af7e102a8e1a573dd8d)

[Quali comandi usare per avere i commit verificati](https://gist.github.com/simonemastella/3e763531b32e1db583e2dcb4fdd668a8)

[Salvare le credenziali](https://gist.github.com/simonemastella/ecd089c6106a961eb9272a40c5b16d5a)
# Alunno 13
Ciao, sono Chirstopher, sono **12 GANTT e gestione degli incarichi**
* [Il Diagramma di GANTT](http://htmlpreview.github.io/?https://github.com/simonemastella/5BIT/blob/master/documenti/diagramma_di_gantt.html)
# Alunno 14
Ciao, sono Petrocca Fabio detto **_Fabenz_**.
# Alunno 15 Edith Piffari
Ciao sono Edith mi sto occupando del lavoro **4 PHP database**.
## Il mio lavoro
Mi occupo di creare delle funzioni utili per interfacciarsi al database.
In paerticolare mi sto occupando della funzione _connetti()_ e _gethtmltablefromquery()_
### Le Funzioni
#### _gethtmltablefromquery()_
Al momento la funzione _gethtmltablefromquery()_ è in lavorazione, ma il suo compito sarà
che data una query sql, quindi una **_"SELECT"_**, la funzione restituirà una tabella con
la query richiesta.
#### _connetti()_
La funzione _connetti()_ è quasi finita, il suo compito sarà quello di connettersi al 
database, includendo il file di configurazione fornitoci dai creatori del DB.

# Alunno 16 Raffa Giacomo
 Io lavoro sull'esercizio 1. devo creare il database e il server
## Casa discografica 
Avevo creato il database e due utenti con permessi diversi. Ho cambiato indirizzo ip nel file 50-server.cnf all'interno della directory /etc/mysql/mariadb.conf.d in modo che qualcuno possa accedere al database da remoto.
## database documentazione
ho creato il database il database "documentazione", ho creato 2 utenti uno 'admin' e l'altro 'user'. I due account hanno una password diversa. Admin ha i permessi per modificare il database e user può solo vedere il database. 

Il file con tutta la documentazione si trova su /documenti e si chiama documentazione_database.md.

 



# Alunno 17
Ciao sono _Scarpante_, ho svolto la parte numero 2 (**DBA** **tabella**) insieme a Vergaro. Ho recuparato il file di Ferret per poi creare le relative tabella. Dopodiché abbiamo apportato le modifiche del caso. Dopo questo passaggio ho provato con un database in locale se le tabelle funzionassero corretamente. 
# Alunno 18
Sposato Fabio è un figo, lavoro 8 grafico.

Sto lavorando alla carta intestata. Sono in gruppo con Fabio Petrocca e lui si sta occupando del logo, quando lo avrà finito lo inserirò all'interno della carta intestata. Per fare la carta intestata utilizzo libre office writer.
# Alunno 19 Taut Denisa
Sono Taut e mi è stato assegnato il compito
Mi è stato assegnato il compito numero due a cui ho lavorato assieme a Vergaro e Scarpante, il mio compito era di assicurarmi che i compagni che hanno da creare il database creino e pubblichino un file con i comandi per creare il database. 
Si parte dal file ferret che il docente ha messo a disposizione ma vanno aggiunti i campi opportuni e gli autoincrement per le chiavi virtuali.
# Alunno 20
ciao sono Uva e mi è stato assegnato il compito di gestire la connessione tra il database e il client utilizzando ajax e ho fatto una relazione dove cerco di spiegare come fare a riprodurre il risultato.
## Lato server
ho creato un file .php di esempio che si collega ad un database e sta in attesa delle richieste del client.
## Lato client
ho creato una pagina di esempio che invia la richiesta al server menzionato prima e visualizza i dati ricevuti in risposta.
# Alunno 21 
Ciao sono Jacopo,ho lavorato sulla documentazione numero 2 insieme a Scarpante,mi devo assicurare che i  miei compagni che hanno da creare il database creino e pubblichino un file con i comandi per creare il database. Sono partito dal file ferret (consegnato dal prof) e abbiamo modificato tutti i campi opportuni.Per fare diverse prove abbiamo creato un database di prova su Mariadb.Abbiamo modificato gli autoincrement per le chiavi virtuali.
# Alunno 22 (Il secchione)
Ciao, sono l'alunno preferito dal proff. Faccio tutto quello che mi chiede e provo a migliorarmi di continuo.
Per questo lavoro ho avuto il compito di rompere le scatole a tutti i miei compagni.

## DB Admin: mariadb.
Devo controllare che diano ai compagni un nome host da inserire in /etc/hosts e i dati per accedere al db sia in modalità ristretta che in modalità amministratore.
Dovrà anche documentare e spiegare come va configurato mariadb per accettare connessioni da rete diversa da localhost.

## DBA Table
Mi devo assicurare che i compagni che hanno da creare il database creino e pubblichino un file con i comandi per creare il database. Si parte dal [file ferret](./manuali/documenti.ger) che il docente ha messo a disposizione ma vanno aggiunti i campi opportuni e gli autoincrement per le chiavi virtuali.

## Web master
Gli alunni in questo reparto devono: immaginare il sito internet, assicurarmi che ci siano gli elementi di base, decidere quali framework utilizzare. Fare qualche esempio di pagina e collaborare con chi crea le funzioni php per il sito al fine di avere un lavoro omogeneo.

## Php database
I compagni che hanno questo compito devono lavorare al meglio in quanto senza il loro apporto non possiamo collegarci al database.

## GIT Master
Da lui/loro ci aspettiamo grandi cose: gestione del git, come creare il file .gitignore al fine di non divulgare info personali, documentazione su come migliorare la gestione del git.

## Documentazione
L'idea consiste nel creare la documentazione in automatico, i compagni che hanno questo compito devono dirci come inserire i commenti nei file al fine di avere una gestione dei documenti automatizzata. Pare stiano lavorando con [DoxyGen](http://doxygen.nl/) che si installa anche su debian in modo semplice. Spero proprio ci dicano quali sono i comandi migliori da dare e come creare il file di configurazione per la generazione della documentazione.

## Grafico
Da loro devo avere i file del logo, la spiegazione sui colori scelti e i vari formati per i differenti scopi. Mi aspetto anche un modello di carta intestata e, soprattutto, le informazioni per reperire questi documenti.

## DB Libreoffice
Si devono collegare al database con libreoffice e creare le maschere per inserire i dati e per vedere i risultati. Il prodotto finale sarà un sito internet ma potrebbe risultare utile avere un accesso con libreoffice.

## DB, Dati e php
Come utilizzare AJAX per migliorare la fruibilità del sito.

## DB Form
Le form per inserimento dati sono piuttosto complicate, questi alunni dovranno iniziare a lavorare su questo aspetto. Da notare che le operazioni da farsi sui dati, oltre alla SELECT, sono INSERT, UPDATE e DELETE.

## GANTT e coordinamento
Questo ruolo dovrebbe essere simile al mio. Deve, come me, essere a conoscenza di chi fa cosa e deve controllare che lo faccia e relazioni.

## ....
E via dicendo .... state attenti che vi controllo.
