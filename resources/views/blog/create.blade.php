@extends("layout.master")
@section("content")
	<form action="" method="post">
		<div class="form-group">
			<label for="title">Blog Title</label>
			<input class="form-control" type="text" name="title" />
		</div>
		<div class="form-group">
			<label for="body">Blog Body</label>
			<textarea id="summernote" name="body" class="form-control"></textarea>
		</div>
		 <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection