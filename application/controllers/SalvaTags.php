<?php
    file_put_contents('tags.txt', json_encode($_POST['tags']));
    $retorno = ['status'=>1];
	echo json_encode($retorno);