<html>
<head>

</head>
<body>
<form action="/test" method="post">
    {{csrf_field()}}
    <Label> entrer des nombre a calculer a la polonaise</Label>
    <input name="nombre">
    <button name="send" href = 'recup'>Envoyer</button>
    <button name="calculer">Calculer </button>

</form>

</body>

</html>
