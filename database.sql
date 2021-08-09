create table customer(
id int primary key auto_increment,
img varchar(511),
name varchar(50) not null,
gender tinyint(1) not null default 0,
phone varchar(20) not null,
email varchar(255) unique not null
)
