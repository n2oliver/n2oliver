import { $ } from "../App";
import { next } from "./destaque-imagem";
let progress = -1;
function setProgress(progressValue){
    progress = progressValue;
}
function Progressbar() {

    let interval = null;
    let progressInterval = null;
    let duration = 15000;
    let stepTime = 200;
    let step = (stepTime / duration) * 100;

    function startProgress() {
        clearInterval(progressInterval);
        progressInterval = setInterval(() => {
            progress += step;
            if (progress >= 100) {
                setProgress(0);
                clearInterval(progressInterval);
                next();
                startProgress();
            }
            $("#progressbar").progressbar("value", progress);
        }, stepTime);
    }
    
    if (typeof progressbar != 'undefined' && progress == -1) {
        progress += 1;
        setTimeout(() => {
            $("#progressbar").progressbar({
                value: 0
            });
            startProgress();
        }, 1000);
    }
    return (<div id="progressbar" role="progressbar" title="progressbar"></div>)
}
export default Progressbar;
export { progress, setProgress };