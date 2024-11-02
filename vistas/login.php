<div class="main-container">

	<form class="box login" action="" method="POST" autocomplete="off">
		<h5 class="title is-5 has-text-centered is-uppercase">Sistema de inventario</h5>

		<div class="field">
			<label class="label">Usuario</label>
			<div class="control">
			    <input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
			</div>
		</div>

		<div class="field">
		  	<label class="label">Clave</label>
		  	<div class="control">
		    	<input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
		  	</div>
		</div>

		<div class="is-flex is-justify-content-space-around is-align-items-center is-flex-direction-row">
			<p class="has-text-centered mb-4 mt-3 has-background-primary-light">
				<a href="index.php?vista=register" class="is-info is-rounded has-background-inherit	">Registrarse</a>
			</p>
			
			<p class="has-text-centered mb-4 mt-3">
				<button type="submit" class="button is-info is-rounded">Iniciar sesion</button>
			</p>
		</div>

		<?php
			if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
				require_once "./php/main.php";
				require_once "./php/iniciar_sesion.php";
			}
		?>
	</form>


</div>