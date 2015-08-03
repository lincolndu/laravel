@extends('app')
@section('content')

<!--Content-->
<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row">
        <div class="col-md-12">

        <table class="table table-bordered">
                <th>Serial</th>
                <th>Post Headline </th>
                <th>Update</th>
                <th>Delete</th>
                <?php $a=1; ?>
                @foreach($posts as $post)
                <tr>
                    <td><?php echo $a++;?></td>
                    <td><a href="/single/{{$post->id}}">{{$post->title}}</a></td>
                    <td><a href="/edit/{{$post->id}}">Update</a></td>
                    <td><a onclick="return jscheck()" href="/delete/{{$post->id}}">Delete</a></td>
                </tr>
                @endforeach
        </table>


        </div>
        </div>
    </div>
</section>



@endsection