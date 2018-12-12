CREATE TABLE ajudante(
    id_ajud INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_ajud VARCHAR(50),
    contato_ajud VARCHAR(50),
    carona_ajud BOOLEAN DEFAULT FALSE,
    lar_temp_ajud BOOLEAN DEFAULT FALSE,
    divulg_ajud BOOLEAN DEFAULT FALSE,
    doacao_ajud BOOLEAN DEFAULT FALSE,
    outro_ajud TEXT,
    obs_ajud TEXT
);

CREATE TABLE parceiros(
    id_parc INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_parc VARCHAR(50),
    url_parc VARCHAR(50)
);

CREATE TABLE login(
    id_login INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user_login VARCHAR(50),
    senha_login VARCHAR(50),
    contato_login VARCHAR(50),
    nome_login VARCHAR(50),
    nv_login INT
);

CREATE TABLE catioro(
    id_cat INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_cat VARCHAR(50),
    idade_cat INT,
    sexo_cat BOOLEAN DEFAULT FALSE,
    status_cat INT,
    status_desc_cat TEXT,
    castrado_cat BOOLEAN DEFAULT FALSE,
    vacinado_cat BOOLEAN DEFAULT FALSE,
    port_cat INT,
    obs_cat TEXT
);

CREATE TABLE financeiro(
    id_fin INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_fin VARCHAR(50),
    custo_fin FLOAT,
    pago_fin BOOLEAN DEFAULT FALSE
);

CREATE TABLE eventos(
    id_evt INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    desc_evt TEXT,
    data_hora_evt VARCHAR(30),
    titulo_evt VARCHAR(50)
);

CREATE TABLE adote(
	id_adote INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_adote VARCHAR(30),
    contato_adote VARCHAR(50),
    id_cat INT,
    FOREIGN KEY (id_cat) REFERENCES catioro(id_cat) ON UPDATE CASCADE ON DELETE CASCADE
);

insert into login values(NULL, 'ufscaoAdmin', 'ufsc4o4dm1n', 'https://www.facebook.com/ufscao.sorocaba/', 'UFSCão', 1);