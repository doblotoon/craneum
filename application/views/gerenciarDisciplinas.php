<?php
    require_once('header.php');
    require_once "../models/Disciplina.php";
	
    $disciplina = new Disciplina();
	$disciplinas = $disciplina->getAllDisciplinas();
	//echo "<pre>";
	//print_r($disciplinas);
	//exit;
	
?>

<script type="text/javascript">
$(document).ready(function(){
	/*$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="name" id="name"></td>' +
            '<td><input type="text" class="form-control" name="department" id="department"></td>' +
            '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });*/
});
</script>

    <body> 
    <h4 class="tittle-w3layouts two text-center tituloPagUser espacoCadConteudo">Gerenciar Disciplinas</h4> 
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
					<div class="col-sm-12">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="fas fa-plus"></i> <span>Adicionar nova disciplina</span></a>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th class="gerenciarSelect text-center">
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th class="text-center">Disciplina</th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
<?php
    //for ($i=0; $i < sizeof($disciplinas); $i++) { 
		foreach ($disciplinas as $key => $disciplina) {
?>
                    <tr>
						<td class="gerenciarSelect text-center">
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><?=$disciplina['disciplina']?></td>
                        <td class="text-center">
                            <a href="?acao=editar&disciplina=<?=$disciplina['disciplina']?>&idDisciplina=<?=$disciplina['idDisciplina']?>" class="edit"><i class="far fa-edit"></i></a>
                        </td>
                    </tr>

<?php
    }

?>
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Mostrando <b>5</b> de <b>30</b> disciplinas</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Anterior</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Próximo</a></li>
                </ul>
            </div>
        </div>
    </div>
	<!-- Create Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
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
								<input type="text" name='idDisciplina' value='<?=$_GET['disciplina']?>' class="form-control" required>
								
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
			//	print_r($_POST);
			$disciplina->cadastroDisciplina($_POST);

			break;
		}
	}
	require_once 'footer.php';
?>