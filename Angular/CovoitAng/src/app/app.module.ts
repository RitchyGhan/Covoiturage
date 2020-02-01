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
<<<<<<< HEAD
import { ConstantsService } from './common/services/constants.service';
import { CovoiturageComponent } from './covoiturage/covoiturage.component';
=======
import { ModifProfilComponent } from './modif-profil/modif-profil.component';
>>>>>>> f820c5b76f17bc843ed86a6c8852c88511892071

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
<<<<<<< HEAD
    CovoiturageComponent
=======
    ModifProfilComponent
>>>>>>> f820c5b76f17bc843ed86a6c8852c88511892071
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
