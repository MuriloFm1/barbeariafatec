<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Agendamento</title>
    <link rel="stylesheet" href="../CSS/agendamento.css">
    <!-- Adicionando o flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>
    <div class="circulo"></div>
    <header>
        <a href="#"></a><img src="" class="logo"></a>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="preco.php">Preços</a></li>
            <li><a href="endereço.php">Endereço</a></li>
            <li><a href="#">Sobre nós</a></li>
        </ul>
    </header>
    <div class="container">
        <h1>Agendar Horário</h1>
        <form id="agendamentoForm">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="data">Data:</label>
            <input type="text" id="data" name="data" required>

            <label for="hora">Hora:</label>
            <input type="text" id="hora" name="hora" required readonly>

            <div id="tabelaHorarios" style="display: none;">
                <table>
                    <thead>
                        <tr>
                            <th>Horários Disponíveis</th>
                        </tr>
                    </thead>
                    <tbody id="horariosBody">
                        <!-- Os horários serão preenchidos via JavaScript -->
                    </tbody>
                </table>
            </div>

            <button type="submit">Agendar</button>
        </form>
        <div id="mensagem"></div>
    </div>

    <!-- Adicionando o flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="../JAVASCRIPT/agendamento.js"></script>
</body>
</html>