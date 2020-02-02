import { Component, OnInit } from '@angular/core';
import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { ConstantsService } from '../common/services/constants.service';

@Component({
  selector: 'app-covoiturage',
  templateUrl: './covoiturage.component.html',
  styleUrls: ['./covoiturage.component.css']
})

@Injectable()
export class CovoiturageComponent{

  valueRetour: any;
  baseApiUrl:string;
  id_user:string;	

  //recuperation des constante globale
  constructor(
    private http: HttpClient,
    private _constant: ConstantsService) {
      this.id_user = this._constant.defaultUserId;
      this.baseApiUrl = this._constant.baseApiUrl;
     }
  

  ngAfterViewInit() {
    this.doGET();
  }

  //recuperation information des covoit associer a l'utilisateur connecter
  doGET(){
    console.log('GET');
    let url = this.baseApiUrl+'covoiturage/utilisateur/'+this.id_user;
    this.http.get<any[]>(url).subscribe((response) => {
      this.valueRetour = response;
    },
    (error) => {
      console.log('Erreur ! : ' + error);
    });
}
}
