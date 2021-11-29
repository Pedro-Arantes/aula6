<?php
$servidor = "localhost"; 
$user = "pedro";
$senha = "9";
$bd = "bdescola";


$con = mysqli_connect($servidor,$user,$senha,$bd);

//var_dump($con);
if($con) {
    echo "<h1>Conectou ao BD! <i>Parabens!!<i> ;)</h1>";

} else {
    echo "<h1>Falha de conexão com o BD!- <i> Contacte o Juan <i></h1>";
}