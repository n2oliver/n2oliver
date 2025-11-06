document.addEventListener('DOMContentLoaded', () => {
    // Word lists per language. We'll detect the current language from <html lang="..">
    const wordsByLang = {
        pt: [
            'html','css','javascript','php','jogo','web','programacao','computador','tecnologia','internet','codigo','software',
            'rede','algoritmo','dados','nuvem','api','framework','linguagem',
            'casa','carro','familia','amor','amigo','escola','trabalho','cidade','brasil','festa','musica','filme','praia','sol','chuva','comida','agua',
            'felicidade','viagem','natureza','animal','livro','esporte','arte','coracao','tempo','dinheiro','saude','sonho'
        ],
        en: [
            'html','css','javascript','php','game','web','programming','computer','technology','internet','code','software',
            'network','algorithm','data','cloud','api','framework','language',
            'house','car','family','love','friend','school','work','city','brazil','party','music','movie','beach','sun','rain','food','water',
            'happiness','travel','nature','animal','book','sport','art','heart','time','money','health','dream'
        ]
        ,
        es: [
            'html','css','javascript','php','juego','web','programacion','computadora','tecnologia','internet','codigo','software',
            'red','algoritmo','datos','nube','api','framework','lenguaje',
            'casa','coche','familia','amor','amigo','escuela','trabajo','ciudad','brasil','fiesta','musica','pelicula','playa','sol','lluvia','comida','agua',
            'felicidad','viaje','naturaleza','animal','libro','deporte','arte','corazon','tiempo','dinero','salud','sueño'
        ],
        fr: [
            'html','css','javascript','php','jeu','web','programmation','ordinateur','technologie','internet','code','logiciel',
            'reseau','algorithme','donnees','nuage','api','framework','langage',
            'maison','voiture','famille','amour','ami','ecole','travail','ville','bresil','fete','musique','film','plage','soleil','pluie','nourriture','eau',
            'bonheur','voyage','nature','animal','livre','sport','art','coeur','temps','argent','sante','reve'
        ],
        it: [
            'html','css','javascript','php','gioco','web','programmazione','computer','tecnologia','internet','codice','software',
            'rete','algoritmo','dati','cloud','api','framework','linguaggio',
            'casa','auto','famiglia','amore','amico','scuola','lavoro','citta','brasile','festa','musica','film','spiaggia','sole','pioggia','cibo','acqua',
            'felicita','viaggio','natura','animale','libro','sport','arte','cuore','tempo','denaro','salute','sogno'
        ],
        ru: [
            'html','css','javascript','php','игра','веб','программирование','компьютер','технология','интернет','код','программное обеспечение',
            'сеть','алгоритм','данные','облако','api','фреймворк','язык',
            'дом','машина','семья','любовь','друг','школа','работа','город','бразилия','вечеринка','музыка','фильм','пляж','солнце','дождь','еда','вода',
            'счастье','путешествие','природа','животное','книга','спорт','искусство','сердце','время','деньги','здоровье','сон'
        ],
        ro: [
            'html','css','javascript','php','joc','web','programare','calculator','tehnologie','internet','cod','software',
            'retea','algoritm','date','nor','api','framework','limbaj',
            'casa','masina','familie','dragoste','prieten','scoala','munca','oras','brazilia','petrecere','muzica','film','plaja','soare','ploaie','mancare','apa',
            'fericire','calatorie','natura','animal','carte','sport','arta','inima','timp','bani','sanatate','vis'
        ],
        sr: [
            'html','css','javascript','php','игра','веб','програмiranje','рачунар','технологија','интернет','код','софтвер',
            'мрежа','алгоритам','подаци','облак','api','фрејмворк','језик',
            'кућа','аутомобил','породица','љубав','пријатељ','школа','посао','град','бразил','забава','музика','филм','плажа','сунце','киша','храна','вода',
            'срећа','путовање','природа','животиња','књига','спорт','уметност','срце','време','новац','здравље','снови'
        ],
        zh: [
            'html','css','javascript','php','游戏','网页','编程','电脑','技术','互联网','代码','软件',
            '网络','算法','数据','云','api','框架','语言',
            '家','车','家庭','爱','朋友','学校','工作','城市','巴西','派对','音乐','电影','海滩','太阳','雨','食物','水',
            '幸福','旅行','自然','动物','书','运动','艺术','心','时间','钱','健康','梦'
        ],
        ja: [
            'html','css','javascript','php','ゲーム','ウェブ','プログラミング','コンピュータ','技術','インターネット','コード','ソフトウェア',
            'ネットワーク','アルゴリズム','データ','クラウド','api','フレームワーク','言語',
            '家','車','家族','愛','友達','学校','仕事','都市','ブラジル','パーティー','音楽','映画','ビーチ','太陽','雨','食べ物','水',
            '幸福','旅行','自然','動物','本','スポーツ','芸術','心','時間','お金','健康','夢'
        ],
        nl: [
            'html','css','javascript','php','spel','web','programmering','computer','technologie','internet','code','software',
            'netwerk','algoritme','data','cloud','api','framework','taal',
            'huis','auto','familie','liefde','vriend','school','werk','stad','brazilie','feest','muziek','film','strand','zon','regen','eten','water',
            'geluk','reis','natuur','dier','boek','sport','kunst','hart','tijd','geld','gezondheid','droom'
        ],
        bn: [
            'html','css','javascript','php','গেম','ওয়েব','প্রোগ্রামিং','কম্পিউটার','প্রযুক্তি','ইন্টারনেট','কোড','সফটওয়্যার',
            'নেটওয়ার্ক','অ্যালগরিদম','ডেটা','ক্লাউড','api','ফ্রেমওয়ার্ক','ভাষা',
            'বাড়ি','গাড়ি','পরিবার','ভালোবাসা','বন্ধু','স্কুল','কাজ','শহর','ব্রাজিল','পার্টি','সঙ্গীত','চলচ্চিত্র','সমুদ্রতট','সূর্য','বৃষ্টি','খাবার','পানি',
            'সুখ','ভ্রমণ','প্রকৃতি','প্রাণী','বই','ক্রীড়া','শিল্প','হৃদয়','সময়','টাকা','স্বাস্থ্য','স্বপ্ন'
        ],
        id: [
            'html','css','javascript','php','permainan','web','pemrograman','komputer','teknologi','internet','kode','perangkat lunak',
            'jaringan','algoritma','data','awan','api','framework','bahasa',
            'rumah','mobil','keluarga','cinta','teman','sekolah','pekerjaan','kota','brasil','pesta','musik','film','pantai','matahari','hujan','makanan','air',
            'kebahagiaan','perjalanan','alam','hewan','buku','olahraga','seni','hati','waktu','uang','kesehatan','mimpi'
        ],
        ur: [
            'html','css','javascript','php','گیم','ویب','پروگرامنگ','کمپیوٹر','ٹیکنالوجی','انٹرنیٹ','کوڈ','سافٹ ویئر',
            'نیٹ ورک','الگورتھم','ڈیٹا','کلاؤڈ','api','فریم ورک','زبان',
            'گھر','گاڑی','خاندان','محبت','دوست','اسکول','کام','شہر','برازیل','تقریب','موسیقی','فلم','ساحل','سورج','بارش','خوراک','پانی',
            'خوشی','سفر','قدرت','جانور','کتاب','کھیل','فن','دل','وقت','پیسہ','صحت','خواب'
        ]
    };
    // Provide fallbacks for other languages supported by the gtranslate widget.
    // If we don't have a translated set, fall back to Portuguese list to avoid showing empty content.
    const extraLangFallbacks = ['fr','it','es','ru','ro','sr','zh','ja','nl','bn','id','ur'];
    extraLangFallbacks.forEach(code => { if (!wordsByLang[code]) wordsByLang[code] = wordsByLang.pt; });
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

    function getCookie(name) {
        const match = document.cookie.match(new RegExp('(^|;)\\s*' + name + '=([^;]+)'));
        return match ? decodeURIComponent(match[2]) : null;
    }

    function detectLang() {
        // Prefer <html lang>
        const htmlLang = (document.documentElement.lang || '').split('-')[0];
        if (htmlLang) return htmlLang;
        // Fallback to navigator
        const nav = (navigator.language || navigator.userLanguage || '').split('-')[0];
        if (nav) return nav;
        // Check common gtranslate cookies
        const cookieNames = ['googtrans', '__gt_lang', 'gtranslate_lang'];
        for (const name of cookieNames) {
            const val = getCookie(name);
            if (val) {
                // googtrans often contains "/en/pt" or "/pt/en" - pick the last segment if so
                if (val.indexOf('/') !== -1) {
                    const parts = val.split('/').filter(Boolean);
                    if (parts.length) return parts[parts.length - 1].split('-')[0];
                }
                return val.split('-')[0];
            }
        }
        return 'pt';
    }

    // poll cookie-based language changes (some widgets don't update <html lang>)
    let _lastDetectedLang = detectLang();
    setInterval(() => {
        const now = detectLang();
        if (now !== _lastDetectedLang) {
            _lastDetectedLang = now;
            init();
        }
    }, 1000);

    function init() {
        const lang = detectLang();
        const pool = wordsByLang[lang] || wordsByLang.pt;
        // pick candidate words, but only show words that we actually managed to place
        const candidates = shuffleArray([...pool]).slice(0, 12); // pick a few more to try placing
        grid = [];
        foundWords = [];
        selection = [];
        isSelecting = false;
        gridElement.innerHTML = '';
        wordListElement.innerHTML = '';
        gridElement.style.gridTemplateColumns = `repeat(${gridSize}, 1fr)`;

        // initialize empty grid
        for (let i = 0; i < gridSize; i++) {            
            grid[i] = [];
            for (let j = 0; j < gridSize; j++) {
                grid[i][j] = '';
            }
        }

        // Try to place words and only keep those successfully placed
        const placedWords = [];
        for (let k = 0; k < candidates.length && placedWords.length < 8; k++) {
            const w = candidates[k];
            const ok = placeWord(w.toUpperCase());
            if (ok) placedWords.push(w);
        }

        words = placedWords;

        words.forEach(word => {
            const li = document.createElement('li');
            li.textContent = word;
            li.id = `word-${word}`;
            wordListElement.appendChild(li);
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

    // Se for a primeira palavra (grade vazia)
    if (grid.flat().every(cell => cell === '')) {
        let placed = false;
        let attempts = 0;
        while (!placed && attempts < 100) {
            attempts++;
            const direction = directions[Math.floor(Math.random() * directions.length)];
            const startX = Math.floor(Math.random() * gridSize);
            const startY = Math.floor(Math.random() * gridSize);
            const endX = startX + (word.length - 1) * direction.x;
            const endY = startY + (word.length - 1) * direction.y;

            if (endX < 0 || endX >= gridSize || endY < 0 || endY >= gridSize) continue;

            let canPlace = true;
            for (let i = 0; i < word.length; i++) {
                const checkX = startX + i * direction.x;
                const checkY = startY + i * direction.y;
                if (grid[checkY][checkX] !== '' && grid[checkY][checkX] !== word[i]) {
                    canPlace = false;
                    break;
                }
            }
            if (canPlace) {
                for (let i = 0; i < word.length; i++) {
                    const placeX = startX + i * direction.x;
                    const placeY = startY + i * direction.y;
                    grid[placeY][placeX] = word[i];
                }
                placed = true;
            }
        }
        return placed;
    }

    // Para as demais palavras, tenta cruzar com as existentes
    for (let letterIdx = 0; letterIdx < word.length; letterIdx++) {
        const letter = word[letterIdx];
        for (let y = 0; y < gridSize; y++) {
            for (let x = 0; x < gridSize; x++) {
                if (grid[y][x] === letter) {
                    for (const direction of directions) {
                        const startX = x - letterIdx * direction.x;
                        const startY = y - letterIdx * direction.y;
                        const endX = startX + (word.length - 1) * direction.x;
                        const endY = startY + (word.length - 1) * direction.y;

                        if (
                            startX < 0 || startY < 0 ||
                            endX < 0 || endY < 0 ||
                            startX >= gridSize || startY >= gridSize ||
                            endX >= gridSize || endY >= gridSize
                        ) continue;

                        let canPlace = true;
                        for (let i = 0; i < word.length; i++) {
                            const checkX = startX + i * direction.x;
                            const checkY = startY + i * direction.y;
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
                                const placeX = startX + i * direction.x;
                                const placeY = startY + i * direction.y;
                                grid[placeY][placeX] = word[i];
                            }
                            return true;
                        }
                    }
                }
            }
        }
    }

    // Só retorna false após tentar todas as possibilidades
    return false;
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
    // Observe <html lang="..."> changes (gtranslate/gtranslate-like widgets usually set this)
    const htmlObserver = new MutationObserver(mutations => {
        for (const m of mutations) {
            if (m.attributeName === 'lang') {
                // Re-init with new language
                init();
                break;
            }
        }
    });
    htmlObserver.observe(document.documentElement, { attributes: true });
});
