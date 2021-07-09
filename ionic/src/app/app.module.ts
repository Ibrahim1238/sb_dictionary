import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouteReuseStrategy } from '@angular/router';

import { IonicModule, IonicRouteStrategy } from '@ionic/angular';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import {HTTP_INTERCEPTORS, HttpClientModule} from "@angular/common/http";
import {HttpDefaultRequestInterceptor} from "./interceptor/http-default-request-interceptor.service";
import {WordService} from "./services/word.service";
import {Ng2SearchPipeModule} from "ng2-search-filter";

@NgModule({
  declarations: [
      AppComponent,
  ],
  entryComponents: [],
  imports: [
      BrowserModule,
       IonicModule.forRoot(),
      AppRoutingModule,
      HttpClientModule,
      Ng2SearchPipeModule,

  ],
  providers: [
      { provide: RouteReuseStrategy, useClass: IonicRouteStrategy },
      WordService,
    {provide: HTTP_INTERCEPTORS, useClass: HttpDefaultRequestInterceptor, multi: true},
  ],
  bootstrap: [AppComponent],
})
export class AppModule {}
