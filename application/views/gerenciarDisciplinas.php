<?php
    require_once('header.php');
    require_once "../models/Disciplina.php";
	
    $disciplina = new Disciplina();
	$disciplinas = $disciplina->getAllDisciplinas();
	//echo "<pre>";
	//print_r($disciplinas);
	//exit;
	
?>
	<style>
		.escondido{
			display:none;
		}
	</style>
    <body> 
    	<h4 class="tittle-w3layouts two text-center tituloPagUser espacoGerenciarDisciplinas">Gerenciar Disciplinas</h4> 
    	<div class="container">
			<div class="row">
				<div class="col-2"></div>

				<div class="col-8">
					<div class="table-title">
						<div class="row">
							<div class="col-sm-12">
								<a href="#adicionarDisciplinaModal" class="btn btn-success" data-toggle="modal">
									<i class="fas fa-plus"></i> <span>Adicionar nova disciplina</span>
								</a>
							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="text-center">Disciplina</th>
									<th class="text-center">Ação</th>
								</tr>
							</thead>
							<tbody>
<?php 
		foreach ($disciplinas as $key => $disciplinaArray) {
?>
								<tr  id=<?=$disciplinaArray['idDisciplina']?>>
									<!--<td class="gerenciarSelect text-center">
										<span class="custom-checkbox">
											<input type="checkbox" id="checkbox1" name="options[]" value="1">
											<label for="checkbox1"></label>
										</span>
									</td>-->
									<td><?=$disciplinaArray['disciplina']?></td>
									<td class="text-center">
										<a href="?acao=editar&disciplina=<?=$disciplinaArray['disciplina']?>&idDisciplina=<?=$disciplinaArray['idDisciplina']?>" class="edit"><i class="far fa-edit"></i></a>
									</td>
									<td class="text-center">
										<a href="?acao=excluir&idDisciplina=<?=$disciplinaArray['idDisciplina']?>">X<i class="far fa-remove"></i></a>
									</td>
								</tr>
<?php
    }
?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-2 clear"></div>
			</div>
		</div>

		<!-- Create Modal HTML -->
		<div id="adicionarDisciplinaModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="?acao=criar" method='post'>
						<div class="modal-header">						
							<h4 class="modal-title">Adicionar Disciplina</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">					
							<div class="form-group">
								<label>Disciplina</label>
								<input type="text" name='disciplina' class="form-control" required>
							</div>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-success" value="Add">
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Edit Modal HTML -->
	
<?php
	if (isset($_GET['acao'])) {
		switch ($_GET['acao']) {
			case 'editar':
?>
		<div id="modalEditar" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="../controllers/EditarDisciplina.php" method='post'>
						<div class="modal-header">						
							<h4 class="modal-title">Editar Disciplina</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">					
							<div class="form-group">
								
								<label>Disciplina</label>
								<input type="hidden" name="idDisciplina" value='<?=$_GET['idDisciplina']?>'>
								<input type="text" name='disciplina' value='<?=$_GET['disciplina']?>' class="form-control" required>
								
							</div>					
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-info" value="Save">
						</div>
					</form>
				</div>
			</div>
		</div>
<?php
	echo "<script>
			$(document).ready(function(){
				$('#modalEditar').modal('toggle');
			})
		  </script>";

			break;

		case 'criar':
			$disciplinaCriar = $_POST['disciplina'];
			$disciplina->cadastroDisciplina($disciplinaCriar);
			header("Location: gerenciarDisciplinas.php");
			break;
		
		case 'excluir':
			$disciplinaExcluir = $_GET['idDisciplina'];
			$disciplina->excluirDisciplina($disciplinaExcluir);
			echo "<script>
					$(document).ready(function(){
						$('#{$disciplinaExcluir}').addClass('escondido');
					});
				</script>";
			break;
		
		}
	}

	require_once 'footer.php';
?>