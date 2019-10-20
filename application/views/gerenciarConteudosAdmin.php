<?php
    require_once('header.php');
 ?>

    <body> 
    <h4 class="tittle-w3layouts two text-center tituloPagUser espacoGerenciarDisciplinas">Gerenciar Conteúdos</h4> 
    <div class="container">
		<div class="row">
			<div class="col-12">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-12">
							<a href="cadastroConteudo.php" class="btn btn-success"><i class="fas fa-plus"></i> <span>Cadastrar Novo Conteudo</span></a>
							<a href="#deletarConteudoModal" class="btn btn-danger" data-toggle="modal"><i class="fas fa-trash-alt"></i> <span>Excluir</span></a>	
						</div>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th class="gerenciarSelect text-center">
									<span class="custom-checkbox">
										<input type="checkbox" id="selectAll">
										<label for="selectAll"></label>
									</span>
                                </th>
                                <th class="text-center">Capa</th>
								<th class="text-center">Título</th>
                                <th class="text-center">Autor</th> <!-- Quando o usuário não é admin, ele terá acesso apenas ao conteúdo que ele mesmo postou, sendo assim não teremos essa coluna -->
                                <th class="text-center">Disciplina(s)</th>
                                <th class="text-center">Visualizações</th>
                                <th class="text-center">Comentários</th>
                                <th class="text-center">Ações</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="gerenciarSelect text-center">
									<span class="custom-checkbox">
										<input type="checkbox" id="checkbox1" name="options[]" value="1">
										<label for="checkbox1"></label>
									</span>
								</td>
                                <td class="text-center"><img class="imagemConteudoTabela" src="../assets/images/c1.jpg" alt=""></td>
                                <td class="text-center titulo">Lorem ipsum</td>
                                <td class="text-center">(autor)</td>
                                <td class="text-center">
                                    <h6 class="aEsquerda">
										<a href="resultadoPesquisa.php?"><span class="badge badge-secondary aEsquerda espacoDireita disciplina">Disciplina</span></a>
                                    </h6>
                                    <h6 class="aEsquerda">
                                        <a href="resultadoPesquisa.php?"><span class="badge badge-secondary aEsquerda espacoDireita disciplina">Disciplina</span></a>
									</h6>
                                </td>
                                <td class="text-center">
                                    <i class="far fa-chart-bar iconsGerenciarConteudo"></i>112
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-comments iconsGerenciarConteudo"></i>3
                                </td>
                                <td class="text-center">
                                    <a class="verPost" href="">
										<i class="fa fa-eye iconPesquisa"></i>
									</a>
									<a href="#deletarConteudoModal" class="delete" data-toggle="modal">
										<i class="fas fa-trash iconPesquisa"></i>
									</a>
                                </td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="clearfix paginacaoGerenciar">
					<div class="hint-text">Mostrando <b>5</b> de <b>30</b> conteúdos</div>
						<!-- BEGIN PAGINATION -->
						<nav>
							<ul class="pagination ">
								<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Anterior</a>
								</li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
								<a class="page-link" href="#">Próximo</a>
								</li>
							</ul>
						</nav>
						<!-- END PAGINATION -->
					</div>
				</div>
			<div class="col-2"></div>
		</div>
	</div>
	
	<!-- Delete Modal HTML -->
	<div id="deletarConteudoModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Deletar Conteúdo(s)</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Você tem certeza que deseja deletar o(s) conteúdo(s) selecionados?</p>
						<p class="text-warning"><small>Essa ação não pode ser desfeita.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" value="Deletar">
					</div>
				</form>
			</div>
		</div>
	</div>
    
<?php
	require_once 'footer.php';
?>