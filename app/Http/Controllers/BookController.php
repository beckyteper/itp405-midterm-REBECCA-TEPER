<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Publisher;
use DB;

class BookController extends Controller
{
    //Question 2
    public function index() {
        $books = Book::with('author', 'publisher')->get();

        return view('books', [
            'books' => $books
        ]);
    }

    //Question 1
    public function showReviews($bookID) {
        $books = DB::select('select books.title, reviews.headline, reviews.body, reviews.rating, authors.first_name, authors.last_name, publishers.name AS publisher_name from books, reviews, authors, publishers where books.id = reviews.book_id and books.author_id = authors.id and books.publisher_id = publishers.id and books.id = ?', [$bookID]);

        return $books;
    }
}
