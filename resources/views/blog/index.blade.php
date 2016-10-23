@extends("layout.master")
@section("content")
				<br>
				<br>
				<a href="{{ route('blogs.create') }}" class="btn btn-primary">Add New Blog</a>
				<br>
				<br>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($blogs as $blog)
						<tr>
							<td>{{ $blog->id }}</td>
							<td>{{ $blog->title }}</td>
							<td></td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{ $blogs->render() }}
@endsection		