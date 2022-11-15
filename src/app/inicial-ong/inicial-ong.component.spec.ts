import { ComponentFixture, TestBed } from '@angular/core/testing';

import { InicialONGComponent } from './inicial-ong.component';

describe('InicialONGComponent', () => {
  let component: InicialONGComponent;
  let fixture: ComponentFixture<InicialONGComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ InicialONGComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(InicialONGComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
