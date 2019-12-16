use thermoloket

create table gebruikers
(
    id         		int auto_increment,
    naam       		varchar(30)          not null,
    wachtwoord 		varchar(60)          not null,
    laatste_login 	int                  null,
    email      		varchar(50)          null,
    ingeschakeld    tinyint(1) default 0 not null,
    constraint 		gebruikers_id_uindex
        unique 		(id),
    constraint 		gebruikers_naam_uindex
        unique 		(naam)
);

alter table gebruikers
    add primary key (id);

create table sessies
(
    id         		varchar(255)                        not null,
    gebruikers_id   int                                 not null,
    login_tijd 		timestamp default CURRENT_TIMESTAMP not null,
    constraint sessies_id_uindex
        unique (id),
    constraint gebruikers_id
        foreign key (gebruikers_id) references gebruikers (id)
);

alter table sessies
    add primary key (id);

