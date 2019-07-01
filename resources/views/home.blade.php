@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @foreach($userBookshelves as $userBookshelf)
        @if($userBookshelf->collection->count() > 0)
            <div class="col-12 mb-1 mt-1">
                <div class="row justify-content-center">
                    <div class="col-1">
                        <h3>{{$userBookshelf->title}}</h3>
                    </div>
                </div>
                <div class="row border rounded pt-3 pb-3">
                    @foreach($userBookshelf->collection as $book)
                            <div class="col-3 mt-2">
                                <div class="row justify-content-center">
                                    <div class="col">
                                       <img src="{{$book->image_url}}" height="250px" width="200px">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col">
                                       <span class="badge badge-info">{{$book->title}}</span>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <a href="{{route('book.destroy',$book->id)}}">
                                            <button type="button" class="btn btn-danger">
                                                Delete
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                    @endforeach
                </div>
            </div>
        @endif
    @endforeach
    </div>
</div>
@endsection
