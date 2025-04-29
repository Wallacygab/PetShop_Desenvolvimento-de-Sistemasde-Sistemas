<?php include('includes/header.php'); ?>
<?php include('includes/menu.php'); ?>

<main class="main animate-fadeIn">
    <h2>Fale Conosco</h2>
    <form action="contato.php" method="post" class="contact-form">
        <div class="form-group">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <div class="form-group">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" oninput="mascaraTelefone(this)">
        </div>

        <div class="form-group">
            <label for="data" class="form-label">Data</label>
            <input type="text" name="data" id="data" class="form-control" oninput="mascaraData(this)">
        </div>

        <div class="form-group">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea name="mensagem" id="mensagem" class="form-control" rows="4"></textarea>
        </div>

        <input type="submit" value="Enviar" class="btn btn-block">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = trim($_POST["nome"]);
        $telefone = trim($_POST["telefone"]);
        $data = trim($_POST["data"]);
        $mensagem = trim($_POST["mensagem"]);

        if ($nome == "" || $telefone == "" || $data == "" || $mensagem == "") {
            echo "<p style='color:red; margin-top:20px;'>Por favor, preencha todos os campos.</p>";
        } else {
            echo "<p style='color:green; margin-top:20px;'>Mensagem enviada com sucesso!</p>";
        }
    }
    ?>
</main>

<?php include('includes/footer.php'); ?>
