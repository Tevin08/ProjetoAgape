USE AGAPE_DB;
SELECT * FROM TB_DOADOR;
SELECT * FROM TB_COMMENT;
SELECT * FROM TB_ONG;
SELECT * FROM TB_USERS;
SELECT * FROM TB_USERS WHERE TIPO_USER = "Doador";
SELECT * FROM TB_DOADOR WHERE CD_DOADOR = 1;
SELECT * FROM TB_ONG WHERE CD_ONG = 105;
SELECT * FROM TB_USERS WHERE TIPO_USER = "Doador";
#delete FROM TB_DOADOR;
#delete FROM TB_ong;

SELECT TB_COMMENT.CD_COMMENT, TB_COMMENT.CD_DOADOR, TB_COMMENT.CD_ONG, TB_DOADOR.CD_DOADOR, TB_DOADOR.NM_DOADOR, TB_COMMENT.TEXTO_COMMENT
FROM TB_COMMENT
JOIN TB_DOADOR ON TB_COMMENT.CD_DOADOR = TB_DOADOR.CD_DOADOR
WHERE TB_COMMENT.CD_ONG = 102;


INSERT INTO TB_ONG(PIC) VALUES (load_file("D:\Documents\renan\files\pfp\094abb103e59ab3b0354286c8e988780.jpg"));

GRANT FILE on AGAPE_DB TO user@localhost;

UPDATE TB_ONG SET PIC = "DSA" WHERE CD_ONG = 1;

INSERT INTO TB_ONG (NM_ONG, SOBRE, INSTA, WPP, TWITTER)
VALUES 
('Charity Foundation', 'We are a nonprofit organization dedicated to making the world a better place.', '@charityfoundation', '+1234567890', '@charitytweets'),

('Hope for All', 'Empowering communities and spreading hope for a brighter future.', '@hopeforall', '+9876543210', '@hope_tweets'),

('Compassionate Hearts', 'Committed to helping those in need and creating a compassionate society.', '@compassionatehearts', '+1122334455', '@compassiontweets'),

('Kindness Matters', 'Promoting kindness and positivity to create a better world for everyone.', '@kindnessmatters', '+9988776655', '@bekindalways');


#ALTER USER 'root'@'localhost' IDENTIFIED with mysql_native_password by 'root';





insert into tb_comment
        (cd_doador, texto_comment)
        values 
        ( 
            2,
            'sasa'
        );