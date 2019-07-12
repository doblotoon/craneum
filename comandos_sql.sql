/* Home */
    /* Home */

    --home consulta de exibição dos conteudos -- OK*/
    select idConteudo,titulo, conteudo, fotoCapa from conteudo limit 10;
        --home consulta de exibição dos conteudos -- OK*/
        select idConteudo,titulo, conteudo, fotoCapa from conteudo limit 10;

-------------------------------------------------------------------------------------------
/* Pagina conteudo */
    /* Pagina conteudo */

    --visualização de conteudo -> pagina conteudo --OK*/
        --visualização de conteudo -> pagina conteudo --OK*/


    select * from conteudo where idConteudo = /* $idConteudo passada quando clicada */;
    /* duvidas do conteudo -> pagina conteudo -- OK*/
    select * from duvida where fk_duv_idConteudo = /* $idConteudo passada quando o conteudo é acessado */;
    /* respostas das duvidas -- OK*/
    select * from resposta where fk_resp_idDuvida = /* $idDuvida que está no conteudo */
    /* dados dos usuarios que fizeram as duvidas -- OK*/
    select idUsuario, nome, fotoPerfil from usuario where idUsuario = /* $fk_duv_idUsuario pega pela consulta da duvida */;
        select * from conteudo where idConteudo = /* $idConteudo passada quando clicada */;
        /* duvidas do conteudo -> pagina conteudo -- OK*/
        select * from duvida where fk_duv_idConteudo = /* $idConteudo passada quando o conteudo é acessado */;
        /* respostas das duvidas -- OK*/
        select * from resposta where fk_resp_idDuvida = /* $idDuvida que está no conteudo */
        /* dados dos usuarios que fizeram as duvidas -- OK*/
        select idUsuario, nome, fotoPerfil from usuario where idUsuario = /* $fk_duv_idUsuario pega pela consulta da duvida */;


    /* dados dos usuarios que fizeram as duvidas e as duvidas feitas por eles -- OK*/
    select idUsuario, nome, fotoPerfil, idDuvida, duvida, respondido, dataDuvida, fk_duv_idUsuario, fk_duv_idConteudo, idConteudo from usuario, duvida, conteudo where idUsuario = fk_duv_idUsuario and idConteudo = fk_duv_idConteudo and idConteudo = /* conteudo pesquisado */;
        /* dados dos usuarios que fizeram as duvidas e as duvidas feitas por eles -- OK*/
        select idUsuario, nome, fotoPerfil, idDuvida, duvida, respondido, dataDuvida, fk_duv_idUsuario, fk_duv_idConteudo, idConteudo from usuario, duvida, conteudo where idUsuario = fk_duv_idUsuario and idConteudo = fk_duv_idConteudo and idConteudo = /* conteudo pesquisado */;


------------------------------------------------------------------------------------------------
/* Cadastrar duvidas*/
    /* Cadastrar duvidas*/

    -- insert de duvidas -OK
    insert into duvida (duvida,adendo,respondido,dataDuvida,fk_duv_idConteudo,fk_duv_idUsuario) values (/* $duvida feita */,0/*padrao, nao e adendo ainda*/,0 /*padra, nao foi respondida ainda*/, /* $dataDuvida qdo foi feita */, /* $idConteudo conteudo onde a duvida foi feita */,/* $idUsuario usuario que fez a duvida*/);

    --verificar se os bool da duvida estao com padrao 0
        -- insert de duvidas -OK
        insert into duvida (duvida,adendo,respondido,dataDuvida,fk_duv_idConteudo,fk_duv_idUsuario) values (/* $duvida feita */,0/*padrao, nao e adendo ainda*/,0 /*padra, nao foi respondida ainda*/, /* $dataDuvida qdo foi feita */, /* $idConteudo conteudo onde a duvida foi feita */,/* $idUsuario usuario que fez a duvida*/);
        
        --verificar se os bool da duvida estao com padrao 0

    -- excluir a duvida -- OK*/
    delete from duvida where idDuvida = /* $idDuvida que vai ser excluida e so pode ser pelo usuario que fez*/;

    -- editar a duvida OK/
    update duvida set duvida = /* duvida editada */ where idDuvida = /*idDuvida que vai ser editada*/;
        -- excluir a duvida -- OK*/
        delete from duvida where idDuvida = /* $idDuvida que vai ser excluida e so pode ser pelo usuario que fez*/;
        
        -- editar a duvida OK/
        update duvida set duvida = /* duvida editada */ where idDuvida = /*idDuvida que vai ser editada*/;

------------------------------------------------------------------------------------------------


/* Cadastro do Usuario */
    /* Cadastro do Usuario */

    -- insert de usuario -OK
    insert into usuario (idUsuario,nome,email,senha,fotoPerfil,fk_usu_idTipoUsuario) values (/* siape/matricula */,/*nome*/,/*email*/,/* senha hasheada*/,/*caminho da foto, mas pode ter nulo*/,/*tipo do usuario q normalmente é 1*/);
        -- insert de usuario -OK
        insert into usuario (idUsuario,nome,email,senha,fotoPerfil,fk_usu_idTipoUsuario) values (/* siape/matricula */,/*nome*/,/*email*/,/* senha hasheada*/,/*caminho da foto, mas pode ter nulo*/,/*tipo do usuario q normalmente é 1*/);

    -- delete de usuario -OK
    delete from usuario where idUsuario = /* id passada */;
        -- delete de usuario -OK
        delete from usuario where idUsuario = /* id passada */;

    -- atualizar dados do usuario -OK
    update usuario set nome = /*nome novo*/, email = /*email novo*/, senha = /*senha nova*/, fotoPerfil = /*foto nova*/ where idUsuario = /*id passada*/;
    -- atualizar tipo do usuario (ação restrita) -OK
    update usuario set fk_usu_idTipoUsuario = /* novo tipo */ where idUsuario = /* id passada */;
        -- atualizar dados do usuario -OK
        update usuario set nome = /*nome novo*/, email = /*email novo*/, senha = /*senha nova*/, fotoPerfil = /*foto nova*/ where idUsuario = /*id passada*/;
        -- atualizar tipo do usuario (ação restrita) -OK
        update usuario set fk_usu_idTipoUsuario = /* novo tipo */ where idUsuario = /* id passada */;


/* Pagina do Usuario */
    /* Pagina do Usuario */

    --informaçoes do usuario comum (nao produtor de conteudo, pagina propria do usuario) -OK
    select nome, tipo, fotoPerfil, titulo, conteudo,salvoEm from usuario, tipousuario, conteudo, conteudoalvo where idUsuario = /* id passada */ and fk_usu_idTipoUsuario = idTipoUsuario and fk_cs_idUsuario = idUsuario and fk_cs_idConteudo = idConteudo;

        --informaçoes do usuario comum (nao produtor de conteudo, pagina propria do usuario) -OK
        select nome, tipo, fotoPerfil, titulo, conteudo,salvoEm from usuario, tipousuario, conteudo, conteudoalvo where idUsuario = /* id passada */ and fk_usu_idTipoUsuario = idTipoUsuario and fk_cs_idUsuario = idUsuario and fk_cs_idConteudo = idConteudo;
        


/* Login do Usuario */
    -- OK
    --testar no php se o usuario envio email ou nome (if tem @ ($nome = null e $email = email passado), se n usa nome ($nome = nome passado e email = null))
    select idUsuario,nome, tipo, fotoPerfil from usuario, tipousuario where (nome = /* nome passado */ or email = /* email passado */) and senha = /* senha hasheada */ and fk_usu_idTipoUsuario = idTipoUsuario;
    /* Login do Usuario */
        -- OK
        --testar no php se o usuario envio email ou nome (if tem @ ($nome = null e $email = email passado), se n usa nome ($nome = nome passado e email = null))
        select idUsuario,nome, tipo, fotoPerfil from usuario, tipousuario where (nome = /* nome passado */ or email = /* email passado */) and senha = /* senha hasheada */ and fk_usu_idTipoUsuario = idTipoUsuario;


----------------------------------------------------------------------------------------------------

/* Salvar conteudo */

    --OK
    insert into conteudosalvo (fk_cs_idConteudo,fk_cs_idUsuario, salvoEm) values (/*id do conteudo salvo*/,/* id do usuario q salvou*/,/* dia q foi salvo*/);

    --DATE_FORMAT( atributo, "%d/%m/%Y" )
        --formato das datas para serem salvos == ano-mes-dia *espaço* hora:minuto:segundo
    --*/
/*insert into duvida (duvida,adendo,respondido,dataDuvida,fk_duv_idConteudo,fk_duv_idUsuario) values ("aaaaaaaaaa?",0,0 , "2019-07-14 01:55:00", 9,6);*/
    /* Salvar conteudo */
        
        --OK
        insert into conteudosalvo (fk_cs_idConteudo,fk_cs_idUsuario, salvoEm) values (/*id do conteudo salvo*/,/* id do usuario q salvou*/,/* dia q foi salvo*/);
        
        --DATE_FORMAT( atributo, "%d/%m/%Y" )
            --formato das datas para serem salvos == ano-mes-dia *espaço* hora:minuto:segundo
        --*/
    /*insert into duvida (duvida,adendo,respondido,dataDuvida,fk_duv_idConteudo,fk_duv_idUsuario) values ("aaaaaaaaaa?",0,0 , "2019-07-14 01:55:00", 9,6);*/


---------------------------------------------------------------------------------------------------


/* Cadastro de Conteudo */
    /* Cadastro de Conteudo */

    -- OK
    insert into conteudo (titulo,conteudo,dataPostagem,fotoCapa,fk_cont_idUsuario) where (/* titulo */,/* conteudo */,/* data da postagem */,/* capa do conteudo */,/* id do usuario q criou */);
    -- OK
    insert into conteudotag (fk_ct_idTag,fk_ct_idConteudo) values (/* id da tag do conteudo */,/* id do conteudo*/);
    -- caso o conteudo tiver mais de uma tag devemos utilizar um for com a qtd de elementos do array das tags
    /* foreach (com os elementos do array de tags){
            executar o insert tantas vezes q tiver de tag e utilizar a mesma id de conteudo
        }
    */
    -- caso a tag nao exista utilizar o insert de tag \/
        -- OK
        insert into conteudo (titulo,conteudo,dataPostagem,fotoCapa,fk_cont_idUsuario) where (/* titulo */,/* conteudo */,/* data da postagem */,/* capa do conteudo */,/* id do usuario q criou */);
        -- OK
        insert into conteudotag (fk_ct_idTag,fk_ct_idConteudo) values (/* id da tag do conteudo */,/* id do conteudo*/);
        -- caso o conteudo tiver mais de uma tag devemos utilizar um for com a qtd de elementos do array das tags
        /* foreach (com os elementos do array de tags){
                executar o insert tantas vezes q tiver de tag e utilizar a mesma id de conteudo
            }
        */
        -- caso a tag nao exista utilizar o insert de tag \/

    /* Novas Tags  OK*/

        -- disciplinas
            select idDisciplina, disciplina from disciplina where disciplina like "% $pesquisa %";
                --professores que ministram tais disciplinas
                --professores que ministram tais disciplinas OK
                select idUsuario, nome, tipo, fotoPerfil from usuario,tipousuario,conteudo,conteudodisciplina,disciplina where tipo = "professor" and idDisciplina = /*id da disciplina acessada*/ and idDisciplina = fk_cd_idDisciplina and fk_cont_idUsuario = idUsuario and fk_usu_idTipoUsuario = idTipoUsuario;

        -- tag
            select idTag, tag from tag where tag like "% $pesquisa %";




/* Informações Extras desse SQL*/
        select idConteudo, titulo, idUsuario, tipo from conteudo,usuario,tipousuario where fk_cont_idUsuario = idUsuario and fk_usu_idTipoUsuario = idTipoUsuario and tipo = "professor";
        -- consulta para listar os usuarios por tipo
            select idUsuario, nome, tipo from usuario,tipousuario where fk_usu_idTipoUsuario = idTipoUsuario and tipo = "professor";

--DATE_FORMAT( atributo, "%d/%m/%Y" )
        --formato das datas para serem salvos == ano-mes-dia *espaço* hora:minuto:segundo
    --*/

-- como dar dump: mysqldump banco>arquivo_no_qual_vai_ser_salvo.sql -u aluno -p

/* Informações Extras desse SQL*/

    -- DATE_FORMAT( atributo, "%d/%m/%Y" ) - formatação de datas para exibição
    -- formato das datas para serem salvos == ano-mes-dia *espaço* hora:minuto:segundo
    -- como dar dump: mysqldump banco>arquivo_no_qual_vai_ser_salvo.sql -u aluno -p


/* to do list
    - pesquisa de conteudo
    - cadastro conteudo -OK
*/


/*
    Outras Consultas que podem ser uteis
select titulo,disciplina,tag from conteudo,tag,disciplina,conteudodisciplina,conteudotag where idconteudo=fk_cd_idConteudo and idConteudo = fk_ct_idConteudo and idDisciplina = fk_cd_idDisciplina and idTag = fk_ct_idTag;
        select titulo,disciplina,tag from conteudo,tag,disciplina,conteudodisciplina,conteudotag where idconteudo=fk_cd_idConteudo and idConteudo = fk_ct_idConteudo and idDisciplina = fk_cd_idDisciplina and idTag = fk_ct_idTag;
select idConteudo,titulo from conteudo where titulo like "%Socio%" or (select idConteudo,idDisciplina,fk_cd_idConteudo,fk_cd_idDisciplina from conteudo,disciplina,conteudodisciplina where idConteudo = fk_cd_idConteudo and idDisciplina = fk_cd_idDisciplina and disciplina like "%Socio%");
-- OK
select idDisciplina,disciplina from disciplina where disciplina like "%Socio%";
-- OK
select idConteudo, titulo, disciplina from conteudo,conteudodisciplina,disciplina where idConteudo = fk_cd_idConteudo and idDisciplina = fk_cd_idDisciplina and disciplina like "%Socio%";
        select idConteudo,titulo from conteudo where titulo like "%Socio%" or (select idConteudo,idDisciplina,fk_cd_idConteudo,fk_cd_idDisciplina from conteudo,disciplina,conteudodisciplina where idConteudo = fk_cd_idConteudo and idDisciplina = fk_cd_idDisciplina and disciplina like "%Socio%");
        -- OK
        select idDisciplina,disciplina from disciplina where disciplina like "%Socio%";
        -- OK
        select idConteudo, titulo, disciplina from conteudo,conteudodisciplina,disciplina where idConteudo = fk_cd_idConteudo and idDisciplina = fk_cd_idDisciplina and disciplina like "%Socio%";
-- funcionando
select idConteudo, titulo, disciplina, tag from conteudo,conteudodisciplina,disciplina,conteudotag,tag where (idConteudo = fk_cd_idConteudo and idDisciplina = fk_cd_idDisciplina and fk_ct_idConteudo = idConteudo and fk_ct_idTag = idTag) and (disciplina like "%Socio%" or titulo like "%Socio%" or tag like "%Socio%");
        -- funcionando
        select idConteudo, titulo, disciplina, tag from conteudo,conteudodisciplina,disciplina,conteudotag,tag where (idConteudo = fk_cd_idConteudo and idDisciplina = fk_cd_idDisciplina and fk_ct_idConteudo = idConteudo and fk_ct_idTag = idTag) and (disciplina like "%Socio%" or titulo like "%Socio%" or tag like "%Socio%");
*/

-- OK
insert into conteudodisciplina (fk_cd_idConteudo,fk_cd_idDisciplina) values (1,14),(2,18),(3,1),(4,20),(5,20),(6,8),(7,5),(8,3),(9,7),(10,9);


select idConteudo, titulo,fotoCapa from conteudo,conteudodisciplina,disciplina,conteudotag,tag where (idConteudo = fk_cd_idConteudo and idDisciplina = fk_cd_idDisciplina and fk_ct_idConteudo = idConteudo and fk_ct_idTag = idTag) and (disciplina like "%prog%" or titulo like "%pro%" or tag like "%geo%"); 
select idConteudo, titulo,fotoCapa from conteudo,conteudodisciplina,disciplina,conteudotag,tag where (idConteudo = fk_cd_idConteudo and idDisciplina = fk_cd_idDisciplina and fk_ct_idConteudo = idConteudo and fk_ct_idTag = idTag) and (disciplina like "%prog%" or titulo like "%pro%" or tag like "%geo%");