<?php
	include "menu.php";  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho - Gestão de frota</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, blue, lightblue);
        }

        .login{
            background-color: rgba(0,0,0,0.9);
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color:white;
        }
        input{
            padding:15px;
            border: none;
            outline:none;
            font-size:15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <input type="text" placeholder="Nome" class="form-control">
        <br><br>
        <input type="password" placeholder="Senha" class="form-control">
        <br><br>
        <button>Enviar</button>
    </div>
</body>
</html>