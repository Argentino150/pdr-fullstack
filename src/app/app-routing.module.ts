import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CadastroEmpresaComponent } from './cadastro-empresa/cadastro-empresa.component';
import { CadastroONGComponent } from './cadastro-ong/cadastro-ong.component';
import { CadastroReceptorComponent } from './cadastro-receptor/cadastro-receptor.component';
import { CatalogoComponent } from './catalogo/catalogo.component';
import { ContatarONGComponent } from './contatar-ong/contatar-ong.component';
import { EmpresasParceirasComponent } from './empresas-parceiras/empresas-parceiras.component';
import { InicialEmpresaComponent } from './inicial-empresa/inicial-empresa.component';
import { InicialONGComponent } from './inicial-ong/inicial-ong.component';
import { InicialReceptorComponent } from './inicial-receptor/inicial-receptor.component';
import { InicialComponent } from './inicial/inicial.component';
import { LogarComponent } from './logar/logar.component';

const routes: Routes = [
  {path:'' , component:InicialComponent},
  {path:'cadastroempresa', component:CadastroEmpresaComponent},
  {path:'cadastroONG', component:CadastroONGComponent},
  {path:'cadastroreceptor',component:CadastroReceptorComponent},
  {path:'logar',component:LogarComponent},
  {path:'inicialempresa',component:InicialEmpresaComponent},
  {path:'inicialONG',component:InicialONGComponent},
  {path:'inicialreceptor',component:InicialReceptorComponent},
  {path:'catalogo',component:CatalogoComponent},
  {path:'contatarong',component:ContatarONGComponent},
  {path:'empresasparceiras',component:EmpresasParceirasComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
