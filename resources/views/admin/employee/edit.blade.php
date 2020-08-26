<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('save_emp')}}" method="POST" autocomplete="off">
				@csrf
				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name" value="{{$post->name}}">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Login</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{{$post->email}}">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" >
					</div>
					<input type="hidden" name="id" value="{{$post->id}}">
					<input type="hidden" value="{{$type}}" name="role">
				</div>
				<!-- /.card-body -->

				<div class="card-footer">
					<a href="{{route('index_emp',$type)}}" class="btn btn-danger">Cancel</a>
					<button type="submit" class="btn btn-primary">Edit</button>
				</div>
			</form>
		</div>
	</div>
</div>
