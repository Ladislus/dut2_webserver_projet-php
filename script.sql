-- CREATION DE LA BASE DE DONNÉES

DROP TABLE IF EXISTS ESTDUTHEME;
DROP TABLE IF EXISTS THEME;
DROP TABLE IF EXISTS ESTDUGENRE;
DROP TABLE IF EXISTS GENRE;
DROP TABLE IF EXISTS ESTEDITER;
DROP TABLE IF EXISTS EDITEUR;
DROP TABLE IF EXISTS JEU;


CREATE TABLE JEU (
  IDJ INT AUTO_INCREMENT PRIMARY KEY,
  NOMJ VARCHAR(100) DEFAULT NULL,
  DATESORTIE DATE DEFAULT NULL,
  DESCJ TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE EDITEUR (
  IDE INT AUTO_INCREMENT PRIMARY KEY,
  NOME VARCHAR(100) DEFAULT NULL,
  SIEGESOCIETE VARCHAR(100) DEFAULT NULL,
  DATECREATION DATE DEFAULT NULL,
  ETAT VARCHAR(100) DEFAULT NULL,
  DESCE TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE ESTEDITER (
  IDJ INT,
  IDE INT,
  CONSTRAINT pk_estediter PRIMARY KEY (IDJ, IDE),
  CONSTRAINT fk_estediter_jeu FOREIGN KEY (IDJ) REFERENCES JEU(IDJ) ON DELETE CASCADE,
  CONSTRAINT fk_estediter_editeur FOREIGN KEY (IDE) REFERENCES EDITEUR(IDE) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE GENRE (
  IDG INT AUTO_INCREMENT PRIMARY KEY,
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
  IDT INT AUTO_INCREMENT PRIMARY KEY,
  NOMTHEME VARCHAR(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE ESTDUTHEME (
  IDJ INT,
  IDT INT,
  CONSTRAINT pk_estdutheme PRIMARY KEY (IDJ, IDT),
  CONSTRAINT fk_estdutheme_jeu FOREIGN KEY (IDJ) REFERENCES JEU(IDJ) ON DELETE CASCADE,
  CONSTRAINT fk_estdutheme_theme FOREIGN KEY (IDT) REFERENCES THEME(IDT) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO JEU     (NOMJ, DATESORTIE, DESCJ)                        VALUES ('The Legend of Zelda : Ocarina of Time', '1998-11-21', 'Trop bien ce jeu, c\'est l\istoire de zelda qui sauve link.'),
                                                                            ('Minecraft', '2011-11-18', 'Minecraft est un jeu indépendant trop cool'),
                                                                            ('Jean-Paul II the Ultimate Game', '2019-05-05', 'Jean paul Ii est revenu des morts pour boutés les monstres des enfers.');
INSERT INTO EDITEUR (NOME, SIEGESOCIETE, DATECREATION, ETAT, DESCE)  VALUES ('Nintendo', 'Japon', '1883-09-23', 'OUVERT', 'Nintendo (任天堂株式会社, Nintendō kabushiki gaisha?) est une entreprise multinationale
                                                                                                                          japonaise fondée en 1889 par Fusajiro Yamauchi5 près de Kyoto au Japon.
                                                                                                                          A ses débuts, la société produisait des cartes à jouer japonaises : les Hanafuda.
                                                                                                                          C’est à partir des années 1970 que la société a diversifié ses activités en produisant
                                                                                                                          des jouets et des bornes d’arcade. Elle a été l’une des principales sociétés précurseurs du jeu vidéo. '),
                                                                            ('Mojang', 'Finland', '2007-10-04', 'OUVERT', 'Mojang est une entreprise suédoise indépendante.'),
                                                                            ('SuperSWAG&Co', 'Vatican', '2000-02-02', 'FERME', 'incoonu a ca');
INSERT INTO GENRE   (NOMGENRE)                                       VALUES ('RPG'),
                                                                            ('MMORPG'),
                                                                            ('Multijoueur'),
                                                                            ('Simulation'),
                                                                            ('Survie'),
                                                                            ('Stratégie'),
                                                                            ('Gestion');
INSERT INTO THEME   (NOMTHEME)                                       VALUES ('Fantasy'),
                                                                            ('Science-Fiction'),
                                                                            ('Post-Apocalyptic');
INSERT INTO ESTEDITER (IDJ, IDE)                                     VALUES (1,1),
                                                                            (2,2),
                                                                            (3,3);
INSERT INTO ESTDUGENRE (IDJ, IDG)                                    VALUES (1,1),
                                                                            (2,1), (2,3), (2,4), (2,5), (2,7),
                                                                            (3,1), (3,2), (3,3), (3,5);
INSERT INTO ESTDUTHEME (IDJ, IDT)                                    VALUES (1,1),
                                                                            (2,3),
                                                                            (3,3);
