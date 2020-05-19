create table bouwjaren
(
    id     int auto_increment,
    bottom varchar(6) not null,
    top    varchar(6) not null,
    constraint bouwjaren_id_uindex
        unique (id)
);

alter table bouwjaren
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
    naam     varchar(30) not null,
    postcode int(5)      not null,
    constraint gemeentes_id_uindex
        unique (id),
    constraint gemeentes_postcode_uindex
        unique (postcode)
);

alter table gemeentes
    add primary key (id);

create table adressen
(
    id          int auto_increment,
    gemeente_id int         not null,
    straat      varchar(50) not null,
    nummer      int         not null,
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
    gebruiker_id int not null,
    gemeente_id  int not null,
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
    titel varchar(20) not null,
    constraint input_types_id_uindex
        unique (id),
    constraint input_types_titel_uindex
        unique (titel)
);

alter table input_types
    add primary key (id);

create table categorieen
(
    id            int auto_increment,
    input_type_id int                  not null,
    titel         varchar(20)          not null,
    gewicht       int        default 0 not null,
    geactiveerd   tinyint(1) default 1 not null,
    hoofdbalk     tinyint(1) default 1 null,
    constraint categorieen_id_uindex
        unique (id),
    constraint categorieen_titel_uindex
        unique (titel),
    constraint input_types_categorieen_fk
        foreign key (input_type_id) references input_types (id)
);

alter table categorieen
    add primary key (id);

create table eigenschappen
(
    id           int auto_increment,
    categorie_id int                  not null,
    beschrijving varchar(200)         not null,
    `default`    tinyint(1) default 0 null,
    constraint eigenschappen_id_uindex
        unique (id),
    constraint categorieen_eigenschappen_fk
        foreign key (categorie_id) references categorieen (id)
);

alter table eigenschappen
    add primary key (id);

create table is_subcategorie_van
(
    id              int auto_increment,
    categorie_id    int not null,
    subcategorie_id int not null,
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
    id          int auto_increment,
    voornaam    varchar(50)  not null,
    familienaam varchar(60)  not null,
    email       varchar(120) null,
    telefoon    varchar(30)  null,
    constraint klanten_id_uindex
        unique (id)
);

alter table klanten
    add primary key (id);

create table sessies
(
    id            varchar(255)                       not null,
    gebruikers_id int                                not null,
    login_tijd    datetime default CURRENT_TIMESTAMP null,
    constraint sessies_id_uindex
        unique (id),
    constraint gebruikers_sessies_fk
        foreign key (gebruikers_id) references gebruikers (id)
);

alter table sessies
    add primary key (id);

create table waarneming_types
(
    id    int auto_increment,
    titel varchar(40)                 not null,
    kleur varchar(20) default 'white' not null,
    constraint waarnemingen_id_uindex
        unique (id),
    constraint waarnemingen_titel_uindex
        unique (titel)
);

alter table waarneming_types
    add primary key (id);

create table woningen
(
    id          int auto_increment,
    adres_id    int        null,
    bouwjaar_id int        not null,
    verwarmd    tinyint(1) not null,
    constraint woningen_id_uindex
        unique (id),
    constraint adressen_woningen_fk
        foreign key (adres_id) references adressen (id),
    constraint bouwjaren_woningen_fk
        foreign key (bouwjaar_id) references bouwjaren (id)
);

alter table woningen
    add primary key (id);

create table afbeeldingen
(
    id        int auto_increment,
    woning_id int         not null,
    folder    varchar(40) not null,
    richting  varchar(20) not null,
    nummer    int         not null,
    constraint afbeeldingen_id_uindex
        unique (id),
    constraint afbeeldingen_woningen_fk
        foreign key (woning_id) references woningen (id)
);

alter table afbeeldingen
    add primary key (id);

create table dossiers
(
    id           int auto_increment,
    klant_id     int                                not null,
    woning_id    int                                not null,
    gebruiker_id int                                not null,
    datum        datetime default CURRENT_TIMESTAMP not null,
    verwantschap varchar(30)                        not null,
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

create table waarnemingen
(
    id                 int auto_increment,
    eigenschap_id      int not null,
    woning_id          int not null,
    waarneming_type_id int not null,
    constraint eigenschappen_woningen_id_uindex
        unique (id),
    constraint eigenschappen_eigenschappen_woningen_fk
        foreign key (eigenschap_id) references eigenschappen (id),
    constraint waarnemingen_eigenschappen_woningen_fk
        foreign key (waarneming_type_id) references waarneming_types (id),
    constraint woningen_eigenschappen_woningen___fk
        foreign key (woning_id) references woningen (id)
);

alter table waarnemingen
    add primary key (id);

