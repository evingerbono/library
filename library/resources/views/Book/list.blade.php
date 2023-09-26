@foreach ($book as $book)
    <form action="/api/book/list" method="GET">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <p>{{$book->author}}</p>
        <p>{{$book->title}}</p>
        <p>{{$book->pieces}}</p>
    </div>
     </form>
@endforeach