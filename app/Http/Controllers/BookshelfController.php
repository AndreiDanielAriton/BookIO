<?php

namespace App\Http\Controllers;

use App\Book;
use App\Bookshelf;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BookshelfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = request()->validate([
            'title' => 'required'
        ]);

        $bookInfo = request()->book;
        $book = new Book();
        $book->book_uid = $bookInfo['book']['id'];
        $book->title = $bookInfo['book']['volumeInfo']['title'] ?? 'No Title';
        $book->image_url = $bookInfo['book']['volumeInfo']['imageLinks']['smallThumbnail'] ?? '';
        $book->save();

        try {
            $savedBookshelf = auth()->user()->bookshelves()->create($data);
        }catch (\Illuminate\Database\QueryException $e) {
            $error_code = $e->errorInfo[1];
            if ($error_code == 19) {
                $bookshelf = DB::table('bookshelves')
                    ->where('title', $data['title'])
                    ->where('user_id', auth()->id())
                    ->get();

                $savedBookshelf = $bookshelf[0]->id;
            }
        }

        $book->library()->toggle($savedBookshelf);

        return response()->json(array('success' => true), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
