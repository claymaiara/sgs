
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Novo</h3>
	</div>
	<div class="panel-body">
	<?php 
	use system\core\Error;
	$erros = new Error();
	$erros->validadeForm('sistema')
	      ->showErrors();
	
	?>
		<form class="form-horizontal" name="sistema" method="post" action="action/Controller.php" role="form">
			
			<div class="form-group">
				<label for="inputSistema" class="col-sm-1 control-label">Sistema:</label>
				<div class="col-sm-4">
					<input type="text" name="sistema" value="" class="form-control" id="inputSistema"
						placeholder="Descricao">
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-1">
					<button type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-floppy-saved"></span> Salvar
					</button>
				</div>
			</div>
			
		</form>
	</div>
</div>