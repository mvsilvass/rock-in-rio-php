<?php
if (isset($_POST['cor_fundo'])) {
    setcookie('cor_fundo', $_POST['cor_fundo'], time() + 120);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$cor_fundo = isset($_COOKIE['cor_fundo']) ? $_COOKIE['cor_fundo'] : '#ffffff';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock In Rio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: <?= $cor_fundo ?>;
            margin: 0;
            padding: 0;
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            width: 50%;
        }
        .content h1{
            font-size: 40px;
        }
        .content p{
            text-align: justify;
            font-size: 25px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label{
            font-size: 40px;
        }
        input[type="color"] {
            width: 30px;
            height: 35px;
            border: none;
            outline: none;
            padding: 0;
            cursor: pointer;
            margin-bottom: 8px;
            margin-left: 20px;
            border-radius: 10px;
        }
        button {
            background-color: #C5D3E8;
            margin-top: 20px;
            padding: 10px 30px;
            font-weight: bold;
            border-radius: 10px;
            border: none;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
    </style>
</head>
<body style="background-color: <?= $cor_fundo ?>;">
    <div class="content">
        <h1>Rock In Rio!</h1>
        <p>O <strong>Rock in Rio</strong> é um dos maiores festivais de música do mundo, criado por <strong>Roberto Medina</strong> e realizado pela primeira vez em <strong>1985</strong> no Rio de Janeiro. O evento uniu grandes nomes da música internacional e atraiu um público imenso. Ao longo dos anos, o festival se expandiu para outros países, como <strong>Portugal</strong>, <strong>Espanha</strong>, e <strong>EUA</strong>, e continuou a acontecer no Brasil. Com edições a cada dois anos, o Rock in Rio se modernizou, abrangendo diversos estilos musicais, e se tornou um ícone cultural global.</p>
    </div>
    <form method="post">
        <div style="display: flex; align-items: center; justify-content: center;">
            <label for="cor_fundo">Escolha sua cor de fundo:</label>
            <input type="color" id="cor_fundo" name="cor_fundo" value="<?= $cor_fundo ?>" style="margin-top: 10px;">
        </div>
        
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
