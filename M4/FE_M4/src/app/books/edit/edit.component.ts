import { Component, OnInit } from '@angular/core';
import { BookService } from '../book.service';
import { ActivatedRoute, Router } from '@angular/router';
import { Book } from '../book';
import { FormGroup, FormControl, Validators} from '@angular/forms';
@Component({
  selector: 'app-edit',
  templateUrl: './edit.component.html',
  styleUrls: ['./edit.component.css']
})
export class EditComponent implements OnInit {
  id!: number;
  book!: Book;
  form!: FormGroup;

  constructor(
    public bookService: BookService,
    private route: ActivatedRoute,
    private router: Router
  ) { }

  ngOnInit(): void {
    this.id = this.route.snapshot.params['bookId'];
    console.log(this.id);
    this.bookService.find(this.id).subscribe((data: any)=>{
      this.book = data;
    }); 
       
    this.form = new FormGroup({
      name: new FormControl('', [Validators.required]),
      author: new FormControl('', Validators.required)
    });
  }
  get f(){
    return this.form.controls;
  }
  submit(){
    console.log(this.form.value);
    this.bookService.update(this.id, this.form.value).subscribe((res:any) => {
         console.log('book updated successfully!');
         this.router.navigateByUrl('book/index');
    })
  }
}
