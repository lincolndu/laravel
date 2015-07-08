@extends('app');
@section('content')

<form class="form-inline" action="/search" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <label for="exampleInputName2">Search Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputName2" placeholder="Search here">
  </div>
  <button type="submit" class="btn btn-default">Email search</button>
</form>



@endsection
