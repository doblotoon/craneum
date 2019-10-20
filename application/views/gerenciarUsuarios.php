<?php
    require_once('header.php');
?>

<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
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
    });
});
</script>

    <body> 
    <h4 class="tittle-w3layouts two text-center tituloPagUser espacoCadConteudo">Gerenciar Usuarios</h4> 
    <div class="container">
        <div class="table-wrapperUser">
            <div class="table-title">
                <div class="row">
					<div class="col-sm-12">
						<a href="#deletarUsuarioModal" class="btn btn-danger" data-toggle="modal"><i class="fas fa-trash-alt"></i> <span>Excluir</span></a>						
					</div>
                </div>
            </div>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th class="gerenciarSelect text-center">
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th>
							<th class="text-center">Siape/Matrícula</th>
							<th class="text-center">Tipo</th>
							<th class="text-center">Nome</th>
							<th class="text-center">Email</th>
							<th class="text-center">Foto</th>
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
							<td class="text-center" id="codigoUser">2017312160</td>
							<td class="text-center" id="tipoUsuario">Aluno</td>
							<td class="text-center" id="nomeUser">Pedro</td>
							<td class="text-center" id="emailUser">pedro.canteli2001@gmail.com</td>
							<td id="fotoPerfilUser"><div class="text-center"><img src="../assets/images/usuarios/Emil_Lenz23092019205811.jpg" class="iconGerenciarUsers"></div></td>
							<td class="text-center"> 
								<a href="#deletarUsuarioModal" class="delete" data-toggle="modal"><i class="fas fa-trash iconGerenciarUsuarios"></i> </a>
								<a href="#elevarUsuarioModal" class="elevar" data-toggle="modal"><i class="fas fa-arrow-up iconGerenciarUsuarios"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="clearfix paginacaoGerenciar">
                <div class="hint-text">Mostrando <b>5</b> de <b>30</b> usuários</div>
                <!-- BEGIN PAGINATION -->
						<nav>
						<ul class="pagination">
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
    </div>

	<!-- Edit Modal HTML -->
	<div id="elevarUsuarioModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Elevar usuário a administrador</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Digite a sua senha para efetivar essa ação</label>
							<input type="password" class="form-control" required>
						</div>					
					</div>
					<div class="modal-body">					
						<p>Você tem certeza que deseja elevar a administrador(es) o(s) usuário(s) selecionados?</p>
						<p class="text-warning"><small>Essa ação não pode ser desfeita.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-warning" value="Elevar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deletarUsuarioModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Deletar Usuário(s)</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Você tem certeza que deseja deletar o(s) usuário(s) selecionados?</p>
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