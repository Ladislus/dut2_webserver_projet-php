INSERT INTO JEU (NOMJ, DATESORTIE, DESCJ) VALUES
  ('The Legend of Zelda : Ocarina of Time', '1998-11-21', 'Trop bien ce jeu, c\'est l\'histoire du héros Zelda qui doit sauver la princess Link danc cet épopée épique.'),
  ('Minecraft', '2011-11-18', 'Minecraft est un jeu indépendant trop cool'),
  ('Jean-Paul II the Ultimate Game', '2019-05-05', 'Jean paul II est revenu des morts pour boutés les monstres des enfers.'),
  ('Valkyria Chronicles', '2008-04-24', 'TRO D BARRES');

INSERT INTO EDITEUR (NOME, SIEGESOCIETE, DATECREATION, ETAT, DESCE) VALUES
  ('Nintendo', 'Japon', '1883-09-23', 'OUVERT', 'Nintendo (任天堂株式会社, Nintendō kabushiki gaisha) est une entreprise multinationale
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
                                                    nom de son ancienne gamme, « Squaresoft ». '),
  ('SEGA', 'Japon', '2078-12-20','OUVERT', 'SEGA C\'EST PLUS FORT QUE TOI');

INSERT INTO GENRE (NOMGENRE) VALUES ('RPG'),
                                    ('MMORPG'),
                                    ('Multijoueur'),
                                    ('Simulation'),
                                    ('Survie'),
                                    ('Stratégie'),
                                    ('Gestion'),
                                    ('Steampunk');

INSERT INTO THEME (NOMTHEME) VALUES ('Fantasy'),
                                    ('Science-Fiction'),
                                    ('Post-Apocalyptic'),
                                    ('Guerre');

INSERT INTO ESTEDITER (IDJ, IDE) VALUES (1,1),
                                        (2,2),
                                        (3,3),
                                        (4,4);

INSERT INTO ESTDUGENRE (IDJ, IDG) VALUES (1,1),
                                         (2,1), (2,3), (2,4), (2,5), (2,7),
                                         (3,4),
                                         (4,6);

INSERT INTO ESTDUTHEME (IDJ, IDT) VALUES (1,1), (1,2),
                                         (2,3),
                                         (3,1), (3,2),
                                         (4,4);
