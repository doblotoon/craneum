<?php
	require_once 'header.php';
	require_once '../models/Tag.php';
	$tagObj = new Tag();
	$tags = $tagObj->getTags();
	setlocale(LC_COLLATE, 'pt_BR.utf-8');
	asort($tags, SORT_LOCALE_STRING);
?>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
		
			<script src="../assets/ckeditor/ckeditor.js" type="text/javascript" ></script>
			<!-- Editor -->

			<div class="container">
				<div class="row">
					<div class="col-2"></div>
					<div class="col-8">
						<h4 class="mb-3">Cadastrar Conteúdo</h4>
						<form id='form' action="../controllers/CadastroConteudo.php" method="post" enctype="multipart/form-data">
							
							<div class="mb-3">
								<label for="titulo">Título</label>
								<div class="input-group">
									<input type="text" name="titulo" id="" placeholder="Título" class="form-control" required>
							</div>

							<div class="mb-9">
								<label for="conteudo" class="espacoLabelsCadastroUsuario">Conteúdo</label>
								<textarea name='conteudo' id='editor'></textarea>
							</div>

							<label for="address" class="espacoLabelsCadastroUsuario">Foto de Capa do Conteúdo</label>
							<div class="input-group mb-3">
								<div class="custom-file">
									<input type="file" name="fotoCapa"  class="custom-file-input" id="" required>
									<label class="custom-file-label" for="inputGroupFile03">Escolha o arquivo</label>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 mb-3">
									<label for="country" class="espacoLabelsCadastroUsuario">Disciplina</label>
									<select class="custom-select d-block w-100" id="country" required>
										<option value="">Escolha...</option>
										<option>Artes</option>
									</select>
								</div>

								<div class="col-md-6 mb-3">
									<label for="tags" class="espacoLabelsCadastroUsuario">Tags</label>
									<select class="form-control" id='teste' name='tags' multiple="multiple">
								<?php
									foreach ($tags as $key => $tag) {
										echo "<option>{$tag}</option>";
									}
								?>
								<!--<option selected="selected">orange</option>
								<option>white</option>
								<option selected="selected">purple</option>
								-->
							</select>
							</div>
						</div>
						
						<hr class="mb-4">

						<label for="termos">Termo</label>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" required>
							<label class="custom-control-label" for="same-address">O conteúdo que estou prestes a publicar não é ofensivo</label>
						</div>

						<hr class="mb-4">
						<button class="btn btn-primary btn-lg" type="submit">Publicar</button>
					</form>
				</div>
			</div>
		</div>
	</div>

			<!-- Script -->
			<script>
				$(document).ready(function() {
					$("#teste").select2({
						tags: true,
    					tokenSeparators: [',', '']
					});
					
					//console.log(tags);

					$("#form").submit(function(){
						var tags = [];
						var tagsSelecionadas = $("#teste").select2("data");
						$.each(tagsSelecionadas,function(index,value){
							tags.push(value['text']);
						});
						console.log(tags);
						$.ajax({
							url: "../controllers/SalvaTags.php",
							method: "post",
							dataType: "json",
							data: {'tags':tags},
							success: function( data, textStatus, jQxhr ){
								console.log(data);
							},
							error: function( jqXhr, textStatus, errorThrown ){
								console.log(errorThrown);
							}
						});
					});
					//alert(tags);
				});
			</script>
			<script type="text/javascript">
				CKEDITOR.replace( 'editor', {
					height: '30%',
					width: '80%',
					filebrowserUploadUrl: "../models/upload.php?type=file",
					filebrowserImageUploadUrl: "../models/upload.php?type=image"
				} );
			</script>
		</body>

</html>