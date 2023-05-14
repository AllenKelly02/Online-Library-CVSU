<?php

namespace App\Http\Controllers\User;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BookIssuing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $books = Book::with('image')->get();

        $totalBooks = $books->count();

        $user = Auth::user();

        $totalBorrowedBooks = $user->book_issuing()->where('return_date', null)->count();

        $totalBorrowedHistory = $user->book_issuing()->where('return_date', '!=', null)->count();

        return view('layouts.User.Books.index', compact(['books', 'totalBooks', 'totalBorrowedBooks', 'totalBorrowedHistory']));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::with('image')->where('id', $id)->first();

        return view('layouts.User.Books.show', compact(['book']));
    }

    public function borrow(string $id)
    {


        $book = Book::find($id);

        BookIssuing::create([
            'book_id' => $book->id,
            'user_id' => Auth::user()->id,
            'borrowed_date' => now()
        ]);


        return back()->with(['message' => 'book Borrowed at ' . now()]);
    }
    public function borrowList(){


        $books = Auth::user()->book_issuing()->where('return_date', null)->get();


        return view('layouts.User.Books.borrowed', compact(['books']));


    }
    public function backBorrowedBook(string $id){

        $book = BookIssuing::find($id);


        $book->update([
            'return_date' => now()
        ]);

        return back()->with(['message' => 'Book has return at ' . now()]);
    }
    public function borrowedHistory (){

        $books = Auth::user()->book_issuing()->where('return_date', '!=', null)->get();


        return view('layouts.User.Books.history', compact(['books']));

    }
}
