/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  08/03/2017 15:48:42                      */
/*==============================================================*/


drop table if exists ETUDIANT;

drop table if exists ROLE;

drop table if exists UTILISATEUR;


create table ETUDIANT
(
   ID_UTILISATEUR       int not null,
   ID_ROLE              int not null,
   PRENOM               longtext,
   NOM                  longtext,
   ADRESSE              longtext,
   TELEPHONE            longtext,
   LOGIN                longtext,
   PASSWORD             longtext,
   NUMERO               longtext,
   DATE_NAISSANCE       longtext,
   EMAIL_ETU            longtext,
   primary key (ID_UTILISATEUR)
);

/*==============================================================*/
/* Table : ROLE                                                 */
/*==============================================================*/
create table ROLE
(
   ID_ROLE              int not null,
   LIBELLE              longtext,
   primary key (ID_ROLE)
);

/*==============================================================*/
/* Table : UTILISATEUR                                          */
/*==============================================================*/
create table UTILISATEUR
(
   ID_UTILISATEUR       int not null,
   ID_ROLE              int not null,
   PRENOM               longtext,
   NOM                  longtext,
   ADRESSE              longtext,
   TELEPHONE            longtext,
   LOGIN                longtext,
   PASSWORD             longtext,
   primary key (ID_UTILISATEUR)
);

alter table ETUDIANT add constraint FK_HERITAGE_1 foreign key (ID_UTILISATEUR)
      references UTILISATEUR (ID_UTILISATEUR) on delete restrict on update restrict;

alter table UTILISATEUR add constraint FK_AVOIR foreign key (ID_ROLE)
      references ROLE (ID_ROLE) on delete restrict on update restrict;

