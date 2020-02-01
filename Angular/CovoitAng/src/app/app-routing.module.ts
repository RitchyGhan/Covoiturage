import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import  {RechercheTrajetComponent} from './recherche-trajet/recherche-trajet.component';
import  {TrajetVueComponent} from './trajet-vue/trajet-vue.component';
import  {AssociationUtilisateurComponent} from './association-utilisateur/association-utilisateur.component';
import  {CreeTrajetComponent} from './cree-trajet/cree-trajet.component';
import  {CovoiturageComponent} from './covoiturage/covoiturage.component';
<<<<<<< HEAD
import  {ProfilComponent} from './profil/profil.component';
import  {ModifProfilComponent} from './modif-profil/modif-profil.component';

=======
import  {HomeComponent} from './home/home.component';
>>>>>>> cbranch

const routes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'recherche_trajet', component: RechercheTrajetComponent },
  { path: 'trajet/:id_trajet', component: TrajetVueComponent },
  { path: 'association_trajet/:id_utilisateur', component: AssociationUtilisateurComponent },
  { path: 'cree_trajet', component: CreeTrajetComponent},
  { path: 'covoiturage', component: CovoiturageComponent},
  { path: 'profil', component: ProfilComponent},
  { path: 'modif-profil', component: ModifProfilComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
