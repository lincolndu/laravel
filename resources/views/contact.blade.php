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
							Your email address will not be published. Required fields are marked *
							<form action="/contact" method="POST">
							  <input type="hidden" name="_token" value="{{csrf_token()}}">
								<div><input type="text" name="name" id="name" required> Name *</div>
								<div><input type="email" name="email" id="email" required> Email *</div>
								<div><input type="url" name="website" id="website"> Website</div>
								<div><textarea rows="10" name="comment" id="comment" required></textarea></div>
								<div><input type="submit" value="Submit"></div>
							</form>
						</div>
					</article>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Find Us</h2></div>
						<div class="content">
							<img src="images/map.png"/>
							<p>Petru Zadnipru 15/2 Chisinau 2044, Republic of Moldova</p>
							<p>Freephone : +1 800 445 7880</p>
							<p>Telephone : +1 800 995 6880</p>
							<p>Fax : +1 800 465 1990</p>
							<p>Email : zerotheme@demolink.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection