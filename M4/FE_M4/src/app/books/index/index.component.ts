import { Component, OnInit } from '@angular/core';
import { Book } from '../book';
import { BookService } from '../book.service';

@Component({
  selector: 'app-index',
  templateUrl: './index.component.html',
  styleUrls: ['./index.component.css']
})
export class IndexComponent implements OnInit {
  books: Book[] = [];
  constructor(public bookService: BookService) { }

  ngOnInit(): void {
    this.bookService.getAll().subscribe((data: any) => {
      this.books = data;
    })
  }
  deleteStudent(id: any) {
    this.bookService.delete(id).subscribe(res => {
      this.books = this.books.filter(item => item.id !== id);
      console.log('Post deleted successfully!');
    })
  }

}
