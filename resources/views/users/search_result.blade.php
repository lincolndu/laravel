
@extends('app');
@section('content')


<table class="table table-bordered">
    <th>Email</th>

    @foreach ($searches as $search)
        <tr>
            <td>{{ $search->email }}</td>
        </tr>
    @endforeach
    
</table>
@endsection
