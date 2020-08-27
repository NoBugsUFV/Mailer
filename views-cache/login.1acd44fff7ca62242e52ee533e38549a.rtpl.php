<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>NB Mailer - Login</title>
    <link rel="stylesheet" href="../../res/css/global.css">
    <link rel="stylesheet" href="../../res/css/login.css">
</head>
<body>
    <div class="pageContent">
        <img src="../../res/assets/img/logo.png" alt="logo" id="logo">
        <div class="loginBox">
            <h2 class="blueTitle">Faça login</h2>
            
            <form action="" method="post">
                <div class="field">
                    <label for="email"><h6 class="label">Email:</h6></label>
                    <input type="text" name="email" id="email" required>
                </div>

                <div class="field">
                    <label for="password"><h6 class="label">Senha:</h6></label>
                    <input type="password" name="password" id="password" required>
                </div>
                
                <button class="submitButton">Entrar</button>

                <a href="#"><h6 id="forgotPassword" >Esqueci minha senha</h6></a>
            </form>
        </div>
    </div>
</body>
</html>