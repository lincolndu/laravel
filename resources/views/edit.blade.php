@extends('app')
@section('content')

 <form action="/update" method="post">

      <input type="hidden" name="_token" value="{{csrf_token()}}">

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>

    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="check email" value="" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Check Password" name="password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>

</form>

@endsection()