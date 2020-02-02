import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import  {RechercheTrajetComponent} from './recherche-trajet/recherche-trajet.component';
import  {TrajetVueComponent} from './trajet-vue/trajet-vue.component';
import  {AssociationUtilisateurComponent} from './association-utilisateur/association-utilisateur.component';
import  {CreeTrajetComponent} from './cree-trajet/cree-trajet.component';
<<<<<<< HEAD
import  {CovoiturageComponent} from './covoiturage/covoiturage.component';
=======
import  {ProfilComponent} from './profil/profil.component';
import  {ModifProfilComponent} from './modif-profil/modif-profil.component';

>>>>>>> f820c5b76f17bc843ed86a6c8852c88511892071

const routes: Routes = [
  { path: 'recherche_trajet', component: RechercheTrajetComponent },
  { path: 'trajet/:id_trajet', component: TrajetVueComponent },
  { path: 'association_trajet/:id_utilisateur', component: AssociationUtilisateurComponent },
  { path: 'cree_trajet', component: CreeTrajetComponent},
<<<<<<< HEAD
  { path: 'covoiturage', component: CovoiturageComponent}
=======
  { path: 'profil', component: ProfilComponent},
  { path: 'modif-profil', component: ModifProfilComponent},
>>>>>>> f820c5b76f17bc843ed86a6c8852c88511892071
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
