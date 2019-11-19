<?php
	require_once 'header.php';
	require '../models/Conteudo.php';
	require '../models/Disciplina.php';
	$conteudoClasse = new Conteudo();
	$conteudosGerais = $conteudoClasse->getConteudoGerenciar($_SESSION['id']);
	$disciplinaClasse = new Disciplina();
	//echo "<pre>";
	//print_r($conteudosGerais);
	//exit;
 ?>

    <body> 
    	<h4 class="tittle-w3layouts two text-center tituloPagUser espacoGerenciarDisciplinas">Gerenciar Conteúdos</h4> 
    	<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="table-title">
						<div class="row">
							<div class="col-sm-12">
								<a href="cadastroConteudo.php" class="btn btn-success">
									<i class="fas fa-plus"></i> <span>Cadastrar Novo Conteudo</span>
								</a>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="text-center">Capa</th>
									<th class="text-center">Título</th>
									<th class="text-center">Disciplina(s)</th>
									<th class="text-center">Comentários</th>
									<th class="text-center">Ações</th>
								</tr>
							</thead>
							<tbody>

							<?php
									foreach ($conteudosGerais as $key => $conteudo) {
										$disciplinasConteudo = $disciplinaClasse->getDisciplinasConteudo($conteudo['idConteudo']);
							?>
								<tr>
									<td class="text-center">
										<img class="imagemConteudoTabela" src="<?=$conteudo['fotoCapa']?>" alt="">
									</td>

									<td class="text-center titulo"><?=$conteudo['titulo']?></td>

									<td class="text-center">
										<?php
											foreach ($disciplinasConteudo as $key => $disciplina) {	
										?>
												<h6 class="aEsquerda">
													<a href="resultadoPesquisa.php?termo=<?=$disciplina['disciplina']?>&ft=2">
														<span class="badge badge-secondary aEsquerda espacoDireita disciplina"><?=$disciplina['disciplina']?></span>
													</a>
												</h6>
										<?php
											}
										?>
									</td>

									<td class="text-center">
										<i class="fas fa-comments iconsGerenciarConteudo"></i>
										<?=$conteudo['comentarios']?>
									</td>

									<td class="text-center">
										<a class="verPost" href="conteudo.php?idConteudo=<?=$conteudo['idConteudo']?>">
											<i class="fa fa-eye iconPesquisa"></i>
										</a>
                                        <a href="editarConteudo.php?idConteudo=<?=$conteudo['idConteudo']?>" class="edit">
                                            <i class="fas fa-edit iconPesquisa"></i>
                                        </a>
										<a href="?acao=excluir&idConteudo=<?=$conteudo['idConteudo']?>" class="delete">
											<i class="fas fa-trash iconPesquisa"></i>
										</a>
									</td>
								</tr>

							<?php
									}
							?>
							</tbody>
						</table>
					</div>
					
					</div>
				<div class="col-2"></div>
			</div>
		</div>
		<br><br>
		<!-- Delete Modal HTML -->



<?php

		if (isset($_GET['acao']) and $_GET['acao']=="excluir" and isset($_GET['idConteudo'])) {
		echo  "	<script>
					$(document).ready(function(){
						$('#deletarConteudoModal').modal('toggle');
					})
				</script>";
		

?>

		<div id="deletarConteudoModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form method='post' action='../controllers/ExcluirConteudo.php?tipo=prof'>
						<div class="modal-header">						
							<h4 class="modal-title">Deletar Conteúdo</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">					
							<p>Você tem certeza que deseja deletar este conteúdo?</p>
							<p class="text-warning"><small>Essa ação não pode ser desfeita.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
							<input type="hidden" name="idConteudo" value="<?=$_GET['idConteudo']?>">
							<input type="submit" class="btn btn-danger" value="Deletar">
						</div>
					</form>
				</div>
			</div>
		</div>
    

<?php
		}

	require_once 'footer.php';
?>