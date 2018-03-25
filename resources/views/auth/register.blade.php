@extends('layouts.default_ico')

@section('before_content')
<link rel='stylesheet' id='theme-body-font-css'  href='//fonts.googleapis.com/css?family=Titillium+Web%3A400%2C300%2C700%2C600' type='text/css' media='screen' />
<link rel='stylesheet' id='material-icons-css'  href='{{ asset("css/vendor/material-icons.min.css") }}' type='text/css' media='all' />
<link rel='stylesheet' id='socicon-css'  href='{{ asset("css/vendor/socicon.min.css") }}' type='text/css' media='screen' />
<link rel='stylesheet' id='theme-css'  href='{{ asset("css/theme.min.css") }}' type='text/css' media='screen' />
<script type="text/javascript">
    (function () {
        window.onload = function () {
            var body = document.querySelector( "body" );
            var header = body.querySelector( ".site-header" );
            var preloader = body.querySelector( ".loading-screen" );
            var page = body.querySelector( ".page-wrap" );
            body.style.overflowY = "auto";
            preloader.classList.add( "loading-done" );
            header.classList.add( "loading-done" );
            page.classList.add( "loading-done" );
        };
    })();
</script>
@endsection

@section('content')
<div class="login_wrapper container margin-bottom-3x margin-top-2x">
        <div class="animate form login_form row">
        	<div class="col-sm-6 hidden-xs">
        		<img src="/img/logo2.png" class="img img-responsive" style="max-width: 400px;margin: auto;" />
        	</div>
        	<div class="col-sm-6 col-xs-12">
        		<section class="login_content">
					{!! BootForm::open(['url' => route('register'), 'method' => 'post']) !!}
					
					<h1>{!! Lang::get('login.create_account') !!}</h1>

					{!! BootForm::text('name', Lang::get('login.name'), old('name'), ['placeholder' => Lang::get('login.name'), 'required' => 'required']) !!}

					{!! BootForm::email('email', Lang::get('login.email'), old('email'), ['placeholder' => Lang::get('login.email'), 'required' => 'required']) !!}

					{!! BootForm::password('password', Lang::get('login.password'), ['placeholder' => Lang::get('login.password'), 'requried' => 'required']) !!}

					{!! BootForm::password('password_confirmation', Lang::get('login.password_confirmation'), ['placeholder' => Lang::get('login.confirmation'), 'required' => 'required']) !!}
				
					{!! BootForm::submit(Lang::get('login.register'), ['class' => 'btn btn-primary btn-nl waves-effect waves-light btn-rounded']) !!}
				   
					<div class="clearfix"></div>
					
					<div class="separator">
						<p class="change_link"> {!! Lang::get('login.already_member') !!}
							<a href="{{ route('login') }}" class="to_register"> {!! Lang::get('login.log_in') !!} </a>
						
						</p>
						<div class="clearfix"></div>
						<br />
						
					</div>
					{!! BootForm::close() !!}
		        </section>
        	</div>
        </div>
    </div>
<!-- VOID MARGIN -->
<section class="fw-section padding-top-2x margin-bottom-5x">
</section>
@endsection

@section('post_content')
<script type='text/javascript' src='{{ asset("js/jquery.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/theme.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/vendor/slick.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/vendor/jquery.waypoints.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/vendor/bootstrap.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/vendor/jarallax.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/vendor/velocity.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/vendor/waves.min.js") }}'></script>
<script type='text/javascript' src='{{ asset("js/vendor/scrollspy.js") }}'></script>
@endsection