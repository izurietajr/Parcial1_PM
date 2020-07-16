
<body>

<div id="container">

	<h1>Perfil de usuario</h1>
	<div id="body">
        <img class="profile-pic" src="/images/<?=$photo;?>" />
        <p><?= $photo ?></p>


        <label>
            Seleccione un color:
            <select id="color_picker">
                <option>Rojo</option>
                <option>Naranja</option>
                <option>Azul</option>
            </select>
        </label>

    </div>
    <p class="footer">INF 324</p>
</div>

<script>
    const colors = {
        "Rojo" : "#FAA1A4",
        "Naranja" : "#FABEAC",
        "Azul" : "#B0E3F5"
    }

    let color_picker = document.getElementById("color_picker")

    color_picker.addEventListener("change", e => {
        let color_picker = document.getElementById("color_picker");
        let option = color_picker.value;
        let color = colors[option];
        let container = document.getElementById("container");
        container.style.backgroundColor = color;
    });

</script>

</body>
</html>
