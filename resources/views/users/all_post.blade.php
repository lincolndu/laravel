@extends('app')

@section('content')
<div class="row">
    @foreach($user_data as $user_data)
    <div class="col-md-4">
        <h4>{{$user_data->title}}</h4>
        <p>{{$user_data->description}}</p>
           
        <img src="{{'/photo/'.$user_data->photo}}" alt="{{$user_data->photo}}" class="img-thumbnail">
    </div>
    @endforeach
</div>
@endsection