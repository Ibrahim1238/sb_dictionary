import { Component } from '@angular/core';
import {IWord} from "../models/word";
import {WordService} from "../services/word.service";
import {ActivatedRoute} from "@angular/router";
import {NavController} from "@ionic/angular";

@Component({
  selector: 'app-tab1',
  templateUrl: 'tab1.page.html',
  styleUrls: ['tab1.page.scss']
})
export class Tab1Page {
  word: IWord;
  id: string;
  date: string=new Date().toISOString().substring(0, 10);
  constructor(
      private route: ActivatedRoute,
      private wordService: WordService,
      private navCtrl: NavController
  ) {
    this.wordService.getDayWord(this.date).subscribe(words => {
      this.word = words['hydra:member'][0] ?? null;
      console.log('word', this.word );
      this.id = this.word.id.toString();
      console.log('id', this.id);
    });

  }

 goToDetailPage(){
    this.navCtrl.navigateForward(['/tabs/tab2', this.id]);
  }
}
