-- Active: 1785179226942@@127.0.0.1@5432@projetlundi17@public
CREATE DATABASE projetLundi17;

CREATE TABLE eleves (
   id SERIAL PRIMARY KEY,
   nom VARCHAR(30) NOT NULL,
   prenom VARCHAR(30) NOT NULL,
   matricule VARCHAR(50) UNIQUE NOT NULL,
   dateNaissance DATE,
);
CREATE TABLE anneeAcademiques (
   id SERIAL PRIMARY KEY,
   annee VARCHAR(20),
   actif INT DEFAULT 0
);

CREATE TABLE responsables(
    id SERIAL PRIMARY KEY,
    nomResponsable VARCHAR(30),
    telephone VARCHAR (30) UNIQUE

);

CREATE TABLE ecoles(
     id SERIAL PRIMARY KEY,
     nomEcole VARCHAR(30) UNIQUE NOT NULL
);

CREATE TABLE utilisateurs(
   id SERIAL PRIMARY KEY,
   nomComplet VARCHAR(50),
   email VARCHAR(50),
   password VARCHAR(30),
   idRole INT REFERENCES roles(id)
);

CREATE TABLE roles(
   id SERIAL PRIMARY KEY,
   nomrole VARCHAR(30) NOT NULL
);

CREATE TABLE classes(
   id SERIAL PRIMARY KEY,
   nomClasse VARCHAR(30) NOT NULL UNIQUE,
   
);
CREATE TABLE inscription (
   id SERIAL PRIMARY KEY,
   idClasse INT REFERENCES classes(id),
   idEleve INT REFERENCES eleves(id),
   idAnnee INT REFERENCES anneeAcademiques(id),
   idEcole INT REFERENCES ecoles(id),
   idResponsable INT REFERENCES responsables(id)
   statut VARCHAR(30) 
);