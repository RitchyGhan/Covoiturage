import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { InscriptionTrajetComponent } from './inscription-trajet.component';

describe('InscriptionTrajetComponent', () => {
  let component: InscriptionTrajetComponent;
  let fixture: ComponentFixture<InscriptionTrajetComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ InscriptionTrajetComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(InscriptionTrajetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
