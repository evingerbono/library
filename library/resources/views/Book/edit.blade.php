<form action="/api/book/{{$book->book_id}}" method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="form-group">
        <input type="text" name="author" placeholder="Author" value="{{ $book->author }}">
    </div>

    <div class="form-group">
        <input type="text" name="title" placeholder="Title" value="{{ $book->title }}">
    </div>

    <div class="form-group">
        <input type="text" name="pieces" placeholder="Pieces" value="{{ $book->pieces }}">
    </div>
    <br>
    <input type="submit" class="btn btn-primary"></input>
</form>