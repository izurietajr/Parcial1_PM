<body>
<div id="container">
	<h1>Notas</h1>


	<div id="body">

        <h3>Cantidad de aprobados</h3>
     <ul>
     <?php foreach($response as $score){ ?>

        <li>
            <?= $score->notas ?>
        </li>

     <?php } ?>
     </ul>

    </div>

  <p class="footer">Inicia sesión con tu usuario y contraseña.</p>
</div>

</body>
</html>
