#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE tbl_saucisse;
USE tbl_saucisse;

#------------------------------------------------------------
# Table: tbl_utilisateur
#------------------------------------------------------------

CREATE TABLE tbl_utilisateur(
        id_utilisateur Int  Auto_increment  NOT NULL ,
        nomUtilisateur Varchar (50) NOT NULL ,
        motDePasse     Varchar (120) NOT NULL
	,CONSTRAINT tbl_utilisateur_PK PRIMARY KEY (id_utilisateur)
	,CONSTRAINT AK_nomUtilisateur UNIQUE(nomUtilisateur)
    
)ENGINE=InnoDB;

INSERT INTO tbl_utilisateur
(nomUtilisateur, motDePasse)
Values
('Canard', 	'$2y$10$vbsYkoMFEKRN6SpstgCNWuEpy5XZNxuwzVSXqFZ/fnEGlJFjvUXvW'), /*manger*/
('Joe', 	'$2y$10$PuyHG790NHvysQsIAIjBS.sr9p8p89WFMxNbKKa1uewCpM2FB.pFO'), /*Bloe*/
('Ken', 	'$2y$10$E9fEwc4g4P6HaG5bQ3hAQu/UGqKDhEMXD/Hk6LNwCj5HrqDtwvTv6'), /*kababoum*/
('Jane', 	'$2y$10$wGFZ2QgXmG6DiE/Q4JnYme6xL7q/UOvV7Ls0JdI.6teIsKWFYE4Xu'), /*babaje*/
('Bob', 	'$2y$10$QsPHahyqIfTfnpPduIhwXujQWv.5bzmp.esYhw97fPPS8071uwntG'); /*saucisse*/

#------------------------------------------------------------
# Table: tbl_saucisse
#------------------------------------------------------------

CREATE TABLE tbl_saucisse(
        id_saucisse      Int  Auto_increment  NOT NULL ,
        nom              Varchar (50) NOT NULL,
        destinationImage Varchar (50) NOT NULL,
        prix 			 Double       NOT NULL	 
	,CONSTRAINT tbl_saucisse_PK PRIMARY KEY (id_saucisse)
)ENGINE=InnoDB;

INSERT INTO tbl_saucisse
(nom, prix, destinationImage)
Values
('Saucisse de Toulouse', 			69.69,			'images/1.png'),
('Chipolatas', 					20.04,			'images/2.png'),
('Chipolatas aux herbes', 			26.95,			'images/3.png'),
('Crépinette', 					8.99,			'images/4.png'),
('Merguez', 					9.99,			'images/5.png'),
('Soubressade piquante', 			19.65,			'images/6.png'),
('Saucisse au couteau', 			15.00,			'images/7.png'),
("Saucisse au piment d'Espelette", 	        13.32,			'images/8.png'),
('Saucisse campagnarde', 			28.08,			'images/9.png'),
('Saucisse de canard', 				44.17,			'images/10.png'),
('Saucisse échalote', 				7.84,			'images/11.png'),
('Saucisse méditerranéenne', 		        19.99,			'images/12.png'),
("Saucisse T'chorizette", 			99.99,			"images/13.png");

#------------------------------------------------------------
# Table: tbl_panier
#------------------------------------------------------------

CREATE TABLE tbl_panier(
        id_panier      Int  Auto_increment  NOT NULL ,
        id_utilisateur Int NOT NULL
	,CONSTRAINT tbl_panier_PK PRIMARY KEY (id_panier)

	,CONSTRAINT tbl_panier_tbl_utilisateur_FK FOREIGN KEY (id_utilisateur) REFERENCES tbl_utilisateur(id_utilisateur)
	,CONSTRAINT tbl_panier_tbl_utilisateur_AK UNIQUE (id_utilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contient
#------------------------------------------------------------

CREATE TABLE contient(
        id_panier   Int NOT NULL ,
        id_saucisse Int NOT NULL
	,CONSTRAINT contient_PK PRIMARY KEY (id_panier,id_saucisse)

	,CONSTRAINT contient_tbl_panier_FK FOREIGN KEY (id_panier) REFERENCES tbl_panier(id_panier)
	,CONSTRAINT contient_tbl_saucisse0_FK FOREIGN KEY (id_saucisse) REFERENCES tbl_saucisse(id_saucisse)
)ENGINE=InnoDB;

