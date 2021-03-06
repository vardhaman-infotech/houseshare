@extends('frontend/layouts/default')
@section('title')
Contact Us
@stop

@section('content')

<div class="section breadcrumb-bar solid-blue-bg">
	<div class="inner">
		<div class="container">
			<p class="breadcrumb-menu">
				<a href="{{URL::to('/')}}"><i class="ion-ios-home"></i></a>
				<i class="ion-ios-arrow-right arrow-right"></i>
				<a href="javascript:;">Contact Us</a>
			</p>
			<!-- end .breabdcrumb-menu -->
			<h2 class="breadcrumb-title">Contact Us</h2>
		</div>
		<!-- end .container -->
	</div>
	<!-- end .inner -->
</div>

<!-- Contact-Us Section -->
<div class="section contact-us-section">
	<div class="inner">
		<div class="container">
			<div class="contact-us-section-inner flex space-between no-wrap">
				
				<div class="left">
					<h1>Contact Us</h1>
					<p class="ultra-light">
						<p><b>ADDRESS</b><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
						<p><b>EMAIL:</b><br>demo@gmail.com</p>
					</p>
					<div class="follow-us flex no-column items-center">
						<h6 style="color:#000;">Follow us via:</h6>
						<ul class="list-unstyled social-icons flex no-column">
							<li><a href="javascript:;"><i class="ion-social-twitter"></i></a></li>
							<li><a href="javascript:;"><i class="ion-social-facebook"></i></a></li>
						</ul> 
					</div> 
				</div> 
				
				<div class="right">
					{{ Form::open(array('url'=>url('/contact-us'),'id'=>'contact-form', 'class'=>'contact-form')) }}
						
						<div class="form-group-wrapper flex space-between items-center">
							<div class="form-group">
								<p class="label">Your Name<span class="red">*</span></p>
								{{ Form::text('name', null, array('class'=>'', 'placeholder'=>'Enter your name'))}} 
								<span class="red">{{ $errors->first('name')}}</span>
							</div>
							<div class="form-group">
								<p class="label">Your Email<span class="red">*</span></p>
								{{ Form::text('email', null, array('class'=>'', 'placeholder'=>'Enter your email'))}}  
								<span class="red">{{ $errors->first('email')}}</span>
							</div>
						</div>
						 
						<div class="form-group textarea">
							<p class="label">Your Message<span class="red">*</span></p>
							{{ Form::textarea('message', null, array('rows' => 6, 'class'=>"", 'placeholder'=>'Message...'))}} 
							<span class="red">{{ $errors->first('message')}}</span>
						</div>
						
						<!-- end .form-group -->
						<button type="submit" class="button" data-text="Submit">Send</button>
						 
					{{Form::close()}}
					<!-- end .contact-form -->
				</div>
				
				<!-- end .right -->
			</div>
			<!-- end .contact-us-section-inner -->
		</div>
		<!-- end .container -->
	</div>
	<!-- end .inner -->
</div> 
@stop																									