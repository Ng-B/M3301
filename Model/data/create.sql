CREATE TABLE IF NOT EXISTS ADHERENT(
  id INTEGER PRIMARY KEY,
  Nom STRING NOT NULL,
  Prenom STRING NOT NULL,
  dateDeNaissance date NOT NULL,
  sexe STRING CHECK  (sexe = 'homme' or sexe ='femme'),
  tel STRING NOT NULL
);

CREATE TABLE IF NOT EXISTS Joueurs(
idAdh INTEGER PRIMARY KEY ,
categorie STRING CHECK (categorie ='-9' or categorie ='-11'or categorie ='-13F'or categorie ='-13M'or categorie ='-15F'or categorie ='-15M'or categorie ='-18F'or categorie ='-18M'or categorie ='SeniorsF'or categorie ='SeniorsM'),
Nbbuts INTEGER DEFAULT 0,
Nbtirs INTEGER DEFAULT 0,
Foreign key (idAdh) references ADHERENT(id)
);


CREATE TABLE IF NOT EXISTS Entraineurs(
idAdh INTEGER PRIMARY KEY,
categorie STRING,
Foreign key (idAdh) references ADHERENT(id),
Foreign key (categorie) references EQUIPE(id)
);

CREATE TABLE IF NOT EXISTS Bureau(
idAdh INTEGER PRIMARY KEY,
role STRING CHECK (role= 'Secretaire'or role='President'),
Foreign key (idAdh) references ADHERENT(id)
);

create TABLE IF NOT EXISTS License (
  idAdh INTEGER PRIMARY KEY,
  Payement BOOLEAN DEFAULT FALSE,
  montant INTEGER NOT NULL,
  type STRING CHECK (type= 'Joueur' or type='Dirigeant'),
  Foreign key (idAdh) references ADHERENT(id)
  );

  CREATE TABLE IF NOT EXISTS Contact(
   mail STRING  PRIMARY KEY,
   telPere STRING default NULL,
   fixePere STRING default NULL,
   telMere STRING default NULL,
   fixeMere STRING default NULL
  );

  CREATE TABLE IF NOT EXISTS Equipe(
  id STRING CHECK (id ='-9' or id ='-11'or id ='-13F'or id ='-13M'or id ='-15F'or id ='-15M'or id ='-18F'or id ='-18M'or id ='SeniorF'or id ='SeniorM'),
  idJoueur INTEGER,
  nbLavage INTEGER DEFAULT 0,
  PRIMARY KEY('idjoueur','nbLavage'),
  Foreign key (idJoueur) references ADHERENT(id)
  );

  CREATE TABLE IF NOT EXISTS Dispo(
  idMatch INTEGER,
  idJoueur INTEGER,
  selectionne bool,
  besoinTransport bool,
  ratiosMatch STRING,
  PRIMARY KEY('idjoueur','idMatch'),
  Foreign key (idJoueur) references Joueurs(idJoueur),
  Foreign key (idMatch) references Match(id)
  );



  CREATE TABLE IF NOT EXISTS vehicule(
  nbplaces INTEGER (1) DEFAULT 0
  );

  CREATE TABLE IF NOT EXISTS Match(
  id INTEGER PRIMARY KEY,
  lieu STRING NOT NULL,
  dateMatch date NOT NULL,
  idArbitre INTEGER DEFAULT NULL,
  heure DATE NOT NULL

  );

  CREATE TABLE IF NOT EXISTS Photo(
  id INTEGER PRIMARY KEY,
  idEquipe INTEGER,
  photo BLOB,
  Foreign key (idMatch) references Match(id),
  Foreign key (idEquipe) references Equipe(id)
  );

  CREATE TABLE IF NOT EXISTS Login(
    login STRING PRIMARY KEY,
    mail STRING,
    password STRING,
    admin BOOLEAN DEFAULT False
  );
