@extends('app')
@section('content')

 <form action="/edit/<?php echo $id->id; ?>" method="post">

      <input type="hidden" name="_token" value="{{csrf_token()}}">

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>

    <input value="<?php echo $id->email; ?>" type="email" class="form-control" id="exampleInputEmail1" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input value="<?php echo $id->password; ?>" type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>

</form>

@endsection()