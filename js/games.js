document.addEventListener('DOMContentLoaded', function() {
      let gameItems = [];
      $.ajax({
        url: '/jogos/obter.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          const container = document.getElementById('jogos');
          let i = 0;

          data.forEach(game => {
            const gameCard = document.createElement('div');
            gameCard.className = 'game-card';

            const gameLink = document.createElement('a');
            gameLink.href = '#';
            gameLink.setAttribute('data-game-url', game.url);
            gameLink.setAttribute('data-game-title', game.titulo);
            gameLink.setAttribute('data-game-desc', game.descricao);
            gameLink.setAttribute('data-game-imagem', game.imagem);

            const gameDiv = document.createElement('div');
            const gameSubDiv = document.createElement('div');

            gameDiv.className = 'row min-vh-50 h-100 align-content-center';
            gameSubDiv.style.height = '150px';
            gameSubDiv.style.width = '100%';
            gameSubDiv.className = 'bg-dark border border-light';
            gameSubDiv.style.background = `url(${game.imagem})`;
            gameDiv.appendChild(gameSubDiv);

            const gameTitle = document.createElement('h2');
            gameTitle.className = 'rounded-left bg-dark my-0 py-1 rounded';
            gameTitle.textContent = game.titulo;

            const gameSpan = document.createElement('span');
            gameSpan.className = 'align-content-center mb-0 rounded w-100 mt-2';
            gameLink.onclick = function() {
              setTimeout(() => {
                window.location.href = game.url;
              }, 200);
            };
            gameItems.push(game);

            const gameDesc = document.createElement('p');
            gameDesc.innerHTML = game.descricao;

            const playButton = document.createElement('div');
            playButton.className = 'link btn my-2';
            playButton.textContent = 'Jogar';

            //gameSpan.appendChild(gameDesc);
            //gameSpan.appendChild(playButton);
            gameDiv.appendChild(gameTitle);
            gameDiv.appendChild(gameSpan);
            gameLink.appendChild(gameDiv);
            gameCard.appendChild(gameLink);
            container.appendChild(gameCard);
            i++;
          });
        },
        error: function(error) {
          console.error('Erro ao obter os jogos:', error);
        }
      })
    });