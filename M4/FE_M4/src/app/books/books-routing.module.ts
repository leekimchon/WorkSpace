import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { IndexComponent } from './index/index.component';
import { ViewComponent } from './view/view.component';
import { CreateComponent } from './create/create.component';
import { EditComponent } from './edit/edit.component';

const routes: Routes = [
  { path: 'book', redirectTo: 'books/index', pathMatch: 'full'},
  { path: 'book/index', component: IndexComponent },
  { path: 'book/:bookId/view', component: ViewComponent },
  { path: 'book/create', component: CreateComponent },
  { path: 'book/:bookId/edit', component: EditComponent } 
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class BooksRoutingModule { }
