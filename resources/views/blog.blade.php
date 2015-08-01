@extends('app')
@section('content')


<!--Content-->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col single">
					@foreach($posts as $post)
					<article>
						<img src="{{'/photo/'.$post->photo}}"/>
						<h2><a href="/single/{{$post->id}}">{{$post->title}}</a></h2>
						<div class="info">[By Admin on {{date('F d, Y'),$post->created_at}} with <a href="#">01 Commnets</a>]</div>
						<p>{{$post->d_post}}...</p>
					</article>
					@endforeach
					<!--Pagination -->
					{!!$posts->render()!!}

				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="{{'/photo/'.$post->photo}}"/>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
								@foreach($posts as $post)
									<li><a href="/single/{{$post->id}}">{{$post->title}}</a></li>
								@endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection