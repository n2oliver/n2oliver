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

    // Auto-translated word banks for additional languages
    wordsByLang.es = [
        { word: "CASA", clue: "Donde vives." },
        { word: "SALA", clue: "Habitación para invitados." },
        { word: "AR", clue: "Lo respiras." },
        { word: "SOL", clue: "Estrella del sistema solar." },
        { word: "LAR", clue: "Sinónimo de casa." },
        { word: "LIVRO", clue: "Objeto usado para lectura." },
        { word: "ESCOLA", clue: "Lugar de aprendizaje." },
        { word: "FESTA", clue: "Evento de celebración." },
        { word: "AMIGO", clue: "Persona cercana y querida." },
        { word: "ARTE", clue: "Expresión creativa." },
        { word: "COMIDA", clue: "Algo que comes." },
        { word: "CARRO", clue: "Medio de transporte." },
        { word: "RIO", clue: "Curso de agua." },
        { word: "CÉU", clue: "Donde están las nubes." },
        { word: "DADO", clue: "Objeto usado en juegos de azar." }
    ];
    wordsByLang.fr = [
        { word: "MAISON", clue: "Où vous habitez." },
        { word: "SALLE", clue: "Pièce pour recevoir des invités." },
        { word: "AIR", clue: "Vous le respirez." },
        { word: "SOLEIL", clue: "Étoile du système solaire." },
        { word: "FOYER", clue: "Synonyme de maison." },
        { word: "LIVRE", clue: "Objet utilisé pour la lecture." },
        { word: "ÉCOLE", clue: "Lieu d'apprentissage." },
        { word: "FÊTE", clue: "Événement de célébration." },
        { word: "AMI", clue: "Personne proche et chère." },
        { word: "ART", clue: "Expression créative." },
        { word: "NOURRITURE", clue: "Quelque chose que vous mangez." },
        { word: "VOITURE", clue: "Moyen de transport." },
        { word: "RIVIÈRE", clue: "Cours d'eau." },
        { word: "CIEL", clue: "Où sont les nuages." },
        { word: "DÉ", clue: "Objet utilisé dans les jeux de hasard." }
    ];
    wordsByLang.it = [
        { word: "CASA", clue: "Dove vivi." },
        { word: "SALA", clue: "Stanza per gli ospiti." },
        { word: "ARIA", clue: "La respiri." },
        { word: "SOLE", clue: "Stella del sistema solare." },
        { word: "FAMIGLIA", clue: "Sinonimo di casa (contexto: lar/home)." },
        { word: "LIBRO", clue: "Oggetto usato per leggere." },
        { word: "SCUOLA", clue: "Luogo di apprendimento." },
        { word: "FESTA", clue: "Evento di celebrazione." },
        { word: "AMICO", clue: "Persona vicina e cara." },
        { word: "ARTE", clue: "Espressione creativa." },
        { word: "CIBO", clue: "Qualcosa che mangi." },
        { word: "AUTO", clue: "Mezzo di trasporto." },
        { word: "FIUME", clue: "Corso d'acqua." },
        { word: "CIELO", clue: "Dove sono le nuvole." },
        { word: "DADO", clue: "Oggetto usato nei giochi di fortuna." }
    ];
    wordsByLang.ru = [
        { word: "ДОМ", clue: "Где вы живете." },
        { word: "КОМНАТА", clue: "Комната для гостей." },
        { word: "ВОЗДУХ", clue: "Вы его вдыхаете." },
        { word: "СОЛНЦЕ", clue: "Звезда нашей системы." },
        { word: "ДОМ", clue: "Синоним жилья." },
        { word: "КНИГА", clue: "Предмет для чтения." },
        { word: "ШКОЛА", clue: "Место обучения." },
        { word: "ВЕЧЕРИНКА", clue: "Мероприятие для празднования." },
        { word: "ДРУГ", clue: "Близкий и дорогой человек." },
        { word: "ИСКУССТВО", clue: "Творческое выражение." },
        { word: "ЕДА", clue: "То, что вы едите." },
        { word: "МАШИНА", clue: "Транспортное средство." },
        { word: "РЕКА", clue: "Поток воды." },
        { word: "НЕБО", clue: "Где облака." },
        { word: "КУБИК", clue: "Предмет для азартных игр." }
    ];
    wordsByLang.ro = [
        { word: "CASA", clue: "Unde locuiești." },
        { word: "CAMERĂ", clue: "Cameră pentru oaspeți." },
        { word: "AER", clue: "Îl respiri." },
        { word: "SOARE", clue: "Steaua sistemului solar." },
        { word: "CĂMIN", clue: "Sinonim pentru casă." },
        { word: "CARTE", clue: "Obiect folosit la citit." },
        { word: "ȘCOALĂ", clue: "Loc de învățare." },
        { word: "PETRECERE", clue: "Eveniment de sărbătoare." },
        { word: "PRIETEN", clue: "Persoană apropiată și dragă." },
        { word: "ARTĂ", clue: "Exprimare creativă." },
        { word: "MÂNCARE", clue: "Ceva ce mănânci." },
        { word: "MAȘINĂ", clue: "Mijloc de transport." },
        { word: "RÂU", clue: "Curs de apă." },
        { word: "CER", clue: "Unde sunt norii." },
        { word: "ZAR", clue: "Obiect folosit în jocuri de noroc." }
    ];
    wordsByLang.sr = [
        { word: "КУЋА", clue: "Где живите." },
        { word: "СОБА", clue: "Соба за госте." },
        { word: "ВАЗДУХ", clue: "Удишете га." },
        { word: "СУНЦЕ", clue: "Звезда у сунчевом систему." },
        { word: "ТОПЛИ КУЋНИ ДОМ", clue: "Синоним за кућу." },
        { word: "КЊИГА", clue: "Предмет за читање." },
        { word: "ШКОЛА", clue: "Место учења." },
        { word: "ЖУРКА", clue: "Догађај славља." },
        { word: "ПРИЈАТЕЉ", clue: "Блиска и драга особа." },
        { word: "УМЕТНОСТ", clue: "Креативни израз." },
        { word: "ХРАНА", clue: "Нешто што једете." },
        { word: "АУТО", clue: "Средство превоза." },
        { word: "РЕКА", clue: "Ток воде." },
        { word: "НЕБО", clue: "Где су облаци." },
        { word: "КОЦКА", clue: "Предмет за игре на срећу." }
    ];
    wordsByLang.zh = [
        { word: "家", clue: "你居住的地方。" },
        { word: "房间", clue: "接待客人的房间。" },
        { word: "空气", clue: "你呼吸的东西。" },
        { word: "太阳", clue: "太阳系的恒星。" },
        { word: "家园", clue: "家的同义词。" },
        { word: "书", clue: "用来阅读的物品。" },
        { word: "学校", clue: "学习的地方。" },
        { word: "派对", clue: "庆祝活动。" },
        { word: "朋友", clue: "亲近而珍贵的人。" },
        { word: "艺术", clue: "创造性的表达。" },
        { word: "食物", clue: "你吃的东西。" },
        { word: "汽车", clue: "交通工具。" },
        { word: "河", clue: "水的流动。" },
        { word: "天空", clue: "云所在的地方。" },
        { word: "骰子", clue: "用于赌博的物品。" }
    ];
    wordsByLang.ja = [
        { word: "家", clue: "あなたが住んでいる場所。" },
        { word: "部屋", clue: "客を迎えるための部屋。" },
        { word: "空気", clue: "あなたが呼吸するもの。" },
        { word: "太陽", clue: "太陽系の恒星。" },
        { word: "家", clue: "家の同義語。" },
        { word: "本", clue: "読むための物。" },
        { word: "学校", clue: "学ぶ場所。" },
        { word: "パーティー", clue: "祝賀のイベント。" },
        { word: "友達", clue: "親しい大切な人。" },
        { word: "芸術", clue: "創造的な表現。" },
        { word: "食べ物", clue: "あなたが食べるもの。" },
        { word: "車", clue: "移動の手段。" },
        { word: "川", clue: "水の流れ。" },
        { word: "空", clue: "雲がある場所。" },
        { word: "サイコロ", clue: "ゲームで使う物。" }
    ];
    wordsByLang.nl = [
        { word: "HUIS", clue: "Waar je woont." },
        { word: "KAMER", clue: "Kamer om gasten te ontvangen." },
        { word: "LUCHT", clue: "Dat adem je in." },
        { word: "ZON", clue: "Ster van het zonnestelsel." },
        { word: "HUIS", clue: "Synoniem voor thuis." },
        { word: "BOEK", clue: "Object gebruikt om te lezen." },
        { word: "SCHOOL", clue: "Plaats om te leren." },
        { word: "FEEST", clue: "Een vieringsevenement." },
        { word: "VRIEND", clue: "Iemand dichtbij en dierbaar." },
        { word: "KUNST", clue: "Creatieve uitdrukking." },
        { word: "ETEN", clue: "Iets dat je eet." },
        { word: "AUTO", clue: "Vervoermiddel." },
        { word: "RIVIER", clue: "Waterloop." },
        { word: "HEMEL", clue: "Waar de wolken zijn." },
        { word: "DOBBELSTEEN", clue: "Object gebruikt in kansspelen." }
    ];
    wordsByLang.bn = [
        { word: "বাড়ি", clue: "আপনি যেখানে থাকেন।" },
        { word: "ঘর", clue: "অতিথিদের জন্য রুম।" },
        { word: "বাতাস", clue: "আপনি যা শ্বাস নেন।" },
        { word: "সূর্য", clue: "সৌরজগতের তারা।" },
        { word: "বাড়ি", clue: "বাড়ির সমার্থক।" },
        { word: "বই", clue: "পড়ার জন্য ব্যবহৃত বস্তু।" },
        { word: "স্কুল", clue: "শেখার স্থান।" },
        { word: "পার্টি", clue: "উল্লাসের অনুষ্ঠান।" },
        { word: "বন্ধু", clue: "ঘনিষ্ঠ এবং প্রিয় মানুষ।" },
        { word: "শিল্প", clue: "সৃজনশীল প্রকাশ।" },
        { word: "খাদ্য", clue: "আপনি যা খান।" },
        { word: "গাড়ি", clue: "পরিবহনের মাধ্যম।" },
        { word: "নদী", clue: "জলপ্রবাহ।" },
        { word: "আকাশ", clue: "মেঘ যেখানে আছে।" },
        { word: "পাঁচিক", clue: "জুয়া খেলার জন্য বস্তু।" }
    ];
    wordsByLang.id = [
        { word: "RUMAH", clue: "Tempat Anda tinggal." },
        { word: "RUANG", clue: "Ruang untuk tamu." },
        { word: "UDARA", clue: "Yang Anda hirup." },
        { word: "MATAHARI", clue: "Bintang sistem tata surya." },
        { word: "RUMAH", clue: "Sinonim rumah." },
        { word: "BUKU", clue: "Benda untuk dibaca." },
        { word: "SEKOLAH", clue: "Tempat belajar." },
        { word: "PESTA", clue: "Acara perayaan." },
        { word: "TEMAN", clue: "Orang dekat dan tercinta." },
        { word: "SENI", clue: "Ekspresi kreatif." },
        { word: "MAKANAN", clue: "Sesutu yang Anda makan." },
        { word: "MOBIL", clue: "Alat transportasi." },
        { word: "SUNGai", clue: "Aliran air." },
        { word: "LANGIT", clue: "Tempat awan berada." },
        { word: "DADU", clue: "Benda yang dipakai dalam permainan untung-untungan." }
    ];
    wordsByLang.ur = [
        { word: "گھر", clue: "جہاں آپ رہتے ہیں۔" },
        { word: "کمرہ", clue: "مہمانوں کے لیے کمرہ۔" },
        { word: "ہوا", clue: "آپ اسے سانس لیتے ہیں۔" },
        { word: "سورج", clue: "شمسی نظام کا ستارہ۔" },
        { word: "گھر", clue: "گھر کا مترادف۔" },
        { word: "کتاب", clue: "پڑھنے کے لیے استعمال شے۔" },
        { word: "اسکول", clue: "سیکھنے کی جگہ۔" },
        { word: "تقریب", clue: "تقریبِ جشن۔" },
        { word: "دوست", clue: "قریب اور عزیز شخص۔" },
        { word: "فن", clue: "تخلیقی اظہار۔" },
        { word: "خوراک", clue: "وہ چیز جو آپ کھاتے ہیں۔" },
        { word: "گاڑی", clue: "نقل و حمل کا ذریعہ۔" },
        { word: "دریا", clue: "پانی کا بہاؤ۔" },
        { word: "آسمان", clue: "جہاں بادل ہوتے ہیں۔" },
        { word: "پانسہ", clue: "قسمتی کھیلوں میں استعمال شے۔" }
    ];

    // Provide fallbacks for other languages supported by the gtranslate widget.
    // If we don't have a translated set, fall back to Portuguese list to avoid showing empty content.
    const extraLangFallbacks = ['fr','it','es','ru','ro','sr','zh','ja','nl','bn','id','ur'];
    extraLangFallbacks.forEach(code => { if (!wordsByLang[code]) wordsByLang[code] = wordsByLang.pt; });

    function currentWordPool() {
        function getCookie(name) {
            const match = document.cookie.match(new RegExp('(^|;)\\s*' + name + '=([^;]+)'));
            return match ? decodeURIComponent(match[2]) : null;
        }

        function detectLang() {
            const htmlLang = (document.documentElement.lang || '').split('-')[0];
            if (htmlLang) return htmlLang;
            const nav = (navigator.language || navigator.userLanguage || '').split('-')[0];
            if (nav) return nav;
            const cookieNames = ['googtrans', '__gt_lang', 'gtranslate_lang'];
            for (const name of cookieNames) {
                const val = getCookie(name);
                if (val) {
                    if (val.indexOf('/') !== -1) {
                        const parts = val.split('/').filter(Boolean);
                        if (parts.length) return parts[parts.length - 1].split('-')[0];
                    }
                    return val.split('-')[0];
                }
            }
            return 'pt';
        }

        const lang = detectLang();
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
    // Poll cookie-based changes too (some translation widgets set cookies only)
    let _lastLang = (document.documentElement.lang || navigator.language || 'pt').split('-')[0];
    setInterval(() => {
        const cookieMatch = document.cookie.match(/(^|;)\s*(googtrans|__gt_lang|gtranslate_lang)=([^;]+)/);
        let cookieLang = null;
        if (cookieMatch) {
            const v = decodeURIComponent(cookieMatch[3]);
            if (v.indexOf('/') !== -1) {
                const parts = v.split('/').filter(Boolean);
                if (parts.length) cookieLang = parts[parts.length - 1].split('-')[0];
            } else cookieLang = v.split('-')[0];
        }
        const now = cookieLang || (document.documentElement.lang || navigator.language || 'pt').split('-')[0];
        if (now !== _lastLang) {
            _lastLang = now;
            init();
        }
    }, 1000);
});