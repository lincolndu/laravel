@extends('app')
@section('content')


<!--Content-->
<section id="content">
	<div class="wrap-content zerogrid">
		
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
					<article class="row">
						@foreach($search as $search)
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="{{'/photo/'.$search->photo}}"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="/single/{{$search->id}}">{{$search->title}}</a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>{{$search->d_post}}[...]</p>
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
							<img src="{{'/photo/'.$search->photo}}"/>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="/single/{{$search->id}}">{{$search->title}}</a></li>
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