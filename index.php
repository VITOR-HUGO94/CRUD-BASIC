<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{background-color: steelblue;}
        div#corpo-form h1{color: snow;font-family: Arial, Helvetica, sans-serif;text-align: center;padding: 20px;}
        /*a{color: snow;text-decoration: none;text-align: center;display: block;font-size: 12pt;}
        a:hover{color: snow;text-decoration: underline;font-size: 12pt;}
        input[type=submit]{background-color: tomato;cursor: pointer;}
        /*input{display: block;height: 55px;width: 400px;margin: 10px;border-radius: 30px;border: 1px solid black;font-size: 16pt;padding: 10px 20px;}
        */div#corpo-form{width: 420px;margin: 130px auto 0px auto;}
    </style>
</head>
<body>
    <div id="corpo-form">
        <h1>Entrar</h1>
        <form action="processa.php" method="POST">
                    <input type="email" placeholder="Usuario">
                    <input type="password" placeholder="Senha">
                    <input type="submit" value="Acessar">
                    <a href="processa.php">Ainda não é inscrito?
                    <strong>Cadastre-se</strong>
                    </a>
        </form>
    </div>
</body>
</html>