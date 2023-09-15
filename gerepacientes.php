<?php
include "conexao.php";
$sql = "select* from pacientes";
$qry = mysqli_query($conn, $sql);
var_dump($qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>listar consulta</h1>
    <hr>
    <?php
    while ($linha = mysqli_fetch_array($qry)){
        $id= $linha['id'];
        echo $linha['id']."<br>";
        echo "Nome Paciente: ".$linha['nomepaciente']."<br>";
        echo "CPF Paciente: ".$linha['cpfpaciente']."<br>";
        echo "RG Paciente: ".$linha['rgpaciente']."br";
        echo "Endereço Paciente: ".$linha['enderecopaciente']."<br>";
        echo "Data Nascimento: ".$linha['datanascimento']."<br>";
        echo "Data Consulta: ".$linha['enderecopaciente']."<br>";
        echo "Telefone: ".$linha['telefone']."<br>";
        echo "Email: ".$linha['email']."<br>";
        echo "Numcartaosus: ".$linha['numcartaosus']."<br>";
        echo "Equipe: ".$linha['equipe']."<br>";
        echo "Nomemae: ".$linha['nomemae']."<br>";
        echo "Nomepai: ".$linha['nomepai']."<br>";
        echo "Raça: ".$linha['raca']."<br>";
        echo "Sexo: ".$linha['sexo']."<br>";
        echo "Tiposanguineo: ".$linha['tiposanguineo']."<br>";
        echo "Nacionalidade: ".$linha['nacionalidade']."<br>";
        echo "Statuspac: ".$linha['statuspac']."<br>";
        echo "Doencapreexis: ".$linha['doencapreexis']."<br>";
        echo "DetalhesDoenca: ".$linha['detalhesdoenca']."<br>";
        

        echo "<a href='editar.php?id={$id}'>Editar</a>";

        echo "<hr>";
    }
    
    ?>
</body>
</html>