@extends('layout.layout')

@section('title')
	<title>Pendaftaran</title>
@endsection

@section('content')
	<div class="signup-page">
		<nav class="navbar navbar-transparent navbar-absolute">
	    	<div class="container">
	        	<!-- Brand and toggle get grouped for better mobile display -->
	        	<div class="navbar-header">
	        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
	            		<span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
	        		</button>
	        		<a class="navbar-brand" href="/">Nyari Kerja</a>
	        	</div>

	        	<div class="collapse navbar-collapse" id="navigation-example">
	        		<ul class="nav navbar-nav navbar-right">
			            <li>
			            	{{ link_to(route('login'), 'Masuk') }}
			            </li>
			            <li>
			                <a href="#">
								Follow me at
							</a>
			            </li>
			            <li>
			                <a href="#" target="_blank" class="btn btn-simple btn-white btn-just-icon">
								<i class="fa fa-twitter"></i>
							</a>
			            </li>
			            <li>
			                <a href="#" target="_blank" class="btn btn-simple btn-white btn-just-icon">
								<i class="fa fa-facebook-square"></i>
							</a>
			            </li>
						<li>
			                <a href="#" target="_blank" class="btn btn-simple btn-white btn-just-icon">
								<i class="fa fa-instagram"></i>
							</a>
			            </li>
	        		</ul>
	        	</div>
	    	</div>
	    </nav>

	    <div class="wrapper">
			<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
							<div class="card card-signup">
								{{ Form::open(array('route' => 'signup.store')) }}
									<div class="header header-info text-center">
										<h4>Pendaftaran</h4>
										<div class="social-line">
											<a href="#pablo" class="btn btn-simple btn-just-icon">
												<i class="fa fa-facebook-square"></i>
											</a>
											<a href="#pablo" class="btn btn-simple btn-just-icon">
												<i class="fa fa-twitter"></i>
											</a>
											<a href="#pablo" class="btn btn-simple btn-just-icon">
												<i class="fa fa-google-plus"></i>
											</a>
										</div>
									</div>
									<p class="text-divider">Formulir</p>
									<div class="content">

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">face</i>
											</span>
											<div class="row">
												<div class="col-md-6">
													{{ Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'First Name...')) }}		
												</div>
												<div class="text-danger"><small>{{ $errors->first('first_name') }}</small></div>
												<div class="col-md-6">
													{{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name...')) }}		
												</div>
												<div class="text-danger"><small>{{ $errors->first('last_name') }}</small></div>
											</div>
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">email</i>
											</span>
											{{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email...')) }}
											<div class="text-danger"><small>{{ $errors->first('email') }}</small></div>
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">date_range</i>
											</span>
											{{ Form::date('birth', null, array('class' => 'form-control', 'placeholder' => 'Birth...')) }}
											<div class="text-danger"><small>{{ $errors->first('birth') }}</small></div>
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">lock_outline</i>
											</span>
											<div class="row">
												<div class="col-sm-6">
													{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password...')) }}
													<div class="text-danger"><small>{{ $errors->first('password') }}</small></div>	
												</div>
												<div class="col-sm-6">
													{{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Password Confirm...')) }}
												</div>
											</div>
										</div>

									</div>
									<div class="footer text-center">
										{{ Form::submit('Daftar', array('class' => 'btn btn-info btn-lg')) }}
									</div>
								{{ Form::close() }}
							</div>
						</div>
					</div>
				</div>

				<footer class="footer">
			        <div class="container">
			            <div class="copyright" style="text-align: center">
			                &copy; 2017, made with <i class="fa fa-heart heart"></i> by <a href="#" target="_blank">#</a>
			            </div>
			        </div>
			    </footer>

			</div>

	    </div>
	</div>
@endsection