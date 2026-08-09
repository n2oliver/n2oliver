import { GameObject } from "./GameObject";

class Platform extends GameObject {
    constructor(attributes){
        super(attributes);

        Object.assign(document.getElementById(attributes.id).style, { 
            position: "fixed",
            ...attributes,
            "background-image": "url(/img/jogos/linha-amarela/trail.png)",
            "background-size": "auto 100%", 
        });
    }
}
export { Platform };