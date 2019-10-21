<?php
	require_once "header.php";
?>
		<div class="container espacoPesquisa">
			<div class="row">
				<!-- BEGIN SEARCH RESULT -->
				<div class="col-md-12">
					<div class="gridPesquisa search">
						<div class="grid-body">
							<div class="row">
								<!-- BEGIN FILTERS -->
								<div class="col-md-3">
									<h3 class="grid-title"><i class="fa fa-filter"></i> Filtros</h3>
									<hr>
									
									<!-- BEGIN FILTER BY CATEGORY -->
									<h4 class="opcaoFiltro">Por disciplina:</h4>
									<div class="checkbox">
										<label><input type="checkbox" class="icheck"> Application</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" class="icheck"> Design</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" class="icheck"> Desktop</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" class="icheck"> Management</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" class="icheck"> Mobile</label>
									</div>
									<!-- END FILTER BY CATEGORY -->

									<!-- BEGIN FILTER BY CATEGORY -->
									<h4 class="opcaoFiltro">Por Professor:</h4>
									<div class="checkbox">
										<label><input type="checkbox" class="icheck"> Application</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" class="icheck"> Design</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" class="icheck"> Desktop</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" class="icheck"> Management</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" class="icheck"> Mobile</label>
									</div>
									<!-- END FILTER BY CATEGORY -->
								
									<div class="padding"></div>
								
									<!-- BEGIN FILTER BY DATE -->
									<h4 class="opcaoFiltro">Por data:</h4>
									De
									<div class="input-group date form_date">
										<input type="date" class="form-control">
									</div>
									<input type="hidden" id="dtp_input1" value="">
									
									Até
									<div class="input-group date form_date">
										<input type="date" class="form-control">
									</div>
									<input type="hidden" id="dtp_input2" value="">
									<!-- END FILTER BY DATE -->
								
									<div class="padding"></div>

									<div class="text-center botaoRefinar">
										<button type="button" class="btn btn-primary botaoResultadoPesquisa">Refinar</button>
									</div>

								</div>
								<!-- END FILTERS -->

								<!-- BEGIN RESULT -->
								<div class="col-md-9">
									<h2><i class="fa fa-search"></i> Resultado</h2>
									<hr>
									<!-- BEGIN SEARCH INPUT -->
									<div class="input-group">
										<input type="text" class="form-control" value="web development">
										<span class="input-group-btn">
											<button class="btn btn-primary botaoResultadoPesquisa" type="button"><i class="fa fa-search"></i></button>
										</span>
									</div>
									<!-- END SEARCH INPUT -->
									<p>Mostrando todos os resultados com o termo "(TERMO PESQUISADO)"</p>
									
									<div class="padding"></div>
									
									<div class="row">
										<!-- BEGIN ORDER RESULT -->
										<div class="col-sm-6">
											<div class="btn-group">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													Ordenar por <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#">Name</a></li>
													<li><a href="#">Date</a></li>
													<li><a href="#">View</a></li>
													<li><a href="#">Rating</a></li>
												</ul>
											</div>
										</div>
									</div>
								
									<!-- BEGIN TABLE RESULT -->
						
									<div class="table-responsive">
										<table class="table">
											<tbody>
												<tr class="tabelaPesquisar">
													<td class="text-center"><img class="imagemConteudoTabela" src="../assets/images/c2.jpg" alt=""></td>
													<td class="text-center titulo">(TITULO)</td>
													<td class="">
														<h6 class="aEsquerda">
															<!-- CASO A PESQUISA SEJA DE UMA DISCIPLINA, NÃO DEVE SER LINKADO POIS NÃO FAZ SENTIDO... -->
															<a href="resultadoPesquisa.php?"><span class="badge badge-secondary aEsquerda espacoDireita disciplina">Disciplina</span></a>
														</h6>
													</td>
													<td class="text-center">(AUTOR)</td>
													<td class="price text-center">
														<a class="verPost">
															<i class="fa fa-eye iconPesquisa"></i>
														</a>
														<a class="edit">
															<i class="far fa-edit iconPesquisa"></i>
														</a>
														<a class="delete">
															<i class="fas fa-trash iconPesquisa"></i>
														</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>

									<!-- BEGIN PAGINATION -->

									<nav>
										<ul class="pagination paginacaoResultadoPesquisa">
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
							<!-- END RESULT -->
							</div>
						</div>
					</div>
				</div>
			<!-- END SEARCH RESULT -->
			</div>
		</div>

	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<?php
    require_once "footer.php";
?>