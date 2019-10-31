<?php
    file_put_contents('tagsAtualizadas.txt', json_encode($_POST['tags']));
    file_put_contents('disciplinasAtualizadas.txt', json_encode($_POST['disciplinas']));
    $retorno = ['status'=>1];
	echo json_encode($retorno);