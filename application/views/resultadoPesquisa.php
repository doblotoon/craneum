<?php
	require_once "../models/Conexao.php";
	require_once "../models/Pesquisa.php";
	$conexao_objeto = new Conexao();
	$pesquisa = new Pesquisa;

	require_once "header.php";
?>

<?php //pesquisaaa
                       if (isset($_GET['termo'])) {
						   $resultadosTema = $pesquisa->pesquisarTema();
						   $resultadosDisciplina = $pesquisa->pesquisarDisciplina();
						   $resultadosTag = $pesquisa->pesquisarTag();

						   //print_r($resultadosTag); 
					   } else {
						   header("location: erro.php?erro=naoEncontrado");
					   }
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
										<form action="" method="get">
											<input type="text" class="form-control" name="termo" value="<?=$_GET['termo']?>">
											<span class="input-group-btn">
												<button class="btn btn-primary botaoResultadoPesquisa" type="submit"><i class="fa fa-search"></i></button>
											</span>
										</form>
									</div>
					   			



									
									<!-- END SEARCH INPUT -->
									
									
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

						<?php

							foreach ($resultadosDisciplina as $a => $b) {
								//print $b['titulo'];
								//echo "<br>";
							
							
								echo"
								<a class='cursorPointer' href='conteudo.php?idConteudo={$b['idConteudo']}'>
									<div class='table-responsive'>
										<table class='table'>
											<tbody>
												<tr class='tabelaPesquisar'>
													
													<td class='text-center'><img class='imagemConteudoTabela' src='../assets/images/{$b['fotoCapa']}' alt=''></td>
													<td class='text-center titulo'>{$b['titulo']}</td>
													<td class=''>
														<h6 class='aEsquerda>
															<!-- CASO A PESQUISA SEJA DE UMA DISCIPLINA, NÃO DEVE SER LINKADO POIS NÃO FAZ SENTIDO... -->
															<a href='resultadoPesquisa.php?'><span class='badge badge-secondary aEsquerda espacoDireita disciplina'>{$b['disciplina']}</span></a>
														</h6>
													</td>
													<td class='text-center'>{$b['nome']}</td>
												</tr>
											</tbody>
										</table>
									</div>
								</a>";
							}

							foreach ($resultadosTag as $a => $b) {
								//print_r($resultadosTag);
								print $b['tag'];
								//echo "<br>";
							
							
								echo"
								<a class='cursorPointer' href='conteudo.php?idConteudo={$b['idConteudo']}'>
									<div class='table-responsive'>
										<table class='table'>
											<tbody>
												<tr class='tabelaPesquisar'>
													
													<td class='text-center'><img class='imagemConteudoTabela' src='../assets/images/{$b['fotoCapa']}' alt=''></td>
													<td class='text-center titulo'>{$b['titulo']}</td>
													<td class=''>
														<h6 class='aEsquerda>
															<!-- CASO A PESQUISA SEJA DE UMA DISCIPLINA, NÃO DEVE SER LINKADO POIS NÃO FAZ SENTIDO... -->
															<a href='resultadoPesquisa.php?'><span class='badge badge-secondary aEsquerda espacoDireita disciplina'>{$b['disciplina']}</span></a>
														</h6>
													</td>
													<td class='text-center'>{$b['nome']}</td>
												</tr>
											</tbody>
										</table>
									</div>
								</a>";
							}

							//print_r ($resultadosTema);
							foreach ($resultadosTema as $a => $b) {
											   //print $b['titulo'];
											   //echo "<br>";
											   
										   
					   					
									
								echo"
									<a class='cursorPointer' href='conteudo.php?idConteudo={$b['idConteudo']}'>
										<div class='table-responsive'>
											<table class='table'>
												<tbody>
													<tr class='tabelaPesquisar'>
														
														<td class='text-center'><img class='imagemConteudoTabela' src='../assets/images/{$b['fotoCapa']}' alt=''></td>
														<td class='text-center titulo'>{$b['titulo']}</td>
														<td class=''>
															<h6 class='aEsquerda>
																<!-- CASO A PESQUISA SEJA DE UMA DISCIPLINA, NÃO DEVE SER LINKADO POIS NÃO FAZ SENTIDO... -->
																<a href='resultadoPesquisa.php?'><span class='badge badge-secondary aEsquerda espacoDireita disciplina'>{$b['disciplina']}</span></a>
															</h6>
														</td>
														<td class='text-center'>{$b['nome']}</td>
													</tr>
												</tbody>
											</table>
										</div>
									</a>";
							}
						?>
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