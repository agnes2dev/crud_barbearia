<?php
session_start();




if (isset($_GET['account_deleted'])) {
    echo '<script>alert("Sua conta foi excluída com sucesso.");</script>';
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia</title>
   <base href="/crud_barbearia/">  
    <link rel="stylesheet" href="public/assets/css/index.css">
   
    <style>
        body {
            background-image: url('public/assets/img/fundo.jpg');
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed; 
            min-height: 100vh;
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <header class="navbar">
        <h1 class="logo_barbearia">Barbearia</h1>
        <div class="links">
            <a href="public/index.php">Home</a>
            <a href="src/controllers/auth/login.php">Login</a>
            <a href="public/static/funcionários.html">Funcionários</a>
        </div>
    </header>

    <div class="container">
        <div class="welcome-box">
            <h1>Bem-vindo à Barbearia</h1>
            <img src="public/assets/img/logo.jpg" alt="logotipo" class="logo-image">
            <div class="button-container">
                <a href="src/controllers/auth/login.php" class="btn">Login</a>
                <a href="src/controllers/register.usuario.php" class="btn">Cadastre-se</a>
            </div>
        </div>
    </div>
</body>
</html>