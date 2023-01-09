CREATE TABLE saclive.clinica(cnpj VARCHAR(18) PRIMARY KEY, 
						nome VARCHAR(70),
						email VARCHAR(120),
						senha VARCHAR(100)); 

CREATE TABLE saclive.veterinario(id_veterinario VARCHAR(20) PRIMARY KEY,
							nome VARCHAR(150),
							email VARCHAR(120),
							cnpj_clinica VARCHAR(18) REFERENCES clinica(cnpj));


CREATE TABLE saclive.cliente(cpf VARCHAR(14), 
				nome VARCHAR(150), 
				email VARCHAR(120), 
				telefone VARCHAR(15), 
				cnpj_clinica VARCHAR(18) REFERENCES clinica(cnpj),
				PRIMARY KEY(cpf, cnpj_clinica));

CREATE TABLE saclive.animal(id_animal INTEGER AUTO_INCREMENT PRIMARY KEY,
						nome VARCHAR(70),
						cpf_dono VARCHAR(14) REFERENCES cliente(cpf), 
						especie_animal VARCHAR(20),
						cnpj_clinica VARCHAR(18) REFERENCES clinica(cnpj),
						data_nascimento DATE,
						peso INTEGER,
						altura INTEGER,
						largura INTEGER,
						observacoes VARCHAR (300));

CREATE TABLE registro(id_registro INTEGER AUTO_INCREMENT PRIMARY KEY,
    						id_animal INTEGER REFERENCES animal(id_animal),
						procedimento VARCHAR (70),
						data_procedimento DATE,
						obs VARCHAR (300));
						

CREATE TABLE consulta(id_consulta INTEGER AUTO_INCREMENT PRIMARY KEY, 
id_veterinario VARCHAR(20) REFERENCES veterinario(id_veterinario), 
animal_id INTEGER REFERENCES animal(id_animal), cliente_id VARCHAR(14) REFERENCES cliente(cpf),
 data_consulta DATE,
 cnpj_clinica VARCHAR(18) REFERENCES clinica(cnpj),
 horario TIME,
 valor FLOAT,
 relatorio VARCHAR(1000));