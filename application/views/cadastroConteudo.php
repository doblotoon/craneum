<?php
	require_once 'header.php';
?>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
		
			<script src="../assets/ckeditor/ckeditor.js" type="text/javascript" ></script>
			<!-- Editor -->
			<form id='form' action="../controllers/CadastroConteudo.php" method="post" enctype="multipart/form-data">
				<input type="text" name="titulo" id="">
				<textarea name='conteudo' id='editor'></textarea>
				<input type="file" name="fotoCapa" id="">


				<select class="form-control" id='teste' name='tags' multiple="multiple">
					<option selected="selected">orange</option>
					<option>white</option>
					<option selected="selected">purple</option>
				</select>
				

				<button type="submit">vai</button>
			</form>
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