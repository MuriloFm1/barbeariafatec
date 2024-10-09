<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Inclusive Barbershop</title>
        <link rel="stylesheet" href="../CSS/preco.css">
        <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <body>
        <header>
            <a href="#" class="logo">
                <img src="../IMAGENS/logo.png" alt="">
            </a>
            <div class="invert">
            <i class='bx bx-menu' id="menu-icon"></i>
            </div>
            <ul class="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a href="preco.php">Preços</a></li>
                <li><a href="agendamento.php">Agendamento</a></li>
                <li><a href="endereço.php">Endereços</a></li>
            </ul>
            <div class="header-icon">
                <i class='bx bx-search' id="search-icon"></i>
            </div>
            <div class="search-box">
                <input type="search" name="" id="" placeholder="Pesquise aqui...">
            </div>
        </header>
            <script>
                let search = document.querySelector('.search-box');

                document.querySelector('#search-icon').onclick = () => 
                {
                    search.classList.toggle('active');
                }
            </script>

            <div class="flex">
                <div class="preco">
                    <div class="esquerda">
                        <div class="preco-text">
                            <h1>Nossos preços <br> Estão aqui!</h1>
                            <p> Horários disponiveis para o seu atendimento </p>
                            <a href="agendamento.php" class="btn">Horários</a>
                        </div>
                        <div class="preco-img">
                            <img src="../IMAGENS/#.png" alt="">
                        </div>
                    </div>
                    <div class="centro">
                        <div class="products-container">
                            <div class="box">
                                <img src="../IMAGENS/cabelo.png" alt="">
                                <h3>Corte de cabelo</h3>
                                <div class="content">
                                    <span>R$30,00</span>
                                    <a href="#">Pague agora</a>
                                </div>
                            </div>
                        </div>
                    </div>            
                    <div class="products-container">
                        <div class="direita">
                            <div class="box">
                                <img src="../IMAGENS/barba.png" alt="">
                                <h3>Corte de barba</h3>
                                <div class="content">
                                    <span>R$20,00</span>
                                    <a href="#">Pague agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>