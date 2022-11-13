import {Component, OnInit, ViewChild} from '@angular/core';
import * as events from "events";
import {BehaviorSubject} from "rxjs";

@Component({
  selector: 'app-information',
  templateUrl: './information.component.html',
  styleUrls: ['./information.component.css']
})
export class InformationComponent implements OnInit {
  height = 0;
  @ViewChild('section', { static: false }) private section: { nativeElement: { children: { offsetHeight: any; }[]; getBoundingClientRect: () => any; }; } | undefined;
  first = false
  // @ts-ignore
  currentSection: BehaviorSubject<String> = new BehaviorSubject('home');

  sections: string[] = ['text1', 'text2','text3', 'avantage', 'text-specificite', 'contenu']

  constructor() {
  }

  ngOnInit() {
    // @ts-ignore
    window.addEventListener('scroll', this.scroll, true);
  }

  scroll = (event: events): void => {
    const viewHeight = window.innerHeight;
    for (var section of this.sections) {

      const element = document.getElementById(section);

      if (element != null) {
        const rect = element.getBoundingClientRect();
        console.log(rect.y)
        if ((rect.top >= 0 && rect.top < viewHeight / 2)) {
          console.log(element)
          element.style.opacity = '1';
          element.style.removeProperty('font-size')
          this.currentSection.next(section);
        }
        else {
          element.style.opacity = '0';
          element.style.fontSize = '1';
          this.currentSection.next(section);
        }
      } else {
      }
    }
  };

}
