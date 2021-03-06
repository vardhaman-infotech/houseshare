@extends('backend/layouts/default')
@section('content')

	<!--breadcrumbs-->

	<div id="content-header">
		<div id="breadcrumb"> 
			<a href="javascript:;" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		</div>
	</div>
	
	<!--End-breadcrumbs-->

	<!--Action boxes-->
	<div class="container-fluid">
		<div class="quick-actions_homepage">
			<ul class="quick-actions">
				
				<li class="bg_lb span3"> 
					<a href="{{ URL::to('admin/dashboard') }}"><i class="icon-dashboard"></i>Dashboard</a>
				</li>
				
				<li class="bg_lb span3"> 
					<a href="{{ URL::to('admin/update_profile')}}"><i class="icon-user"></i>Admin</a>
				</li>
				
				<li class="bg_lb span3"> 
					<a href="{{ URL::to('admin/users/2')}}"><i class="icon-user-md"></i>Users</a>
				</li>
				
				<li class="bg_lb span3"> 
					<a href="{{ URL::to('admin/settings/email-templates')}}"><i class="icon-envelope"></i><span class="label label-success">{{ GeneralHelper::getTemplateCount()}}</span>Email Templates</a>
				</li>
				
				<li class="bg_lb span3"> 
					<a href="{{ URL::to('admin/pages')}}"><i class="icon-tags"></i><span class="label label-success">{{ GeneralHelper::getPagesCount()}}</span>Static Pages</a>
				</li>
				
				<li class="bg_lb span3"> 
					<a href="{{ URL::to('admin/faqs')}}"><i class="icon-question-sign"></i><span class="label label-success">{{ GeneralHelper::getFaqsCount()}}</span>FAQs</a>
				</li>
				
				<li class="bg_lb span3"> 
					<a href="{{ URL::to('admin/settings/general')}}"><i class="icon-cogs"></i>Settings</a>
				</li> 
				
				<li class="bg_ly span1"> 
					<a href="{{ URL::to('admin/languages')}}"><i class="icon-flag"></i><span class="label label-warning">{{ GeneralHelper::getLanguagesCount()}}</span>Languages</a> 
				</li>
				<li class="bg_lo span1"> 
					<a href="{{ URL::to('admin/hobbies')}}"><i class="icon-heart"></i><span class="label label-warning">{{ GeneralHelper::getHobbiesCount()}}</span>Hobbies</a>
				</li>
				<li class="bg_ls span1"> 
					<a href="{{ URL::to('admin/amenities')}}"><i class="icon-reorder"></i><span class="label label-warning">{{ GeneralHelper::getAmenitiesCount()}}</span>Amenities</a>
				</li>
				
				<li class="bg_lb span3"> 
					<a href="{{ URL::to('admin/logout')}}"><i class="icon icon-share-alt"></i>Logout</a>
				</li>
				
				<?php /*
				<li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Charts</a> </li>
				<li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i><span class="label label-success">101</span> Widgets </a> </li>
				<li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> Tables</a> </li>
				<li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Full width</a> </li>
				<li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
				<li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
				<li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
				<li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
				<li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>
				*/ ?>
				 
				
			</ul>
		</div> 
	</div>
	
@stop