import {ComponentFixture, TestBed} from '@angular/core/testing';

import {TexteSectionComponent} from './texte-section.component';

describe('TexteSectionComponent', () => {
  let component: TexteSectionComponent;
  let fixture: ComponentFixture<TexteSectionComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TexteSectionComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(TexteSectionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
