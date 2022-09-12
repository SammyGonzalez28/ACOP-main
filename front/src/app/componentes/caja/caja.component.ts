import { Component } from "@angular/core";

@Component({
    selector:'caja',
    templateUrl: './caja.component.html'
})
export class Caja{

    public siglas: string;
    public nombre_app: string;


    constructor(){

        this.siglas = "ACOP";
        this.nombre_app = "Aplicación para la Codificación y Organización de documentos y manejo de Plantillas";
        console.log("Componente caja cargado");
    }

}