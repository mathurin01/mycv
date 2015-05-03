create database if not exists mycv character set utf8 collate utf8_unicode_ci;
use mycv;

grant all privileges on mycv.* to 'mycv'@'localhost' identified by 'mycv';
