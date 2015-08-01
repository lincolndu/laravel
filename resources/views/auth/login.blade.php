@extends('app')
@section('content')
@if(!Auth::check())

<!--Content-->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<article>
						<div class="comment">
							<h2>Please login here</h2> 
							<form action="/auth/login" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}" >
							 <div> <input type="email" name="email" value="{{ old('email') }}">Email</div>
							 <div> <input type="password" name="password" id="password">Password</div>
							 <div> <input type="checkbox" name="remember"> Remember Me   </div>
							 <div><input type="submit" value="Submit"></div>
							</form>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>
@endif

@endsection