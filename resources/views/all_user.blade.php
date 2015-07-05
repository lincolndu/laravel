@extends('app')

@section('content')
			
			<table class="table table-bordered">
				<th>ID</th>
				<th>Email</th>
				<th>Password</th>
				<th>Create Date</th>
				<th>Update</th>
				<th>Delete</th>

				@foreach($users as $user)
				<tr>
					<td><?php echo $user->id; ?></td>
					<td><?php echo $user->email; ?></td>
					<td><?php echo $user->password; ?></td>
					<td><?php echo $user->created_at; ?></td>
					<td><a href="/edit/<?php echo $user->id; ?>">Update</a></td>
					<td><a href="/delete/<?php echo $user->id; ?>">Delete</a></td>

				</tr>
				@endforeach

			</table>

@endsection
