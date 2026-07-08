async function checkInspVisual() {
    const result = localStorage.getItem("insp_visual_ligado");
    if(result == 'true') {
        document.getElementById("insp_visual_ligado").checked = true;
        document.querySelector('#tooltip').innerHTML = "Copie um elemento pelo menu de contexto Inpetor Visual.";
        document.querySelector('[for="insp_visual_ligado"]').innerHTML = "&nbsp;Ativado";
    } else {
        document.getElementById("insp_visual_ligado").checked = false;
        document.querySelector('#tooltip').innerHTML = "Ative o Inpetor Visual para inspecionar elementos.";
        document.querySelector('[for="insp_visual_ligado"]').innerHTML = "&nbsp;Desativado";
    }
}
async function checkSpeaker() {
    const result = localStorage.getItem("insp_visual_leitor_de_tela");
    const vozResult = localStorage.getItem("voz");
    const selectVozes = document.getElementById("vozes-site");
    if('speechSynthesis' in window) {
        window.speechSynthesis.addEventListener("voiceschanged", () => {
            const vozes = speechSynthesis.getVoices();
            for(let i in vozes) {
                const option = document.createElement('option');
                option.innerText = vozes[i].name;
                option.value = i;
                if(vozResult == i) {
                    option.selected = true;
                }
                selectVozes.appendChild(option);
            }
            selectVozes.onchange = async () => {
                localStorage.setItem('voz', selectVozes.selectedIndex );
            }
        });
    }
    if(result == 'true') {
        document.getElementById("insp_visual_leitor_de_tela").checked = true;
        document.getElementById("vozes-site").classList.remove("d-none");
    } else {
        document.getElementById("insp_visual_leitor_de_tela").checked = false;
        document.getElementById("vozes-site").classList.add("d-none");
        if ('speechSynthesis' in window) {
            speechSynthesis.cancel();
        }
    }
}
async function changeState() {
    const result = localStorage.getItem("insp_visual_ligado");
    if(result == 'true') {
        localStorage.setItem('insp_visual_ligado', false);
        document.querySelector('#tooltip').innerHTML = "Ative o Inpetor Visual para inspecionar elementos.";
        document.querySelector('[for="insp_visual_ligado"]').innerHTML = "&nbsp;Desativado";
    } else {
        localStorage.setItem('insp_visual_ligado', true);

        document.querySelector('#tooltip').innerHTML = "Copie um elemento pelo menu de contexto Inpetor Visual.";
        document.querySelector('[for="insp_visual_ligado"]').innerHTML = "&nbsp;Ativado";
    }
}
async function speakerChangeState() {
    const result = localStorage.getItem("insp_visual_leitor_de_tela");
    if(result == 'true') {
        if ('speechSynthesis' in window) {
            speechSynthesis.cancel();
        }
        localStorage.setItem('insp_visual_leitor_de_tela', false);
        document.getElementById("vozes-site").classList.add("d-none");
    } else {
        localStorage.setItem('insp_visual_leitor_de_tela', true);
        document.getElementById("vozes-site").classList.remove("d-none");
    }
}
window.onload = () => {
    checkInspVisual();
    checkSpeaker();
    document.getElementById("insp_visual_ligado").onclick= changeState
    document.getElementById("insp_visual_leitor_de_tela").onclick= speakerChangeState
}