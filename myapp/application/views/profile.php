
<body>
    <ul>

    <?php foreach($users->result() as $user){?>

     <li>
        <?= $user->dni ?>
     </li>

    <?php } ?>

    </ul>

</body>
</html>
