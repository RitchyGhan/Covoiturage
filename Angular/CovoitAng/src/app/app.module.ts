import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { RechercheTrajetComponent } from './recherche-trajet/recherche-trajet.component';
import { CreeTrajetComponent } from './cree-trajet/cree-trajet.component';
import { InscriptionTrajetComponent } from './inscription-trajet/inscription-trajet.component';
import { ProfilComponent } from './profil/profil.component';
import { HomeComponent } from './home/home.component';

@NgModule({
  declarations: [
    AppComponent,
    RechercheTrajetComponent,
    CreeTrajetComponent,
    InscriptionTrajetComponent,
    ProfilComponent,
    HomeComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
