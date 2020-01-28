import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CreeTrajetComponent } from './cree-trajet.component';

describe('CreeTrajetComponent', () => {
  let component: CreeTrajetComponent;
  let fixture: ComponentFixture<CreeTrajetComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CreeTrajetComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CreeTrajetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
