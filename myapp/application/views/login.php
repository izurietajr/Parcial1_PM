<body>
<div id="container">
	<h1>Inicio de sesión</h1>


	<div id="body">

      <?php if($error){ ?>
        <p style="color: red;">La contraseña es incorrecta.</p>
      <?php } ?>

    <form method="post" action="/login/validate">
      <label>Nombre de usuario</label><br />
      <input type="text" name="username" value="" /><br />
      <label>Contraseña</label><br />
      <input type="password" name="password" value="" /><br />
      <input type="submit" name="submit" value="Enviar" />
    </form>
	</div>

  <p class="footer">Inicia sesión con tu usuario y contraseña.</p>
</div>

</body>
</html>
