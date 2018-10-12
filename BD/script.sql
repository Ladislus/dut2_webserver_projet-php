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

INSERT INTO JEU     (NOMJ, DATESORTIE, DESCJ)                        VALUES ('The Legend of Zelda : Ocarina of Time', '1998-11-21', 'Trop bien ce jeu, c\'est l\'histoire du héros Zelda qui doit sauver la princess Link danc cet épopée épique.'),
                                                                            ('Minecraft', '2011-11-18', 'Minecraft est un jeu indépendant trop cool'),
                                                                            ('Super Mario 64', '1996-06-23', 'Dans cet episode Mario doit récolter des étoiles pour sauver des terrifiantes griffes de Bowser sa bien aimée Princesse Beach, princesse du Royaume Champignon.'),
                                                                            ('Jean-Paul II the Ultimate Game', '2019-05-05', 'Jean paul II est revenu des morts pour boutés les monstres des enfers.'),
                                                                            ('Kingdom Hearts', '2002-01-01', 'Kingdom Hearts (キングダム ハーツ, Kingudamu Hātsu) est une série de jeux vidéo d\'action-RPG développée et éditée par Square Enix, qui marque
                                                                                                              l\'association entre Disney Interactive Studio et l\'univers des jeux de Square sous la direction de Tetsuya Nomura. Kingdom Hearts est donc un crossover entre plusieurs
                                                                                                              personnages de Square et l\'univers Disney qui a lieu dans un monde parallèle créé spécialement pour la série. Dans chacun des opus, les voix des personnages de Disney
                                                                                                              sont interprétées par les mêmes célébrités que dans leur œuvre d\'origine');

INSERT INTO EDITEUR (NOME, SIEGESOCIETE, DATECREATION, ETAT, DESCE)  VALUES ('Nintendo', 'Japon', '1883-09-23', 'OUVERT', 'Nintendo (任天堂株式会社, Nintendō kabushiki gaisha) est une entreprise multinationale
                                                                                                                          japonaise fondée en 1889 par Fusajiro Yamauchi5 près de Kyoto au Japon.
                                                                                                                          A ses débuts, la société produisait des cartes à jouer japonaises : les Hanafuda.
                                                                                                                          C’est à partir des années 1970 que la société a diversifié ses activités en produisant
                                                                                                                          des jouets et des bornes d’arcade. Elle a été l’une des principales sociétés précurseurs du jeu vidéo.'),
                                                                            ('Mojang', 'Finland', '2009-10-04', 'OUVERT', 'Mojang est une entreprise suédoise indépendante. Fondé en 2009, c\'est le studio derrière
                                                                                                                          le jeu Minecraft. Avec plus de 2.5 milliards de bénéfice avec l\'achat de Mojang par Microsoft,
                                                                                                                          son déclin n\'est qu\'imminent.'),
                                                                            ('SuperSWAG&Co', 'Vatican', '2000-02-02', 'FERME', 'Cet éditeur n\'a aucune histoire. Totalement inconnu, il n\'a sortit qu\'un seul
                                                                                                                                seul jeu en presque 20 ans. On le pense donc fermé bien qu\'on ne sache pas
                                                                                                                                réelement ce qu\'il en est.'),
                                                                            ('Square Enix', 'Japon', '1975-04-01', 'OUVERT', 'Square Enix Co., Ltd. (株式会社スクウェア・エニックス, Kabushiki-gaisha Sukuwea Enikkusu) est une société japonaise qui développe
                                                                                                                              et édite des jeux vidéo et des manga. La société est connue principalement pour ses jeux vidéo de rôle, notamment les séries
                                                                                                                              Final Fantasy, Dragon Quest et Kingdom Hearts. Elle est parfois incorrectement désignée par le
                                                                                                                              nom de son ancienne gamme, « Squaresoft ». ');
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
                                                                            (3,1),
                                                                            (4,3),
                                                                            (5,4);
INSERT INTO ESTDUGENRE (IDJ, IDG)                                    VALUES (1,1),
                                                                            (2,1), (2,3), (2,4), (2,5), (2,7),
                                                                            (3,4),
                                                                            (4,1), (4,2), (4,3), (4,5),
                                                                            (5,1), (5,6);
INSERT INTO ESTDUTHEME (IDJ, IDT)                                    VALUES (1,1), (1,2),
                                                                            (2,3),
                                                                            (3,1), (3,2),
                                                                            (4,3),
                                                                            (5,1), (5,2);
