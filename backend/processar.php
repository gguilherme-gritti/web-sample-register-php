<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $ra = $_POST["ra"];
    $rua = $_POST["rua"];
    $bairro = $_POST["bairro"];
    $numero = $_POST["numero"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $telefone = $_POST["telefone"];
    $sexo = $_POST["sexo"];


    $registros = [];
    if (file_exists("dados.txt")) {
        $dados_anteriores = file_get_contents("dados.txt");
        $registros = unserialize($dados_anteriores);
    }

    $novo_registro = [
        "nome" => $nome,
        "ra" => $ra,
        "rua" => $rua,
        "bairro" => $bairro,
        "numero" => $numero,
        "cidade" => $cidade,
        "estado" => $estado,
        "telefone" => $telefone,
        "email" => $email,
        "sexo" => $sexo
    ];

    $registros[] = $novo_registro;

    $dados_serializados = serialize($registros);
    file_put_contents("dados.txt", $dados_serializados);

    header("Location: ../index.php");
}
