<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>NB Mailer</title>
    <link rel="stylesheet" href="../res/css/global.css">
    <link rel="stylesheet" href="../res/css/login.css">
</head>
<body>
    <div class="loginPageContent">
        <img src="../res/assets/img/logo.png" alt="logo" id="loginLogo">
        <div class="loginBox">
            <h2 id="loginBlueTitle">Faça login</h2>
            
            <form action="" method="post" id="loginForm">
                <div class="loginField">
                    <label for="email"><h6 class="loginLabel">Email:</h6></label>
                    <input type="text" name="email" class="loginInput" required>
                </div>

                <div class="loginField">
                    <label for="password"><h6 class="loginLabel">Senha:</h6></label>
                    <input type="password" name="password" class="loginInput" required>
                </div>
                
                <button class="submitButtonLogin">Entrar</button>

                <a href="#"><h6 id="forgotPassword" >Esqueci minha senha</h6></a>
            </form>
        </div>
    </div>
</body>
</html>