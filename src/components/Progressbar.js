import { $ } from "../App";
import "jquery-ui/ui/widgets/progressbar";
import { next } from "./DestaqueImagem";
import { useState } from "react";

let progress = -1;
let progressInterval = null;
let duration = 15000;
let stepTime = 300;
let step = (stepTime / duration) * 100;

function setProgress(progressValue){
    progress = progressValue;
}
function Progressbar() {
    const [progressValue, setProgressValue] = useState([])
    if (typeof progressbar != 'undefined' && progress === -1) {
        progress += 1;
        setProgressValue(progress)
        setTimeout(() => {
            setProgressbar(0);
            console.log(`ProgressBar started at ${progressValue}`);
        }, 1000);
    }
    return (<div id="progressbar" role="progressbar" title="progressbar"></div>)
}

function startProgress(value) {
    clearInterval(progressInterval);
    progressInterval = setInterval(() => {
        progress += step;
        if (progress >= 100) {
            setProgress(value || 0);
            clearInterval(progressInterval);
            next();
            startProgress(value || 0);
        }
        $("#progressbar").progressbar("value", progress);
    }, stepTime);
}

function setProgressbar(value) {
    $("#progressbar").progressbar({value});
    startProgress(value);
}
export default Progressbar;
export { progress, setProgress };