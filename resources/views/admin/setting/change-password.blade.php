<div class="clearfix m-b-lg">
	@if(session()->has('message'))
		<div class="form-control alert alert-success">
        	{{ session()->get('message') }}
    	</div>
	@endif
	<form id="change-password" method="POST" action="{{route('change.password')}}" role="form" class="col-md-6 p-a-0">
		@csrf
		<div class="form-group">
			<label>Current Password</label>
			<input name="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror">
			@error('current_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>
		<div class="form-group">
			<label>New Password</label>
			<input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror">
			@error('new_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>
		<div class="form-group">
			<label>Confirm Password</label>
			<input name="confirm_password" type="password" class="form-control @error('confirm_password') is-invalid @enderror">
			@error('confirm_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>
		<button type="submit" class="btn btn-info m-t">Update</button>
	</form>
</div>
