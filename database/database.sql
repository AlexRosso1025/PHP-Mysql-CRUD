create database if not exists php_mysql_crud;
use php_mysql_crud;

create table if not exists tasks(
	task_id int not null primary key auto_increment,
    title varchar(70) not null,
    description text not null,
    created_at timestamp not null default current_timestamp
);