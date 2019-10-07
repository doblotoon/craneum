<?php
    file_put_contents('tags.txt', json_encode($_POST['tags']));
    file_put_contents('disciplinas.txt', json_encode($_POST['disciplinas']));
    $retorno = ['status'=>1];
	echo json_encode($retorno);