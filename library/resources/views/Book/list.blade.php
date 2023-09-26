@foreach ($books as $book)
    <form action="/api/book/list" method="GET">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <p>{{$szavak->author}}</p>
        <p>{{$szavak->title}}</p>
        <p>{{$szavak->pieces}}</p>
    </div>
     </form>
@endforeach