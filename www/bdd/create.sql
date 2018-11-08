DROP TABLE IF EXISTS voiture;
DROP TABLE IF EXISTS utilisateur;
DROP TABLE IF EXISTS marque;

CREATE TABLE marque
(
  identifier INTEGER unique,
  nom TEXT PRIMARY KEY,
  pays TEXT
);

CREATE TABLE voiture
(
  identifier INTEGER PRIMARY KEY,
  nom TEXT,
  couleur TEXT,
  prix REAL,
  categorie TEXT,
  nomMarque TEXT, --FOREIGN KEY REFERENCES marque(nom)
  FOREIGN KEY(nomMarque) REFERENCES marque(nom)
);

CREATE TABLE utilisateur
(
  login TEXT PRIMARY KEY,
  niveau INTEGER,
  pass TEXT
);
