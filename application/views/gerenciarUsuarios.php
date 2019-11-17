<?php
	require_once 'header.php';
	require "../models/Usuario.php";
	$usuarioClasse = new Aluno();
	$todosUsuarios = $usuarioClasse->getAllUsuarios($_SESSION['id']);

	sort($todosUsuarios);
	//echo "<pre>";
	//print_r($todosUsuarios);
	//exit;
?>

    <body> 
    	<h4 class="tittle-w3layouts two text-center tituloPagUser espacoCadConteudo">Gerenciar Usuarios</h4> 
    	<div class="container">
			<div class="table-wrapperUser">
				<br><br>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								
								<th class="text-center">Siape/Matrícula</th>
								<th class="text-center">Tipo</th>
								<th class="text-center">Nome</th>
								<th class="text-center">Email</th>
								<th class="text-center">Foto</th>
								<th class="text-center">Ações</th>
							</tr>
						</thead>
						<tbody>

						<?php
							foreach ($todosUsuarios as $key => $usuario) {
								if ($usuario['email']!="odeioprog@gmail.com") {
						?>
								<tr>
									
									<td class="text-center" id="codigoUser"><?=$usuario['idUsuario']?></td>
									<td class="text-center" id="tipoUsuario"><?=$usuario['tipo']?></td>
									<td class="text-center" id="nomeUser"><?=$usuario['nome']?></td>
									<td class="text-center" id="emailUser"><?=$usuario['email']?></td>
									<td id="fotoPerfilUser"><div class="text-center"><img src="<?=$usuario['fotoPerfil']?>" class="iconGerenciarUsers"></div></td>
									<td class="text-center"> 
										<a href="?acao=excluir&idUsuario=<?=$usuario['idUsuario']?>" class="delete"><i class="fas fa-trash iconGerenciarUsuarios"></i> </a>
										<?php
											if ($usuario['tipo']!="administrador") {										
										?>
											<a href="?acao=elevar&idUsuario=<?=$usuario['idUsuario']?>"><i class="fas fa-arrow-up iconGerenciarUsuarios"></i></a>
										<?php
											}else{
										?>
											<a href="?acao=rebaixar&idUsuario=<?=$usuario['idUsuario']?>"><i class="fas fa-arrow-down iconGerenciarUsuarios"></i></a>
										<?php
											}
										?>
									</td>
								</tr>

					<?php
								}
							}
					?>
						</tbody>
					</table>
				</div>

				<br>
			</div>
		</div>

		<!-- Edit Modal HTML -->
		
		
		<!-- Delete Modal HTML -->
		

<?php

	if (isset($_GET['acao'])) {
		$idUsuario = $_GET['idUsuario'];

		switch ($_GET['acao']) {
			case 'excluir':

				echo '<div id="modalExcluir" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form action="../controllers/ExcluirUsuario.php" method="POST">
									<div class="modal-header">						
										<h4 class="modal-title">Deletar Usuário(s)</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">					
										<p>Você tem certeza que deseja deletar o(s) usuário(s) selecionados?</p>
										<p class="text-warning"><small>Essa ação não pode ser desfeita.</small></p>
									</div>
									<div class="modal-footer">
										<input type="hidden" name="idUsuario" value="'.$idUsuario.'">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
										<input type="submit" class="btn btn-danger" value="Deletar">
									</div>
								</form>
							</div>
						</div>
					</div>';

				echo "<script>
					$(document).ready(function(){
						$('#modalExcluir').modal('toggle');
					})
				</script>";
				break;
			case 'elevar':
				
				echo '<div id="modalElevar" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form action="../controllers/mudaTipoUsuario.php" method="post">
									<div class="modal-header">						
										<h4 class="modal-title">Elevar usuário a administrador</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									
									<div class="modal-body">					
										<p>Você tem certeza que deseja elevar a administrador este usuário?</p>
										<p class="text-warning"><small>Essa ação não pode ser desfeita.</small></p>
									</div>
									<div class="modal-footer">
										<input type="hidden" name="idUsuario" value="'.$idUsuario.'">
										<input type="hidden" name="tipoMudanca" value="eleva">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
										<input type="submit" class="btn btn-warning" value="Elevar">
									</div>
								</form>
							</div>
						</div>
					</div>';

					echo "<script>
							$(document).ready(function(){
								$('#modalElevar').modal('toggle');
							})
						</script>";

				break;
			case 'rebaixar':
				
				
				echo '<div id="modalRebaixar" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form action="../controllers/mudaTipoUsuario.php" method="post">
									<div class="modal-header">						
										<h4 class="modal-title">Rebaixar administrador</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">					
										<p>Você tem certeza que deseja rebaixar o administrador a usuario ou professor?</p>
										<p class="text-warning"><small>Essa ação não pode ser desfeita.</small></p>
									</div>
									<div class="modal-footer">
										<input type="hidden" name="idUsuario" value="'.$idUsuario.'">
										<input type="hidden" name="tipoMudanca" value="rebaixa">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
										<input type="submit" class="btn btn-warning" value="Rebaixar">
									</div>
								</form>
							</div>
						</div>
					</div>';

					echo "<script>
							$(document).ready(function(){
								$('#modalRebaixar').modal('toggle');
							})
						</script>";
				break;

		}
	}


	require_once 'footer.php';
?>