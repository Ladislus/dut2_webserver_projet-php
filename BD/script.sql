-- CREATION DE LA BASE DE DONNÉES

DROP TABLE IF EXISTS ESTDUTHEME;
DROP TABLE IF EXISTS THEME;
DROP TABLE IF EXISTS ESTDUGENRE;
DROP TABLE IF EXISTS GENRE;
DROP TABLE IF EXISTS ESTEDITE;
DROP TABLE IF EXISTS EDITEUR;
DROP TABLE IF EXISTS JEU;


CREATE TABLE JEU (
  IDJ INT AUTO_INCREMENT PRIMARY KEY,
  NOMJ VARCHAR(100) UNIQUE NOT NULL,
  DATESORTIE DATE NOT NULL,
  DESCJ TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE EDITEUR (
  IDE INT AUTO_INCREMENT PRIMARY KEY,
  NOME VARCHAR(100) UNIQUE NOT NULL,
  SIEGESOCIETE VARCHAR(100) NOT NULL,
  DATECREATION DATE NOT NULL,
  ETAT VARCHAR(100) NOT NULL,
  DESCE TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE ESTEDITE (
  IDJ INT,
  IDE INT,
  CONSTRAINT pk_ESTEDITE PRIMARY KEY (IDJ, IDE),
  CONSTRAINT fk_ESTEDITE_jeu FOREIGN KEY (IDJ) REFERENCES JEU(IDJ) ON DELETE CASCADE,
  CONSTRAINT fk_ESTEDITE_editeur FOREIGN KEY (IDE) REFERENCES EDITEUR(IDE) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE GENRE (
  IDG INT AUTO_INCREMENT PRIMARY KEY,
  NOMGENRE VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE ESTDUGENRE (
  IDJ INT,
  IDG INT,
  CONSTRAINT pk_estdugenre PRIMARY KEY (IDJ, IDG),
  CONSTRAINT fk_estdugenre_jeu FOREIGN KEY (IDJ) REFERENCES JEU(IDJ) ON DELETE CASCADE,
  CONSTRAINT fk_estdugenre_genre FOREIGN KEY (IDG) REFERENCES GENRE(IDG) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE THEME (
  IDT INT AUTO_INCREMENT PRIMARY KEY,
  NOMTHEME VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE ESTDUTHEME (
  IDJ INT,
  IDT INT,
  CONSTRAINT pk_estdutheme PRIMARY KEY (IDJ, IDT),
  CONSTRAINT fk_estdutheme_jeu FOREIGN KEY (IDJ) REFERENCES JEU(IDJ) ON DELETE CASCADE,
  CONSTRAINT fk_estdutheme_theme FOREIGN KEY (IDT) REFERENCES THEME(IDT) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
