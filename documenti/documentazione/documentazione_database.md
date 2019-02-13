documentazione database raffa
==================================

# Creazione Database
Prima cosa ho creato il database con le istruzoni che ci sono state date in classe. Poi ho creato 2 account con permessi diversi. 

# Creazione utenti
L'utente admin ha tutti i permessi e una sua correspettiva password.L'utente user invece ha solo alcuni permessi cioè la SELECT. Per dare tutti i permessi all'amdin ho utilizzato: 
> GRANT ALL PRIVILEGES ON documentazione.* TO  admin@'%' IDENTIFIED BY 'la password'. 

Per dare solo sono gay il permesso select all'user ho usato 
> GRANT SELECT ON documentazione.* to user .
 
Così facendo ho creato due utenti con permessi diversi.
 
% any valid host
 

# Apertura accesso al database da host esterni
Per far si che un host possa accedere al database bisogna cambiare una configurazione nel file 50-server.cnf che nella parrot si trova nella directory /etc/mysql/mariadb.conf.d
bisogna cambiare l'ip in "bind-address" e per far si che tutti possano accedervi al posto dell'ip bisogna mettere "*". 

# Accesso al database
Chi volesse accedere al database deve utilizzare (da una rete uguale a quella del server) il comando "mysql -h (indirizzo ip del server che può essere modificato nel file hosts che si trova nella cartella /etc e assegnare all'indirizzo un nome in modo tale da non dover inserire ogni volta l'ip del server) -u user -ppasswd documentazione.
la password l'ho resa pubblica perchè l'utente user può fare solo la select. SOLO chi ha bisogno dell'account admin verrà data la password.
# Creazione rete privata 
Abbiamo creato una rete privata. Per farlo abbiamo usato il comando "ifconfig eth0:1 192.168.21.1". Questo indirizzo ip è del server. Tutti quelli che vogliono far parte della rete devono usare il comando 'ifconfig eth0:1 192.168.21.(100+numero di registro)'.

