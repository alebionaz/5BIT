documentazione database raffa
==================================

# Creazione Database
Ho creato il database con le istruzoni:
```
CREATE DATABASE documentazione CHARACTER SET utf8;
```


# Creazione utenti
L'utente admin ha tutti i permessi e una sua correspettiva password.L'utente user invece ha solo alcuni permessi cioè la SELECT. Per dare tutti i permessi all'admin ho utilizzato:
> GRANT ALL PRIVILEGES ON documentazione.* TO  admin@'%' IDENTIFIED BY 'la password'.

Per dare solo  il permesso select all'user ho usato
> GRANT SELECT ON documentazione.* to user .

Così facendo ho creato due utenti con permessi diversi.

% any valid host


# Apertura accesso al database da host esterni
## Utilizzando parrot
Per far si che un host possa accedere al database bisogna cambiare una configurazione nel file 50-server.cnf che nella parrot si trova nella directory /etc/mysql/mariadb.conf.d
bisogna cambiare l'ip in "bind-address" e per far si che tutti possano accedervi al posto dell'ip bisogna mettere "*".
```
bind-address=*
```
# Accesso al database
Chi volesse accedere al database deve utilizzare (da una rete uguale a quella del server) il comando "mysql -h (indirizzo ip del server che può essere modificato nel file hosts che si trova nella cartella /etc e assegnare all'indirizzo un nome in modo tale da non dover inserire ogni volta l'ip del server)  -u user -ppasswd documentazione.
la password l'ho resa pubblica perchè l'utente user può fare solo la select. SOLO chi ha bisogno dell'account admin verrà data la password.

# Creazione rete privata 
Abbiamo creato una rete privata. Per farlo abbiamo usato il comando "ifconfig eth0:1 192.168.21.1". Questo indirizzo ip è del server. Tutti quelli che vogliono far parte della rete devono usare il comando 'ifconfig eth0:1 192.168.21.(100+numero di registro)'.

## Rendere definitiva la modifica su debian
Modificare il file /etc/network/interfaces
Aggiungendo:
```
iface eth0:1 inet static
address 192.168.21.(proprio indirrizo ip della configurazione della rete privata)
netmask 255.255.255.0
gateway 192.168.21.254
```
Comando per mettere giù la rete;
>ifdown
Comando per mettere in piedi la rete:
>ifup
# modifica file /etc/hosts
Aggiungere la riga
> 192.168.21.1 db
Esempio:
> # nano  /etc/hosts


# Configurazioni da utilizzare
## dati
indirizzo server: 192.168.21.1
utente: user
dbname: documentazione
password:pass



