import { Component } from '@angular/core';
import {IWord} from "../models/word";
import {WordService} from "../services/word.service";


@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss']
})
export class Tab2Page {

  words: IWord[] = [];
  filterTerm: string;


  constructor(private wordService: WordService) {
    console.log(1);
    this.wordService.getWordsList().subscribe(words => {
      console.log(words);
      this.words = words['hydra:member'];

    });
  }



}
