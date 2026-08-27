if (localStorage.darkmode == undefined || localStorage.darkmode == null) {
    localStorage.setItem("darkmode", 1);
}
let numberString = "";
let resultado = false;
const teclasValidas = "0123456789.+-*/=%()";
const backspace = "Backspace";
const enter = "Enter";
const esc = "Escape";
const deleteKey = "Delete";
const arrowLeft = "ArrowLeft";
const arrowRight = "ArrowRight";
function testa(event) {
    const newValue = document.getElementById("digitedNumber").value;
    if (!teclasValidas.includes(event.key) &&
        event.key != deleteKey &&
        event.key != backspace &&
        event.key != enter &&
        event.key != esc &&
        event.key != arrowLeft &&
        event.key != arrowRight) {
        event.preventDefault();
        return false;
    }
    if (event.key == enter || event.key == "=") {
        event.preventDefault();
        prepareResult();
        document.getElementById("digitedNumber").value = result();
        document.getElementById("result_preview").innerText = "";
        return false;
    }
    if (event.key == esc) {
        event.preventDefault();
        clear();
        return false;
    }

    numberString = newValue;

    if (event.key != deleteKey &&
        event.key != backspace &&
        event.key != enter &&
        event.key != esc &&
        event.key != arrowLeft &&
        event.key != arrowRight) {
        numberString += event.key;
    }
    return true;
}
function tecla(valor) {
    const input = document.getElementById("digitedNumber");

    // Garante que numberString esteja sincronizado com o campo
    numberString = input.value;

    const inicio = input.selectionStart ?? numberString.length;
    const fim = input.selectionEnd ?? inicio;

    // Texto antes e depois da seleção
    let antes = numberString.substring(0, inicio);
    let depois = numberString.substring(fim);

    // Se for operador e já houver operador imediatamente antes do cursor,
    // substitui o operador anterior.
    if (
        /[\+\-\*\/]$/.test(antes) &&
        /[\+\-\*\/]/.test(valor)
    ) {
        antes = antes.substring(0, antes.length - 1);
    }

    // Tratamento do (
    if (valor === "(") {
        if (antes.length > 0 && /[\d.)%]$/.test(antes)) {
            valor = "*(";
        }
    }

    // Nova expressão
    numberString = antes + valor + depois;

    input.value = decimal(numberString);

    resultado = false;

    // Cursor fica imediatamente depois do caractere inserido
    const novaPosicao = antes.length + valor.length;

    input.focus();
    input.setSelectionRange(novaPosicao, novaPosicao);

    try {
        const valorPreview = decimal((0, eval)(result()));

        if (valorPreview == "=") {
            document.getElementById("result_preview").innerText = "";
            return;
        }

        document.getElementById("result_preview").innerText =
            "=" + valorPreview;

    } catch {
        document.getElementById("result_preview").innerText =
            "=" + result();
    }
}
function decimal(expr) {
    return (!isNaN(expr) ? new Intl.NumberFormat('pt-BR', {
        minimumFractionDigits: 0,
        maximumFractionDigits: 9,
    }).format(expr).toString().replace(/0+$/gi, "").replace(/\.$/gi, "") : expr) || ''
}
function prepareResult() {

    const expr = corrigirExpressao(numberString);

    try {

        const valor = (0, eval)(expr);

        if (!Number.isFinite(valor))
            throw new Error();

        numberString = valor.toString();

    } catch {

        // mantém o que o usuário digitou
        numberString = expr;

        document.getElementById("result_preview").innerText =
            "Expressão inválida";
    }
}
function result() {
    resultado = true;
    const valor = decimal(numberString);

    document.getElementById("result_preview").innerText = valor;
    return valor;
}
function reset() {
    window.location.href = window.location.href
}
function dark(elem) {
    if (elem && elem.checked) {
        setDark();
    } else if (elem) {
        setLight();
    }
}
function setLight() {
    localStorage.setItem("darkmode", 0);
    const moon = document.querySelector(".fa-moon");
    const navbarBrand = document.querySelector(".navbar-brand");
    const digitedNumber = document.getElementById("digitedNumber");
    const resultPreview = document.getElementById("result_preview");
    const buttons = document.getElementsByClassName("button");
    const materials = document.querySelectorAll(".bg-dark:not(.navbar)");

    if (moon) moon.classList.remove("text-light");
    if (navbarBrand) navbarBrand.classList.remove("text-light");
    if (digitedNumber) digitedNumber.classList.remove("text-light");
    if (resultPreview) resultPreview.classList.remove("text-light");
    if (buttons.length > 0) {
        for (let button of buttons) {
            button.classList.remove("text-light");
        }
    }
    if (materials.length > 0) {
        for (let material of materials) {
            const bgDark = document.querySelector(".bg-dark:not(.navbar)");
            if (bgDark) {
                bgDark.classList.remove("bg-dark");
                bgDark.classList.add("bg-white");
            }
            material.classList.remove("bg-dark");
            material.classList.add("bg-light");
        }
    }
}
function setDark() {
    localStorage.setItem("darkmode", 1);
    document.querySelector(".fa-moon").classList.add("text-light");
    document.querySelector(".navbar-brand").classList.add("text-light");
    document.getElementById("digitedNumber").classList.add("text-light");
    document.getElementById("result_preview").classList.add("text-light");

    const buttons = document.getElementsByClassName("button");
    for (let button of buttons) {
        button.classList.add("text-light");
    }
    for (let material of document.querySelectorAll(".bg-light")) {
        const bgWhite = document.querySelector(".bg-white:not(.navbar)");
        if (bgWhite) {
            bgWhite.classList.remove("bg-white");
            bgWhite.classList.add("bg-dark");
        }
        material.classList.remove("bg-light");
        material.classList.add("bg-dark");
    }
}

function darkModeOption() {
    if (localStorage.darkmode == 1) {
        document.getElementById("darkMode").checked = true;
        setDark();
    }
}
function corrigirExpressao(expr) {

    expr = expr
        .replace(/\s+/g, "")
        .replace(/(\d+(\.\d+)?)%/g, "($1/100)");

    // remove operadores repetidos iguais
    expr = expr.replace(/([+\-*/])\1+/g, "$1");

    // remove operadores no início (exceto -)
    expr = expr.replace(/^[+*/%]+/, "");

    // remove operadores no final
    expr = expr.replace(/[+\-*/%.]+$/, "");

    // balanceia parênteses
    let abertas = 0;
    let resultado = "";

    for (const c of expr) {

        if (c === "(") {
            abertas++;
            resultado += c;
            continue;
        }

        if (c === ")") {
            if (abertas > 0) {
                abertas--;
                resultado += c;
            }
            continue;
        }

        resultado += c;
    }

    resultado += ")".repeat(abertas);

    return resultado;
}
function init() {
    const equal = document.getElementById("equal");
    if (equal) {
        equal.addEventListener("click", () => {
            prepareResult();
            document.getElementById('digitedNumber').value = result();
            document.getElementById("result_preview").innerText = '';
        });
        darkModeOption();
    }
};
export { init, testa, tecla, dark, prepareResult, result, reset };