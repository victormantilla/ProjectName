@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

<body class="signup-page">
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
			<a class="navbar-brand" href="{{ url('/home') }}"><img src="../materialkit/images/logonuevomini.png" alt="logo"></a>

		</div>

		<!--  <div class="collapse navbar-collapse" id="navigation-example">
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="../components-documentation.html" target="_blank">
                          Components
                      </a>
                  </li>
                  <li>
                      <a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">
                          <i class="material-icons">unarchive</i> Upgrade to PRO
                      </a>
                  </li>
                  <li>
                      <a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                          <i class="fa fa-twitter"></i>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                          <i class="fa fa-facebook-square"></i>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                          <i class="fa fa-instagram"></i>
                      </a>
                  </li>
              </ul>
          </div>
          -->
	</div>
</nav>
<!-- Alertas de que algo falta -->
@if (session('status'))
	<div class="alert alert-success">
		{{ session('status') }}
	</div>
@endif

@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif


<div class="wrapper">
	<div class="header header-filter" style="background-image: url('../materialkit/images/city.jpg'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<div class="card card-signup">
						<form action="{{ url('/login') }}" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="header header-primary text-center">
								<p class="login-box-msg"> {{ trans('adminlte_lang::message.siginsession') }} </p>

								<!-- Inicia logueo con redes sociales -->
								<div class="social-line">
									<a href="#victor" class="btn btn-simple btn-just-icon">
										<i class="fa fa-facebook-square"></i>
									</a>
									<a href="#victor" class="btn btn-simple btn-just-icon">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#victor" class="btn btn-simple btn-just-icon">
										<i class="fa fa-google-plus"></i>
									</a>
								</div>
								<!-- Finaliza logueo con redes sociales -->
							</div>

							<div class="content">
                                <!-- escribir email -->

                                <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
                                    <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email"/>
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

								</div>

								<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                                    <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

								</div>

                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="checkbox icheck">
                                            <label>
                                                <input type="checkbox" name="remember"> {{ trans('adminlte_lang::message.remember') }}
                                            </label>
                                        </div>
                                    </div><!-- /.col -->
                                    <div class="col-xs-6">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.buttonsign') }}</button>
                                    </div><!-- /.col -->
                                </div>

							</div>
                            <div ALIGN=center>
                                <a href="{{ url('/password/reset') }}">{{ trans('adminlte_lang::message.forgotpassword') }}</a><br>
                                <a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a>
                            </div>
							</div>

						</form>


                </div>


			</div>

		</div>

		<footer class="footer">
			<div class="container">
				<nav class="pull-left">
					<ul>
						<li>
							<a href="#">
								Inicio
							</a>
						</li>
						<li>
							<a href="#">
								Nosotros
							</a>
						</li>
						<li>
							<a href="#">
								Blog
							</a>
						</li>
						<li>
							<a href="#">
								Contactanos
							</a>
						</li>
					</ul>
				</nav>
				<div class="copyright pull-right">
					Made with <i class="fa fa-heart heart"></i> by <a href="http://www.erossolution.com" target="_blank">Victor Mantilla</a>  &copy; 2017
				</div>
			</div>
		</footer>

	</div>

</div>

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
<!--   Core JS Files   -->
<script src="../materialkit/js/jquery.min.js" type="text/javascript"></script>
<script src="../materialkit/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../materialkit/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../materialkit/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="../materialkit/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="../materialkit/js/material-kit.js" type="text/javascript"></script>

</html>
