drop table if exists t_article;

create table t_article (
art_id integer not null primary key auto_increment,
art_title varchar(100) not null,
art_content varchar(2000) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

drop tabel if exists t_category

create table t_category (
cat_id integer not null primary key auto_increment,
cat_title varchar(100) not null,
cat_logo varchar(250) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;
