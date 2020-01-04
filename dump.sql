create table hotels (
	id 			int primary key auto_increment,
    nome 		varchar(200) not null,
    descricao 	text not null,
    endereco 	varchar(255) not null,
    cidade		varchar(255) not null,
    estrelas 	tinyint not null,
	foto_url 	varchar(200) null
);

create table rooms (
	id 			int primary key auto_increment,
    hotel_id 	int not null,
    tamanho		varchar(3),
    numero 		int not null,
    constraint hotel_id_fk foreign key (hotel_id) 
		references hotels(id)
);

create table reservations (
	id 			int primary key auto_increment,
    room_id 	int not null,
    checkin	datetime not null,
    checkout	datetime not null,
    createdAt	datetime not null,
    constraint room_id_fk foreign key (room_id) 
		references rooms(id)
);

select * from hotels;

