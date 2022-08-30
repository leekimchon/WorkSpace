import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
    
import {  Observable, throwError } from 'rxjs';
import { catchError } from 'rxjs/operators';
import { Book } from './book';

@Injectable({
  providedIn: 'root'
})
export class BookService {
  private apiURL = "http://127.0.0.1:8000/api";
  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  }

  constructor(private httpClient: HttpClient) { }
  getAll(){
    return this.httpClient.get(this.apiURL + '/students/')
  }
  create(book: any){
    return this.httpClient.post(this.apiURL + '/student/', book, this.httpOptions)
  }  
  find(id: any){
    return this.httpClient.get(this.apiURL + '/student/' + id)
  }
    
  update(id: any, student:any){
    return this.httpClient.put(this.apiURL + '/student/' + id, student, this.httpOptions)
  }
    
  delete(id:any){
    return this.httpClient.delete(this.apiURL + '/student/' + id, this.httpOptions)
  }
}
