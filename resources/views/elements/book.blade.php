<div class="row">
    <div class="col border rounded mt-3 pt-2 pb-2">
        <div class="row">
            <div class="col-xs-4 col-lg-2">
                <div class="row justify-content-center align-self-center">
                    <div class="col-xs-2 col-lg-12 d-flex justify-content-center">
                        @if(isset($book->volumeInfo->imageLinks->smallThumbnail))
                            <img src="{{$book->volumeInfo->imageLinks->smallThumbnail}}" height="inherit" width="inherit">
                        @else
                            <img src="/png/defaultBookImg.png" height="250">
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 ml-3">
                        @if(isset($book->volumeInfo->categories))
                            @foreach($book->volumeInfo->categories as $category)
                                <span class="badge badge-info">{{$category}}</span>
                            @endforeach
                        @else
                            <span class="badge badge-warning">No Category</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xs-8 col-lg-10">
                <div class="row">
                    <div class="col-12">
                        @if(isset($book->volumeInfo->title))
                            <h2>{{$book->volumeInfo->title}}</h2>
                        @else
                            <h2>No Title</h2>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @if(isset($book->volumeInfo->description))
                            <div class="border rounded">
                                <p class="m-1">{{$book->volumeInfo->description}}</p>
                            </div>
                        @else
                            <div class="border rounded">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                    type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                    passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-9 mb-2">
                        @if(isset($book->volumeInfo->authors))
                            @foreach($book->volumeInfo->authors as $author)
                                <span class="badge badge-success">{{$author}}</span>
                            @endforeach
                        @else
                            <span class="badge badge-danger">No Author</span>
                        @endif
                        @if(isset($book->volumeInfo->publisher))
                                <span class="badge badge-warning">{{$book->volumeInfo->publisher}}</span>
                        @else
                                <span class="badge badge-warning">No Publisher</span>
                        @endif
                    </div>
                    <div class="col-xs-12 col-lg-3 mt-2 d-flex justify-content-center">
                        <div class="row">
                            <div class="col">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Add
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <bookshelf-form v-bind:Book="{{json_encode($book)}}">


                                        </bookshelf-form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
