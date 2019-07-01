@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-content-center">
        <div class="col text-center">
            <h2>Search for a book</h2>
        </div>

    </div>

    <div class="row">
        <div class="col wrap">
            <form method="get" action="/search">
                <div class="search">
                    <input type="text" class="searchTerm" placeholder="Title,author" name="search">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    @if(isset($posts->items) && !empty($posts))
        <div class="row">
            <div class="col">
                @foreach($posts->items as $book)
                    @component('elements.book',['book' => $book])
                    @endcomponent
                @endforeach
            </div>
        </div>
    @endif
</div>

@endsection
