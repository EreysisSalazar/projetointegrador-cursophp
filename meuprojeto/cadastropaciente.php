<?php

include "conexao.php";
$nomepaciente =$_post['nomepaciente'];
$cpfpaciente = $_post['cpfpaciente'];
$enderecopaciente = $_post['enderecopaciente'];
$rgpaciente= $_post['rgpaciente'];
$datanascimento = $_post['datanascimento'];
$telefone = $_post['telefone'];
$email= $_post['email'];
$equipe = $_post['equipe'];
$nomemae = $_post['nomemae'];
$nomepae = $_post['nomepae'];
$raca = $_post['raca'];
$sexo = $_post['sexo'];
$tiposanguineo = $_post['tiposanguineo'];
$nacionalidade = $_post['nacionalidade'];
$statuspac = $_post['statuspac'];
$doencapreexis = $_post['doencapreexist'];

$sql = "insert into consulta (nome, cpfpaciente, endereço, rg, dataconsulta, telefone, email, numcartaosus, equipe, nomedamae, nomedopae, raca, sexo, tiposanguineo, nacionalidade, statuspac, doencapreexistente)
values ('$cpfdepaciente', '$dataconsulta', '$horaconsulta', '$motivoconsulta', '$nomepaciente', '$numcartaosus, '$equipe', '$nomedamae', '$nomedopae', '$raca', '$sexo', '$tiposanguineo', '$nacionalidade', '$statuspac', '$doencapreexistente')";


$qry = mysqli_query($con,$sql);

if ($qry) {
    header ('location: listarpaciente.php');
} else {
    echo "<h1>Registro não cadastrado</h1>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de pacientes</title>
</head>
<body>
    <form method = "post"name="Paciente"action="">
        <label>Nomeesobrenome</label>
        <input type="text" name="nome" varchar="100">
        <label>CPF</label>
        <input type="text" name="cpf" varchar="15">
        <label>Endereço</label>
        <input type="text" endereço="endereço" varchar="150">
        <label>RG</label>
        <input type="text" name="rg" varchar="15">
        <label>Data</label>
        <input type="date" name="data" varchar="">
        <label>Telefone</label>
        <input type="text" name="telefone" varchar="12">
        <label>Email</label>
        <input type="text" name="email" varchar="50">
        <label>Numerocartaosus</label>
        <input type="text" numerocartaosus = "numerocartaosus" varchar="30">
        
        <label>Equipe</label>
        <select>
        <option value="asteca">Asteca</option>
        <option value="dumont">Dumont</option>
  <option value="veteranos" selected>Veteranos</option>
  <option value="forças do amanhã">Força do amanhã</option>
</select>

        <label>Nomemae</label>
        <input type="text" name="nomemae" varchar="100">
        <label>Nomepae</label>
        <input type="text" name="nomepae" varchar="100">
        <label>raça</label>
        <input type="text" name="raca" varchar="50">
        <label>Sexo</label>
               <select>
        <option value="feminino">feminino</option>
        <option value="masculino">masculino</option>
  <option value="outro" selected>outro</option>
</select>
        
        <label>Tiposanguineo</label>
        <input type="text" name="tiposanguineo" varchar="5">
        <label>Nacionalidade</label>
        <input type="text" name="nacionalidade" varchar="">
        <label>Statuspac</label>
<select>
        <option value="ativo">ativo</option>
        <option value="inativo">inativo</option>
  
</select>        <label>Doencapreexistente</label>
        <input type="radio" name="doencapreexis" value="sim"/> Sim<br />
        <input type="radio" name="doencapreexis" value="nao"/> Não<br />
        <label>Se sim, qual?</label>
        <input type="text" doencapreexis_qual="doencapreexis_qual" varchar="5">
        <br>
        <input type = submit name"salvar" value="Salvar">













    
</body>
</html>

