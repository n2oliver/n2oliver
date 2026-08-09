import { Background } from "./Background";

class GameBase {
    pointsCounter;
    livesCounter;
    levelsCounter;
    level;
    background;
    backgroundImages = [
        "/jogos/linha-amarela/img/fundo.png",
    ];
    constructor(level, totalDeMonstros, top) {
        this.level = level;
        this.background = new Background();
        const random = Math.floor(Math.random() * this.backgroundImages.length);
        this.background.set(this.backgroundImages[random]);
        this.top = top;
        this.totalDeMonstros = totalDeMonstros;
        this.level = level;
    };
}
export { GameBase };