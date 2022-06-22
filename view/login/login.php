<html>

<head>
  <title>LOGIN</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: arial;
    background-image: url('assets/img/bg.png');
  }

  .form-login {
    width: 400px;
    height: 340px;
    background: #4e4d4d;
    margin: auto;
    margin-top: 180px;
    box-shadow: 7px 13px 37px #000;
    padding: 20px 30px;
    border-top: 4px solid #017bab;
    color: white;
  }

  .form-login h5 {
    margin: 0;
    text-align: center;
    height: 40px;
    margin-bottom: 30px;
    border-bottom: 1px solid;
    font-size: 20px;
  }

  .controls {
    width: 100%;
    border: 1px solid #017bab;
    margin-bottom: 15px;
    padding: 11px 10px;
    background: #252323;
    font-size: 14px;
    font-weight: bold;
  }

  .buttons {
    width: 100%;
    height: 40px;
    background: #017bab;
    border: none;
    color: white;
    margin-bottom: 16px;
  }

  .form-login p {
    height: 40px;
    text-align: center;
    border-bottom: 1px solid;
  }

  .form-login a {
    color: white;
    text-decoration: none;
    font-size: 14px;
  }

  .form-login a:hover {
    text-decoration: underline;
  }
  .afcheckbox1
{
	margin-top:5%;
	margin-left:10%;
}
.autor
{
  text-align: center;
	margin-top:5%;
	color:white;
} 
</style>

<body>

  <form method="post" action="?c=Usuario&a=Entrar">
    <section class="form-login">
      <h5>Ingreso</h5>
      <input class="controls" type="text" name="nombre" value="" placeholder="Usuario">
      <input class="controls" type="password" name="contraseña" id="password" value="" placeholder="Contraseña">

      <div class="afcheckbox1" align="left">
        <div style="float:left;">
          <input type="checkbox" onclick="verpassword()">
        </div>
        <div style="float:left;">
          Mostrar contraseña
        </div>
      </div>
      <br><br>
      <input class="buttons" type="submit" name="" value="Iniciar sesión">
    </section>
  </form>

  <div class="autor">
    © 2022 Formulario Login. Todos los derechos reservados | Diseño de Isaac Saado
  </div>
</body>

<script>
  function verpassword() {
    var tipo = document.getElementById("password");
    if (tipo.type == "password") {
      tipo.type = "text";
    } else {
      tipo.type = "password";
    }
  }
</script>

</html>