<!DOCTYPE html>
<html>

<body>
    <h1 align="center">Cadastro de Aluno</h1>
    <form action="backend/processar.php" method="post" class="form">
        <div class="row">
            <div class="col">
                <label class="input-label">Nome</label>
                <input type="text" name="nome" class="input-main" required><br>
            </div>
            <div class="col">

                <label class="input-label">RA</label>
                <input type="text" name="ra" class="input-main" required><br>
            </div>
            <div class="col align-center">
                <div class="row">
                    <label class="input-label">Sexo</label>
                    <input type="radio" id="masc" name="sexo" value="M" required>
                    <label for="masc" class="mt-3">M</label><br>
                    <input type="radio" id="fem" name="sexo" value="F">
                    <label for="fem" class="mt-3">F</label><br>
                </div>

            </div>
        </div>



        <div class="row">
            <div class="col">

                <label class="input-label">Rua</label>
                <input type="text" name="rua" class="input-main" required><br>

            </div>
            <div class="col">

                <label class="input-label">Bairro</label>
                <input type="text" name="bairro" class="input-main" required><br>
            </div>
            <div class="col">

                <label class="input-label">Número</label>
                <input type="text" name="numero" class="input-main" required><br>

            </div>
        </div>

        <div class="row">
            <div class="col">
                <label class="input-label">Cidade</label>
                <input type="text" name="cidade" class="input-main" required><br>
            </div>
            <div class="col">

                <label class="input-label">Estado</label>
                <input type="text" name="estado" class="input-main" required><br>

            </div>
        </div>

        <div class="row">
            <div class="col">
                <label class="input-label">Telefone</label>
                <input type="text" name="telefone" class="input-main" required><br>
            </div>
            <div class="col">

                <label class="input-label">Email</label>
                <input type="text" name="email" class="input-main" required><br>
            </div>
        </div>

        <button type="submit" class="standard-button">Cadastrar</button>
    </form>
</body>

</html>