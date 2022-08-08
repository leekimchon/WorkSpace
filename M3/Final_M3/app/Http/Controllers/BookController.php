<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\Session;

class BookController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $books = Book::latest()->paginate(2);
        $params = [
            'books' => $books
        ];
        return view('index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request) {
        $book = Book::create([
            'name' => $request->name,
            'ISBN' => $request->isbn,
            'author' => $request->author,
            'category_id' => $request->category_id,
            'number_of_pages' => $request->number_of_pages,
            'publishing_year' => $request->publishing_year,
        ]);
        Session::flash('flash_message_successfully' , "Add $request->name successfully");
        return redirect()->route('index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $book = Book::find($id);
        $params = [
            'book' => $book
        ];
        return view('edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBookRequest $request, $id) {
        $book = Book::find($id);
        $book->update([
            'name' => $request->name,
            'ISBN' => $request->isbn,
            'author' => $request->author,
            'category_id' => $request->category_id,
            'number_of_pages' => $request->number_of_pages,
            'publishing_year' => $request->publishing_year,
        ]);
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('index');
    }
}
