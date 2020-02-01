import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { RechercheTrajetComponent } from './recherche-trajet/recherche-trajet.component';
import { CreeTrajetComponent } from './cree-trajet/cree-trajet.component';
import { InscriptionTrajetComponent } from './inscription-trajet/inscription-trajet.component';
import { ProfilComponent } from './profil/profil.component';
import { HomeComponent } from './home/home.component';
import { HttpClientModule } from '@angular/common/http';
import { TrajetVueComponent } from './trajet-vue/trajet-vue.component';
import { AssociationUtilisateurComponent } from './association-utilisateur/association-utilisateur.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { DatePipe  } from '@angular/common';
import { ConstantsService } from './common/services/constants.service';
import { CovoiturageComponent } from './covoiturage/covoiturage.component';
import { ModifProfilComponent } from './modif-profil/modif-profil.component';

@NgModule({
  declarations: [
    AppComponent,
    RechercheTrajetComponent,
    CreeTrajetComponent,
    InscriptionTrajetComponent,
    ProfilComponent,
    HomeComponent,
    TrajetVueComponent,
    AssociationUtilisateurComponent,
    CovoiturageComponent,
    ModifProfilComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule
  ],
  providers: [DatePipe,ConstantsService],
  bootstrap: [AppComponent]
})
export class AppModule { }
