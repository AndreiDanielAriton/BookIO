@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @foreach($userBookshelves as $userBookshelf)

        <div class="col-12">
            <div class="row">
                <div class="col">
                    <h3>{{$userBookshelf->title}}</h3>
                </div>
            </div>
            <div class="row">
                @foreach($userBookshelf->collection as $book)
                    <div class="col-4">
                        <div class="row">
                            <div class="col">
                               <img src="{{$book->image_url}}" height="250px" width="200px">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                               <span class="badge badge-info">{{$book->title}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
