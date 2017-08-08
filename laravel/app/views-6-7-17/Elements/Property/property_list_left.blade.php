<ul class="nav nav-pills nav-stacked">
	<div style="padding:10px;">
		<div class="latest-update flex no-column no-wrap">
			<div class="left-side-inner">
				{{HTML::image('img/placeholder.png','company-logo',array('class'=>'img-responsive'))}}
			</div>
			<div class="right-side-inner">
				<h5><span>Show results on a map</h5>
				<h5><a href="javascript:;">We're looking for an Art Director</a></h5>
			</div>
		</div>
		<li class="nav-divider"></li>
		<div class="latest-update flex no-column no-wrap">
			<div class="left-side-inner">
				{{HTML::image('img/email.png','company-logo',array('class'=>'img-responsive'))}}
			</div>
			<div class="right-side-inner">
				<h5><span>Save search for alerts </h5>
				<h5><a href="javascript:;">We're looking for an Art Director</a></h5>
			</div>
		</div>
		<li class="nav-divider"></li>
		<div class="latest-update flex no-column no-wrap">
			<div class="left-side-inner">
				{{HTML::image('img/search.png','company-logo',array('class'=>'img-responsive'))}}
			</div>
			<div class="right-side-inner">
				<h5><span>Refine search</h5>
				<h5><a href="javascript:;">We're looking for an Art Director</a></h5>
			</div>
		</div>
	</div>
	
	<li class="nav-divider"></li>
	<li class="heading">Need any help?</li>
	<div style="padding:10px;">
		<li class="nav-divider"></li>
		<div class="latest-update flex no-column no-wrap">
			<div class="left-side-inner">
				{{HTML::image('img/opened-email-envelope.png','company-logo',array('class'=>'img-responsive'))}}
			</div>
			<div class="right-side-inner">
				<h5><span>{{Config::get('constants.NEED_ANY_HELP_EMAIL')}}</h5>
				<h5><a href="mailto:{{Config::get('constants.NEED_ANY_HELP_EMAIL')}}">{{Config::get('constants.NEED_ANY_HELP_EMAIL')}}</a></h5>
			</div>
		</div>
		<li class="nav-divider"></li>
		<div class="latest-update flex no-column no-wrap">
			<div class="left-side-inner">
				{{HTML::image('img/call-answer.png','company-logo',array('class'=>'img-responsive'))}}
			</div>
			<div class="right-side-inner">
				<h5><span>{{Config::get('constants.NEED_ANY_HELP_PHONE')}}</h5>
				<h5><a href="tel:{{Config::get('constants.NEED_ANY_HELP_PHONE')}}">{{Config::get('constants.NEED_ANY_HELP_PHONE')}}</a></h5>
			</div>
		</div>
	</div>
</ul>