import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { FormBuilder, FormGroup, Validators} from '@angular/forms';
import { DatePipe } from '@angular/common'


@Component({
  selector: 'app-trajet-vue',
  templateUrl: './trajet-vue.component.html',
  styleUrls: ['./trajet-vue.component.css']
})
@Injectable()
export class TrajetVueComponent implements OnInit {

  id: any;
  valueRetour: any;
  inscriptionMessage: any;
  userForm : FormGroup;

  constructor(
    private route: ActivatedRoute,
    private fb: FormBuilder,
    private http: HttpClient,
    public datepipe: DatePipe
  ) { 
  }
  

  ngOnInit() {
    this.route.paramMap.subscribe(params => {
      this.id = +params.get("id_trajet")
    })

    this.userForm = this.fb.group({
      created : this.fb.control(''),
      updated : this.fb.control(''),
      idUtilisateur : this.fb.control(''),
      idCo2 : this.fb.control(''),
      idType_covoit : this.fb.control(''),
      idTrajet : this.fb.control('')
    });
  }

  ngAfterViewInit() {
    this.doGET();
  }
  

  doGET(){
    console.log('GET');
    let url = 'http://127.0.0.1:8000/api/trajet/'+this.id;
    this.http.get<any[]>(url).subscribe((response) => {
      this.valueRetour = response;
    },
    (error) => {
      console.log('Erreur ! : ' + error);
    });

    console.log(this.valueRetour);
  }

  register(){

    var formData:any = new FormData();

    formData.append("created", this.created);
    formData.append("updated", this.created);
    formData.append("idUtilisateur", this.id_utilisateur);
    formData.append("idCo2", this.id_co2);
    formData.append("idTypeCovoit", this.id_type_covoit);
    formData.append("idTrajet", this.id);

    console.log(new Date('2018-03-24'));
    this.http.post('http://127.0.0.1:8000/api/covoiturage/new', formData).subscribe(
      (response) => console.log(response),
      (error) => console.log(error)
    );
    this.inscriptionMessage = "register ok";
  }

  //valeur formulaire pour inscription
  now = new Date();
  created = this.datepipe.transform(this.now, "y-m-d hh:MM:ss");
  //created = this.now.toISOString();
  id_utilisateur = 1;
  id_co2 = 1;
  id_type_covoit = 2;
  id_trajet = this.id
}
