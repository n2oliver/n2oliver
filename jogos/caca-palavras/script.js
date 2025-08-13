document.addEventListener('DOMContentLoaded', () => {
    const allWords = [
        // Tecnologia
        'html', 'css', 'javascript', 'php', 'desenvolvedor', 'jogo', 'web', 
        'programacao', 'computador', 'tecnologia', 'internet', 'codigo', 'software', 
        'rede', 'algoritmo', 'dados', 'nuvem', 'api', 'framework', 'linguagem',
        
        // Cotidiano
        'casa', 'carro', 'familia', 'amor', 'amigo', 'escola', 'trabalho', 'cidade', 
        'brasil', 'festa', 'musica', 'filme', 'praia', 'sol', 'chuva', 'comida', 'agua', 
        'felicidade', 'viagem', 'natureza', 'animal', 'livro', 'esporte', 'arte',
        'coracao', 'tempo', 'dinheiro', 'saude', 'sonho'
    ];
    let words = [];
    const gridSize = 12;
    const gridElement = document.getElementById('word-search-grid');
    const wordListElement = document.getElementById('word-list');
    const messageContainer = document.getElementById('message-container');
    const restartButton = document.getElementById('restart-button');

    let grid = [];
    let isSelecting = false;
    let selection = [];
    let foundWords = [];

    function init() {
        words = shuffleArray ([...allWords]).slice(0, 8);
        grid = [];
        foundWords = [];
        selection = [];
        isSelecting = false;
        gridElement.innerHTML = '';
        wordListElement.innerHTML = '';
        gridElement.style.gridTemplateColumns = `repeat(${gridSize}, 1fr)`;

        words.forEach(word => {
            const li = document.createElement('li');
            li.textContent = word;
            li.id = `word-${word}`;
            wordListElement.appendChild(li);
        });

        for (let i = 0; i < gridSize; i++) {            
            grid[i] = [];
            for (let j = 0; j < gridSize; j++) {
                grid[i][j] = '';
            }
        }

        words.forEach(word => {
            placeWord(word.toUpperCase());
        });

        fillEmptyCells();
        renderGrid();
    }

    function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }

    // ...existing code...

function placeWord(word) {
    const directions = [
        { x: 1, y: 0 },   // Horizontal (->)
        { x: 0, y: 1 },   // Vertical (v)
        { x: -1, y: 0 },  // Horizontal (<-)
        { x: 0, y: -1 }   // Vertical (^)
    ];

    // Verifica se é a primeira palavra (grade vazia)
    if (grid.flat().every(cell => cell === '')) {
        let placed = false;
        let attempts = 0;
        while (!placed && attempts < 100) {
            attempts++;
            const direction = directions[Math.floor(Math.random() * directions.length)];
            let startX = Math.floor(Math.random() * gridSize);
            let startY = Math.floor(Math.random() * gridSize);

            let endX = startX + (word.length - 1) * direction.x;
            let endY = startY + (word.length - 1) * direction.y;

            if (endX < 0 || endX >= gridSize || endY < 0 || endY >= gridSize) continue;

            let canPlace = true;
            for (let i = 0; i < word.length; i++) {
                let checkX = startX + i * direction.x;
                let checkY = startY + i * direction.y;
                if (grid[checkY][checkX] !== '' && grid[checkY][checkX] !== word[i]) {
                    canPlace = false;
                    break;
                }
            }
            if (canPlace) {
                for (let i = 0; i < word.length; i++) {
                    let placeX = startX + i * direction.x;
                    let placeY = startY + i * direction.y;
                    grid[placeY][placeX] = word[i];
                }
                placed = true;
            }
        }
        return;
    }

    // Para as demais palavras, tenta cruzar com as já existentes
    for (let letterIdx = 0; letterIdx < word.length; letterIdx++) {
        let letter = word[letterIdx];
        for (let y = 0; y < gridSize; y++) {
            for (let x = 0; x < gridSize; x++) {
                if (grid[y][x] === letter) {
                    for (const direction of directions) {
                        let startX = x - letterIdx * direction.x;
                        let startY = y - letterIdx * direction.y;
                        let endX = startX + (word.length - 1) * direction.x;
                        let endY = startY + (word.length - 1) * direction.y;

                        if (
                            startX < 0 || startY < 0 ||
                            endX < 0 || endY < 0 ||
                            startX >= gridSize || startY >= gridSize ||
                            endX >= gridSize || endY >= gridSize
                        ) continue;

                        let canPlace = true;
                        for (let i = 0; i < word.length; i++) {
                            let checkX = startX + i * direction.x;
                            let checkY = startY + i * direction.y;
                            if (
                                grid[checkY][checkX] !== '' &&
                                grid[checkY][checkX] !== word[i]
                            ) {
                                canPlace = false;
                                break;
                            }
                        }
                        if (canPlace) {
                            for (let i = 0; i < word.length; i++) {
                                let placeX = startX + i * direction.x;
                                let placeY = startY + i * direction.y;
                                grid[placeY][placeX] = word[i];
                            }
                            return;
                        }
                    }
                }
            }
        }
    }
}

// ...existing code...

    function fillEmptyCells() {
        const alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        for (let i = 0; i < gridSize; i++) {
            for (let j = 0; j < gridSize; j++) {
                if (grid[i][j] === '') {
                    grid[i][j] = alphabet[Math.floor(Math.random() * alphabet.length)];
                }
            }
        }
    }

    function renderGrid() {
        for (let i = 0; i < gridSize; i++) {
            for (let j = 0; j < gridSize; j++) {
                const cell = document.createElement('div');
                cell.classList.add('grid-cell');
                cell.textContent = grid[i][j];
                cell.dataset.y = i;
                cell.dataset.x = j;
                gridElement.appendChild(cell);
            }
        }
    }

    function handleStartSelection(e) {
        e.preventDefault();
        isSelecting = true;
        selection = [];
        document.querySelectorAll('.grid-cell.selected').forEach(c => c.classList.remove('selected'));
        const cell = getCellFromEvent(e);
        if (cell) selectCell(cell);
    }

    function handleMoveSelection(e) {
        e.preventDefault();
        if (!isSelecting || !selection.length) return;

        const currentCell = getCellFromEvent(e);
        if (!currentCell || !currentCell.classList.contains('grid-cell')) return;

        // Define o ponto inicial da seleção
        const startCell = selection[0];

        // Pega as coordenadas do início e da posição atual do dedo/mouse
        const startX = parseInt(startCell.dataset.x);
        const startY = parseInt(startCell.dataset.y);
        const endX = parseInt(currentCell.dataset.x);
        const endY = parseInt(currentCell.dataset.y);
        
        // Calcula a diferença para saber a direção
        const dx = endX - startX;
        const dy = endY - startY;
        
        // Determina a direção da linha, "travando" no eixo principal (H ou V) ou na diagonal
        let dirX = 0;
        let dirY = 0;
        if (Math.abs(dx) > Math.abs(dy)) {
            dirX = Math.sign(dx); // Trava na horizontal
        } else if (Math.abs(dy) > Math.abs(dx)) {
            dirY = Math.sign(dy); // Trava na vertical
        } else { // Movimento diagonal perfeito
            dirX = Math.sign(dx);
            dirY = Math.sign(dy);
        }
        
        // Recalcula o caminho da seleção como uma linha reta
        const newSelection = [];
        const distance = Math.max(Math.abs(dx), Math.abs(dy));
        for (let i = 0; i <= distance; i++) {
            const cell = gridElement.querySelector(`[data-x='${startX + i * dirX}'][data-y='${startY + i * dirY}']`);
            if (cell) newSelection.push(cell);
        }
        
        // Atualiza a seleção visual de uma vez, evitando piscar
        document.querySelectorAll('.grid-cell.selected').forEach(c => c.classList.remove('selected'));
        newSelection.forEach(c => c.classList.add('selected'));
        selection = newSelection;
    }

    function handleEndSelection(e) {
        e.preventDefault();
        if (!isSelecting) return;
        isSelecting = false;
        checkSelectedWord();
    }

    function getCellFromEvent(e) {
        const target = e.touches ? document.elementFromPoint(e.touches[0].clientX, e.touches[0].clientY) : e.target;
        return target;
    }

    function selectCell(cell) {
        if (cell.classList.contains('grid-cell')) {
            cell.classList.add('selected');
            selection.push(cell);
        }
    }

    function checkSelectedWord() {
        if (selection.length === 0) return;

        let selectedString = selection.map(cell => cell.textContent).join('').toLowerCase();
        let selectedStringReversed = [...selectedString].reverse().join('');

        let wordFound = null;

        if (words.includes(selectedString) && !foundWords.includes(selectedString)) {
            wordFound = selectedString;
        } else if (words.includes(selectedStringReversed) && !foundWords.includes(selectedStringReversed)) {
            wordFound = selectedStringReversed;
        }

        if (wordFound) {
            foundWords.push(wordFound);
            selection.forEach(cell => {
                cell.classList.remove('selected');
                cell.classList.add('found');
            });
            document.getElementById(`word-${wordFound}`).classList.add('found');
            showMessage(`Palavra "${wordFound}" encontrada!`);
            if (foundWords.length === words.length) {
                showMessage('Parabéns! Você encontrou todas as palavras!', 5000);
            }
        } else {
            selection.forEach(cell => cell.classList.remove('selected'));
        }
        selection = [];
    }

    function showMessage(msg, duration = 2000) {
        messageContainer.textContent = msg;
        messageContainer.style.opacity = '1';
        setTimeout(() => {
            messageContainer.style.opacity = '0';
        }, duration);
    }

    gridElement.addEventListener('mousedown', handleStartSelection);
    gridElement.addEventListener('mousemove', handleMoveSelection);
    document.addEventListener('mouseup', handleEndSelection);
    gridElement.addEventListener('touchstart', handleStartSelection, { passive: false });
    gridElement.addEventListener('touchmove', handleMoveSelection, { passive: false });
    gridElement.addEventListener('touchend', handleEndSelection);
    restartButton.addEventListener('click', init);

    init();
});
