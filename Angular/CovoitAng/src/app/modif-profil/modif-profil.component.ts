import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { FormBuilder, FormGroup, Validators} from '@angular/forms';
import { Injectable } from '@angular/core';
import { ConstantsService } from '../common/services/constants.service';


@Component({
  selector: 'app-modif-profil',
  templateUrl: './modif-profil.component.html',
  styleUrls: ['./modif-profil.component.css']
})
@Injectable()
export class ModifProfilComponent implements OnInit {

  userForm: FormGroup;
  utilisateur: any;
  ville: any;
  categorie: any;
  baseApiUrl:string;
  id_user:string;	

  constructor(private fb: FormBuilder, private http: HttpClient, private _constant: ConstantsService) {
    this.id_user = this._constant.defaultUserId;
    this.baseApiUrl = this._constant.baseApiUrl;
   }

  ngOnInit() {
    //initialisation du formulaire
    this.userForm = this.fb.group({
      nom : this.fb.control(''),
      prenom : this.fb.control(''),
      mail : this.fb.control(''),
      tel : this.fb.control(''),
      adresse : this.fb.control(''),
      id_ville : this.fb.control(''),
      id_categorie : this.fb.control('')
      });
      this.doGET();

  }
  
  
  doGET(){
    //recuperation des information utilisateur
    let url = this.baseApiUrl+'utilisateur/' + this.id_user;
    this.http.get<any[]>(url).subscribe((response) => {
      this.utilisateur = response[0];
      //insertion des valeur dans les champ comme valeur par default dans le formulaire
      this.userForm = this.fb.group({
      nom : this.fb.control(this.utilisateur.nom),
      prenom : this.fb.control(this.utilisateur.prenom),
      mail : this.fb.control(this.utilisateur.mail),
      tel : this.fb.control(this.utilisateur.telephone),
      adresse : this.fb.control(this.utilisateur.adresse),
      id_ville : this.fb.control(this.utilisateur.ville_utilisateur.id),
      id_categorie : this.fb.control(this.utilisateur.categorie_utilisateur.id)
      });
    
      console.log(this.utilisateur);
    },
    (error) => {
      console.log('Erreur ! : ' + error);
    
    });
    
    //recuperation des villes
    url = this.baseApiUrl+'ville';
    this.http.get<any[]>(url).subscribe((response) => {
      this.ville = response;
    },
    (error) => {
      console.log('Erreur ! : ' + error);
    });
    
    //recuperation des categorie
    url = this.baseApiUrl+'categorie';
    this.http.get<any[]>(url).subscribe((response) => {
      this.categorie = response;
    },
    (error) => {
      console.log('Erreur ! : ' + error);
    });

  }
  
  modif()
  {
    var formData: any = new FormData();
    //recuperation des valeurs saisie par l'utilisateur dans le formulaire 
    formData.append("id",1);
    formData.append("nom",this.userForm.value['nom']);
    formData.append("prenom",this.userForm.value['prenom']);
    formData.append("password", this.utilisateur.password);
    formData.append("mail",this.userForm.value['mail']);
    formData.append("telephone",this.userForm.value['tel']);
    formData.append("adresse",this.userForm.value['adresse']);
    formData.append("idVille",this.userForm.value['id_ville']);
    formData.append("idCategorie",this.userForm.value['id_categorie']);
  
    //envoie des donnee en Backoffice sur l'API avec une methode POST
    this.http.post(this.baseApiUrl+'utilisateur/modify', formData).subscribe(
      (response) => console.log(response),
      (error) => console.log(error)
    );
  
  }
  

}
