@extends('app')
@section('content')
@if(Auth::check())

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
				@foreach($posts as $post)
					<li><img src="{{'/photo/'.$post->photo}}"/></li>
				@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>

<!--Content-->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			@foreach($posts as $post)
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><a href="/single/{{$post->id}}"> {{str_limit($post->title, $limit=23, $end='')}}</a></h2>
					<p>{{str_limit($post->d_post,$limit=100)}}</p>
					<div class="more"><a href="/single/{{$post->id}}">[...]</a></div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
					<article class="row">
						@foreach($posts as $post)
						<div class="single_post">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="{{'/photo/'.$post->photo}}"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="/single/{{$post->id}}">{{str_limit($post->title, $limit=40, $end='..')}}</a></h2>
								<div class="info">By Admin on {{date('F d, Y'),$post->created_at}} with <a href="#">01 Commnets</a></div>
								<p>{{str_limit($post->d_post, $limit=150, $end='')}}[...]</p>
							</div>
						</div>
						</div>
						@endforeach
					</article>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							@if($posts)
							<img src="{{'/photo/'.$post->photo}}"/>
							@endif
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
@endif
@endsection