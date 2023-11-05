<body>
    <h1 align="center">Alunos Cadastrados</h1>
    <?php
    if (file_exists("backend/dados.txt")) {
        $dados = file_get_contents("backend/dados.txt");
        $registros = unserialize($dados);

        if (!empty($registros)) {
    ?>
            <table>
                <tr>
                    <th>Nome</th>
                    <th>RA</th>
                    <th>Sexo</th>
                    <th>Rua</th>
                    <th>Bairro</th>
                    <th>Numero</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Telefone</th>
                    <th>Email</th>
                </tr>
                <?php
                foreach ($registros as $registro) {
                ?>
                    <tr>
                        <td><?= $registro["nome"] ?></td>
                        <td><?= $registro["ra"] ?></td>
                        <td><?= $registro["sexo"] ?></td>
                        <td><?= $registro["rua"] ?></td>
                        <td><?= $registro["bairro"] ?></td>
                        <td><?= $registro["numero"] ?></td>
                        <td><?= $registro["cidade"] ?></td>
                        <td><?= $registro["estado"] ?></td>
                        <td><?= $registro["telefone"] ?></td>
                        <td><?= $registro["email"] ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        <?php
        } else {
        ?>
            <h4>Ainda não há alunos Cadastrados</h4>
        <?php
        }
    } else {
        ?>
        <h1>Não foi possivel se conectar com nossa base de dados</h1>
    <?php
    }
    ?>
</body>