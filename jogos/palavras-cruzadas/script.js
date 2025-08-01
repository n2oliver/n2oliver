document.addEventListener('DOMContentLoaded', () => {
    const gridElement = document.getElementById('crossword-grid');
    const cluesAcrossElement = document.getElementById('clues-across');
    const cluesDownElement = document.getElementById('clues-down');
    const checkButton = document.getElementById('check-button');
    const restartButton = document.getElementById('restart-button');
    const messageContainer = document.getElementById('message-container');

    // Dados das palavras cruzadas
    // Formato: { word, clue, orientation ('across' ou 'down'), startx, starty }
    const crosswordData = [
        { word: "HTML", clue: "Linguagem de marcação para web.", orientation: "across", startx: 1, starty: 2 },
        { word: "PHP", clue: "Linguagem de script do lado do servidor.", orientation: "across", startx: 6, starty: 4 },
        { word: "CSS", clue: "Usado para estilizar páginas web.", orientation: "down", startx: 3, starty: 1 },
        { word: "JAVA", clue: "Linguagem de programação popular e robusta.", orientation: "down", startx: 6, starty: 2 },
        { word: "WEB", clue: "Rede mundial de computadores.", orientation: "across", startx: 2, starty: 6},
        { word: "JOGO", clue: "Atividade lúdica.", orientation: "down", startx: 8, starty: 5}
    ];

    let grid = [];
    const gridSize = 10;

    function init() {
        gridElement.innerHTML = '';
        cluesAcrossElement.innerHTML = '';
        cluesDownElement.innerHTML = '';

        // 1. Criar uma grade vazia
        grid = Array(gridSize).fill(null).map(() => Array(gridSize).fill({ block: true, char: null, number: null }));
        
        // 2. Colocar as palavras na grade e popular as dicas
        let clueNumber = 1;
        const usedNumbers = {};

        crosswordData.forEach(entry => {
            const { word, clue, orientation, startx, starty } = entry;
            let currentNumber = -1;

            if (!usedNumbers[`${startx},${starty}`]) {
                usedNumbers[`${startx},${starty}`] = clueNumber;
                currentNumber = clueNumber;
                clueNumber++;
            } else {
                currentNumber = usedNumbers[`${startx},${starty}`];
            }

            const clueItem = document.createElement('li');
            clueItem.innerHTML = `<strong>${currentNumber}.</strong> ${clue}`;
            clueItem.dataset.word = word;
            if (orientation === 'across') {
                cluesAcrossElement.appendChild(clueItem);
            } else {
                cluesDownElement.appendChild(clueItem);
            }

            for (let i = 0; i < word.length; i++) {
                let x = startx;
                let y = starty;

                if (orientation === 'across') {
                    x += i;
                } else {
                    y += i;
                }
                
                grid[y][x] = { block: false, char: word[i], number: (i === 0) ? currentNumber : null };
            }
        });

        // 3. Renderizar a grade
        gridElement.style.gridTemplateColumns = `repeat(${gridSize}, 1fr)`;
        for (let y = 0; y < gridSize; y++) {
            for (let x = 0; x < gridSize; x++) {
                const cellData = grid[y][x];
                const cellElement = document.createElement('div');
                cellElement.classList.add('grid-cell');
                cellElement.dataset.x = x;
                cellElement.dataset.y = y;

                if (cellData.block) {
                    cellElement.classList.add('block');
                } else {
                    if (cellData.number) {
                        const numberElement = document.createElement('span');
                        numberElement.classList.add('clue-number');
                        numberElement.textContent = cellData.number;
                        cellElement.appendChild(numberElement);
                    }
                    const inputElement = document.createElement('input');
                    inputElement.setAttribute('type', 'text');
                    inputElement.setAttribute('maxlength', '1');
                    inputElement.dataset.correct = cellData.char;
                    cellElement.appendChild(inputElement);
                }
                gridElement.appendChild(cellElement);
            }
        }
        
        addInputListeners();
    }
    
    function addInputListeners() {
        const inputs = document.querySelectorAll('.grid-cell input');
        inputs.forEach(input => {
            input.addEventListener('input', (e) => {
                // Move para o próximo input na mesma palavra (simplificado)
                const parentCell = e.target.parentElement;
                const nextCell = parentCell.nextElementSibling;
                if (nextCell && nextCell.querySelector('input')) {
                   // A lógica de navegação mais complexa (setas) é melhor
                }
                e.target.value = e.target.value.toUpperCase();
            });

            input.addEventListener('keydown', (e) => {
                const cell = e.target.closest('.grid-cell');
                const x = parseInt(cell.dataset.x);
                const y = parseInt(cell.dataset.y);
                let nextX = x, nextY = y;

                switch(e.key) {
                    case 'ArrowRight': nextX++; break;
                    case 'ArrowLeft':  nextX--; break;
                    case 'ArrowUp':    nextY--; break;
                    case 'ArrowDown':  nextY++; break;
                }

                if (nextX !== x || nextY !== y) {
                    e.preventDefault();
                    const nextCell = gridElement.querySelector(`[data-x='${nextX}'][data-y='${nextY}']`);
                    if (nextCell && nextCell.querySelector('input')) {
                        nextCell.querySelector('input').focus();
                    }
                }
            });
        });
    }

    function checkAnswers() {
        let allCorrect = true;
        crosswordData.forEach(entry => {
            const { word, orientation, startx, starty } = entry;
            let correct = true;
            for (let i = 0; i < word.length; i++) {
                let x = startx, y = starty;
                if (orientation === 'across') x += i; else y += i;

                const cell = gridElement.querySelector(`[data-x='${x}'][data-y='${y}']`);
                const input = cell.querySelector('input');
                
                cell.classList.remove('correct', 'incorrect');
                
                if (input.value.toUpperCase() !== input.dataset.correct.toUpperCase()) {
                    correct = false;
                    allCorrect = false;
                    if(input.value !== '') cell.classList.add('incorrect');
                } else {
                    cell.classList.add('correct');
                }
            }
            const clueLi = document.querySelector(`.clues li[data-word="${word}"]`);
            clueLi.classList.toggle('correct', correct);
        });

        if (allCorrect) {
            showMessage('Parabéns! Você completou as palavras cruzadas!', 5000);
        } else {
            showMessage('Algumas respostas estão incorretas. Continue tentando!', 3000);
        }
    }
    
    function showMessage(msg, duration = 2000) {
        messageContainer.textContent = msg;
        messageContainer.style.opacity = '1';
        setTimeout(() => {
            messageContainer.style.opacity = '0';
        }, duration);
    }
    
    checkButton.addEventListener('click', checkAnswers);
    restartButton.addEventListener('click', init);

    init();
});