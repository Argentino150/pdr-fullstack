import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { InicialComponent } from './inicial/inicial.component';
import { CadastroEmpresaComponent } from './cadastro-empresa/cadastro-empresa.component';
import { CadastroONGComponent } from './cadastro-ong/cadastro-ong.component';
import { CadastroReceptorComponent } from './cadastro-receptor/cadastro-receptor.component';
import { LogarComponent } from './logar/logar.component';
import { InicialEmpresaComponent } from './inicial-empresa/inicial-empresa.component';
import { InicialONGComponent } from './inicial-ong/inicial-ong.component';
import { InicialReceptorComponent } from './inicial-receptor/inicial-receptor.component';
import { CatalogoComponent } from './catalogo/catalogo.component';
import { ContatarONGComponent } from './contatar-ong/contatar-ong.component';
import { EmpresasParceirasComponent } from './empresas-parceiras/empresas-parceiras.component';

@NgModule({
  declarations: [
    AppComponent,
    InicialComponent,
    CadastroEmpresaComponent,
    CadastroONGComponent,
    CadastroReceptorComponent,
    LogarComponent,
    InicialEmpresaComponent,
    InicialONGComponent,
    InicialReceptorComponent,
    CatalogoComponent,
    ContatarONGComponent,
    EmpresasParceirasComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
