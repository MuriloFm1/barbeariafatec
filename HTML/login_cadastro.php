<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../CSS/login_cadastro.css">
    <title>Inclusive Barbershop</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form form action="../PHP/cadastrar.php" method="POST">
                <h1>Crie sua conta</h1>
             <span></span>              
                <input id="Nome" name="Nome"type="text" placeholder="Nome completo">
                <input id="Email" name="Email" type="email" placeholder="Email">
                <input id="Senha" name="Senha" type="password" placeholder="Senha">
                <input id="Telefone" name="Telefone"type="text" placeholder="Telefone">
              <button type="submit">Cadastrar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form form action="../PHP/login2.php" method="POST">
                <h1>Login</h1>
                <span></span>
                <input id="Email" name="Email" type="email" placeholder="Email">
                <input id="Senha" name="Senha" type="password" placeholder="Senha">
                <a href="#">Esqueceu sua senha?</a>
                <button type="submit">Ok</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Inclusive Barbershop</h1>
                    <p>Coloque suas informações pessoais para usar o nosso site !</p>
                    <button class="hidden" id="login">Login</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Inclusive Barbershop</h1>
                    <p>Registre suas informações pessoais para usar o nosso site !</p>
                    <button class="hidden" id="register">Cadastro</button>
                </div>
            </div>
        </div>
    </div>

<script src="../JAVASCRIPT/login_cadastro.js"></script>
</body>

</html>