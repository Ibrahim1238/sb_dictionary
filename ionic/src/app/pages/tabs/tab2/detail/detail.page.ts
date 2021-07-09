import { Component } from '@angular/core';
import {ActivatedRoute} from "@angular/router";
import {WordService} from "../../../../services/word.service";
import {IWord} from "../../../../models/IWord";


@Component({
  selector: 'app-detail',
  templateUrl: './detail.page.html',
  styleUrls: ['./detail.page.scss'],
})
export class DetailPage {
  id: string;
  words: IWord[];

  constructor(private route: ActivatedRoute,private WordService:WordService) {}

  ngOnInit() {
    this.id = this.route.snapshot.paramMap.get('id');
    this.WordService.getWord(this.id).subscribe(words => {
      console.log(words);
      this.words = words['hydra:member'];
    });
  }
}
