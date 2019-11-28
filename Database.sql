create table afbeeldingen
(
    id int auto_increment,
    constraint afbeeldingen_id_uindex
        unique (id)
);

alter table afbeeldingen
    add primary key (id);

create table gebruikers
(
    id            int auto_increment,
    naam          varchar(30)          not null,
    wachtwoord    varchar(60)          not null,
    laatste_login int                  null,
    email         varchar(50)          null,
    ingeschakeld  tinyint(1) default 0 not null,
    constraint gebruikers_id_uindex
        unique (id),
    constraint gebruikers_naam_uindex
        unique (naam)
);

alter table gebruikers
    add primary key (id);

create table gemeentes
(
    id       int auto_increment,
    naam     varchar(30) null,
    postcode int(5)      null,
    constraint gemeentes_id_uindex
        unique (id)
);

alter table gemeentes
    add primary key (id);

create table adressen
(
    id          int auto_increment,
    gemeente_id int         null,
    straat      varchar(50) null,
    nummer      int         null,
    bus         varchar(20) null,
    constraint adressen_id_uindex
        unique (id),
    constraint gemeentes_adressen_fk
        foreign key (gemeente_id) references gemeentes (id)
);

alter table adressen
    add primary key (id);

create table gebruikers_gemeentes
(
    id           int auto_increment,
    gebruiker_id int null,
    gemeente_id  int null,
    constraint gebruikers_gemeentes_id_uindex
        unique (id),
    constraint gebruikers_gebruikers_gemeentes_fk
        foreign key (gebruiker_id) references gebruikers (id),
    constraint gemeentes_gebruikers_gemeentes_fk
        foreign key (gemeente_id) references gemeentes (id)
);

alter table gebruikers_gemeentes
    add primary key (id);

create table input_types
(
    id    int auto_increment,
    titel varchar(20) null,
    constraint input_types_id_uindex
        unique (id)
);

alter table input_types
    add primary key (id);

create table categorieen
(
    id            int auto_increment,
    input_type_id int                  null,
    titel         varchar(20)          null,
    gewicht       int        default 0 null,
    geactiveerd   tinyint(1) default 1 null,
    constraint categorieen_id_uindex
        unique (id),
    constraint input_types_categorieen_fk
        foreign key (input_type_id) references input_types (id)
);

alter table categorieen
    add primary key (id);

create table eigenschappen
(
    id           int auto_increment,
    categorie_id int         null,
    beschrijving varchar(50) null,
    constraint eigenschappen_id_uindex
        unique (id),
    constraint categorieen_eigenschappen_fk
        foreign key (categorie_id) references categorieen (id)
);

alter table eigenschappen
    add primary key (id);

create table is_subcategorie_van
(
    id              int not null,
    categorie_id    int null,
    subcategorie_id int null,
    constraint is_subcategorie_van_id_uindex
        unique (id),
    constraint categorieen_is_subcategorie_van_fk
        foreign key (categorie_id) references categorieen (id),
    constraint subcategorieen_is_subcategorie_van_fk
        foreign key (subcategorie_id) references categorieen (id)
);

alter table is_subcategorie_van
    add primary key (id);

create table klanten
(
    id           int auto_increment,
    voornaam     varchar(50)  null,
    famillienaam varchar(60)  null,
    email        varchar(120) null,
    telefoon     varchar(30)  null,
    constraint klanten_id_uindex
        unique (id)
);

alter table klanten
    add primary key (id);

create table sessies
(
    id            varchar(255)                        not null,
    gebruikers_id int                                 not null,
    login_tijd    timestamp default CURRENT_TIMESTAMP not null,
    constraint sessies_id_uindex
        unique (id),
    constraint gebruikers_sessies_fk
        foreign key (gebruikers_id) references gebruikers (id)
);

alter table sessies
    add primary key (id);

create table waarnemingen
(
    id    int auto_increment,
    titel varchar(40)                 null,
    kleur varchar(20) default 'white' null,
    constraint waarnemingen_id_uindex
        unique (id)
);

alter table waarnemingen
    add primary key (id);

create table woningen
(
    id       int auto_increment,
    adres_id int    null,
    bouwjaar int(5) null,
    constraint woningen_id_uindex
        unique (id),
    constraint adressen_woningen_fk
        foreign key (adres_id) references adressen (id)
);

alter table woningen
    add primary key (id);

create table afbeeldingen_woningen
(
    id            int auto_increment,
    afbeelding_id int null,
    woning_id     int null,
    constraint afbeeldingen_woningen_id_uindex
        unique (id),
    constraint afbeeldingen_afbeeldingen_woningen_fk
        foreign key (afbeelding_id) references afbeeldingen (id),
    constraint woningen_afbeeldingen_woningen_fk
        foreign key (woning_id) references woningen (id)
);

alter table afbeeldingen_woningen
    add primary key (id);

create table dossiers
(
    id           int auto_increment,
    klant_id     int         not null,
    woning_id    int         null,
    gebruiker_id int         null,
    datum        date        null,
    verwantschap varchar(30) null,
    constraint dossiers_id_uindex
        unique (id),
    constraint dossiers_gebruikers_fk
        foreign key (gebruiker_id) references gebruikers (id),
    constraint dossiers_klanten_fk
        foreign key (klant_id) references klanten (id),
    constraint dossiers_woningen_fk
        foreign key (woning_id) references woningen (id)
);

alter table dossiers
    add primary key (id);

create table eigenschappen_woningen
(
    id            int auto_increment,
    eigenschap_id int null,
    woning_id     int null,
    waarneming_id int null,
    constraint eigenschappen_woningen_id_uindex
        unique (id),
    constraint eigenschappen_eigenschappen_woningen_fk
        foreign key (eigenschap_id) references eigenschappen (id),
    constraint waarnemingen_eigenschappen_woningen_fk
        foreign key (waarneming_id) references waarnemingen (id),
    constraint woningen_eigenschappen_woningen___fk
        foreign key (woning_id) references woningen (id)
);

alter table eigenschappen_woningen
    add primary key (id);

