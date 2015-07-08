@extends('app')
@section('content')

<div class="col-lg-8 col-lg-offset-2">
    <form action="/add_post" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="title" class="form-control" name="title" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <label>Photo</label>
            <input type="file" class="form-control" name="photo">
        </div>
        <button type="submit" class="btn btn-default">Publish</button>
    </form>
</div>

@endsection