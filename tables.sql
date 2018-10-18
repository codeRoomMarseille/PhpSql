USE coderoom;

DROP TABLE IF EXISTS orbite;

DROP TABLE IF EXISTS objet_spatial;

DROP TABLE IF EXISTS type_objet_spatial;

CREATE TABLE type_objet_spatial 
( type VARCHAR(50) NOT NULL , 
PRIMARY KEY (type)) ENGINE = InnoDB; 

CREATE TABLE objet_spatial 
( nom VARCHAR(50) NOT NULL , 
 masse FLOAT NOT NULL DEFAULT '0' , 
 type VARCHAR(50) NULL , 
 atmosphere VARCHAR(200) NULL , 
FOREIGN KEY fk_os1(type) REFERENCES type_objet_spatial(type) ON DELETE NO ACTION ON UPDATE NO ACTION,
PRIMARY KEY (nom)) ENGINE = InnoDB; 

CREATE TABLE orbite 
( objet_principal VARCHAR(50) NOT NULL , 
 objet_secondaire VARCHAR(50) NOT NULL , 
 distance FLOAT NOT NULL DEFAULT '0' , 
FOREIGN KEY fk_orb1(objet_principal) REFERENCES objet_spatial(nom) ON DELETE NO ACTION ON UPDATE NO ACTION,
FOREIGN KEY fk_orb2(objet_secondaire) REFERENCES objet_spatial(nom) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB; 

INSERT INTO type_objet_spatial(type) VALUES ('Station spatiale');
INSERT INTO type_objet_spatial(type) VALUES ('Etoile');
INSERT INTO type_objet_spatial(type) VALUES ('Tellurique');
INSERT INTO type_objet_spatial(type) VALUES ('Gazeuse');

INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('ISS', 4000000, 'Station spatiale', '');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Soleil', 1.9891e30, 'Etoile', 'Hydrogène et Hélium');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Mercure', 3.3011e23, 'Tellurique', 'Potassium, Sodium, Oxygène');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Vénus', 4.8685e24, 'Tellurique', 'Dioxyde de carbone');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Terre', 5.9736e24, 'Tellurique', 'Azote et oxygène');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Lune', 7.3477e22, 'Tellurique', '');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Mars', 641.85e21, 'Tellurique', 'Dioxyde de carbone');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Jupiter', 1.8986e27, 'Gazeuse', 'Dihydrogène, Hélium');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Europe', 4.8e22, 'Tellurique', 'Oxygène');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Ganymède', 1.4819e23, 'Tellurique', 'Oxygène');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Io', 8.93e22, 'Tellurique', 'Dioxyde de soufre');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Saturne', 568.46e24, 'Gazeuse', 'Hydrogène');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Titan', 1.3452e23, 'Tellurique', 'Diazote');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Encelade', 8.6e19, 'Tellurique', 'Vapeur d''eau');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Mimas', 3.84e19, 'Tellurique', '');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Uranus', 8.681e25, 'Gazeuse', 'Hydrogène, Hélium');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Neptune', 102.43e24, 'Gazeuse', 'Dihydrogène, Hélium');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Pluton', 1.314e22, 'Tellurique', 'Azote');
INSERT INTO objet_spatial(nom, masse, type, atmosphere) VALUES ('Charon', 1.52e21, 'Tellurique', '');

INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Terre', 'ISS', 6777266);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Soleil', 'Mercure', 57909176000);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Soleil', 'Vénus', 108208930000);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Soleil', 'Terre', 149597887500);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Terre', 'Lune', 384400000);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Soleil', 'Mars', 227936637000);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Soleil', 'Jupiter', 778412027000);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Jupiter', 'Europe', 671100000);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Jupiter', 'Ganymede', 1070400000);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Jupiter', 'Io', 421800000);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Soleil', 'Saturne', 1429394069000);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Saturne', 'Titan', 1221870000);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Saturne', 'Encelade', 238020000);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Saturne', 'Mimas', 185520000);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Soleil', 'Uranus', 2870658186000);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Soleil', 'Neptune', 4503443661000);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Soleil', 'Pluton', 5900898440583);
INSERT INTO orbite(objet_principal, objet_secondaire, distance) VALUES ('Pluton', 'Charon', 19130000);

 