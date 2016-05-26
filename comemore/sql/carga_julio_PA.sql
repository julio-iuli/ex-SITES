USE comemore;

SET @id_pa = (SELECT id_uf FROM tb_uf WHERE id_uf='PA' OR id_uf='pa');
INSERT INTO tb_cidade (ds_cidade, tb_uf_id_uf) VALUES
('Belém', @id_pa),
('Ananindeua', @id_pa),
('Santarém', @id_pa),
('Marabá', @id_pa),
('Parauapebas', @id_pa),
('Castanhal', @id_pa),
('Abaetetuba', @id_pa),
('Cametá', @id_pa),
('Marituba', @id_pa),
('Bragança', @id_pa),
('São Félix do Xingu', @id_pa);

SET @id_cidade = (SELECT id_cidade FROM tb_cidade WHERE ds_cidade='Belém');
INSERT INTO tb_bairro (ds_bairro, tb_cidade_id_cidade) VALUES
('Guamá', @id_cidade),
('Pedreira', @id_cidade),
('Marambaia', @id_cidade),
('Tapanã', @id_cidade),
('Marco', @id_cidade),
('Jurunas', @id_cidade),
('Montese', @id_cidade),
('Coqueiro', @id_cidade),
('Sacramenta', @id_cidade),
('Telégrafo', @id_cidade);

SET @id_bairro = (SELECT id_bairro FROM tb_bairro WHERE ds_bairro='Guamá');
INSERT INTO tb_logradouro (ds_logradouro, ds_cep, tb_bairro_id_bairro) VALUES
('Passagem Guamá', 66065335, @id_bairro),
('Rua da Salvação', 66079050, @id_bairro),
('Avenida José Bonifácio', 66065362, @id_bairro),
('Avenida Perimetral', 66075750, @id_bairro),
('Vila Silva Castro', 66075010, @id_bairro),
('Alameda Mamoré', 66075425, @id_bairro),
('Conjunto Mauro Porto', 66073390, @id_bairro),
('Passagem da Paz', 66073440, @id_bairro),
('Travessa Guerra Passos', 66073250, @id_bairro),
('Conjunto Aron', 66075865, @id_bairro);