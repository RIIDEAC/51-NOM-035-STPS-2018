<div class="container">
	<div class="col">
		<div class="row">
			<div class="card bg-light card-login">
				<div class="row no-gutters">
					<div class="col-md-6">
						<img src="app/views/template/img/helloquence-5fNmWej4tAA-unsplash.jpg" class="card-img" alt="...">
					</div>
					<div class="col-md-6">
						<div class="card-body">
							<h5 class="card-title">Ingresa tus datos</h5>
							<form class="login" method="POST"
								action="<?php echo $this->_config->get('app/webbase'); ?>logincheck">
								<div class="form-group">
									<label for="CORREO">Correo electrónico:</label>
									<input type="email" class="form-control" id="CORREO" aria-describedby="emailHelp"
										name="USU_CORREO" required>
									<small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo
										electrónico con nadie más.</small>
								</div>
								<div class="form-group">
									<label for="PASS">Contraseña:</label>
									<input type="password" class="form-control" id="PASS" aria-describedby="emailHelp"
										name="USU_PASS" required>
								</div>
								<hr>
								<input type="hidden" name="token" value="<?php echo $this->_token->generate(); ?>">
								<input type="submit" class="btn btn-primary btn-block">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>