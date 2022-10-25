DROP DATABASE IF EXISTS formulaire;

CREATE DATABASE IF NOT EXISTS formulaire;
USE formulaire;
CREATE table if not EXISTS convention(
	idConvention int(4) not null auto_increment,
	nomConvention char,
	nbHeures int(5),
	primary key (idConvention)
);
CREATE table if not EXISTS etudiant(
	idEtudiant int(4) not null auto_increment,
	nom char,
	prenom char,
	mail char,
	convention int(4),
	primary key (idEtudiant),
	foreign key (convention) references convention(idConvention)
);
CREATE table if not EXISTS attestation(
	idAttestation int(4) not null auto_increment,
	idConvention int(4),
	idEtudiant int(4),
	message char,
	primary key (idAttestation),
	foreign key (idConvention) references convention(idConvention),
	foreign key (idEtudiant) references etudiant(idEtudiant)

);
insert into convention values(null,'test', 5);
insert into etudiant values(null, 'maya', 'achat','maya@gmail.com',1);
insert into attestation values(null, 1, 1,'salut tous le monde');
