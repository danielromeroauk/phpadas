create table comentarios (
	fecha datetime not null,
	nickname varchar(60) not null,
	comentario varchar(140) not null,
	primary key (fecha)
);