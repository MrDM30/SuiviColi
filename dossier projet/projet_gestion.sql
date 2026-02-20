/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  20/02/2026 13:21:07                      */
/*==============================================================*/


/*==============================================================*/
/* Table : Client                                               */
/*==============================================================*/
create table Client
(
   idClient             int not null  comment '',
   nom                  varchar(254)  comment '',
   date                 datetime  comment '',
   telephone            int  comment '',
   adresse              varchar(254)  comment '',
   primary key (idClient)
);

/*==============================================================*/
/* Table : Colis                                                */
/*==============================================================*/
create table Colis
(
   idColis              int not null  comment '',
   idClient             int not null  comment '',
   idTicket             int not null  comment '',
   numeroColis          int  comment '',
   destination          varchar(254)  comment '',
   status               varchar(254)  comment '',
   date                 datetime  comment '',
   destinateur          varchar(254)  comment '',
   expediteur           varchar(254)  comment '',
   num_exp              char(10)  comment '',
   num_des              char(10)  comment '',
   primary key (idColis),
   key AK_Identifiant_1 (idColis)
);

/*==============================================================*/
/* Table : Employe                                              */
/*==============================================================*/
create table Employe
(
   idEmploye            int not null  comment '',
   nom                  varchar(254)  comment '',
   motDePasse           varchar(254)  comment '',
   identifiant          varchar(254)  comment '',
   primary key (idEmploye)
);

/*==============================================================*/
/* Table : Historiques                                          */
/*==============================================================*/
create table Historiques
(
   idHistorique         int not null  comment '',
   idClient             int  comment '',
   primary key (idHistorique)
);

/*==============================================================*/
/* Table : SuivitColis                                          */
/*==============================================================*/
create table SuivitColis
(
   idSuivit             int not null  comment '',
   localisation         varchar(254)  comment '',
   description          varchar(254)  comment '',
   primary key (idSuivit),
   key AK_Identifiant_1 (idSuivit)
);

/*==============================================================*/
/* Table : Ticket                                               */
/*==============================================================*/
create table Ticket
(
   idTicket             int not null  comment '',
   idSuivit             int not null  comment '',
   date                 datetime  comment '',
   primary key (idTicket)
);

/*==============================================================*/
/* Table : association1                                         */
/*==============================================================*/
create table association1
(
   idEmploye            int not null  comment '',
   idClient             int not null  comment '',
   primary key (idEmploye, idClient)
);

/*==============================================================*/
/* Table : association7                                         */
/*==============================================================*/
create table association7
(
   idSuivit             int not null  comment '',
   idHistorique         int not null  comment '',
   primary key (idSuivit, idHistorique)
);

alter table Colis add constraint FK_COLIS_ASSOCIATI_CLIENT foreign key (idClient)
      references Client (idClient) on delete restrict on update restrict;

alter table Colis add constraint FK_COLIS_ASSOCIATI_TICKET foreign key (idTicket)
      references Ticket (idTicket) on delete restrict on update restrict;

alter table Historiques add constraint FK_HISTORIQ_ASSOCIATI_CLIENT foreign key (idClient)
      references Client (idClient) on delete restrict on update restrict;

alter table Ticket add constraint FK_TICKET_ASSOCIATI_SUIVITCO foreign key (idSuivit)
      references SuivitColis (idSuivit) on delete restrict on update restrict;

alter table association1 add constraint FK_ASSOCIAT_ASSOCIATI_CLIENT foreign key (idClient)
      references Client (idClient) on delete restrict on update restrict;

alter table association1 add constraint FK_ASSOCIAT_ASSOCIATI_EMPLOYE foreign key (idEmploye)
      references Employe (idEmploye) on delete restrict on update restrict;

alter table association7 add constraint FK_ASSOCIAT_ASSOCIATI_HISTORIQ foreign key (idHistorique)
      references Historiques (idHistorique) on delete restrict on update restrict;

alter table association7 add constraint FK_ASSOCIAT_ASSOCIATI_SUIVITCO foreign key (idSuivit)
      references SuivitColis (idSuivit) on delete restrict on update restrict;

