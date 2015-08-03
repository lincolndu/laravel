@extends('app')
@section('content')

<!--New Input Content-->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<article>
						<div class="comment">
							Please Edit and check your re-edit your post here
							<form action="/edit/{{$id->id}}" method="POST" enctype="multipart/form-data">
							  <input type="hidden" name="_token" value="{{csrf_token()}}">

								<div><input type="text" name="title" id="name" value="{{$id->title}}" >   headline</div>
								<div><input type="file" name="photo" id="photo" value="{{$id->photo}}">post photo</div>
								<div><textarea rows="10" name="d_post" id="post">{{$id->d_post}}</textarea></div>
								<div><input type="submit" value="Submit"></div>
							</form>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection