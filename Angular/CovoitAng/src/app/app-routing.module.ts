import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import  {RechercheTrajetComponent} from './recherche-trajet/recherche-trajet.component';
import  {TrajetVueComponent} from './trajet-vue/trajet-vue.component';
import  {AssociationUtilisateurComponent} from './association-utilisateur/association-utilisateur.component';
import  {CreeTrajetComponent} from './cree-trajet/cree-trajet.component';
import  {ProfilComponent} from './profil/profil.component';
import  {ModifProfilComponent} from './modif-profil/modif-profil.component';


const routes: Routes = [
  { path: 'recherche_trajet', component: RechercheTrajetComponent },
  { path: 'trajet/:id_trajet', component: TrajetVueComponent },
  { path: 'association_trajet/:id_utilisateur', component: AssociationUtilisateurComponent },
  { path: 'cree_trajet', component: CreeTrajetComponent},
  { path: 'profil', component: ProfilComponent},
  { path: 'modif-profil', component: ModifProfilComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
