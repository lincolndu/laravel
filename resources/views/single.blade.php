@extends('app')
@section('content')

<!--Content-->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col single">
					<article>
						<img src="{{'/photo/'.$id->photo}}"/>
						<h2><a href="/single/{{$id->id}}">{{$id->title}}</a></h2>
						<div class="info">[By Admin on {{date('F d, Y'),$id->created_at}} with <a href="#">01 Commnets</a>]</div>
						<p>{{$id->d_post}}</p>
						<div class="comment">
							Your email address will not be published. Required fields are marked *
							<form action="contact" method="post">
							  <input type="hidden" name="_token" value="{{csrf_token()}}">
								<div><input type="text" name="name" id="name"> Name *</div>
								<div><input type="email" name="email" id="email"> Email *</div>
								<div><input type="url" name="website" id="website"> Website</div>
								<div><textarea rows="10" name="comment" id="comment"></textarea></div>
								<div><input type="submit" value="Submit"></div>
							</form>
						</div>
					</article>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="{{'/photo/'.$id->photo}}"/>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="/single/{{$id->id}}">{{$id->title}}</a></li>
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