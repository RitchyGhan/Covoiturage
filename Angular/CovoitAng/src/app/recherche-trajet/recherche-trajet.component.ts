import { Component, OnInit } from '@angular/core';
import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-recherche-trajet',
  templateUrl: './recherche-trajet.component.html',
  styleUrls: ['./recherche-trajet.component.css']
})
@Injectable()
export class RechercheTrajetComponent {

  constructor(private http: HttpClient) { }
  valueRetour: any;

  ngAfterViewInit() {
    this.doGET();
  }

  //recuperation information du trajet
  doGET(){
    console.log('GET');
    let url = 'http://127.0.0.1:8000/api/trajet';
    this.http.get<any[]>(url).subscribe((response) => {
      this.valueRetour = response;
    },
    (error) => {
      console.log('Erreur ! : ' + error);
    });

  }

}
