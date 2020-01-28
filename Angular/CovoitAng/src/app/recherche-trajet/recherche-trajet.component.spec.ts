import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { RechercheTrajetComponent } from './recherche-trajet.component';

describe('RechercheTrajetComponent', () => {
  let component: RechercheTrajetComponent;
  let fixture: ComponentFixture<RechercheTrajetComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ RechercheTrajetComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(RechercheTrajetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
