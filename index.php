<?php 
    include_once("registrar_ponto.php");

    session_start(); // Iniciar a sessão

    // Definir um fusorario padrão
    date_default_timezone_set("America/Sao_Paulo");

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script defer src="script.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Sistema de Ponto em PHP</title>
</head>
<body>
    <h2>Registrar Ponto</h2>

    <?php 
    
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    if (isset($_POST['senha'])){
        if (strlen($_POST['senha']) == 0) {
            echo "<p style='color:#f00;'>Preencha a sua senha!<p>";
        } else {
            $senha = pg_escape_string($_POST['senha']);
            registrar($senha);
        }
    }

    ?>

    <form method="post">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <p id="horario"><?php echo date("d/m/Y H:i:s"); ?></p>
        <button type="submit">Registrar</button>
    </form>

</body>
</html>