create table users
(
    id         int auto_increment,
    name       varchar(30)          not null,
    password   varchar(60)          not null,
    last_login int                  null,
    email      varchar(50)          null,
    enabled    tinyint(1) default 0 not null,
    constraint users_id_uindex
        unique (id),
    constraint users_name_uindex
        unique (name)
);

alter table users
    add primary key (id);

create table sessions
(
    id         varchar(255)                        not null,
    user_id    int                                 not null,
    login_time timestamp default CURRENT_TIMESTAMP not null,
    constraint sessions_id_uindex
        unique (id),
    constraint user_id
        foreign key (user_id) references users (id)
);

alter table sessions
    add primary key (id);

