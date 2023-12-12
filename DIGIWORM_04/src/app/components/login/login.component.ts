// login.component.ts

import { Component, ElementRef, OnInit } from '@angular/core';
import { LoginService } from './login.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css'],
})
export class LoginComponent implements OnInit {
  Idusuarios!: number;
  Contrasena!: string;

  private container: HTMLElement | null;

  constructor(private elementRef: ElementRef, private loginService: LoginService, private router: Router) {
    this.container = null;
  }

  onSubmit() {
    this.loginService.login(this.Idusuarios, this.Contrasena).subscribe(
      (data) => {
        // Manejar la respuesta del servidor (éxito o error)
        console.log(data);

        if (data.success) {
          // Credenciales correctas
          console.log('Inicio de sesión exitoso');
          
          // Redirigir al componente deseado, por ejemplo, 'dashboard'
          this.router.navigate(['/principal']);
        } else {
          // Credenciales incorrectas u otros errores
          console.error(data.message);
        }
      },
      (error) => {
        // Manejar errores de la solicitud
        console.error(error);
      }
    );
  }

  ngOnInit() {
    this.container = this.elementRef.nativeElement.querySelector('.container');
  }

  switchToSignUp() {
    if (this.container) {
      this.container.classList.add('sign-up-mode');
    }
  }

  switchToSignIn() {
    if (this.container) {
      this.container.classList.remove('sign-up-mode');
    }
  }
}