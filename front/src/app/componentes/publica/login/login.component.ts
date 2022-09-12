import { Component, OnInit } from '@angular/core';
import { Usuario } from 'src/app/modelos/usuario';

@Component({
  selector: 'login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  usuarios: Usuario[] = []; 

  constructor() { }

  ngOnInit(): void {

    this.usuarios = [
      {
        id:'1',
        usuario: 'sam',
        contraseña: 'aaa',
        mombres:  '',
        cargo: 'director',
        telefono:  ''
      },
      {
        id:'2',
        usuario: 'erick',
        contraseña: 'aa',
        mombres:  '',
        cargo: 'director',
        telefono:  ''
      }
    ]
  }

}
