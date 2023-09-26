<form action="/api/book" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <input type="text" name="author" placeholder="Author">
    </div>
    <div class="form-group">
        <input type="text" name="title" placeholder="Title">
    </div>
    <div class="form-group">
        <input type="text" name="pieces" placeholder="Pieces">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">felvisz</button>
</form>