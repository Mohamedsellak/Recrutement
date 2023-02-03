CREATE DATABASE myDB;

USE myDB;

CREATE TABLE users(
    login VARCHAR(60) PRIMARY KEY,
    pass VARCHAR(60),
    type_user VARCHAR(20)
)

CREATE table condidate(
    cin VARCHAR(60) PRIMARY key,
    nom VARCHAR(60),
    prenom VARCHAR(60),
    numero_tel VARCHAR(15),
    ville VARCHAR(15),
    adresse VARCHAR(15),
    login VARCHAR(60) unique,
    constraint foreign key(login) references users(login)
)

CREATE TABLE entreprise(
    id_entreprise int  PRIMARY KEY AUTO_INCREMENT,
    nom_entreprise VARCHAR(60) ,
    secteur_activite VARCHAR(60) ,
    description_ VARCHAR(60) ,
    pays VARCHAR(60) ,
    ville VARCHAR(60) ,
    logo_entreprise VARCHAR(60),
    site_entreprise VARCHAR(60)
)

CREATE table recruteur(
    cin VARCHAR(60) PRIMARY key,
    nom VARCHAR(60),
    prenom VARCHAR(60),
    numero_tel VARCHAR(15),
    ville VARCHAR(15),
    adresse VARCHAR(15),
    login VARCHAR(60) unique,
    id_entreprise int,
    constraint fk1 foreign key(login) references users(login),
    constraint fk2 foreign key(id_entreprise) references entreprise(id_entreprise)
)

create table offre(
    id_offre int primary key AUTO_INCREMENT,
    title VARCHAR(60) ,
    description_ text, 
    Date_publication date,
    pays VARCHAR(60) ,
    ville VARCHAR(60) ,
    post_proposer VARCHAR(60) ,
    Niveau_experience int , -- 5ans d'expérience
    Niveau_etudes int ,-- bac + 5
    Langues_exigees text, -- francais anglais espagnol ...
    Nbrposte int , -- 5 posts
    id_entreprise int,
    constraint foreign key(id_entreprise) references entreprise(id_entreprise)
)
 
CREATE TABLE demande(
    id_demande int primary key auto_increament,
    id_offre int,
    cin int , -- condidate
    etat boolean , -- valider ou non
)