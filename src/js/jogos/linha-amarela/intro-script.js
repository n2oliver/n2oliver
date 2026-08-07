import { toast } from "react-toastify";
import { gtag } from "../../gtag";
import { AudioManager } from "./AudioManager";
import { Login } from "./Login";
const appUrl = '/jogos/linha-amarela';
function setUpAudioManager() {
    const audioManager = new AudioManager();
    const audioButton = document.getElementById("audio-button");
    const mainMenuSound = document.getElementById("main-menu-sound");
    audioButton.onclick = () => {
        if (localStorage.mute == 'on') {
            localStorage.setItem('mute', 'off');
            audioButton.querySelector("img").src = `/img${appUrl}/icons8-alto-falante-100.png`;
            mainMenuSound.play();
            return;
        }
        localStorage.setItem('mute', 'on');
        audioButton.querySelector("img").src = `/img${appUrl}/icons8-mute-64.png`;
        mainMenuSound.pause();
    }
    return audioManager;
}
function setUpIntro(audioManager) {
    const login = new Login();
    gtag("event", "qualify_lead", {
        currency: "USD",
        value: 0.0004
    });
    $('#login').click(login.login);

    $('#sair').click(() => {
        $.get(`/api${appUrl}/sair.php`, () => {
            window.location.href = appUrl;
        });
    });

    $('#nao-tenho-conta').click(login.naoTenhoConta);

    $('#sair-cadastro').click(login.sairCadastro);

    $('#esqueci-senha').click(login.passwordRecovery);

    $('#jogar').click(() => {
        if (!($('.navbar-toggler').attr('aria-expanded') == 'true') && typeof usuario_id != 'undefined' && !Boolean(usuario_id)) {
            $('input:visible').first().focus()
        } else if (typeof usuario_id != 'undefined' && usuario_id) {
            window.location.href = `${appUrl}/jogo`;
        } else {
            toast('Você precisa entrar primeiro!', {
                duration: 3000,
                style: {
                    background: "linear-gradient(to right, #b09b00, #ff0000)",
                    color: "white"
                },
            });
        }
    });
    $('#partida').click(() => {
        window.location.href = `${appUrl}/jogo/?partida_rapida=1`;
    })
}
export { setUpIntro, setUpAudioManager }