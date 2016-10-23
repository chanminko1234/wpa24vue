<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<script src="{{ asset('js/app.js') }}"></script>
	<title>{{ $site_title }}</title>
</head>
<body>
	<div id="app" class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>{{ $title }} <span v-show="!students.length"><img src="{{ asset('loading.gif') }}" style="width:35px;height:35px;" alt="loading..."><span></h1> <!-- echo $title; -->
				<table class="table table-stripped" v-show="students.length">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Address</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="student in students">
							<td>@{{ student.id }}</td>
							<td>@{{ student.name }}</td>
							<td>@{{ student.address }}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<pre>@{{ $data | json }}</pre>
	</div>
	<script>

		var apiLink = "{{ url('api/get-students') }}";
		window.Laravel = "{{ csrf_token() }}";

		new Vue({
			el : "#app",
			data: {
				students : []
			},
			ready:function() {
				this.getStudents();
			},
			methods: {
				getStudents:function() {
					this.$http.post(apiLink).then(function(response){
						this.$set("students", response.data);
					});
				}
			}
		});
	</script>
</body>
</html>



