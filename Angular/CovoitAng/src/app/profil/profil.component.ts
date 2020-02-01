import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { FormBuilder, FormGroup, Validators} from '@angular/forms';
import { Injectable } from '@angular/core';


@Component({
  selector: 'app-profil',
  templateUrl: './profil.component.html',
  styleUrls: ['./profil.component.css']
})
@Injectable()

export class ProfilComponent implements OnInit {

  utilisateur: any;
  constructor(private http: HttpClient) { 
      
  }

  ngOnInit() {
      this.doGET();
  }
  

  ngAfterViewInit() {
  }

  doGET(){

    let id=1;

    let url = 'http://127.0.0.1:8000/api/utilisateur/' + id;
    this.http.get<any[]>(url).subscribe((response) => {
      this.utilisateur = response[0];
      console.log(this.utilisateur);
    },
    (error) => {
      console.log('Erreur ! : ' + error);
    });

  }
}
