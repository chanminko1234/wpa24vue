@extends("layout.master")
@section("content")
	<table class="table table-stripped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
				<td>{{ $product->id }}</td>
				<td>{{ $product->title }}</td>
				<td></td>
			</tr>
			@endforeach
		</tbody>
	</table>














@endsection