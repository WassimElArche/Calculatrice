<html>
<head>

</head>
<body>
<form action="/test" method="post">
    <?php echo e(csrf_field()); ?>

    <Label> entrer des nombre a calculer a la polonaisee</Label>
    <input name="nombre">
    <button name="send">Envoyer</button>
    <button>Calculer</button>

</form>

</body>

</html>
<?php /**PATH /home/wassim/calculette/resources/views//welcome.blade.php ENDPATH**/ ?>