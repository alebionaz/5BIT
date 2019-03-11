Manuali da stampare in formato cartaceo per esame e compiti in classe
=====================================================================
## Obiettivi
- creare un manuale stampabile

## Schema del database
Si usa ferret. Ho modificato il file per ridefinire relazione ad albero su entità argomenti.
NB: meglio cambiare il nome del campo per relazione in id_padre

# Comandi utili
Un elenco di comandi per l'utilizzo di linux o la risoluzione di problemi
## Swap su file
In caso di poca memoria RAM, controllabile col comando *top*
Si può espandere con *swapon*, eseguibile su una partizione swap o su un file.
### Creazione file vuoto
Per creare un file vuoto usare il comando 
> touch /directory/dove/voglio/mettere/nomeFile
### Allocazione dimensione 
Il file creato in precedenza non avrà la dimensione necessaria per la SWAP, dunque allocarla col comando 
> fallocate -s dimensione nomeFile
la dimensione va indicata con un numero seguito dalla letterà dell'unità di misura in maiuscolo. (Per esempio 1G). La dimensione deve essere uguale o inferiore alla RAM montata sul computer.
### Creazione file Swap
Adesso bisogna rendere il file di swap utilizzabile
> mkswap nomeFile
### Allocazione swap
Per avviare la partizione di RAM usare il comando
> swapon nomeFile
