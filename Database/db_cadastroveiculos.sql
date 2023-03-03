CREATE DATABASE db_CadastroVeiculos;

USE db_CadastroVeiculos;

CREATE TABLE Fabricante(
	id int auto_increment,
    nome varchar(150) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Combustivel(
	id int auto_increment,
    nome varchar(150) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Marca(
	id int auto_increment,
    nome varchar(150) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE TipoDeVeiculo(
	id int auto_increment,
    nome varchar(150) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Veiculo(
	id int auto_increment,
	modelo varchar(150) NOT NULL,
    ano_fabricado date NOT NULL,
    numero_chassi char(17) NOT NULL,
    cor varchar(150) NOT NULL,
    kilometragem varchar(150) NOT NULL,
    revisao boolean,
    sinistro boolean,
    roubo_furto boolean,
    aluguel boolean,
    venda boolean,
    particular boolean,
    observacao varchar(255),
    id_Marca int NOT NULL,
    id_Fabricante int NOT NULL,
    id_TipoDeVeiculo int NOT NULL,
    id_Combustivel int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_Marca) REFERENCES Marca(id),
    FOREIGN KEY (id_Fabricante) REFERENCES Fabricante(id),
    FOREIGN KEY (id_TipoDeVeiculo) REFERENCES TipoDeVeiculo(id),
    FOREIGN KEY (id_Combustivel) REFERENCES Combustivel(id)
);
