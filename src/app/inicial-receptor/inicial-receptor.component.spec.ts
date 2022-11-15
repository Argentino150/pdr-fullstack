import { ComponentFixture, TestBed } from '@angular/core/testing';

import { InicialReceptorComponent } from './inicial-receptor.component';

describe('InicialReceptorComponent', () => {
  let component: InicialReceptorComponent;
  let fixture: ComponentFixture<InicialReceptorComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ InicialReceptorComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(InicialReceptorComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
