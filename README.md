Materiale per la classe 5bit AS 2018-2019 (I. Manzetti - Aosta)
=================
# 1. Clonare il repository

Da fare solo una volta.
```
$ git clone https://github.com/simonemastella/5BIT.git
```
# 2. Aggiornamento
Si chiede algi alunni di aggiungere informazioni sui lavori svolti e sugli incarichi ricevuti.

# 3. Docente: Roberto Picchiottino
Sono il docente di riferimento.

## 3.1. Alcuni consigli
Leggere e produrre documentazione, l'alunno (gli alunni) che curano la documentazione avranno cura di informare come procedere nel migiore dei modi. Io inizio con md. Attendo fiducioso di sapere quali strategie individuate per documentare il progetto. :boom:

### 3.1.1. Copia ...
Strano! Ti consiglio di copiare! Non è una svista!

Quando trovi una soluzione che ti piace, cerca di capire come è stata implememntata e utilizza il codice che la mette in pratica.

Fai molta attenzione alla licenza d'uso: deve essere compatibile con quella che utilizzi.

### 3.1.2. Documentazione per GIT
[Guida tascabile GIT](https://rogerdudler.github.io/git-guide/index.it.html)
### 3.1.3. Aggiorna il repository
Alcuni comandi utili ...
```
git add .
git commit -m "Messaggio con indicazioni del commit"
git status
git pull
git push origin master
```

### 3.1.4. URL utili
* [Guida a MarkDown](https://guides.github.com/features/mastering-markdown/)
* [Sintassi di base](https://help.github.com/articles/basic-writing-and-formatting-syntax/)

# 4. Alunno 1
Adamo Elia lavoro per il database.
Ho aiutato Raffa nei test di connessione e raccolta dei vari comandi e
ho cercato anche vari modi per creare degli eventuali backup del database in futuro.
Molte altre informazioni sul lavoro svolto si potranno trovare su public_html/git/5BIT/documenti/documentazione/
dove è stato scritto il lavoro svolto per creare il database(ancora in fase di sviluppo) ed altre informazioni
utili agli utenti e agli host.

## 4.1. Per connettersi al database: 
$ mysql -h 192.168.21.100(+ numero di registro) -u user -ppass documentazione.

(se si hanno problemi di accesso al server chiedere al sottscritto o a Raffa).

# 5. Alunno 2, [GIT Master](#git-master)
 Principalmente mi occupo di gestire il corretto funzionamento e l'ordine generale della repo, aggiungendo migliorie, documentando ciò che serve e sistemando i commit errati ma quando necessario, risolvo i problemi riscontrati dagli altri contributors nello svolgimento dei loro compiti. In pratica sono una specie di **maintainer**.
## 5.1. Info Utili
### 5.1.1. Indice Generale
<!-- TOC -->
- [Materiale per la classe 5bit AS 2018-2019 (I. Manzetti - Aosta)](#materiale-per-la-classe-5bit-as-2018-2019-i-manzetti---aosta)
- [1. Clonare il repository](#1-clonare-il-repository)
- [2. Aggiornamento](#2-aggiornamento)
- [3. Docente: Roberto Picchiottino](#3-docente-roberto-picchiottino)
  - [3.1. Alcuni consigli](#31-alcuni-consigli)
    - [3.1.1. Copia ...](#311-copia-)
    - [3.1.2. Documentazione per GIT](#312-documentazione-per-git)
    - [3.1.3. Aggiorna il repository](#313-aggiorna-il-repository)
    - [3.1.4. URL utili](#314-url-utili)
- [4. Alunno 1](#4-alunno-1)
  - [4.1. Per connettersi al database:](#41-per-connettersi-al-database)
- [5. Alunno 2, GIT Master](#5-alunno-2-git-master)
  - [5.1. Info Utili](#51-info-utili)
    - [5.1.1. Indice Generale](#511-indice-generale)
    - [5.1.2. Struttura Repo](#512-struttura-repo)
      - [5.1.2.1. La cartella documenti](#5121-la-cartella-documenti)
      - [5.1.2.2. La cartella GPOI](#5122-la-cartella-gpoi)
      - [5.1.2.3. La cartella manuali](#5123-la-cartella-manuali)
  - [5.2. File Utili](#52-file-utili)
  - [5.3. Applicazioni Utili](#53-applicazioni-utili)
    - [5.3.1. Front-end per GIT](#531-front-end-per-git)
      - [5.3.1.1. gitk](#5311-gitk)
        - [5.3.1.1.1. Screenshot](#53111-screenshot)
        - [5.3.1.1.2. Installazione](#53112-installazione)
          - [5.3.1.1.2.1. Debian](#531121-debian)
          - [5.3.1.1.2.2. Arch Linux](#531122-arch-linux)
      - [5.3.1.2. qgit](#5312-qgit)
        - [5.3.1.2.1. Screenshot](#53121-screenshot)
        - [5.3.1.2.2. Installazione](#53122-installazione)
          - [5.3.1.2.2.1. Debian](#531221-debian)
          - [5.3.1.2.2.2. Arch Linux](#531222-arch-linux)
      - [5.3.1.3. gitg](#5313-gitg)
        - [5.3.1.3.1. Screenshot](#53131-screenshot)
        - [5.3.1.3.2. Installazione](#53132-installazione)
          - [5.3.1.3.2.1. Debian](#531321-debian)
          - [5.3.1.3.2.2. Arch Linux](#531322-arch-linux)
      - [5.3.1.4. tig](#5314-tig)
        - [5.3.1.4.1. Screenshot](#53141-screenshot)
        - [5.3.1.4.2. Installazione](#53142-installazione)
          - [5.3.1.4.2.1. Debian](#531421-debian)
          - [5.3.1.4.2.2. Arch Linux](#531422-arch-linux)
  - [5.4. To-Do](#54-to-do)
    - [5.4.1. Idee](#541-idee)
  - [5.5. Lavoro Svolto](#55-lavoro-svolto)
- [6. Alunno 3](#6-alunno-3)
- [7. Alunno 4](#7-alunno-4)
- [8. Alunno 5](#8-alunno-5)
- [9. Alunno 6](#9-alunno-6)
      - [9.0.0.1. Link per comandi utili:](#9001-link-per-comandi-utili)
- [10. Alunno 7 Gallo Alessandro](#10-alunno-7-gallo-alessandro)
- [11. Alunno 8](#11-alunno-8)
- [12. Alunno 9](#12-alunno-9)
- [13. Alunno 10](#13-alunno-10)
  - [13.1. Installazione Doxygen](#131-installazione-doxygen)
  - [13.2. Configurazione cartella di lavoro Doxygen](#132-configurazione-cartella-di-lavoro-doxygen)
  - [13.3. Utilizzo cartella documentazione](#133-utilizzo-cartella-documentazione)
  - [13.4. Visualizzare la documentazione](#134-visualizzare-la-documentazione)
- [14. Alunno 11](#14-alunno-11)
  - [14.1. Sono un Web Master](#141-sono-un-web-master)
    - [14.1.1. In questo momento siamo in attesa dei creatori delle funzioni in php per rendere più omogeneo il sito.](#1411-in-questo-momento-siamo-in-attesa-dei-creatori-delle-funzioni-in-php-per-rendere-più-omogeneo-il-sito)
      - [14.1.1.1. Software utilizzato: Bootstrap.](#14111-software-utilizzato-bootstrap)
- [15. Alunno 12, Simone Mastella](#15-alunno-12-simone-mastella)
- [16. Alunno 13](#16-alunno-13)
- [17. Alunno 14](#17-alunno-14)
- [18. Alunno 15 Edith Piffari](#18-alunno-15-edith-piffari)
  - [18.1. Il mio lavoro](#181-il-mio-lavoro)
    - [18.1.1. Le Funzioni](#1811-le-funzioni)
      - [18.1.1.1. _gethtmltablefromquery()_](#18111-_gethtmltablefromquery_)
      - [18.1.1.2. _connetti()_](#18112-_connetti_)
- [19. Alunno 16 Raffa Giacomo](#19-alunno-16-raffa-giacomo)
  - [19.1. Casa discografica](#191-casa-discografica)
  - [19.2. database documentazione](#192-database-documentazione)
- [20. Alunno 17](#20-alunno-17)
- [21. Alunno 18](#21-alunno-18)
- [22. Alunno 19 Taut Denisa](#22-alunno-19-taut-denisa)
- [23. Alunno 20](#23-alunno-20)
  - [23.1. Lato server](#231-lato-server)
  - [23.2. Lato client](#232-lato-client)
- [24. Alunno 21](#24-alunno-21)
- [25. Alunno 22 (Il secchione)](#25-alunno-22-il-secchione)
  - [25.1. DB Admin: mariadb.](#251-db-admin-mariadb)
  - [25.2. DBA Table](#252-dba-table)
  - [25.3. Web master](#253-web-master)
  - [25.4. Php database](#254-php-database)
  - [25.5. GIT Master](#255-git-master)
  - [25.6. Documentazione](#256-documentazione)
  - [25.7. Grafico](#257-grafico)
  - [25.8. DB Libreoffice](#258-db-libreoffice)
  - [25.9. DB, Dati e php](#259-db-dati-e-php)
  - [25.10. DB Form](#2510-db-form)
  - [25.11. GANTT e coordinamento](#2511-gantt-e-coordinamento)
  - [25.12. .](#2512-)

<!-- /TOC -->
### 5.1.2. Struttura Repo
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
#### 5.1.2.1. La cartella documenti
Questa cartella contiene varie relazioni fatte da tutti i contributors, il file ferret del database della casa discografica, varie guide e una delle parti più importanti di tutto il progetto: [La documentazione!](#documentazione).
#### 5.1.2.2. La cartella GPOI
La cartella GPOI (Gestione Progetto e Organizzazione d'Impresa) contiene tutti i file relativi alla coperativa scolastica che stiamo gestendo.
#### 5.1.2.3. La cartella manuali
Questa cartella ha lo scopo di contenere dei manuali cartacei contenenti la documentazione base di tutti gli argomenti svolti durante l'anno, in modo da poterli consultare durante i compiti in classe o durante l'Esame di Stato.
## 5.2. File Utili
In questa sezione sono riportati i file più importanti e significativi, come file di configurazione o simili.
* [File di configurazione di Doxygen (Doxyfile)](Doxyfile)
## 5.3. Applicazioni Utili
### 5.3.1. Front-end per GIT
Questa sezione contiene una lista di applicazioni utili a gestire GIT, con i relativi comandi per installarle.
#### 5.3.1.1. gitk
Questa applicazione è basata su Tcl/Tk ed è una delle più semplici per gestire la repo di git.
##### 5.3.1.1.1. Screenshot
![](https://screenshots.debian.net/screenshots/000/000/705/large.png)
##### 5.3.1.1.2. Installazione
###### 5.3.1.1.2.1. Debian
```
# apt update && apt install gitk
```
###### 5.3.1.1.2.2. Arch Linux
```
# pacman -Sy git tk
```
#### 5.3.1.2. qgit
Questa applicazione permette di visionare i file modificati graficamente, seguendo differenti branch del proggeto ed è un'alternativa più completa e graficamente più gradevole di [gitk](#gitk).
##### 5.3.1.2.1. Screenshot
![](https://screenshots.debian.net/screenshots/000/013/526/large.png)
##### 5.3.1.2.2. Installazione
###### 5.3.1.2.2.1. Debian
```
# apt update && apt install qgit
```
###### 5.3.1.2.2.2. Arch Linux
```
# pacman -Sy qgit
```
#### 5.3.1.3. gitg
Questa applicazione è una delle più belle disponibili in circolazione. Infatti è stata creata dal progetto GNOME, però a causa di problemi di instabilità non mi sento di consigliarla. Comunque lascio lo stesso i comandi per poterla installare.
##### 5.3.1.3.1. Screenshot
![](https://linux-cdn.softpedia.com/screenshots/gitg_1.png)
##### 5.3.1.3.2. Installazione
###### 5.3.1.3.2.1. Debian
```
# apt update && apt install gitg
```
###### 5.3.1.3.2.2. Arch Linux
```
# pacman -Sy gitg
```
#### 5.3.1.4. tig
Questa applicazione, è basata su ncurses e funziona solo in modalità testuale. Infatti è molto leggera.
##### 5.3.1.4.1. Screenshot
![](https://screenshots.debian.net/screenshots/000/009/870/large.png)
##### 5.3.1.4.2. Installazione
###### 5.3.1.4.2.1. Debian
```
# apt update && apt install tig
```
###### 5.3.1.4.2.2. Arch Linux
```
# pacman -Sy tig
```
## 5.4. To-Do
Questa sezione contiene letteralmente una lista delle cose da fare (To-Do) e anche una lista di idee che ho intenzione di implementare per migliorare la repo. 
* Creare README.md alle cartelle GPOI e Documentazione
* Ristrutturare il contenuto delle directory per renderlo più ordinato ed intuitivo
### 5.4.1. Idee
* Implementare docker nel progetto (In modo da svincolare la repo dalla directory public_html e da renderla usabile su ogni Distro / Sistema Operativo). In modo da avere:
    *  Un webserver apache in un'immagine docker che renda visualizzabili tutte le pagine
    *  Un dockerfile che generi le immagini dei database utilizzati dal progetto partendo da un file SQL (Al posto dei file .ger di ferret)
* Uno script che configuri il sistema per usufruire correttamente del progetto, in modo da utilizzare un comando solo, come nell'esempio successivo.
    ```
    $ bash <(curl -s linkfile.sh)
    ```
## 5.5. Lavoro Svolto
Per adesso mi sono occupato e mi sto occupando tuttora di mantenere la repo ordinata e pulita, infatti, oltre a sistemare il file README correggendo vari errori e applicando uno stile di formattazione omogenea, ho modificato il file **.gitignore** per gestire i file temporanei di _emacs_. Inoltre, ho aiutato gli altri utenti in difficoltà.
# 6. Alunno 3
Ciao sono Bionaz.
# 7. Alunno 4
Cecilia Corbara, 11 DB e form
<<<<<<< HEAD
<<<<<<< HEAD
# Alunno 5
Ciao sono Edoardo Di Vita, gay, 6 git master,cioè di gestire git e una sua repository condivisa. In primo luogo abbiamo cercato su internet: 

Come inizializzare una repository .
=======
# 8. Alunno 5
Ciao sono **Edoardo Di Vita**, 6 git master, mi occupo della gestione di git. In primo luogo abbiamo analizzato il funzionamento di Git confrontandolo con validi rivali come BitBucket e GitLab. Nostante i loro punti di forza, presentano molteplici difetti che abbiamo elencato nella seguente relazione:
>>>>>>> 37de6e2795517a1a25b187b3c90b2a34b74a7938
=======
# 8. Alunno 5
Ciao sono **Edoardo Di Vita**, 6 git master, mi occupo della gestione di git. In primo luogo abbiamo analizzato il funzionamento di Git confrontandolo con validi rivali come BitBucket e GitLab. Nostante i loro punti di forza, presentano molteplici difetti che abbiamo elencato nella seguente relazione:
>>>>>>> 37de6e2795517a1a25b187b3c90b2a34b74a7938

[Analisi di Git](https://gist.github.com/simonemastella/1792e8dd3cc8a8878825a4d2df676300)

Inoltre abbiamo creato un manuale con i comandi principali per aiutare gli utenti alle prime armi. Il manuale in questione è il seguente:

[Manuale Git](https://github.com/simonemastella/5BIT/blob/master/documenti/MANUALE_GIT.odt)
# 9. Alunno 6
Sono **Fabrizi** e lavoro per la documentazione (n°7).
Il mio obiettivo è quello di creare una documentazione e un manuale che possa essere utile a tutta la classe 
e facilitare lo studio. Il programma utilizzato è **Doxygen**, strumento standard di fatto per generare documentazione 
da sorgenti di vari linguaggi di programmazione popolari. Dopo aver capito il suo funzionamento, l’ho scaricato 
(_apt-get_ _install_ _doxygen_), creato una cartella di lavoro dove eseguire i comandi.

#### 9.0.0.1. Link per comandi utili:
[Commentare e Documentare con Doxygen](http://www.lotar.altervista.org/wiki/programming/php-and-doxygen)
# 10. Alunno 7  Gallo Alessandro
Insieme a Gyppaz, abbiamo inserito nei documenti la relazione in markdown della relazione 5.
Successivamente nel manuale abbiamo inserito anche le due funzioni a noi assegnate in php 
ovvero 'get_head()' e get_foot()'.
# 11. Alunno 8
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
# 12. Alunno 9
Sono _Gyppaz_, ho lavorato sulla documentazione 5 insieme a _Gallo_. Il nostro compito era quello di creare le
funzioni **get_head()** e **get_foot()**. Per ciò che riguarda la prima funzione abbiamo rivisto ciò che avevamo
già fatto in classe, per ciò che riguarda la seconda funzione ci siamo dovuti documentare su internet. Le fonti utilizzate
prevalentemente sono state HTML.it e w3school. Una volta fatto ciò abbiamo iniziato a creare le funzioni e le abbiamo inserite
in 5BIT/manuali/sito/sub i file si chiamano **get_head.php** e **get_foot.php**. Dopo aver fatto ciò ci siamo occupati della
relazione in markdown, è consultabile in 5BIT/documenti e si chiama relazione_5_gyppaz&gallo.md. In questa relazione abbiamo
semplicemente descritto il lavoro svolto e commentato ciò che fanno le funzioni.
# 13. Alunno 10
Ciao, sono l'alunno **Hermann Hausherr** e mi sono occupato della documentazione con doxygen. Spiegherò come installarlo e usarlo opportunamente.
## 13.1. Installazione Doxygen
per installare doxygen basta avviare il comando
```
# apt-get install doxygen
```
## 13.2. Configurazione cartella di lavoro Doxygen
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
## 13.3. Utilizzo cartella documentazione 
tutti i successivi file della documentazione (in markdown) dovranno essere presenti nella directory in cui è presente il file di configurazione (documenti/documentazione) e per rendere effettive le modifiche prima di caricarle su git bisogna rigenerare la documentazione con
```
$ doxygen doxyfile
```
## 13.4. Visualizzare la documentazione
Per visualizzare l'effettiva lista della documentazione aprire la pagina web _documenti/documentazione/html/index.html_ e procedere su "*related pages*" oppure utilizzare lo strumento di ricerca nella navbar.

# 14. Alunno 11
Ciao! Sono l'alunno **Gabriele Marchesano**
## 14.1. Sono un Web Master
Il mio lavoro consiste nell'immaginare un ipotetico sito web, strutturato con i linguaggi _html_, _css_ e altri tipi di linguaggi utilizzando anche dei framework.

[Guida HTML](https://www.w3schools.com/html/)

[Guida CSS](https://www.w3schools.com/css/)

### 14.1.1. In questo momento siamo in attesa dei creatori delle funzioni in php per rendere più omogeneo il sito.

#### 14.1.1.1. Software utilizzato: Bootstrap.

# 15. Alunno 12, Simone Mastella
Ciao, sono l'alunno **Simone Mastella**.
Per questo lavoro ho avuto il compito di numero 6, cioè di gestire git e una sua repository condivisa.

[Come inizializare una repository](https://gist.github.com/simonemastella/1792e8dd3cc8a8878825a4d2df676300)

[Quali comandi usare per un uso ordinario](https://gist.github.com/simonemastella/90364ec267d65a5328bd97c23aee1864)

[Come creare un .gitignore](https://gist.github.com/simonemastella/e69cd0a0d9fe151e52c0fc53ac4ad3ea)

[Come creare la tua GPG Key](https://gist.github.com/simonemastella/2ad4f08ed6f18af7e102a8e1a573dd8d)

[Quali comandi usare per avere i commit verificati](https://gist.github.com/simonemastella/3e763531b32e1db583e2dcb4fdd668a8)

[Salvare le credenziali](https://gist.github.com/simonemastella/ecd089c6106a961eb9272a40c5b16d5a)
# 16. Alunno 13 Christopher Mezzomo
Ciao, sono Chirstopher, sono **12 GANTT e gestione degli incarichi**
## 16.1. Il mio incarico
Il mio incarico è quello di creare il diagramma di GANTT che rappresenti i vari incarichi con le risorse assegnate ad essi.
Il diagramma è salvato in documenti/diagramma_di_gantt.planner
Ed è stato esportato come HTML in documenti/diagramma_di_gantt.planner
E possibili visualizzare la pagina HTML con htmlpreview.github.io utilizzando il collegamento sottostante. 
* [Il Diagramma di GANTT](http://htmlpreview.github.io/?https://github.com/simonemastella/5BIT/blob/master/documenti/diagramma_di_gantt.html)

# 17. Alunno 14
Ciao, sono Petrocca Fabio addetto alla grafica.
Sto lavorando al logo.

# 18. Alunno 15 Edith Piffari
Ciao sono Edith mi sto occupando del lavoro **4 PHP database**.
## 18.1. Il mio lavoro
Mi occupo di creare delle funzioni utili per interfacciarsi al database.
In paerticolare mi sto occupando della funzione _connetti()_ e _gethtmltablefromquery()_
### 18.1.1. Le Funzioni
#### 18.1.1.1. _gethtmltablefromquery()_
Al momento la funzione _gethtmltablefromquery()_ è in lavorazione, ma il suo compito sarà
che data una query sql, quindi una **_"SELECT"_**, la funzione restituirà una tabella con
la query richiesta.
#### 18.1.1.2. _connetti()_
La funzione _connetti()_ è quasi finita, il suo compito sarà quello di connettersi al 
database, includendo il file di configurazione fornitoci dai creatori del DB.

# 19. Alunno 16 Raffa Giacomo
 Io lavoro sull'esercizio 1. devo creare il database e il server
## 19.1. Casa discografica 
Avevo creato il database e due utenti con permessi diversi. Ho cambiato indirizzo ip nel file 50-server.cnf all'interno della directory /etc/mysql/mariadb.conf.d in modo che qualcuno possa accedere al database da remoto.
## 19.2. database documentazione
ho creato il database il database "documentazione", ho creato 2 utenti uno 'admin' e l'altro 'user'. I due account hanno una password diversa. Admin ha i permessi per modificare il database e user può solo vedere il database. 

Il file con tutta la documentazione si trova su /documenti e si chiama documentazione_database.md.

 



# 20. Alunno 17
Ciao sono _Scarpante_, ho svolto la parte numero 2 (**DBA** **tabella**) insieme a Vergaro. Ho recuparato il file di Ferret per poi creare le relative tabella. Dopodiché abbiamo apportato le modifiche del caso. Dopo questo passaggio ho provato con un database in locale se le tabelle funzionassero corretamente. 
# 21. Alunno 18
Sposato Fabio è un figo, lavoro 8 grafico.

Sto lavorando alla carta intestata. Sono in gruppo con Fabio Petrocca e lui si sta occupando del logo, quando lo avrà finito lo inserirò all'interno della carta intestata. Per fare la carta intestata utilizzo libre office writer.
# 22. Alunno 19 Taut Denisa
Sono Taut e mi è stato assegnato il compito
Mi è stato assegnato il compito numero due a cui ho lavorato assieme a Vergaro e Scarpante, il mio compito era di assicurarmi che i compagni che hanno da creare il database creino e pubblichino un file con i comandi per creare il database. 
Si parte dal file ferret che il docente ha messo a disposizione ma vanno aggiunti i campi opportuni e gli 
increment per le chiavi virtuali.
# 23. Alunno 20
ciao sono Uva e mi è stato assegnato il compito di gestire la connessione tra il database e il client utilizzando ajax e ho fatto una relazione dove cerco di spiegare come fare a riprodurre il risultato.
## 23.1. Lato server
ho creato un file .php di esempio che si collega ad un database e sta in attesa delle richieste del client.
## 23.2. Lato client
ho creato una pagina di esempio che invia la richiesta al server menzionato prima e visualizza i dati ricevuti in risposta.
# 24. Alunno 21 Jacopo Vergaro
Ciao sono Jacopo,ho lavorato sulla documentazione numero 2 insieme a Scarpante. Insieme ai miei compagni siamo  partiti dal file ferret (consegnato dal prof) e abbiamo modificato tutti i campi opportuni per ottimizzare il lavoro.Per fare diverse prove abbiamo creato un database di prova su Mariadb.Abbiamo modificato gli 
increment per le chiavi virtuali e abbiamo eseguito delle piccole modifiche allo schema SQL	. Abbiamo anche inserito alcuni esempi da cui prendere esempio per poi popolare completamente il database. Ci siamo anche documentati sul comando DUMP, per creare il backup del database creato, e anche sul comando DROP (utilizzato per eliminare le tabelle inserite in un database) dove richiediamo massima cautela nel suo utilizzo.
# 25. Alunno 22 (Il secchione)
Ciao, sono l'alunno preferito dal proff. Faccio tutto quello che mi chiede e provo a migliorarmi di continuo.
Per questo lavoro ho avuto il compito di rompere le scatole a tutti i miei compagni.

## 25.1. DB Admin: mariadb.
Devo controllare che diano ai compagni un nome host da inserire in /etc/hosts e i dati per accedere al db sia in modalità ristretta che in modalità amministratore.
Dovrà anche documentare e spiegare come va configurato mariadb per accettare connessioni da rete diversa da localhost.

## 25.2. DBA Table
Mi devo assicurare che i compagni che hanno da creare il database creino e pubblichino un file con i comandi per creare il database. Si parte dal [file ferret](./manuali/documenti.ger) che il docente ha messo a disposizione ma vanno aggiunti i campi opportuni e gli 
increment per le chiavi virtuali.

## 25.3. Web master
Gli alunni in questo reparto devono: immaginare il sito internet, assicurarmi che ci siano gli elementi di base, decidere quali framework utilizzare. Fare qualche esempio di pagina e collaborare con chi crea le funzioni php per il sito al fine di avere un lavoro omogeneo.

## 25.4. Php database
I compagni che hanno questo compito devono lavorare al meglio in quanto senza il loro apporto non possiamo collegarci al database.

## 25.5. GIT Master
Da lui/loro ci aspettiamo grandi cose: gestione del git, come creare il file .gitignore al fine di non divulgare info personali, documentazione su come migliorare la gestione del git.

## 25.6. Documentazione
L'idea consiste nel creare la documentazione in 
matico, i compagni che hanno questo compito devono dirci come inserire i commenti nei file al fine di avere una gestione dei documenti 
matizzata. Pare stiano lavorando con [DoxyGen](http://doxygen.nl/) che si installa anche su debian in modo semplice. Spero proprio ci dicano quali sono i comandi migliori da dare e come creare il file di configurazione per la generazione della documentazione.

## 25.7. Grafico
Da loro devo avere i file del logo, la spiegazione sui colori scelti e i vari formati per i differenti scopi. Mi aspetto anche un modello di carta intestata e, soprattutto, le informazioni per reperire questi documenti.

## 25.8. DB Libreoffice
Si devono collegare al database con libreoffice e creare le maschere per inserire i dati e per vedere i risultati. Il prodotto finale sarà un sito internet ma potrebbe risultare utile avere un accesso con libreoffice.

## 25.9. DB, Dati e php
Come utilizzare AJAX per migliorare la fruibilità del sito.

## 25.10. DB Form
Le form per inserimento dati sono piuttosto complicate, questi alunni dovranno iniziare a lavorare su questo aspetto. Da notare che le operazioni da farsi sui dati, oltre alla SELECT, sono INSERT, UPDATE e DELETE.

## 25.11. GANTT e coordinamento
Questo ruolo dovrebbe essere simile al mio. Deve, come me, essere a conoscenza di chi fa cosa e deve controllare che lo faccia e relazioni.

## 25.12. .
E via dicendo .... state attenti che vi controllo.
