<?php $url_secure  = Config::get('constants.URL_SECURE'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
		@section('title')
			Admin Dashboard
		@show
		</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="{{ URL::to('favicon.ico') }}">
		
		{{ HTML::style('css/admin/bootstrap.min.css', array(), $url_secure) }}
		{{ HTML::style('css/admin/bootstrap-responsive.min.css', array(), $url_secure) }}
		{{ HTML::style('css/admin/fullcalendar.css', array(), $url_secure) }}
		{{ HTML::style('css/admin/matrix-style.css', array(), $url_secure) }}
		{{ HTML::style('css/admin/matrix-media.css', array(), $url_secure) }}
		{{ HTML::style('css/admin/font-awesome/css/font-awesome.css', array(), $url_secure) }}
		{{ HTML::style('css/admin/jquery.gritter.css', array(), $url_secure) }}
		{{ HTML::style('css/admin/comman.css', array(), $url_secure) }}
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
	
	
	
		@include('backend/alert_message')
		
		@include('backend/layouts/header')
		
		@include('backend/layouts/navigation')
 
		<div id="content">
			@yield('content')
		</div>

		<!--Footer-part-->
		<div class="row-fluid">
		  <div id="footer" class="span12">
				2017 &copy; {{ Session::get('SiteValue.site_name')}} Copyright reserved.
				<a href="{{URL::to('/')}}">{{ Session::get('SiteValue.site_name')}}</a> 
			</div>
		</div>
		<!--end-Footer-part-->
		
		
		{{ HTML::script('js/admin/excanvas.min.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/jquery.min.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/jquery.ui.custom.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/bootstrap.min.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/jquery.flot.min.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/jquery.flot.resize.min.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/jquery.peity.min.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/fullcalendar.min.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/matrix.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/matrix.dashboard.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/jquery.gritter.min.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/matrix.interface.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/matrix.chat.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/jquery.validate.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/matrix.form_validation.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/jquery.wizard.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/jquery.uniform.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/select2.min.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/matrix.popover.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/jquery.dataTables.min.js', array(), $url_secure) }}
		{{ HTML::script('js/admin/matrix.tables.js', array(), $url_secure) }}
		{{ HTML::script('assets/ckeditor/ckeditor.js', array(), $url_secure) }}
 

		<script type="text/javascript">
			function goPage(newURL) {
				if(newURL != "") {
					if(newURL == "-" ) {
						resetMenu();            
					} else {  
						document.location.href = newURL;
					}
				}
			}
			function resetMenu() {
			   document.gomenu.selector.selectedIndex = 2;
			}
		</script>
		
		<script type="text/javascript"> 
			window.setTimeout(function() {
				$(".top_message_cls").fadeTo(500, 0).slideUp(500, function(){
					$(this).remove(); 
				});
			}, 4000);
		</script>	
				
		<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery( ".datepicker" ).datepicker({
					format: 'yyyy-mm-dd'
				});
			});
		</script>
		
	</body>
</html>