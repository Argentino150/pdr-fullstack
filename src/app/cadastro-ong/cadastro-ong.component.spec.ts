import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CadastroONGComponent } from './cadastro-ong.component';

describe('CadastroONGComponent', () => {
  let component: CadastroONGComponent;
  let fixture: ComponentFixture<CadastroONGComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CadastroONGComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CadastroONGComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
