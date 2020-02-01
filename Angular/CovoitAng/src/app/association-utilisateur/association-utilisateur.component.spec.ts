import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AssociationUtilisateurComponent } from './association-utilisateur.component';

describe('AssociationUtilisateurComponent', () => {
  let component: AssociationUtilisateurComponent;
  let fixture: ComponentFixture<AssociationUtilisateurComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AssociationUtilisateurComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AssociationUtilisateurComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
