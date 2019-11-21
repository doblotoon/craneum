<?php
	require_once "../models/Conexao.php";
	require_once "../models/Pesquisa.php";
	$conexao_objeto = new Conexao();
	$pesquisa = new Pesquisa;

	require_once "header.php";
	
?>

<?php //pesquisaaa
                       if (isset($_GET['termo']) and isset($_GET['ft'])) {
							if($_GET['ft']>=0 and $_GET['ft']<5) {

							$resultadosTema = $pesquisa->pesquisarTema();
							$resultadosDisciplina = $pesquisa->pesquisarDisciplina();
							$resultadosTag = $pesquisa->pesquisarTag();

							} else {
								header("location: erro.php?erro=naoEncontrado");
							}
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
									<h5 class="grid-title"><i class="fa fa-filter"></i> Filtros</h5>
									<hr>
									
									<!-- BEGIN FILTER BY CATEGORY filtaralhos-->

					   	
									<a href="?termo=<?=$_GET['termo']?>&ft=0">
										<h5><div type="checkbox" class="icheck <?=($_GET['ft'] == 0 ? 'filtroAtivo' : '')?>"> Sem filtro</div></h5>
										<br>
									</a>

									<a href="?termo=<?=$_GET['termo']?>&ft=1">
										<h5><div type="checkbox" class="icheck <?=($_GET['ft'] == 1 ? 'filtroAtivo' : '')?>"> Titulo</div></h5>
										<br>
									</a>

									<a href="?termo=<?=$_GET['termo']?>&ft=2">
										<h5><div type="checkbox" class="icheck <?=($_GET['ft'] == 2 ? 'filtroAtivo' : '')?>"> Disciplina</div></h5>
										<br>
									</a>

									<a href="?termo=<?=$_GET['termo']?>&ft=3">
										<h5><div type="checkbox" class="icheck <?=($_GET['ft'] == 3 ? 'filtroAtivo' : '')?>"> Tag</div></h5>
										<br>
									</a>

									<a href="?termo=<?=$_GET['termo']?>&ft=4">
										<h5><div type="checkbox" class="icheck <?=($_GET['ft'] == 4 ? 'filtroAtivo' : '')?>"> Professor</div></h5>
										<br>
									</a>

									<!-- END FILTER BY CATEGORY -->
								
									<div class="padding"></div>

								</div>
								<!-- END FILTERS -->

								<!-- BEGIN RESULT -->
								<div class="col-md-9">
									<h2><i class="fa fa-search"></i> Resultado</h2>
									<hr>

									<!-- BEGIN SEARCH INPUT -->
									<form action="" method="get">
										<div class="input-group">
											<input type="text" class="form-control" name="termo" value="<?=$_GET['termo']?>">
											<span class="input-group-btn">
												<button class="btn btn-primary botaoResultadoPesquisa" type="submit"><i class="fa fa-search"></i></button>
											</span>
										</div>
									</form>


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

						if (empty($_GET['ft']) OR $_GET['ft'] == 0) {
						
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
								//print $b['tag'];
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
						}

					if(isset($GET['ft'])){
						switch ($_GET['ft']) {
							case 1:
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
							break;
							
							case 2:
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
							break;
							case 3:
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
							break;
						}
					}
						?>
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