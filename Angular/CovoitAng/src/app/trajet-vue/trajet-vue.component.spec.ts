import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { TrajetVueComponent } from './trajet-vue.component';

describe('TrajetVueComponent', () => {
  let component: TrajetVueComponent;
  let fixture: ComponentFixture<TrajetVueComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ TrajetVueComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(TrajetVueComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
