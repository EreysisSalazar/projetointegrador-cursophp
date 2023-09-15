<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: gerepacientes.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomepaciente = $_POST["nomepaciente"];
    $cpfpaciente = $_POST["cpfpaciente"];
    $rgpaciente = $_POST["rgpaciente"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $enderecopaciente = $_POST["enderecopaciente"];
    $datanascimento = $_POST["datanascimento"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $numcartaosus = $_POST["numcartaosus"];
    $equipe = $_POST["equipe"];
    $nomemae = $_POST["nomemae"];
    $nomepai = $_POST["nomepai"];
    $raca = $_POST["raca"];
    $sexo = $_POST["sexo"];
    $tiposanguineo = $_POST["tiposanguineo"];
    $nacionalidade = $_POST["nacionalidade"];
    $statuspac = $_POST["statuspac"];
    $doencapreexis = $_POST["doencapreexis"];

    if ($doencapreexis == "sim") {
        $detalhesDoenca = $_POST["doencapreexis_qual"];
    } else {
        $detalhesDoenca = "";
    }

    $conn = new mysqli("localhost", "root", "", "sisgeresaude");

    $query = "INSERT INTO pacientes (nomepaciente, cpfpaciente, rgpaciente, usuario, senha, enderecopaciente, datanascimento, telefone, email, numcartaosus, equipe, nomemae, nomepai, raca, sexo, tiposanguineo, nacionalidade, statuspac, doencapreexis, detalhesdoenca) VALUES ('$nomepaciente', '$cpfpaciente', '$rgpaciente', '$usuario', '$senha', '$enderecopaciente', '$datanascimento', '$telefone', '$email', '$numcartaosus', '$equipe', '$nomemae', '$nomepai', '$raca', '$sexo', '$tiposanguineo', '$nacionalidade', '$statuspac', '$doencapreexis', '$detalhesDoenca')";

    if ($conn->query($query) === TRUE) {
        $success_message = "Paciente cadastrado com sucesso!";
    } else {
        $error_message = "Erro ao cadastrar paciente: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Paciente</title>
</head>
<body>
    <h2>Cadastrar Paciente</h2>
    <?php if (isset($success_message)) echo "<p>$success_message</p>"; ?>
    <?php if (isset($error_message)) echo "<p>$error_message</p>"; ?>
    <a href="cadpacientes.php">Voltar</a>
    <br>
    <a href="index.php">Inicio</a>

</body>
</html>
