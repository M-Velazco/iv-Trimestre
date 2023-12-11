import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { LoginComponent } from './components/login/login.component';
import { IndexComponent } from './index/index.component';
import { ChatComponent } from './chat/chat.component';
import { PrincipalComponent } from './principal/principal.component';
import { PublicacionesComponent } from './publicaciones/publicaciones.component';
import { DocentesComponent } from './docentes/docentes.component';

const routes: Routes = [
  { path: '', component: IndexComponent },
  { path: 'Login', component: LoginComponent },
  { path: 'ocentes', component: DocentesComponent },
  {path:'chat',component:ChatComponent},
  {path:'principal',component: PrincipalComponent},
  {path:'Publicaciones',component: PublicacionesComponent},
  { path: '', redirectTo: 'Index', pathMatch: 'full' },

   // Ruta por defecto para manejar rutas no encontradas
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
