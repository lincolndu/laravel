@extends('app')
@section('content')

<!--Content-->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			@foreach($gallaries as $gallary)
			<div class="col-1-4">
				<div class="wrap-col">
					<article>
						<img src="{{'/photo/'.$gallary->photo}}"/>
						<h2><a href="/single/{{$gallary->id}}">{{str_limit($gallary->title,$limit=30,$end='')}}</a></h2>
					</article>
				</div>
			</div>
			@endforeach
		</div>
	
	</div>
</section>

@endsection