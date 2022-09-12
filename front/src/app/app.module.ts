import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';


import { BannerComponent } from './componentes/compartido/banner/banner.component';
import { LoginComponent } from './componentes/publica/login/login.component';
import { FooterComponent } from './componentes/compartido/footer/footer.component';

@NgModule({
  declarations: [
    AppComponent,
    BannerComponent,
    LoginComponent,
    FooterComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
