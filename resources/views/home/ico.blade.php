@extends('layouts.default_disper')
@section('content')
	<!-- banner-text -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div class="w3layouts-banner-top">
						<div class="agileits-banner-info">
							<h3>Expert Roofing Services <span>Contractor</span></h3>
						</div>	
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="agileits-banner-info">
							<h3>professional & Trained  <span>Workers</span></h3>
						</div>	
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top2">
						<div class="agileits-banner-info">
							<h3>Trusted & Reliable <span>Contractors</span></h3>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top3">
						<div class="agileits-banner-info">
							<h3>We Will Help You to Fix <span>Your Roof</span></h3>
						</div>	
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	<!--//banner text-->
	</div>
	<!--banner form-->
	<!-- <div id="horizontalTab">
		<ul class="resp-tabs-list">
		<li>Enquiry</li>
		<li>Selection</li>
		<li>Subscribe</li>
		</ul>
		<div class="resp-tabs-container">
			<div class="tab1">
				<h6>Fill in our Enquiry Form</h6>
				<form action="#" method="post">
					<div class="fields left-agileits">
						<input type="text" name="Firstname" placeholder="First Name" required="" />
					</div>
					<div class="fields right-agileits">
						<input type="text" name="Laststname" placeholder="Last Name" required="" />
					</div>
					<div class="fields">
						<input type="email" name="Email" placeholder="Email" required="" />
					</div>
				<div class="fields">
					<textarea name="Comments" placeholder="Comments, Complements or Questions" required=""></textarea>
				</div>
					<input type="submit" value="Send my enquiry">
				</form>
				<div class="clearfix"></div>
			</div>	
			<div class="tab2">
				<div class="register">
					<h6>Select Your Choice</h6>
						<form action="#" method="post">
							<div class="fields left-agileits">
								<input type="text" name="Width" placeholder="Approx Area Width in Mts" required="" />
							</div>
							<div class="fields right-agileits">
								<input type="text" name="Height" placeholder="Approx Area height in Mts" required="" />
							</div>
							<div class="fields left-agileits">
								<select class="form-control">
									<option>Roof Type</option>
									<option>M shaped</option>
									<option>Open Glabe</option>
									<option>Hip & Valley</option>
									<option>Intersection / Overlaid Hip</option>
									<option>Dutch Glabe</option>
									<option>Dormer</option>
								</select>
							</div>
							<div class="fields right-agileits">
								<select class="form-control">
									<option>Walls & Ceiling</option>
									<option>Painting</option>
									<option>Painting + Minor repairs</option>
									<option>Painting + Decorative stones</option>
									<option>Tiling</option>
									<option>Dutch Glabe</option>
									<option>Dormer</option>
								</select>
							</div>
							<div class="clearfix"></div>
							<div class="filter-price">
								<h3>Price range</h3>
								<ul class="dropdown-menu6">
									<li>                
										<div id="slider-range"></div>							
										<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
									</li>			
								</ul>
							</div>
							<input type="submit" value="Send">
						</form>
					</div>
				</div>
				<div class="tab3">
					<div class="reset">
						<form action="#" method="post">
							<h6>Subscribe to our email & get updates right in your inbox</h6>
							<div class="fields">
								<input type="email" Name="Email" placeholder="Email" required="">
							</div>
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
			</div>
		</div> 
	</div> -->
	<!--//banner form--> 
	<!-- //banner --> 
	<!-- //banner -->
	@include('home.modals')
	<!-- banner-bottom -->
	@include('home.aboutUs')
	@include('home.roadmap')
	<!-- /services -->
	<!--@include('home.service')-->
	<!-- //services -->
	<!-- Modal1 -->
	<!-- //Modal1 -->
	<!-- schedule-bottom -->
	<!--@include('home.schedule') -->
	<!-- //schedule-bottom -->
	<!-- features -->
	<!-- //features -->
	<!-- portfolio -->
<!-- //portfolio -->

	<!-- testimonials -->
	@include('home.team_disper')
	@include('home.testimonial')
	<!-- testimonials -->
	<!-- newsletter -->
	<div class="w3layouts_newsletter">
		<div class="container">
			<div class="agileits_w3layouts_heding">
				<p>Get Updates</p>
				<h3><span>Don't Forget to </span> Sign Up</h3>
				<img src="images/head1.png" alt="Lines" />
			</div>
			<div class="w3layouts_newsletter_right">
			<p class="para-w3layouts white"> Quis nostrum exercitationem ullam corporis suscipit 
					laboriosam, nisi ut aliquid ex ea commodi consequatur, Quis autem vel eum iure 
					reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
				<form action="#" method="post">
					<input type="text" name="Name" placeholder="Name" required="">
					<input type="email" name="Email" placeholder="Email Address" required="">
					<input type="submit" value="Subscribe">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
<!-- contact -->
	<div class="w3l_footer">
		<div class="container">
			<div class="col-md-4">
				<h2><a href="index.html">Plafond</a></h2>
			</div>
			<div class="col-md-8 botttom-nav-agileits">
				<ul class="nav-w3ls">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="gallery.html" >Projects</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
				<div class="w3l-social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>	
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //contact -->
@endsection
	@section('post_content')
<!-- js -->
	<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!--banner form script-->
	<script type='text/javascript'>//<![CDATA[ 
		$(window).load(function(){
			$( "#slider-range" ).slider({
				range: true,
				min: 0,
				max: 9000,
				values: [ 1000, 7000 ],
				slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
				}
			});
			$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
		});//]]>  
	</script>
	<script type="text/javascript" src="{{ asset('js/jquery-ui.js')}}"></script>
<!--//banner form script-->
	<script src="{{ asset('js/responsiveslides.min.js')}}"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
			auto: true,
			pager:true,
			nav:false,
			speed: 500,
			namespace: "callbacks",
			before: function () {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function () {
				$('.events').append("<li>after event fired.</li>");
			}
			});
		});
	</script>
	<!--Rersponsive tabs-->
	<script src="{{ asset('js/easy-responsive-tabs.js')}}"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true,   // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
					}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!-- //Rersponsive tabs -->
	<!-- flexSlider -->
	<script defer src="{{ asset('js/jquery.flexslider.js')}}"></script>
	<script type="text/javascript">
		$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
				$('body').removeClass('loading');
			}
			});
		});
	</script>
	<!-- //flexSlider -->
	<!-- for bootstrap working -->
	<script src="{{ asset('js/bootstrap.js')}}"></script>
	<!-- //for bootstrap working -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smooth-scrolling -->
	<!-- password-script -->  
	<script type="text/javascript">
			window.onload = function () {
				document.getElementById("password1").onchange = validatePassword;
				document.getElementById("password2").onchange = validatePassword;
			}
			function validatePassword(){
				var pass2=document.getElementById("password2").value;
				var pass1=document.getElementById("password1").value;
				if(pass1!=pass2)
					document.getElementById("password2").setCustomValidity("Passwords Don't Match");
				else
					document.getElementById("password2").setCustomValidity('');	 
					//empty string means no validation error
			}
	</script>
	<!-- //password-script -->

	<!-- stats -->
	<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
	<script src="{{ asset('js/jquery.countup.js')}}"></script>
	<script src="{{ asset('js/timeline.js')}}"></script>
	<script>
		$('.counter').countUp();
	</script>
	@endsection
<!-- //stats -->
</body>
</html>