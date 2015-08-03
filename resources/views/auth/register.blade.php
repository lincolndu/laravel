@extends('app')
@section('content')

<!--Content-->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<article>
						<div class="comment">
							<h2>Please register first</h2>

						<!-- resources/views/auth/register.blade.php -->

							<form method="POST" action="/auth/register">
								<input type="hidden" name="_token" value="{{csrf_token()}}"> 

							    <div><input type="text" name="name" value="{{ old('name') }}" id="name"> Name </div>
							    <div><input type="email" name="email" value="{{ old('email') }}" id="email">Email</div>
							    <div><input type="password" name="password" id="password"> Password</div>
							    <div><input type="password" name="password_confirmation" id="password">Confirm Password </div>

							    <div><input type="submit" value="Register"></div>
							</form>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection