#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: PourCombien
#------------------------------------------------------------

CREATE TABLE PourCombien(
        uniqId      Varchar (25) NOT NULL ,
        question    Varchar (255) NOT NULL ,
        pourcombien Int ,
        valeur1     Int ,
        valeur2     Int
	,CONSTRAINT PourCombien_PK PRIMARY KEY (uniqId)
)ENGINE=InnoDB;

