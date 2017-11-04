create database plavin;
use plavin;

create table user(
	id int not null auto_increment primary key,
	name varchar(50),
	lastname varchar(50),
	username varchar(50),
	email varchar(255),
	password varchar(60),
	image varchar(255),
	status int default 1,
	kind int default 1,
	created_at datetime
);

/**
* password: encrypted using sha1(md5("mypassword"))
* status: 1. active, 2. inactive, 3. other, ...
* kind: 1. root, 2. other, ...
**/

/* insert user example */
insert into user (name,username,password,created_at) value ("Administrator","admin",sha1(md5("admin")),NOW());


create table person(
	id int not null auto_increment primary key,
	name varchar(50),
	lastname varchar(50),
	email varchar(255),
	address varchar(255),
	phone varchar(255),
	image varchar(255),
	created_at datetime
);


create table category(
    id int not null auto_increment primary key,
    name varchar(50)
);

create table product(
    id int not null auto_increment primary key,
    code varchar(255),
    name varchar(255),
    image varchar(255),
    description varchar(1000),
    price_in float, 
    price_out float, 
    category_id int,
    unit varchar(255),
    created_at datetime,
    is_active boolean not null default 1,
    inventary_min int,
    foreign key(category_id) references category(id)
);

create table client(
    id int not null auto_increment primary key,
    code varchar(255),
    name varchar(50),
    lastname varchar(50),
    image varchar(255),
    address varchar(255),
    email varchar(255),
    phone int,
    password varchar(60),
    credit boolean,
    creditlim int,
    created_at datetime,
    is_active boolean not null default 1
);
