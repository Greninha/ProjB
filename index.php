
<html>
<head>
<title>Praticar</title>
</head>
<body>
<center><h1><strong><a href="index.php">Bora Nois </a></a></strong></h1></center>

<form name="formulario" id="formulario" method="POST" action="index.php">
<label>Digite um Número: </label>
<input name="n" id="n" type="text" place placeholder="Digite um número"><br/>
<input type="submit" value="ok">
</form>

<?php

$a= $_POST['n'];

if ($a>0){
    echo 'O número é Positivo';
}
else if ($a<0){
    echo 'O número é Negativo';
}
else {
    echo 'O número é Nulo';
}
?>
</body>
</html>
