
<body>

<div id="container">

	<h1>Perfil de usuario</h1>
	<div id="body">
        <img class="profile-pic" src="/images/<?=$photo;?>" />
        <p><?= $photo ?></p>


        <form method="post" action="">
            <label>
                Seleccione un color:
                <select name="color">
                    <option> Rojo </option>
                    <option> Naranja </option>
                    <option> Azul </option>
                </select>
            </label>
        </form>

    </div>
    <p class="footer">INF 324</p>
</div>
</body>
</html>
