import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
  })

@Injectable()
export class ConstantsService {
    //readonly baseApiUrl: string = 'http://127.0.0.1:8000/api/';
    readonly baseApiUrl: string = 'http://cir3-frm-smf-ang-MC/api/';
    readonly defaultUserId: string  = '1';
}
