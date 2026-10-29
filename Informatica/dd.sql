CREATE TABLE IF NOT EXISTS   autovettura(
    id integer unsigner auto_increment,
    Marca varchar(20),
    Modello varchar (20),
    AnnoImmatricolazione char(4),
    Provincia char(2),
    Uniproprietario boolean,
    Kilometraggio integer unsigner,

    primary key(id)
);