import { Component, OnInit } from '@angular/core';
import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { ConstantsService } from '../common/services/constants.service';

@Component({
  selector: 'app-recherche-trajet',
  templateUrl: './recherche-trajet.component.html',
  styleUrls: ['./recherche-trajet.component.css']
})
@Injectable()
export class RechercheTrajetComponent {

  valueRetour: any;
  baseApiUrl:string;
  //recuperation des constante global
  constructor(
    private http: HttpClient,
    private _constant: ConstantsService) {
      this.baseApiUrl = this._constant.baseApiUrl;
     }
  

  ngAfterViewInit() {
    this.doGET();
  }

  
  doGET(){
    //recuperation information du trajet
    console.log('GET');
    let url = this.baseApiUrl+'trajet';
    this.http.get<any[]>(url).subscribe((response) => {
      this.valueRetour = response;
    },
    (error) => {
      console.log('Erreur ! : ' + error);
    });

  }

}
