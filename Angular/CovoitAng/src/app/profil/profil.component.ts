import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { FormBuilder, FormGroup, Validators} from '@angular/forms';
import { Injectable } from '@angular/core';
import { ConstantsService } from '../common/services/constants.service';


@Component({
  selector: 'app-profil',
  templateUrl: './profil.component.html',
  styleUrls: ['./profil.component.css']
})
@Injectable()

export class ProfilComponent implements OnInit {

  utilisateur: any;
  baseApiUrl:string;
  id_user:string;	

  //recuperation des constante globale
  constructor(
    private http: HttpClient,
    private _constant: ConstantsService) {
    this.id_user = this._constant.defaultUserId;
      this.baseApiUrl = this._constant.baseApiUrl;
      
  }

  ngOnInit() {
      this.doGET();
  }
  

  ngAfterViewInit() {
  }

  doGET(){
    //recuperation des information de l'utilisateur connecter
    let url = this.baseApiUrl+'utilisateur/' + this.id_user;
    this.http.get<any[]>(url).subscribe((response) => {
      this.utilisateur = response[0];
      console.log(this.utilisateur);
    },
    (error) => {
      console.log('Erreur ! : ' + error);
    });

  }
}
