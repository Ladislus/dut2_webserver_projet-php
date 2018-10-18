INSERT INTO JEU (NOMJ, DATESORTIE, DESCJ) VALUES
  ('The Legend of Zelda : Ocarina of Time', '1998-11-21', 'Trop bien ce jeu, c\'est l\'histoire du héros Zelda qui doit sauver la princess Link danc cet épopée épique.'),
  ('Minecraft', '2011-11-18', 'Minecraft est un jeu indépendant trop cool'),
  ('Jean-Paul II the Ultimate Game', '2019-05-05', 'Jean paul II est revenu des morts pour boutés les monstres des enfers.'),
  ('Valkyria Chronicles', '2008-04-24', 'Notre protagonniste est l\'enfant du héros de la dernière grande guerre. Vous devez sauver un pays voisin envailli par un autre pays pour son pétrole, ressource rare dans ce monde steampunk. Recommandé par Ladislas !'),
  ('Fire Emblem', '1990-01-10', 'Fire Emblem est un tactical RPG au tour par tour où vous incarnez un héros pour vaince les grands méchants agrougrou !'),
  ('Borderlands 2', '2012-12-21', 'EXPLOSIOOOON, BRUTAAAAASE, DU SAAAAANG, ET DES EXPLOSIOOOONSSSSS, et accessoirement le personnage principal le plus cool de l\'histoire du jeu vidéo: MONSIEUR TOOOOOOOOOOOORQUE et ses guns FONT DES EXPLOSIOOOONSSSSS!!! TROP COOOOOOOOOOOOOOOL'),
  ('Silent Hill', '1999-12-01','Silent Hill est un jeu vidéo de type survival horror développé par Konami CE Tokyo et édité par Konami. Réputé pour avoir révolutionné le jeu d\'horreur par son approche psychologique de la peur, le titre a connu un succès international.'),
  ('Metal Gear Solid V', '2015-09-01', 'L\'invasion de l\'Afghanistan par l\'URSS au début des années 1980 bouleverse le cours de la guerre froide et a marqué une nouvelle ère tandis que le mercenaire légendaire compte bien faire part au monde entier de son retour alors qu\'il n\'est plus qu\'une légende tombée dans l\'oubli, tout cela dans la continuité d\'un plan à la gravité dramatique qu\'il prépare, afin de se venger de la mort de ses hommes, de ses camarades. ');

INSERT INTO EDITEUR (NOME, SIEGESOCIETE, DATECREATION, ETAT, DESCE) VALUES
  ('Nintendo', 'Kyoto', '1883-09-23', 'OUVERT', 'Nintendo (任天堂株式会社, Nintendō kabushiki gaisha) est une entreprise multinationale
                                                 japonaise fondée en 1889 par Fusajiro Yamauchi5 près de Kyoto au Japon.
                                                 A ses débuts, la société produisait des cartes à jouer japonaises : les Hanafuda.
                                                 C’est à partir des années 1970 que la société a diversifié ses activités en produisant
                                                 des jouets et des bornes d’arcade. Elle a été l’une des principales sociétés précurseurs du jeu vidéo.'),
  ('Mojang', 'Stockolm', '2009-10-04', 'OUVERT', 'Mojang est une entreprise suédoise indépendante. Fondé en 2009, c\'est le studio derrière
                                                 le jeu Minecraft. Avec plus de 2.5 milliards de bénéfice avec l\'achat de Mojang par Microsoft,
                                                 son déclin n\'est qu\'imminent.'),
  ('SuperSWAG&Co', 'Vatican', '2000-02-02', 'FERME', 'Cet éditeur n\'a aucune histoire. Totalement inconnu, il n\'a sortit qu\'un seul
                                                      seul jeu en presque 20 ans. On le pense donc fermé bien qu\'on ne sache pas
                                                      réelement ce qu\'il en est.'),
  ('Square Enix', 'Tokyo', '1975-04-01', 'OUVERT', 'Square Enix Co., Ltd. (株式会社スクウェア・エニックス, Kabushiki-gaisha Sukuwea Enikkusu) est une société japonaise qui développe
                                                    et édite des jeux vidéo et des manga. La société est connue principalement pour ses jeux vidéo de rôle, notamment les séries
                                                    Final Fantasy, Dragon Quest et Kingdom Hearts. Elle est parfois incorrectement désignée par le
                                                    nom de son ancienne gamme, « Squaresoft ». '),
  ('SEGA', 'Tokyo', '1951-03-20','OUVERT', 'SEGA C\'EST PLUS FORT QUE TOI. Non sérieusement SEGA était LE rival de Nintendo dans le passé, mais est maintenant en déclin constant.
                                            Il a été pour beaucoup un tournant majeur du jeu-vidéo, mais pour d\'autres, un simple caillou sur le chemin infini qu\'est Nintendo.'),
  ('Konami','Tokyo', '1969-03-21', 'OUVERT', 'L\'origine de Konami remonte à mars 1969, lorsque Kagemasa Kozuki monte une affaire de location et de réparation de jukebox à Osaka, au Japon.
                                              Le 19 mars 1973, la société Konami Industry Co., Ltd est établie. Le terme « Konami » est une conjonction du nom des quatre cofondateurs :
                                              Kagemasa Kozuki, Yoshinobu Nakama, Hiro Matsuda, et Shokichi Ishihara. ' ),
  ('2K Games', 'Novato', '2005-04-08', 'OUVERT', '2K Games est un développeur, éditeur et distributeur mondial de jeu vidéo. L\'entreprise est une filiale de Take-Two Interactive,
                                                  qui possède également le studio Rockstar Games ainsi que deux labels d\'édition : 2K Sports, spécialisé dans les jeux de sport,
                                                  et 2K Play, spécialisé dans le jeu grand public. ');

INSERT INTO GENRE (NOMGENRE) VALUES ('RPG'),
                                    ('MMORPG'),
                                    ('Multijoueur'),
                                    ('Simulation'),
                                    ('Survie'),
                                    ('Stratégie'),
                                    ('Gestion'),
                                    ('Tour-par-tour'),
                                    ('FPS'),
                                    ('TPS'),
                                    ('Comédie');

INSERT INTO THEME (NOMTHEME) VALUES ('Fantasy'),
                                    ('Science-Fiction'),
                                    ('Post-Apocalyptic'),
                                    ('Guerre'),
                                    ('Steampunk'),
                                    ('Combat'),
                                    ('Horror'),
                                    ('Rythme'),
                                    ('Action');

INSERT INTO ESTEDITE (IDJ, IDE) VALUES  (1,1),
                                        (2,2),
                                        (3,3),
                                        (4,4),
                                        (5,1),
                                        (6,7),
                                        (7,6),
                                        (8,6);


INSERT INTO ESTDUGENRE (IDJ, IDG) VALUES (1,1),
                                         (2,1), (2,2), (2,3), (2,5), (2,7), (2,9), (2,10),
                                         (3,4),
                                         (4,6),
                                         (5,1), (5,5), (5,6), (5,7), (5,8),
                                         (6,1), (6,3), (6,5), (6,9), (6,11),
                                         (7,5), (7,7), (7,10),
                                         (8,4), (8,6), (8,10);

INSERT INTO ESTDUTHEME (IDJ, IDT) VALUES (1,1), (1,6), (1,9),
                                         (2,1), (2,6), (2,9),
                                         (3,1), (3,2), (3,7), (3,8),
                                         (4,1), (4,4), (4,5), (4,6), (4,9),
                                         (5,1), (5,9),
                                         (6,1), (6,2), (6,6), (6,9),
                                         (7,2), (7,7),
                                         (8,4), (8,6), (8,9);
