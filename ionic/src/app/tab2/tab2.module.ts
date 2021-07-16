import { IonicModule } from '@ionic/angular';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Tab2Page } from './tab2.page';
import {Ng2SearchPipeModule} from "ng2-search-filter";
import {Tab2PageRoutingModule} from "./tab2-routing.module";

@NgModule({
  imports: [
    IonicModule,
    CommonModule,
    FormsModule,
    Ng2SearchPipeModule,
    Tab2PageRoutingModule,
  ],
  declarations: [Tab2Page]
})
export class Tab2PageModule {}
