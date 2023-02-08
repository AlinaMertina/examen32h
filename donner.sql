
/*nom de base examen32h*/
create table categorie(
    idCategorie int primary key auto_increment,
    Nom Varchar(30)
);
insert into categorie values 
(1,'Livre'),
(2,'chaussure'),
(3,'DVD'),
(4,'Vetement');

create table produit(
    idp int  primary key auto_increment,
    idCategorie int,
    idUser int,
    prix double precision,
    description text,
    FOREIGN KEY (idCategorie) REFERENCES categorie (idCategorie),
    FOREIGN KEY (idUser) REFERENCES User (idUser)
);
create table photoproduit(
    id int  primary key auto_increment,
    idp int,
    Nomimage text,
    FOREIGN KEY (idp) REFERENCES produit (idp)
);
insert into photoproduit values
(3,25,"57c70a99c5c146ad10e46b58cc39239d.jpg"),
(4,25,"329288002_735618984537215_8365273208582988106_n.jpg");

create table User (
    id int primary key auto_increment,
    nom varchar(20),
    prenom varchar(20),
    dtn date,
    email text,
    mdp varchar(20),
    isAdmin boolean
);
insert into User values ( default, 'Inssa', 'chalman', '2002-06-19', 'chalmanInssa1962002@gmail.com', 'chalman', 'true');
insert into User values ( default, 'TOTO', 'Mertina claudie', '2003-06-28', 'Mertinaclaudietot@gmail.com', 'Mertina', 'true');
insert into User values ( default, 'Rakoto', 'Nahari', '2004-06-19', 'Rakoto@gmail.com', 'Nahary', 'false');
insert into User values ( default, 'Mahefa', 'Harisoa', '2002-06-19', 'Andria@gmail.com', 'Andria', 'false');
insert into User values ( default, 'Andraina', 'Liantsoa', '2003-08-11', 'Nahary@gmail.com', 'Andraina', 'false');

/* misi view tokony ampidirina */
select Nomimage,idCategorie,idUser,prix,description from photoproduit join produit on 
photoproduit.idp=produit.idp order by  Nomimage limit 1;

drop table Proposition;
create table Proposition(
    idproposition int primary key auto_increment,
    idproduit1 int,/* produit ko*/
    idUtilisateur1 int,
    idproduit2 int,/* produit le nenola*/
    idUtilisateur2 int,
    datep Datetime,
    FOREIGN KEY (idUtilisateur1) REFERENCES User (idUser),
    FOREIGN KEY (idUtilisateur2) REFERENCES User (idUser),
    FOREIGN KEY (idproduit1) REFERENCES produit (idp),
    FOREIGN KEY (idproduit2) REFERENCES produit (idp)
);
create table AccepterProduit(
    id int primary key auto_increment,
    idproposition int,
    Valu boolean,
    dated Datetime,
    FOREIGN KEY (idproposition) REFERENCES Proposition (idproposition)
);
/* */
;

insert into AccepterProduit values (1,1,'true','2023-02-07 12:00');

select produit.Nomimage,produit.idproduit1,produit.prix,produit.description,idUtilisateur2 from Proposition join produit on Proposition.idproduit2 = produit.idp where idUtilisateur1=%d;
insert into produit values(1,1,1,12000,'voila un livre interessant');
insert into produit values(2,3,1,11000,'voila un DVD interessant');
insert into produit values(3,4,2,9000,'voila un vetement interessant');
insert into produit values(4,4,2,5000,'voila un vetement interessant');
insert into produit values(5,3,2,600,'voila un DVD interessant');
insert into produit values(6,2,3,17000,'voila une chaussure interessante');
insert into produit values(7,2,5,12700,'voila une chaussure interessant');
insert into produit values(8,2,5,12700,'voila une chaussure interessant');
insert into produit values(9,1,3,12700,'voila un livre interessant');
insert into produit values(10,1,4,12700,'voila un livre interessant');
insert into produit values(11,1,3,12700,'voila un livre interessant');
/* inseert into produit  categorie 4*/ 
insert into produit values(12,4,1,10000,'une pulle chaude pour l hiver');
insert into photoproduit values (30,12,"1d96290bd4481c1fdfb79ebc6529c2a1.jpg");
insert into produit values(13,4,2,25000,'une pulle blanche chaude pour l hiver');
insert into photoproduit values (31,13,"7aefce0e5f1a9b6b6125721a925b7d50.jpg");
insert into produit values(14,4,3,15000,'une cardigan chaude pour l hiver');
insert into photoproduit values (32,14,"add7730534abbc0369da44149e828597.jpg");
insert into produit values(15,4,4,30000,'lot deux pull ');
insert into photoproduit values (33,15,"add7730534abbc0369da44149e828597.jpg");
/*vetement*/
/* inseert into produit  chaussure 4*/ 
insert into produit values(16,2,1,30000,'bouttes vrai marque');
insert into photoproduit values (34,16,"d8b5c0161941133b1af154b3a94df6f8.jpg");
insert into produit values(17,2,2,8000,'converse de luxe');
insert into photoproduit values (35,17,"4e302e9bb0a87264be1e650a1e1648b5.jpg");
insert into produit values(18,2,3,11000,'nouveaute chaussure');
insert into photoproduit values (36,18,"97c51d5173049635c1b3c032634d1850.jpg");
insert into produit values(19,2,4,10000,'chaussure de sport');
insert into photoproduit values (37,19,"ed5c61468802deaaa88255546484c7bb.jpg");
/* inseert into produit  chaussure 1*/ 
insert into produit values(20,2,3,30000,'developpement personnelle');
insert into photoproduit values (38,20,"016f1ed5f70da8ce61e2c29d5017d79e.jpg");
insert into produit values(21,2,4,27000,'developpement personnelle');
insert into photoproduit values (39,21,"21e36ff12770f472d62839863db6760e.jpg");
insert into produit values(22,2,1,33000,'developpement personnelle');
insert into photoproduit values (40,22,"e651fc3642ec0be483fb07da3812250f.jpg");
insert into produit values(23,2,2,10000,'developpement personnelle');
insert into photoproduit values (41,23,"6b82b2b038f0ba7f3aad4d570ad4fb75.jpg");


insert into photoproduit values
(6,1,"57c70a99c5c146ad10e46b58cc39239d.jpg"),
(7,2,"3ed98cb9e608a0f87c7386e650d02934.jpg"), 
(8,3,"326aca1f98531c8ee34b6284d1b130b1.jpg"), 
(9,4,"326aca1f98531c8ee34b6284d1b130b1.jpg"), 
(10,5,"971ea233c4b0f2781ae4a16a4f055269.jpg"), 
(11,6,"54678f790b776dc759dd517a1e16bacf.jpg"), 
(12,7,"9c6a211562477e00018e6ab099832437.jpg"), 
(13,8,"9a0dbc6d9a5aae8bbb9c8cac5dbcdfe5.jpg"), 
(14,9,"57c70a99c5c146ad10e46b58cc39239d.jpg"), 
(15,10,"6ae24065636ee645689a8b5975d50f38.jpg"),
(16,11,"4bae74b149efaab50a04617572c57120.jpg.jpg"); 

insert into Proposition values (1,2,1,3,2,'2023-02-07 00:00');