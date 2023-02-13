CREATE DATABASE db_CadastroVeiculos;

USE CadastroVeiculos;

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

CREATE TABLE Veiculo(
	id int auto_increment,
	modelo varchar(150) NOT NULL,
    ano_fabricado int NOT NULL,
    numero_chassi char(17) NOT NULL,
    cor varchar(150) NOT NULL,
    kilometragem varchar(150) NOT NULL,
    modelo varchar(150) NOT NULL,
    revisao bool NOT NULL,
    sinistro bool NOT NULL,
    roubo_furto bool NOT NULL,
    aluguel bool NOT NULL,
    venda bool NOT NULL,
    particular bool NOT NULL,
    observacao varchar(255) NOT NULL,
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
