import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ContatarONGComponent } from './contatar-ong.component';

describe('ContatarONGComponent', () => {
  let component: ContatarONGComponent;
  let fixture: ComponentFixture<ContatarONGComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ContatarONGComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ContatarONGComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
