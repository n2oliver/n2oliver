class Background {
    constructor () {
        this.set = (image) => {
            const objectStyle = document.body.style;
            const style = {
                background: "url(" + image + ") no-repeat center center fixed",
                'background-size': "cover",
                "max-width": "100dvw",
                margin: "0 auto",
                "z-index": "-1",
            }
            Object.assign(objectStyle, style);
        }
    }
}
export { Background };