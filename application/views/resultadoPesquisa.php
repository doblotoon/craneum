<?php
	require_once "header.php";
	
	$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
	$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
	$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
	$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
	$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
	$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
	$symbian = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
	$windowsphone = strpos($_SERVER['HTTP_USER_AGENT'],"Windows Phone");

	if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian || $windowsphone == true) {
	$dispositivo = "mobile";
	}

	else { $dispositivo = "computador";} 
?>
</head>
<body>

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
				
<?php
	if($dispositivo=="computador"){
?>
							<table class="table">
								<tbody>
									<tr class="tabelaPesquisar">
										<td class="image"><img src="https://lorempixel.com/400/300/nature/1" alt=""></td>
										<td class="tituloPesquisa text-center">(TITULO)</td>
										<td class="disciplinaResultadoPesquisa">
											<h6 class="aEsquerda">
												<span class="badge badge-secondary aEsquerda espacoDireita disciplina">Disciplina</span>
											</h6>
										</td>
										<td class="text-center autorPesquisa">(AUTOR)</td>
										<td class="price text-center acoesPesquisa"><i class="fa fa-eye iconPesquisa"></i><i class="far fa-edit iconPesquisa"></i><i class="fas fa-trash iconPesquisa"></i> </td>
									</tr>
								</tbody>
							</table>

							<!-- BEGIN PAGINATION -->
						<nav>
						<ul class="pagination paginacaoPesquisa">
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
<?php
	} else {
?>


		<div class="container py-md-4">
            <div id="products" class="row view-group my-lg-5 my-4">
                <div class="item col-lg-4 mt-3">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="<?=$caminho?>assets/images/g1.jpg" alt="">
                        </div>
                        <div class="caption card-body">
                            <a class="linkItemRecemPostado" href=""><h5 class="group card-title inner list-group-item-heading">
                                (TITULO)</h5>
							</a>
							<a class="autorMobilePesquisa" href=""><h6 class="group card-title inner list-group-item-heading">
                                (NOME USER)</h6>
                            </a>
                            <p class="group inner list-group-item-text">
								Lorem ipsum dolor sit amet consectetuer, consectetuer adipiscing elit sit
							</p>
							<h6 class="aEsquerda disciplinaMobilePesquisa">
								<span class="badge badge-secondary aEsquerda espacoDireita disciplina">Disciplina</span>
							</h6>
                        </div>
                    </div>
				</div>
			</div>

			<!-- BEGIN PAGINATION -->
			<ul class="pagination espacoPaginacaoMobile">
				<li class="disabled"><a href="#">«</a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">»</a></li>
			</ul>
			<!-- END PAGINATION -->



<?php 
	}
?>
						
						<!-- END TABLE RESULT -->
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
</body>

<?php
    require_once "footer.php";
?>