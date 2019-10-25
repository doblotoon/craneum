<?php
	require_once 'header.php';
	require_once '../models/Tag.php';
    require_once '../models/Disciplina.php';
    require_once '../models/Conteudo.php';
    $conteudo = new Conteudo();
    $idConteudo = (int) $_GET['idConteudo'];
    $conteudoSelecionado = $conteudo->getConteudo($idConteudo);
	$tagObj = new Tag();
    $tags = $tagObj->getTags();
    $tagsSelecionadas = $tagObj->getTagsConteudo($idConteudo);
    $disciObj = new Disciplina();
    $disciplinas = $disciObj->getDisciplinas();
	$disciplinasSelecionadas = $disciObj->getDisciplinasConteudo($idConteudo);
	setlocale(LC_COLLATE, 'pt_BR.utf-8');
	asort($tags, SORT_LOCALE_STRING);
    $tagsCorretas = [];
    foreach ($tagsSelecionadas as $k => $tagSelecionada) {
        $tagsCorretas[] = $tagSelecionada['tag'];
    }
?>

	<body>
        <?php
           /* echo '<pre>';
            print_r($tagsSelecionadas);
            echo '</pre>';

            foreach ($tagsSelecionadas as $k => $tagSelecionada) {
                echo $tagSelecionada['tag']."<br>";
            }*/
        ?>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
		
		<script src="../assets/ckeditor/ckeditor.js" type="text/javascript" ></script>
		<!-- Editor -->

		<div class="container">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<h4 class="tittle-w3layouts two text-center tituloPagUser espacoCadConteudo">Editar Conteúdo</h4> 
					<form id='form' action="../controllers/editarConteudo.php" method="post" enctype="multipart/form-data">
							
						<!-- Título -->
						<div class="mb-3">
							<label for="titulo">Título</label>
							<div class="input-group">
								<input type="text" name="titulo" id="" value="<?=$conteudoSelecionado['titulo']?>" placeholder="Título" class="form-control" required>
							</div>
						</div>

						<!-- Textarea CKEditor -->
						<div class="mb-9">
							<label for="conteudo" class="espacoLabelsCadastroUsuario">Conteúdo</label>
							<textarea name='conteudo' id='editor' required><?= $conteudoSelecionado['conteudo'] ?></textarea>
						</div>

						<!-- Foto Capa -->
						<label for="fotoCapa" class="espacoLabelsCadastroUsuario">Foto de Capa do Conteúdo</label>
						<div class="input-group mb-3">
							<div class="custom-file">
								<input type="file" name="fotoCapa" value="<?= $conteudoSelecionado['fotoCapa']?>" class="custom-file-input" id="" required accept=".jpg, .jpeg, .png" file-maxsize="10240" required>
								<label class="custom-file-label" for="inputGroupFile03">Escolha o arquivo</label>
							</div>
						</div>

						<div class="row">

							<!-- Disciplina -->
							<div class="col-md-6 mb-3">
								<label for="disciplinas" class="espacoLabelsCadastroUsuario">Disciplinas</label>
								<select class="form-control selectCadastroConteudo" id='selectDisciplinas' name='disciplinas' multiple="multiple" required>
									<?php
										foreach ($disciplinas as $key => $disciplina) {
											echo "<option>{$disciplina}</option>";
										}
									?>
								</select>
							</div>

							<!-- Tags -->
							<div class="col-md-6 mb-3">
								<label for="tags" class="espacoLabelsCadastroUsuario">Tags</label>
								<select class="form-control" id='selectTags' name='tags' multiple="multiple" required>
									<?php
                                        //19
										foreach ($tags as $key => $tag) {

                                            //19 vzs roda
                                            //foreach($tagsSelecionadas as $chave => $tagSelecionada){
                                              //  if ($tagSelecionada['tag']==$tag) {
                                                //    echo "<option selected='selected'>{$tagSelecionada['tag']}</option>";
                                                    //break;
                                                    //echo "<script> alert($tagSelecionada)</script>;";
                                                //}else{
                                                   echo "<option>{$tag}</option>";
                                                    //break;
                                                    //echo "<script> alert($tagSelecionada)</script>;";

                                                //}
                                            //}
											//echo "<option>{$tag}</option>";
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

						<!-- Termo -->

						<label>Termo</label>
						<div class="custom-control custom-checkbox">
							<input name="termo" type="checkbox" class="custom-control-input" id="defaultUnchecked">
							<label class="custom-control-label" for="termo">O conteúdo que estou prestes a publicar não é ofensivo.</label>
						</div>

						<hr class="mb-4">

						<!-- Publicar -->

						<div class="row">
							<div class="col-sm-12">
								<div class="text-center">
									<button class="btn btn-primary btn-lg botaoPublicarConteudo" type="submit">Publicar</button>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	
		<!-- Script -->

		<script>
			$(document).ready(function() {
				$("#selectDisciplinas").select2({
					maximumSelectionLength: 3,
					tags: true,
    				tokenSeparators: [',', '']
				});

				$("#selectTags").select2({
					maximumSelectionLength: 5,
					tags: true,
    				tokenSeparators: [',', '']
                });
                var tagsSelecionadas = [];
                <?php
                    foreach ($tagsCorretas as $k => $tag) {
                        echo "tagSelecionadas[] = $tag";
                    }
                ?>
                var options = $('#selectBox option');
                var values = $.map(options ,function(option) {
                    if (option.text == "a") {
                        
                    }
                    return option.value;
                });
				//console.log(tags);

				$("#form").submit(function(){
					var tags = [];
					var tagsSelecionadas = $("#selectTags").select2("data");
					var disciplinas = [];
					var disciplinasSelecionadas = $("#selectDisciplinas").select2("data");

					//foreach para add disciplinas
					$.each(disciplinasSelecionadas,function(index,value){
						disciplinas.push(value['text']);
					});

					//foreach para add tags
					$.each(tagsSelecionadas,function(index,value){
						tags.push(value['text']);
					});

					console.log(tags);
					$.ajax({
						url: "../controllers/SalvaDados.php",
						method: "post",
						dataType: "json",
						data: {'tags':tags, 'disciplinas':disciplinas},
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

			var editor = CKEDITOR.replace( 'editor', {
				height: 440,
				//width: '100%',
				filebrowserUploadUrl: "../models/upload.php?type=file",
				filebrowserImageUploadUrl: "../models/upload.php?type=image",
				extraPlugins: 'notification'
			});

			editor.on('required', function(evt){
				editor.showNotification('Você precisar preencher esse campo!', 'warning');
				evt.cancel();
			})

		</script>
<?php
	require_once 'footer.php';
?>