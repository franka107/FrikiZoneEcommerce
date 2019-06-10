<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <title>Registro/Logueo</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/stylelogin.css">


</head>
  <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Registrarse</a></li>
        <li class="tab"><a href="#login">Loguearse</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>Registrate gratis</h1>

          <form action="/" method="post">

          <div class="top-row">
            <div class="field-wrap">
              <input type="text" required autocomplete="off" placeholder="Nombres" />
            </div>

            <div class="field-wrap">
              <input type="text"required autocomplete="off" placeholder="Apellidos" />
            </div>
          </div>
          <div class="top-row">
            <div class="field-wrap">
              <input type="email"required autocomplete="off" placeholder="Correo"/>
            </div>

            <div class="field-wrap">
              <input type="password"required autocomplete="off" placeholder="Contraseña" />
            </div>
          </div>
          <div class="top-row">
            <div class="field-wrap">
              <input type="text" maxlength="8" required autocomplete="off" placeholder="DNI" />
            </div>
          </div><br>

          <button type="submit"  class="button button-block"/>Registrarse</button>

          </form>

        </div>

        <div id="login">
          <h1>Welcome Back!</h1>

          <form action="/" method="post">

            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <button class="button button-block"/>Log In</button>

          </form>

        </div>

      </div>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="js/index.js"></script>

</html>
