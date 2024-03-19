class List extends HTMLElement{
    constructor(){
        super();

        console.log("hola mundo")
    }
}

customElements.define("app-list", List);