<!DOCTYPE html>
<html>

<head>
    <title>Cadastro e Listagem de Alunos</title>
    <script type="text/javascript" src="js/index.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
</head>

<body>
    <div class="container">
        <div class="menu-lateral">
            <h2>Menu</h2>
            <ul>
                <li><a href="#" onclick="cadastro();">Cadastro</a></li>
                <li><a href="#" onclick="listagem();">Listagem</a></li>
            </ul>
        </div>

        <div class="conteudo">
            <div class="card">
                <div id="cadastro">
                    <?php
                    include('frontend/cadastro.php');
                    ?>
                </div>
                <div id="listagem" class="listagem">
                    <?php
                    include('frontend/listagem.php');
                    ?>
                </div>
            </div>

        </div>
    </div>
</body>

</html>