// Inicializa o flatpickr para o campo de data
flatpickr("#data", {
  dateFormat: "d/m/Y",  // Formato de exibição de data (DD/MM/AAAA)
  defaultDate: "today", // Mostra o mês atual
  minDate: "today",     // Impede que o usuário selecione datas passadas
  locale: {
      firstDayOfWeek: 1, // Define segunda-feira como o primeiro dia da semana
      weekdays: {
          shorthand: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
          longhand: ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'],
      },
      months: {
          shorthand: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
          longhand: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
      },
  }
});

// Função para gerar a tabela de horários
function gerarTabelaHorarios() {
  const horariosBody = document.getElementById('horariosBody');
  horariosBody.innerHTML = ''; // Limpa a tabela antes de gerar

  for (let hora = 7; hora <= 20; hora++) {
      if (hora === 12) continue; // Pula o horário das 12:00

      const linha = document.createElement('tr');
      const celula = document.createElement('td');
      celula.textContent = hora.toString().padStart(2, '0') + ":00";

      // Adiciona um evento para preencher o campo de hora ao clicar
      celula.addEventListener('click', function() {
          document.getElementById('hora').value = hora.toString().padStart(2, '0') + ":00";
          document.getElementById('tabelaHorarios').style.display = 'none'; // Esconde a tabela após selecionar
      });

      linha.appendChild(celula);
      horariosBody.appendChild(linha);
  }
}

// Mostra a tabela de horários quando o campo de hora é clicado
document.getElementById('hora').addEventListener('focus', function() {
  gerarTabelaHorarios();
  document.getElementById('tabelaHorarios').style.display = 'block'; // Exibe a tabela
});

document.getElementById('agendamentoForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Evita o envio padrão do formulário

  // Obtendo valores do formulário
  const nome = document.getElementById('nome').value;
  const email = document.getElementById('email').value;
  const data = document.getElementById('data').value;
  const hora = document.getElementById('hora').value;

  // Exibindo mensagem de sucesso
  const mensagem = document.getElementById('mensagem');
  mensagem.textContent = `Agendamento confirmado para ${nome} no dia ${data} às ${hora}.`;

  // Limpar o formulário
  document.getElementById('agendamentoForm').reset();
  document.getElementById('tabelaHorarios').style.display = 'none'; // Esconde a tabela após enviar
});
