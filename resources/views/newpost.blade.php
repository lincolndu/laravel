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
							Your new post here
							<form action="/newpost" method="POST" enctype="multipart/form-data">
							  <input type="hidden" name="_token" value="{{csrf_token()}}">

								<div><input type="text" name="title" id="name"> headline</div>
								<div><input type="file" name="photo" id="website"> post photo</div>
								<div>Select Category</div>
								<div><select name="category">
									<option value="politics"></option>
									<option value="national"></option>
									<option value="international"></option>
									<option value="education"></option>
									<option value="Gallery"></option>
								</select></div>
								<div><textarea rows="10" name="d_post" id="comment"></textarea></div>
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