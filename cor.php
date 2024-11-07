<?php
                  
if (isset($_GET['color'])) {

    setcookie('background_color', $_GET['color'], time() + 120, '/');
}

$backgroundColor = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : '#FFFFFF'; // Cor padrão
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock In Rio - Escolha sua Cor de Fundo</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            font-family: Arial, sans-serif;
            transition: background-color 0.3s ease;
        }
        .container {
            text-align: center;
            margin-top: 50px;
            color: #fff;
        }
        .title {
            font-size: 36px;
        }
        .color-options {
            margin-top: 30px;
        }
        .color-options button {
            margin: 10px;
            padding: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .color-options button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="title">Bem-vindo ao Rock In Rio!</div>
    <div class="color-options">
       
        <a href="?color=red" style="background-color: red; color: white; padding: 10px; text-decoration: none;">Vermelho</a>
        <a href="?color=green" style="background-color: green; color: white; padding: 10px; text-decoration: none;">Verde</a>
        <a href="?color=blue" style="background-color: blue; color: white; padding: 10px; text-decoration: none;">Azul</a>
        <a href="?color=yellow" style="background-color: yellow; color: black; padding: 10px; text-decoration: none;">Amarelo</a>
    </div>
    <div class="rock-in-rio-info">
        <p>Escolha sua cor de fundo para a página!</p>
    </div>
</div>

</body>
</html>
