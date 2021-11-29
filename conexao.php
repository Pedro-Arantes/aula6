<?php
//criar variáveis de conexão
$servidor = "localhost"; //serviço online usa um numero de ip
$user = "root";
$senha = "";
$bd = "bdcurso";

//criar a conexao
// mysqli_connect(HOSTNAME,USER,PASSWORD,DB)
$con = mysqli_connect($servidor,$user,$senha,$bd);

//var_dump($con);
if($con) {
    echo "Conectou ao BD! ;)";

} else {
    echo "Falha de conexão com o BD u.u";
}