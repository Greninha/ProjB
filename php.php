<?php
$a=$_POST['n'];
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