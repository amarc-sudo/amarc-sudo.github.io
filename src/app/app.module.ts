import {NgModule} from '@angular/core';
import {BrowserModule} from '@angular/platform-browser';

import {AppComponent} from './app.component';
import {InformationComponent} from './information/information.component';
import {MenuComponent} from './information/menu/menu.component';
import {TexteSectionComponent} from './information/texte-section/texte-section.component';

@NgModule({
  declarations: [
    AppComponent,
    InformationComponent,
    MenuComponent,
    TexteSectionComponent
   ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
