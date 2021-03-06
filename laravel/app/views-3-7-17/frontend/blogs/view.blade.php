@extends('frontend/layouts/default')
@section('title')
{{$data->title}}
@stop

@section('content')

<div class="section breadcrumb-bar solid-blue-bg">
	<div class="inner">
		<div class="container">
			<p class="breadcrumb-menu">
				<a href="{{URL::to('/')}}"><i class="ion-ios-home"></i></a>
				<i class="ion-ios-arrow-right arrow-right"></i>
				<a href="{{URL::to('/blogs')}}">Blogs</a>
				<i class="ion-ios-arrow-right arrow-right"></i>
				<a href="javascript:;">Blog</a>
			</p>
			<!-- end .breabdcrumb-menu -->
			<h2 class="breadcrumb-title">Blog</h2>
		</div>
		<!-- end .container -->
	</div>
	<!-- end .inner -->
</div>
<!-- end .section -->
<!-- Blog Section -->
<!-- Blog Section -->
<div class="section blog-single-section-sidebar">
	<div class="inner">
		<div class="container">				
			<div class="section blog-single-section-sidebar-inner flex no-wrap">
				<div class="blog-left-side">
					
					<div class="blog-featured-section blog-featured-image">
						{{GeneralHelper::showImage($data->image, 'img-responsive', '', '400px', $data->title, 'blogs')}}
					</div>
					
					<div class="blog-text-content">
						<div class="content-meta flex items-center no-column no-wrap">
							<div class="left-side">
								{{GeneralHelper::showUserImg($data->photo, 'img-responsive', '50px;', '', $data->first_name)}}
							</div>
							<div class="right-side">
								<h1 class="dark">{{$data->sub_name}}</h1>
								<div class="right-side-bottom-wrapper flex items-center no-column">
									<div class="news-meta flex no-column">
										<h6><a href="#0" class="news-author">{{$data->first_name.' '.$data->last_name}}</a></h6>
										<h6 class="publish-date">{{date('d-m-Y', strtotime($data->created_at))}}</h6>
										<h6><a href="#0" class="comment-count">{{$data->blog_count}} {{($data->blog_count)>1?'comments':'comment' }}</a></h6>
									</div><?php /*
									<div class="post-tags-wrapper flex items-center no-column">
										<h6>Tags:</h6>
										<ul class="post-tags flex items-center no-column list-unstyled">
											<li><a href="#0" class="button button-sm grey">Recruiter</a></li>
											<li><a href="#0" class="button button-sm grey">Interview</a></li>
											<li><a href="#0" class="button button-sm grey">Salary</a></li>
										</ul> <!-- end .post-tags -->
									</div>
									*/ ?>
								</div> <!-- end .right-side-bottom-wrapper -->
							</div> <!-- end .right-side -->
						</div> <!-- end .blog-content-meta -->
						
						<div class="divider"></div>
						
						<div class="blog-text">
							<p><strong>{{$data->title}}</strong>
								
							<br><br>
							{{$data->content}}
							</p>
						</div>
						
						<div class="social-share-wrapper flex items-center no-wrap">
							<h6>Share this job:</h6>
							<ul class="social-share flex no-wrap no-column list-unstyled">
								<li><a onclick="ShareFunction('http://www.facebook.com/share.php?title={{$data->title}}&u={{URL::to('/blog/'.$data->slug)}}',{{$data->id}});" href="javascript:;" class="button button-sm facebook-btn"><span><i class="ion-social-facebook"></i></span>Facebook</a></li>
								<li><a onclick="ShareFunction('https://twitter.com/share?url={{URL::to('/blog/'.$data->slug)}}&name=Simple Share Buttons&hashtags={{$data->title}}',{{$data->id}})" href="javascript:;" class="button button-sm twitter-btn"><span><i class="ion-social-twitter"></i></span>Twitter</a></li>
								<li><a onclick="ShareFunction('https://plus.google.com/share?url={{URL::to('/blog/'.$data->slug)}}',{{$data->id}});" href="javascript:;" class="button button-sm g-plus-btn"><span><i class="ion-social-googleplus"></i></span>Google plus</a></li>
							</ul>
						</div>
						
					</div>
					 
					
					<?php /* 
					<div class="related-posts-wrapper">
					
						<h3>Related Posts</h3>
						<div class="news-grid">
							<div class="news-grid-row flex space-between" style="">
								<div class="news-item">
									<img src="images/news-grid01.jpg" alt="news-thumbnail" class="img-responsive">
									<div class="news-content">
										<div class="news-meta flex no-column">
											<h6><a href="#0" class="news-author">Nancy watson</a></h6>
											<h6 class="publish-date">20.02.2017</h6>
											<h6><a href="#0" class="comment-count">5 comments</a></h6>
										</div> <!-- end .news-meta -->
										<h3 class="news-title">Tips to write an impressive resume online for beginner</h3>
										<a href="#0">Read More<i class="ion-ios-arrow-thin-right"></i></a>
									</div> <!-- end .news-content -->
								</div> <!-- end .news-item -->
								<div class="news-item">
									<img src="images/news-grid02.jpg" alt="news-thumbnail" class="img-responsive">
									<div class="news-content">
										<div class="news-meta flex no-column">
											<h6><a href="#0" class="news-author">Nancy watson</a></h6>
											<h6 class="publish-date">20.02.2017</h6>
											<h6><a href="#0" class="comment-count">5 comments</a></h6>
										</div> <!-- end .news-meta -->
										<h3 class="news-title">Let's explore 5 cool new features in JobPress theme</h3>
										<a href="#0">Read More<i class="ion-ios-arrow-thin-right"></i></a>
									</div> <!-- end .news-content -->
								</div> <!-- end .news-item -->
								<div class="news-item">
									<img src="images/news-grid03.jpg" alt="news-thumbnail" class="img-responsive">
									<div class="news-content">
										<div class="news-meta flex no-column">
											<h6><a href="#0" class="news-author">Nancy watson</a></h6>
											<h6 class="publish-date">20.02.2017</h6>
											<h6><a href="#0" class="comment-count">5 comments</a></h6>
										</div> <!-- end .news-meta -->
										<h3 class="news-title">How to convince recuiters and get your dream job</h3>
										<a href="#0">Read More<i class="ion-ios-arrow-thin-right"></i></a>
									</div> <!-- end .news-content -->
								</div> <!-- end .news-item -->
							</div>  <!-- end .news-grid-row -->						
						</div> <!-- end .news-grid -->
						
						
					</div> <!-- end .related-post-wrapper --> 
					
					*/ ?>
					
					
					
					<div class="comment-section-wrapper">
						
						<div class="left-side-wrapper">	
						
							<h3 id="focus_id">There are {{$data->blog_count}} comment son this post</h3>
							
							@include('frontend/blogs/view_total_comments')
							 
							
						</div>
						
						<div class="right-side-wrapper">
							@include('frontend/blogs/add_comment')
						</div>
						
					</div>
				</div>
				
				
				<div class="blog-sidebar">	
					@include('Elements/Blog/blog_left')
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript"> 
	 
	function updateBlogs(){
		var total_comment = jQuery( "#total_comment" ).val();
		var blog_id = jQuery("#blog_id").val();
		
		jQuery.ajax({
			type: "POST",
			url: "{{URL::to('update-blog-comments')}}",
			data: "blog_id="+ blog_id +"&total_comment="+ total_comment,  
			dataType:"html", 
			success: function(data){ 
				if(data){
					jQuery( "#totalComments" ).html(data);
				}
			}
		});
	}
	setInterval( "updateBlogs()", 20000 );
	
	function submit_form(){
	
		var message = jQuery("#cmt_msg").val();
		var blog_id = jQuery("#blog_id").val();
		jQuery( ".show_error_msg" ).html( " " );
		
		if(message == "") {
		
			jQuery("#error_comment" ).html( 'Comment is required.' );
			
			var show_alert = '<div id="alert_msg" class="alert alert-danger show_error_msg"><button class="close close-sm" type="button" data-dismiss="alert"> <i class="fa fa-times"></i> </button><span id="myData">Comment could not be submitted, please correct errors !</span></div>';
			jQuery( "#show_alert" ).html( show_alert );
			return false;
			
		}else{
		
			img = '<span class="loading123" style="position:relative;"><img src="https://www.thehealthystart.com/img/loading-spinner-grey.gif" style="position:absolute; height:30px; margin-left:-32px; top:-2px;" alt="Please wait"></span>';
			jQuery('#send_comment').append(img);
			
			jQuery.ajax({
				type: "POST",
				url: "{{URL::to('submit-blog-comment')}}",
				data: "message="+message+"&blog_id="+blog_id,  
				dataType:"html", 
				success: function(data){
					
					$('#cmt_msg').val('');
					
					updateBlogs(); 
					
					$(window).scrollTop($('#focus_id').offset().top);
					
				
					if(data) { 
						jQuery('#update_comments').html(data); 
					} else {
						var show_alert = '<div id="alert_msg" class="alert alert-danger show_error_msg"><button class="close close-sm" type="button" data-dismiss="alert"> <i class="fa fa-times"></i> </button><span id="myData">Comment could not be submitted, please try again !</span></div>';
						jQuery( "#show_alert" ).html( show_alert );
					}
				},
				complete: function(){
					jQuery(".loading123").remove(); 
				}
				
			}); 
		}
	}
	
	
	function showTotalComments(blog_id){
		jQuery.ajax({
			type: "POST",
			url: "{{URL::to('view-total-comments')}}",
			data: "blog_id="+blog_id,  
			dataType:"html", 
			success: function(data){ 
				jQuery( "#totalComments" ).html(data);
			}
		}) ; 
	} 
	
	
	function ShareFunction(url,id) { 
		mywindow=window.open(url,"mywindow","status=1,resizable=0,width=550,height=500");
		mywindow.moveTo(0, 0);
	} 
</script>


<style>
 .recent-post h4 > a {
   color: #627199;
   transition: all 0.3s ease 0s;
   font-size: 14px;
   }
   .blog-standard-info .right-side > h2 {
   line-height: 33px;
   margin-bottom: 7px;
   }
   h2 {
   color: #ffffff;
   font-size: 24px;
   font-weight: 700;
   line-height: 38px;
   margin-bottom: 13px;
   }
   h6 {
   color: #000!important;
   font-size: 11px;
   font-weight: 700;
   line-height: 14px;
   text-transform: uppercase;
   }
   .dark {
    font-size: 14px;
}
</style>

@stop									