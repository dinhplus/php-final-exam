create table customer(
id int primary key auto_increment,
img varchar(511),
name varchar(50) not null,
gender tinyint(1) not null default 0,
phone varchar(20) not null,
email varchar(255) unique not null
)


INSERT INTO final_exam.customer (img,name,gender,phone,email) VALUES
	 ('https://i.pinimg.com/originals/8b/b1/6e/8bb16e98567d267512b18d7134b5b5ef.jpg','Henry Nguyen',0,'0862347629834','henry.nguyen@gmail.com'),
	 ('https://1.bp.blogspot.com/-xLZGgt1PdYI/YIwCwNXKmcI/AAAAAAAAFkY/pulnxKOw6bI_0I4KWgG3eqcAqKlTU2_HwCLcBGAsYHQ/w324-h400/itz_dpz_queen_1610865447751207-min-1.jpg','Anna Truong',0,'023498237212','anna.tr@gmail.com');