<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BookImage;
use App\Models\BookIssuing;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.Admin.books.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.Admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        $book = Book::create([
            'name' => $request->name,
            'description' => $request->description,
            'published_year' => $request->published_year
        ]);

        if ($request->file('image')) {

            $image = $request->file('image');

            $name = 'img-' . Str::slug(now()) . '.' . $request->image->extension();

            $path = 'public/image/';

            $image->storeAs($path, $name);

            BookImage::create([
                'url' => $name,
                'book_id' => $book->id
            ]);
        }

        return back()->with(['message' => 'Book Added Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::with('image')->where('id', $id)->first();

        $borrowed_history = BookIssuing::where('book_id', $book->id)->get();

        return view('layouts.Admin.books.show', compact(['book', 'borrowed_history']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::with('image')->where('id', $id)->first();


        return view('layouts.Admin.books.edit', compact(['book']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);

        if ($request->has('image')) {


            $image = $request->file('image');

            $name = 'img-' . Str::slug(now()) . '.' . $request->image->extension();

            $path = 'public/image/';

            $image->storeAs($path, $name);


            $book->image()->update([
                'url' => $name,
            ]);
        }

        $book->update([
            'name' => $request->name != null ?  $request->name : $book->name,
            'description' => $request->description != null ?  $request->description : $book->description,
            'published_year' => $request->published_year != null ? $request->published_year : $book->published_year
        ]);

        return back()->with(['message' => 'Data Update Success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);

        $book->image()->delete();

        $book->delete();

        return redirect(route('admin.books.list'));
    }
    public function list()
    {


        $books = Book::with('image')->get();

        return view('layouts.Admin.books.list', compact(['books']));
    }
}
