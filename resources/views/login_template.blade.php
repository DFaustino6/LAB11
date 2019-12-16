@extends('base_template')
@include('navbar_template')
<div class="container" style="padding-top: 4%">
	<div class="card">
		<div class="card-header text-center" style="background-color: #0099ff;border-radius:5px">
			<h3 style="color: white;">Login</h3>
		</div>
		<div class="card-body text-left" style="padding-top: 0.5%;border-radius: 5px">
			 <form class="form-horizontal" method="POST">
			 	<div class="form-group">
			      <label class="control-label col-sm-2" for="email">Email:</label>
			      <div class="col-sm-10">
			        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="pwd">Password:</label>
			      <div class="col-sm-10">          
			        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
			      </div>
			    </div>
			     <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <div class="checkbox">
			          <label><input type="checkbox" name="autologin" value="true">Remember me.</label>
			        </div>
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">	
			        <button type="submit" class="btn btn-primary">Sign in</button>
			      </div>
			    </div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
  			</form>
		</div>
		<div class="container-fluid text-right">
			<a href="password_reset.php"><p>Forgot your password?</p></a>
			<a href="#"><p>Forgot your username?</p></a>
		</div>
		@if($errors->any())
		<div class="container-fluid text-center" style="background-color: #ff9d9d;border-radius:5px">
			@foreach ($errors->all() as $error)
				<h4 style="color: red;">{{$error}}</h4>
			@endforeach
		</div>
		@endif
	</div>
</div>