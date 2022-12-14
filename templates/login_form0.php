
<div class="container" style="width:300px">

	<form class="form-signin" action="login.php" method="post">
		<h2 class="form-signin-heading">Please sign in</h2>
		
		<div class="form-group">
			<label for="inputEmail" class="sr-only">Email address</label>
			<input name="username" type="text" id="inputEmail" class="form-control" placeholder="Username" required="" autofocus=""/>
		</div>
		
		<div class="form-group">
			<label for="inputPassword" class="sr-only">Password</label>
			<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required=""/>
		</div>
		
		<div class="form-group">
			<p><small>* Password = 123 for user 'adeel' (admin account)</small></p>
		</div>
		<div class="form-group">
			<p><small>* To setup db connection, modify includes/constants.php</small></p>
		</div>
		
		<div class="form-group">
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</div>
	</form>
	<button onclick="window.location = '<?php require("../includes/oauth_config.php");  echo $login_url; ?>'" type="button" class="btn btn-danger">Login with Google</button>
	<div>
		or <a href="register.php">register</a>
	</div>
</div>
