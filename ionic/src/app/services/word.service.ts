import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {environment} from '../../environments/environment';
import {IWord} from "../models/IWord";
import { Observable, of } from 'rxjs';
import { catchError, tap } from 'rxjs/operators';
@Injectable({
  providedIn: 'root'
})
export class WordService {

  constructor(  private http: HttpClient) {

  }

  public getWordsList(): Observable<IWord[]> {
    console.log(`${environment.apiLocation}api/words?page=1`);
    return this.http.get<IWord[]>(`${environment.apiLocation}api/words?page=1`);
  }

  public getWord(id: string): Observable<IWord[]> {
    console.log(`${environment.apiLocation}api/words/${id}`);
    return this.http.get<IWord[]>(`${environment.apiLocation}api/words/${id}`);
  }

}
