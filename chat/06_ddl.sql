# crear tabla

create table nombretabla (
	campo1 tipo(longitud) restriccion,
	campo2 tipo restriccion,
	nombre varchar(32) not null
)

#restricciones ( NOT NULL)

create table nombretabla (
	nombre varchar(32) not null

);

#restricciones ( unique)

create table nombretabla (
	nombre varchar(32) unique

);
#restricciones ( NOT NULL)

create table nombretabla (
	id int auto_increment,
	primary key(id)

);

# alterar para llave primaria

alter table nombretabla add primary key(id);

# alterar para ( eliminar llave primaria )

alter table nombretabla drop primary key;

#restricciones (foreign key)

create table nombretabla (
	tablaensingular_id int,
	foreign key(tablaensingular_id),
	references tabla.campollaveprimaria

);

#restricciones (foreign key)

alter table nombretabla (
	alter table nombretabla
	add foreign key(tablaensingular_id),
	references tabla.campollaveprimaria

);

#restricciones (foreign key)

create table nombretabla (
	alter table nombretabla
	add foreign key(tablaensingular_id),
	references tabla.campollaveprimaria

);