import {Injectable} from '@angular/core';
import {HttpEvent, HttpHandler, HttpHeaders, HttpInterceptor, HttpRequest} from '@angular/common/http';
import {Observable} from 'rxjs';

@Injectable()
export class HttpDefaultRequestInterceptor implements HttpInterceptor {
  intercept(request: HttpRequest<any>, next: HttpHandler): Observable<HttpEvent<any>> {

    request.clone({
      setHeaders: {
        'Content-Type': 'application/json',
        Accept: 'application/ld+json'
    }
    });

    return next.handle(request);
  }
}
