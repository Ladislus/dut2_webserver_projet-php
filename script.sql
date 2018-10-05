-- CREATION DE LA BASE DE DONNÉES

DROP TABLE IF EXISTS ESTDUTHEME;
DROP TABLE IF EXISTS THEME;
DROP TABLE IF EXISTS ESTDUGENRE;
DROP TABLE IF EXISTS GENRE;
DROP TABLE IF EXISTS ESTEDITER;
DROP TABLE IF EXISTS EDITEUR;
DROP TABLE IF EXISTS JEU;


CREATE TABLE JEU (
  IDJ INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  NOMJ VARCHAR(100) DEFAULT NULL,
  DATESORTIE DATE DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE EDITEUR (
  IDE INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  NOME VARCHAR(100) DEFAULT NULL,
  SIEGESOCIETE VARCHAR(100) DEFAULT NULL,
  DATECREATION DATE DEFAULT NULL,
  ETAT VARCHAR(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE ESTEDITER (
  IDJ INT,
  IDE INT,
  CONSTRAINT pk_estediter PRIMARY KEY (IDJ, IDE),
  CONSTRAINT fk_estediter_jeu FOREIGN KEY (IDJ) REFERENCES JEU(IDJ) ON DELETE CASCADE,
  CONSTRAINT fk_estediter_editeur FOREIGN KEY (IDE) REFERENCES EDITEUR(IDE) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE GENRE (
  IDG INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  NOMGENRE VARCHAR(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE ESTDUGENRE (
  IDJ INT,
  IDG INT,
  CONSTRAINT pk_estdugenre PRIMARY KEY (IDJ, IDG),
  CONSTRAINT fk_estdugenre_jeu FOREIGN KEY (IDJ) REFERENCES JEU(IDJ) ON DELETE CASCADE,
  CONSTRAINT fk_estdugenre_genre FOREIGN KEY (IDG) REFERENCES GENRE(IDG) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE THEME (
  IDT INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  NOMTHEME VARCHAR(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE ESTDUTHEME (
  IDJ INT,
  IDT INT,
  CONSTRAINT pk_estdutheme PRIMARY KEY (IDJ, IDT),
  CONSTRAINT fk_estdutheme_jeu FOREIGN KEY (IDJ) REFERENCES JEU(IDJ) ON DELETE CASCADE,
  CONSTRAINT fk_estdutheme_theme FOREIGN KEY (IDT) REFERENCES THEME(IDT) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO JEU     (NOMJ, DATESORTIE)                        VALUES ('The Legend of Zelda : Ocarina of Time', '1998-11-21'),
                                                                     ('Minecraft', '20011-11-18'),
                                                                     ('Jean-Paul II the Ultimate Game', '2019-05-05');
INSERT INTO EDITEUR (NOME, SIEGESOCIETE, DATECREATION, ETAT)  VALUES ('Nintendo', 'Japon', '1883-09-23', 'OUVERT'),
                                                                     ('Mojang', 'Finland', '2007-10-04', 'OUVERT'),
                                                                     ('SuperSWAG&Co', 'Vatican', '2000-02-02', 'FERME');
INSERT INTO GENRE   (NOMGENRE)                                VALUES ('RPG'),
                                                                     ('MMORPG'),
                                                                     ('Multijoueur'),
                                                                     ('Simulation'),
                                                                     ('Survie'),
                                                                     ('Stratégie'),
                                                                     ('Gestion');
INSERT INTO THEME   (NOMTHEME)                                VALUES ('Fantasy'),
                                                                     ('Science-Fiction'),
                                                                     ('Post-Apocalyptic');
INSERT INTO ESTEDITER (IDJ, IDE)                              VALUES (1,1),
                                                                     (2,2),
                                                                     (3,3);
