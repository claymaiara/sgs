
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Novo</h3>
	</div>
	<div class="panel-body">
	<?php 
	use system\core\Error;
	$erros = new Error();
	$erros->validadeForm('solicitacao')
	      ->showErrors();
	
	?>
		<form class="form-horizontal" name="solicitacao" method="post" action="action/Controller.php" role="form">
			
			<div class="form-group">
				<label for="inputSistema" class="col-sm-1 control-label">Sistema:</label>
				<div class="col-sm-4">
					<input type="text" name="sistema" value="" class="form-control" id="inputSistema"
						placeholder="Descricao">
				</div>
			</div>
			<div class="form-group">
				<label for="inputModulo" class="col-sm-1 control-label">Modulo:</label>
				<div class="col-sm-4">
					<input type="text" name="modulo" value="" class="form-control" id="inputModulo"
						placeholder="Descricao">
				</div>
			</div>
			<div class="form-group">
				<label for="inputUsuario" class="col-sm-1 control-label">Usuario:</label>
				<div class="col-sm-4">
					<input type="text" name="usuario" value="" class="form-control" id="inputUsuario"
						placeholder="Descricao">
				</div>
			</div>
			<div class="form-group">
				<label for="inputDataSolicitacao" class="col-sm-1 control-label">Data Solicitação:</label>
				<div class="col-sm-4">
					<input type="text" name="dataSolicitacao" value="" class="form-control" id="inputDataSolicitacao"
						placeholder="Descricao">
				</div>
			</div>
			<div class="form-group">
				<label for="inputAlteracao" class="col-sm-1 control-label">Alteracao:</label>
				<div class="col-sm-4">
					<input type="text" name="alteracao" value="" class="form-control" id="inputAlteracao"
						placeholder="Descricao">
				</div>
			</div>
			<div class="form-group">
				<label for="inputDataPublicacao" class="col-sm-1 control-label">Data Publicação:</label>
				<div class="col-sm-4">
					<input type="text" name="dataPublicacao" value="" class="form-control" id="inputDataPublicacao"
						placeholder="Descricao">
				</div>
			</div>
			<div class="form-group">
				<label for="inputDescricao" class="col-sm-1 control-label">Descrição:</label>
				<div class="col-sm-4">
					<input type="text" name="descricao" value="" class="form-control" id="inputDescricao"
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