<?php include('includes/header.php'); ?>
<?php include('includes/menu.php'); ?>

<main>
    <h1>Fale Conosco</h1>
    
    <form action="contato.php" method="post">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" id="nome"><br><br>

        <label for="telefone">Telefone</label><br>
        <input type="text" name="telefone" id="telefone"><br><br>

        <label for="data">Data do Atendimento</label><br>
        <input type="text" name="data" id="data"><br><br>

        <label for="mensagem">Mensagem</label><br>
        <textarea name="mensagem" id="mensagem" rows="4" cols="30"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = trim($_POST["nome"]);
        $telefone = trim($_POST["telefone"]);
        $data = trim($_POST["data"]);
        $mensagem = trim($_POST["mensagem"]);

        if ($nome == "" || $telefone == "" || $data == "" || $mensagem == "") {
            echo "<p style='color:red;'>Por favor, preencha todos os campos.</p>";
        } else {
            echo "<p style='color:green;'>Mensagem enviada com sucesso!</p>";
        }
    }
    ?>
</main>

<?php include('includes/footer.php'); ?>