<?php

if (isset($_GET['font_size'])) {
    
    setcookie('font_size', $_GET['font_size'], time() + 120, '/');
}

$fontSize = isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] : '16px'; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock In Rio - Escolha o Tamanho da Fonte</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: <?php echo $fontSize; ?>;
            transition: font-size 0.3s ease;
        }
        .container {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }
        .title {
            font-size: 36px;
        }
        .font-size-options {
            margin-top: 30px;
        }
        .font-size-options a {
            margin: 10px;
            padding: 10px;
            font-size: 16px;
            text-decoration: none;
            border: 1px solid #333;
            border-radius: 5px;
        }
        .font-size-options a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="title">Bem-vindo ao Rock In Rio!</div>
    <div class="font-size-options">

        <a href="?font_size=12px" style="font-size: 12px;">Pequeno</a>
        <a href="?font_size=16px" style="font-size: 16px;">Médio</a>
        <a href="?font_size=20px" style="font-size: 20px;">Grande</a>
        <a href="?font_size=24px" style="font-size: 24px;">Extra Grande</a>
    </div>
    <div class="rock-in-rio-info">
        <p>Escolha o tamanho de fonte que você prefere para a página!</p>
    </div>
</div>

</body>
</html>
