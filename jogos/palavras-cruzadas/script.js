document.addEventListener('DOMContentLoaded', () => {
    const gridElement = document.getElementById('crossword-grid');
    const cluesAcrossElement = document.getElementById('clues-across');
    const cluesDownElement = document.getElementById('clues-down');
    const checkButton = document.getElementById('check-button');
    const restartButton = document.getElementById('restart-button');
    const messageContainer = document.getElementById('message-container');

    // Banco de palavras e dicas por idioma
    const wordsByLang = {
        pt: [
            { word: "CASA", clue: "Onde você mora." },
            { word: "SALA", clue: "Cômodo para receber visitas." },
            { word: "AR", clue: "Você respira." },
            { word: "SOL", clue: "Estrela do sistema solar." },
            { word: "LAR", clue: "Sinônimo de casa." },
            { word: "LIVRO", clue: "Objeto usado para leitura." },
            { word: "ESCOLA", clue: "Local de aprendizado." },
            { word: "FESTA", clue: "Evento de comemoração." },
            { word: "AMIGO", clue: "Pessoa próxima e querida." },
            { word: "ARTE", clue: "Expressão criativa." },
            { word: "COMIDA", clue: "Algo que você come." },
            { word: "CARRO", clue: "Meio de transporte." },
            { word: "RIO", clue: "Curso de água." },
            { word: "CÉU", clue: "Onde estão as nuvens." },
            { word: "DADO", clue: "Objeto usado em jogos de sorte." }
        ],
        en: [
            { word: "HOUSE", clue: "Where you live." },
            { word: "ROOM", clue: "A room for guests." },
            { word: "AIR", clue: "You breathe it." },
            { word: "SUN", clue: "Star of the solar system." },
            { word: "HOME", clue: "Synonym of house." },
            { word: "BOOK", clue: "Object used for reading." },
            { word: "SCHOOL", clue: "Place for learning." },
            { word: "PARTY", clue: "A celebration event." },
            { word: "FRIEND", clue: "A close and dear person." },
            { word: "ART", clue: "Creative expression." },
            { word: "FOOD", clue: "Something you eat." },
            { word: "CAR", clue: "Means of transport." },
            { word: "RIVER", clue: "A course of water." },
            { word: "SKY", clue: "Where the clouds are." },
            { word: "DICE", clue: "Object used in games of chance." }
        ]
    };

    function currentWordPool() {
        const lang = (document.documentElement.lang || navigator.language || 'pt').split('-')[0];
        return wordsByLang[lang] || wordsByLang.pt;
    }

    let grid = [];
    const gridSize = 10;
    let crosswordData = [];

    function getRandomWords(n) {
        const pool = currentWordPool();
        const shuffled = pool.slice().sort(() => Math.random() - 0.5);
        return shuffled.slice(0, n);
    }

    function generateCrosswordData() {
        const numWords = 5; // Menos palavras para melhor separação
    const selected = getRandomWords(numWords);
    const crosswordData = [];

    // Regiões para espalhar as palavras
    const regions = [
        { x: 1, y: 1 },
        { x: gridSize - 1, y: 1 },
        { x: 1, y: gridSize - 4 },
        { x: gridSize - 5, y: gridSize - 4 },
        { x: Math.floor(gridSize / 2), y: Math.floor(gridSize / 2) }
    ];

    for (let i = 0; i < selected.length; i++) {
        let entry = selected[i];
        let placed = false;
        let attempts = 0;

        while (!placed && attempts < 100) {
            attempts++;
            const orientation = (i % 2 === 0) ? "across" : "down";
            let startx = regions[i].x;
            let starty = regions[i].y;

            // Ajusta para não ultrapassar os limites
            if (orientation === "across" && startx + entry.word.length > gridSize) {
                startx = gridSize - entry.word.length;
            }
            if (orientation === "down" && starty + entry.word.length > gridSize) {
                starty = gridSize - entry.word.length;
            }

            // Verifica conflitos com palavras já posicionadas
            let conflict = false;
            for (const other of crosswordData) {
                for (let k = 0; k < entry.word.length; k++) {
                    let x = startx, y = starty;
                    if (orientation === "across") x += k; else y += k;
                    for (let l = 0; l < other.word.length; l++) {
                        let ox = other.startx, oy = other.starty;
                        if (other.orientation === "across") ox += l; else oy += l;
                        if (ox === x && oy === y && other.word[l] !== entry.word[k]) {
                            conflict = true;
                            break;
                        }
                    }
                    if (conflict) break;
                }
                if (conflict) break;
            }

            if (!conflict) {
                crosswordData.push({
                    word: entry.word,
                    clue: entry.clue,
                    orientation,
                    startx,
                    starty
                });
                placed = true;
            }
        }
    }
    return crosswordData;
}

    function init() {
        gridElement.innerHTML = '';
        cluesAcrossElement.innerHTML = '';
        cluesDownElement.innerHTML = '';

        crosswordData = generateCrosswordData();

        // Cria uma grade bloqueada
        grid = Array(gridSize).fill(null).map(() => Array(gridSize).fill({ block: true, char: null, number: null }));

        // Marca apenas as células das palavras como desbloqueadas
        let clueNumber = 1;
const usedNumbers = {};

crosswordData.forEach(entry => {
    const { word, clue, orientation, startx, starty } = entry;
    let currentNumber;

    // Se já existe número para esta célula inicial, reutiliza
    if (usedNumbers[`${startx},${starty}`]) {
        currentNumber = usedNumbers[`${startx},${starty}`];
    } else {
        currentNumber = clueNumber;
        usedNumbers[`${startx},${starty}`] = clueNumber;
        clueNumber++;
    }

    const clueItem = document.createElement('li');
    clueItem.innerHTML = `<strong>${currentNumber}.</strong> ${clue}`;
    clueItem.dataset.word = word;
    if (orientation === 'across') {
        cluesAcrossElement.appendChild(clueItem);
    } else {
        cluesDownElement.appendChild(clueItem);
    }

    let podePosicionar = true;
    for (let i = 0; i < word.length; i++) {
        let x = startx;
        let y = starty;

        if (orientation === 'across') x += i;
        else y += i;

        if (!grid[y][x].block && grid[y][x].char !== null && grid[y][x].char !== word[i]) {
            podePosicionar = false;
            break;
        }
    }

    if (podePosicionar) {
        for (let i = 0; i < word.length; i++) {
            let x = startx;
            let y = starty;

            if (orientation === 'across') x += i;
            else y += i;

            // Só coloca o número na célula inicial
            grid[y][x] = {
                block: false,
                char: word[i],
                number: (i === 0) ? currentNumber : null
            };
        }
    }
});

        // Renderização: só cria input para células desbloqueadas
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
                // Remove o fundo vermelho ao digitar
                e.target.classList.remove('input-error');
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
        // Limpa erros anteriores
        document.querySelectorAll('.grid-cell input').forEach(input => {
            input.classList.remove('input-error');
        });

        // Agrupa inputs por palavra
        crosswordData.forEach(entry => {
            const { word, orientation, startx, starty } = entry;
            let erroNaPalavra = false;
            let inputs = [];
            for (let i = 0; i < word.length; i++) {
                let x = startx, y = starty;
                if (orientation === 'across') x += i; else y += i;
                const cell = document.querySelector(`.grid-cell[data-x='${x}'][data-y='${y}']`);
                if (cell && cell.querySelector('input')) {
                    const input = cell.querySelector('input');
                    inputs.push(input);
                    if (input.value.toUpperCase() !== input.dataset.correct) {
                        erroNaPalavra = true;
                        allCorrect = false;
                    }
                }
            }
            // Se a palavra está errada, marca todos os inputs dela
            if (erroNaPalavra) {
                inputs.forEach(input => input.classList.add('input-error'));
            }
        });

        if (allCorrect) {
            showMessage('Parabéns! Você completou as palavras cruzadas!', 5000);
        } else {
            showMessage('Algumas palavras estão incorretas. Corrija para continuar!', 3000);
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

    // Observe <html lang> changes (gtranslate sets this) and re-init when it changes
    const langObserver = new MutationObserver(mutations => {
        for (const m of mutations) {
            if (m.attributeName === 'lang') {
                init();
                break;
            }
        }
    });
    langObserver.observe(document.documentElement, { attributes: true });
});