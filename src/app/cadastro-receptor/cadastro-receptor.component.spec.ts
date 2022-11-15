import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CadastroReceptorComponent } from './cadastro-receptor.component';

describe('CadastroReceptorComponent', () => {
  let component: CadastroReceptorComponent;
  let fixture: ComponentFixture<CadastroReceptorComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CadastroReceptorComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CadastroReceptorComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
