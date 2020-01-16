	@extends('base_template')
@include('navbar_template')
<div class="container" style="padding-top: 4%">
	<div class="card mx-auto d-block">
		<div class="card-header text-center" style="background-color: #0099ff;border-radius:5px">
			<h3 style="color: white;">Register</h3>
		</div>
		<div class="card-body text-left" style="padding-top: 0.5%;border-radius: 5px">
			 <form class="form-horizontal" 	 method="POST">
			 	<div class="form-group">
			      <label class="control-label col-sm-2" for="email">Username</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control" id="username" placeholder="Enter username" name="Username" value="{{old('Username')}}" required>
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="email">Email</label>
			      <div class="col-sm-10">
			        <input type="email" class="form-control" id="email" placeholder="Enter email" name="Email" value="{{old('Email')}}" required>
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="pwd">Password</label>
			      <div class="col-sm-10">          
			        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Pwd" required>
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="pwd">Confirm password</label>
			      <div class="col-sm-10">          
			        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="ConfPwd" required>
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <div class="checkbox">
			          <label><input type="checkbox" name="remember">Recive notifications by email.</label>
			        </div>
			      </div>
			    </div>
			     <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <div class="checkbox">
			          <label><input type="checkbox" name="remember" required>Agree with the terms and conditions.</label>
			        </div>
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="submit" class="btn btn-primary">Register</button> <button type="reset" class="btn btn-danger">Clear</button>
			      </div>
			    </div>
				@if($errors->any())
				    <div class="card-body text-center" style="background-color: #ff9d9d;border-radius:5px">
					@foreach ($errors->all() as $error)
						<h5 style="color: red;">{{$error}}</h5>
					@endforeach
					</div>
				@endif
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
		</div>
	</div>
</div>
