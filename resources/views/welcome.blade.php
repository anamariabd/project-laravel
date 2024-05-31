<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form method="POST" action="{{route('login')}}">
			@csrf
		  <div class="mb-3">
		    <label for="emailInput" class="form-label">Username</label>
		    <input type="text" class="form-control" id="emailInput" name="username" required>
		  </div>
          <div class="mb-3">
		    <label for="passwordInput" class="form-label">Password</label>
		    <input type="password" class="form-control" id="passwordInput" name="password" required>
		  </div>
		  <div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
		    <label class="form-check-label" for="rememberCheck">Mantener sesión iniciada</label>
		  </div>
		  <div>
		  	<p>¿No tienes cuenta? <a href="/">Regístrate</a></p>
		  </div>
		  <button type="submit" class="btn btn-primary">Acceder</button>
		</form>
    </div>
</body>
</html>