import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { FormBuilder, FormGroup, Validators} from '@angular/forms';
import { Injectable } from '@angular/core';
import { ConstantsService } from '../common/services/constants.service';

@Component({
  selector: 'app-cree-trajet',
  templateUrl: './cree-trajet.component.html',
  styleUrls: ['./cree-trajet.component.css'],
})
@Injectable()
export class CreeTrajetComponent implements OnInit {

  userForm: FormGroup;
  ville : any;
  possede : any;
  type_trajet : any;
  id_user:string;	
  baseApiUrl:string;
  

//ajout du form builder,de httpclient et des constantes global
  constructor(
    private fb: FormBuilder,
    private http: HttpClient,
    private _constant: ConstantsService
    ) {
      this.id_user = this._constant.defaultUserId;
      this.baseApiUrl = this._constant.baseApiUrl;
     }

     //initialisation du formulaire dans userForm
  ngOnInit() {
    this.userForm = this.fb.group({
      date_depart : this.fb.control(''),
      heure_depart : this.fb.control(''),
      nb_place : this.fb.control(''),
      duree : this.fb.control(''),
      commentaire : this.fb.control('',[Validators.required,Validators.minLength(2)]),
      nb_km : this.fb.control(''),
      id_ville : this.fb.control(''),
      id_ville_ville_arrivee : this.fb.control(''),
      id_possede : this.fb.control(''),
      id_type_trajet : this.fb.control('')
    })
  }

  //faire les requette GET
  ngAfterViewInit() {
    this.doGET();
  }

  doGET(){
    //recuperation des villes
    console.log('GET');
    let url = this.baseApiUrl+'ville';
    this.http.get<any[]>(url).subscribe((response) => {
      this.ville = response;
    },
    (error) => {
      console.log('Erreur ! : ' + error);
    });

    //recuperation des possede de l'utilisateur
    console.log('GET');
    url = this.baseApiUrl+'possede/utilisateur/'+this.id_user;
    this.http.get<any[]>(url).subscribe((response) => {
      this.possede = response;
    },
    (error) => {
      console.log('Erreur ! : ' + error);
    });

    //recuperation des type de trajet
    console.log('GET');
    url = this.baseApiUrl+'type_trajet';
    this.http.get<any[]>(url).subscribe((response) => {
      this.type_trajet = response;
    },
    (error) => {
      console.log('Erreur ! : ' + error);
    });

  }

  // envoie de formulaire
  register(){
    console.log(this.userForm.value);

    var formData: any = new FormData();
    //ajout des valeur saisie dans formData
    formData.append("dateDepart",this.userForm.value['date_depart']);
    formData.append("heureDepart",this.userForm.value['heure_depart']);
    formData.append("nbPlace",this.userForm.value['nb_place']);
    formData.append("duree",this.userForm.value['duree']);
    formData.append("commentaire",this.userForm.value['commentaire']);
    formData.append("nbKm",this.userForm.value['nb_km']);
    formData.append("idVille",this.userForm.value['id_ville']);
    formData.append("idVilleVilleArrivee",this.userForm.value['id_ville_ville_arrivee']);
    formData.append("idPossede",this.userForm.value['id_possede']);
    formData.append("idTypeTrajet",this.userForm.value['id_type_trajet']);

    //envoie des donnee en Backoffice sur l'API avec une methode POST
    this.http.post(this.baseApiUrl+'trajet/new', formData).subscribe(
      (response) => console.log(response),
      (error) => console.log(error)
    );

  }

}
