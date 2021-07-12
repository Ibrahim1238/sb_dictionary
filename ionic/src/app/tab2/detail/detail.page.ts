import { Component } from '@angular/core';
import {ActivatedRoute} from "@angular/router";
import {WordService} from "../../services/word.service";
import {IWord} from "../../models/word";
import {ISentence} from "../../models/sentence";


@Component({
  selector: 'app-detail',
  templateUrl: './detail.page.html',
  styleUrls: ['./detail.page.scss'],
})
export class DetailPage {
  id: string;
  word: IWord;
  sentences: ISentence[];

  constructor(private route: ActivatedRoute,private WordService:WordService) {}

  ngOnInit() {
    this.id = this.route.snapshot.paramMap.get('id');
    console.log('id', this.id);
    this.WordService.getWord(this.id).subscribe(word => {
      console.log('word', word);
      this.word = word;
    });
    this.WordService.getRelatedSentencesList(this.id).subscribe(sentences => {
      console.log('sentences', sentences['hydra:member']);
      this.sentences = sentences['hydra:member'];
    });
  }
}
