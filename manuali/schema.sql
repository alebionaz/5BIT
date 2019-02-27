-- Automatically generated by Gerwin
--
-- Project Documentazione
-- From file: /home/user/public_html/git/5BIT/manuali/documenti.ger
-- By: Picchiottino Roberto per 5bit as 2018-2019
--
-- Using output format: mysql

-- PER FARE PULIZIA. occhio!
-- DROP TABLE esempi; DROP TABLE comandi; DROP TABLE argomenti; 
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


ALTER TABLE esempi ADD FOREIGN KEY (id_comando) REFERENCES comandi (id_comando);

-- appunti vari
-- https://www.linode.com/docs/databases/mysql/use-mysqldump-to-back-up-mysql-or-mariadb/
-- comandi shell

-- -mysqldump -u username -p db1 --single-transaction --quick --lock-tables=false > db1-backup-$(date +%F).sql






