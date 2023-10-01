<h1>Könyv törlése</h1>

<form action="/api/book/{{$book->book_id}}" method="POST">

    {{csrf_field()}}
    {{method_field('DELETE')}}
    <h2>Biztosan törölni szeretné ezt a könyvet?</h2>

    <p>
        Cím: {{ $book->title }} <br>
        Szerző: {{ $book->author }}
    </p>

    <button type="submit">Törlés</button>

</form>

@endsection