<?php
	require_once "../models/Conexao.php";
	require_once "../models/Pesquisa.php";
	$conexao_objeto = new Conexao();
	$pesquisa = new Pesquisa;

	require_once "header.php";
	
?>

<?php //pesquisaaa
                       if (isset($_GET['termo'])) {
							if (!isset($_GET['ft'])) {
								$_GET['ft'] = 0;
							}
							if($_GET['ft']>=0 and $_GET['ft']<5) {
								
								switch ($_GET['ft']) {

									//caso sem filtro
									case '0':
										$resultado = $pesquisa->pesquisaGeral($_GET['termo']);
										
										break;
									
									// caso titulo do conteudo	
									case '1':

										$resultado = $pesquisa->pesquisaTitulo($_GET['termo']);
									
										break;

									// caso disciplina	
									case '2':

										$resultado = $pesquisa->pesquisaDisciplina($_GET['termo']);
								
										break;
								
									// caso tag
									case '3':
										
										$resultado = $pesquisa->pesquisaTag($_GET['termo']);
									
										break;
									
									// caso professor
									case '4':

										$resultado = $pesquisa->pesquisaProfessor($_GET['termo']);
										
										break;
								}

							} else {
								header("location: erro.php?erro=naoEncontrado");
							}
						   //print_r($resultadosTag); 
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
										<h5>
											<div type="checkbox" class="icheck <?=($_GET['ft'] == 2 ? 'filtroAtivo' : '')?>"> 
												Disciplina
											</div>
										</h5>
										<br>
									</a>

									<a href="?termo=<?=$_GET['termo']?>&ft=3">
										<h5>
											<div type="checkbox" class="icheck <?=($_GET['ft'] == 3 ? 'filtroAtivo' : '')?>"> 
												Tag
											</div>
										</h5>
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
											<?php
												if (isset($_GET['termo'])) {
													$termo = $_GET['termo'];
												}else{
													$termo = null;
												}
										   ?>
											<input type="text" class="form-control" name="termo" value="<?=$termo?>">
											<span class="input-group-btn">
												<button class="btn btn-primary botaoResultadoPesquisa" type="submit"><i class="fa fa-search"></i></button>
											</span>
										</div>
									</form>


									<!-- END SEARCH INPUT -->
									
									
								
									<!-- BEGIN TABLE RESULT -->
					   	
						<?php

						if (isset($resultado) and !empty($resultado)) {
						
							foreach ($resultado as $chave => $conteudo) {
							
							?>
							
								
									<div class='table-responsive'>
										<table class='table'>
											<tbody>
												<tr class='tabelaPesquisar'>
													
													<td>
														<img class='imagemConteudoTabela' src="<?=$conteudo['fotoCapa']?>" alt=''>
													</td>
													
														
													<td class='text-center titulo'>
														<a class='cursorPointer' href="conteudo.php?idConteudo=<?=$conteudo['idConteudo']?>">
															<?=mb_strimwidth($conteudo['titulo'],0,80,"...")?>
														</a>
													</td>
													


													<td class=''>
															
														<?php
															$disciplinasPes = $pesquisa->disciplinaConteudoPesquisa($conteudo['idConteudo']);

															foreach ($disciplinasPes as $key => $disciplina) {
																
															
														?>
															<h6 class='aEsquerda'>
																<a href='resultadoPesquisa.php?'>
																	<span class='badge badge-secondary aEsquerda espacoDireita disciplina'>
																		<?=$disciplina['disciplina']?>
																	</span>
																</a>
															</h6>

															
														<?php
															}
														?>
													</td>


													<td class='text-center'>
														<?=$conteudo['nome']?>
													</td>

												</tr>
											</tbody>
										</table>
									</div>

						<?php
							}
						}else {
							if (!isset($_GET['termo'])) {
								$texto = 'Pesquisa Vazia!';
								$classe = "danger";
							}else {
								$texto = "Nada Encontrado!";
								$classe = "warning";
							}
							echo "<br><div class='alert alert-{$classe}'>{$texto}</div>";
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