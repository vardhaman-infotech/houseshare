{{ Form::model($get_form_data, array('url' => array('advertise/'.Route::input('slug')),'method' => 'PUT', 'id'=>'add_post_form', 'class' => 'job-post-form multisteps-form')) }}

	<fieldset style="{{($get_form_step==1)?'display:block':'display:none'}}">
		<h2 class="form-title text-center dark">Place a room wanted advert </h2>
		<h3 class="step-title text-center dark">Step 1</h3>
		<ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
			<li><span>1</span></li>
			<li><span>2</span></li>
		</ul>
		
		<input class="form-control" name="form_step" value="{{$get_form_step}}" type="hidden">
		
		<div class="form-inner">
			<div class="pricing-plan-field-wrapper">
				<div class="col-md-12">
					<div class="alert alert-info alert-dismissible" role="alert">
						Get started with your room wanted advert 
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="room_size">I am / we are<span class='red bold'>*</span></label> 
								{{ Form::select('i_am_we_are', array(''=>'Select your gender(s)')+Config::get('constants.I_AM_WE_ARE') , null, array('id'=>'room_size', 'class' => 'form-control'))}}
								<span class="red">{{ $errors->first('i_am_we_are') }} </span>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="Motivo">Looking for</label>
								<div class="row">
									<div class="col-md-12"> 
										{{ Form::select('looking_for',Config::get('constants.LOOKING_FOR'), null, array('class' => 'form-control'))}}
										<span class="red">{{ $errors->first('looking_for') }} </span>
									</div> 
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label" for="Motivo">Buddy ups</label>
								<div class="checkbox checkbox-inline">
									{{ Form::checkbox('is_buddy_ups', 1,null,array('id'=>'is_buddy_ups')) }}
									<label for="is_buddy_ups">
										I/we are also interested in Buddying up<br><small>Tick this if you might like to Buddy Up with other room seekers to find a whole flat or house together and start a brand new flat/house share. </small> 
									</label>
								</div>
							</div>
						</div> 
					</div>
					 
				</div>
			</div>
			
			<div class="button-wrapper text-center">
				<input value="Continue to next step" name="1" type="submit" class="button"></button>
			</div>
			
		</div> 							
	</fieldset>

	<fieldset style="{{($get_form_step==2)?'display:block':'display:none'}}">
		
		<h2 class="form-title text-center dark">Place new room wanted advert</h2>
		<h3 class="step-title text-center dark">Step 2</h3>
		
		<ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
			<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
			<li class="sub-active"><span>2</span></li> 
		</ul>
		
		<div class="form-inner">
			<div class="form-fields-wrapper">
			
				<div class="col-md-12">
					<div class="alert alert-info alert-dismissible" role="alert">
						Your search
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="Motivo">Area<span class='red bold'>*</span></label>
								{{ Form::text('area', null, array('onFocus'=>'geolocate()', 'id'=>'autocomplete', 'class' => 'form-control'))}}
								<span class="red">{{ $errors->first('area') }} </span>
							</div>
						</div> 
						
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="Motivo">Your budget<span class='red bold'>*</span></label>
								<div class="row">
									<div class="col-md-6"> 
										{{ Form::text('rent_amt', null, array('placeholder'=>'$0.00', 'class' => 'rent_amt form-control'))}}
										<span class="red">{{ $errors->first('rent_amt') }} </span>
									</div>
									<div style="padding-top: 6.6%;" class="col-md-6">
										{{ Form::select('rent_amt_type',array(''=>'Per week or month?...')+Config::get('constants.ROOM_COST_TYPE'), null, array('style'=>'margin-top: -16%;','class' => 'rent_amt_type form-control'))}}
										<span class="red">{{ $errors->first('rent_amt_type') }} </span>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label" for="Motivo">I am available to move in from</label>
						<div class="row">
							<div class="col-md-12">
								{{ Form::text('available_from', null, array('readonly'=>true, 'class' => 'form-control datepicker'))}}
								<span class="red">{{ $errors->first('available_from') }} </span>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="Motivo">Period accommodation needed for</label>
								{{ Form::select('minimum_stay_type',array(''=>'No Minimum')+Config::get('constants.MINIMUM_STAY'), null, array('class' => 'form-control'))}}
							</div>
						</div>	
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="Motivo">to </label>
								{{ Form::select('maximum_stay_type',array(''=>'No Maximum')+Config::get('constants.MAXIMUM_STAY'), null, array('class' => 'form-control'))}}
							</div>
						</div> 
					</div>
					
					<div class="row">
						<div class="col-md-6">					
							<div class="form-group">
								<label class="control-label" for="Motivo">I want to stay in the accommodation</label>
								{{ Form::select('days_available_type',Config::get('constants.DAYS_AVAILABLE'), null, array('class' => 'form-control'))}}
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">	
							<div class="form-group">
								<label class="control-label" for="Motivo">I would prefer these amenities</label><br>
								@foreach($amenities as $key_amenitie=>$amenitie_val)
									<div class="checkbox checkbox-inline col-md-6">
										{{ Form::checkbox('amenitie_id[]', $key_amenitie,null,array('id'=>'checkbox_id_'.$key_amenitie)) }}
										<label for="checkbox_id_{{$key_amenitie}}">&nbsp;{{$amenitie_val}}</label>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-md-12">
					<div class="alert alert-info alert-dismissible" role="alert">
						About you 
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="Motivo">Ages</label><?php 
								for($j=16; $j<100; $j++){
									$minimum_ageArr[$j] = $j;
								} ?>
								{{ Form::select('minimum_age',array(''=>'Please select')+$minimum_ageArr, null, array('class' => 'form-control'))}}
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="Motivo"> Occupation</label>
								{{ Form::select('is_occupation',array(''=>'No preference')+Config::get('constants.OCCUPATION_TYPE'), null, array('class' => 'form-control'))}}
							</div>
						</div> 
					</div>
					
					<div class="row">
						<div class="col-md-12">					
							<div class="form-group">
								<label class="control-label" for="Motivo">DSS?</label>
								<div class="checkbox checkbox-inline">
									{{ Form::checkbox('is_dss', 1,null,array('id'=>'is_dss')) }}
									<label for="is_dss">
										<small>Yes, I will be using housing benefit to pay some or all my rent </small> 
									</label>
								</div>
							</div>
						</div>
					</div> 
					
					<div class="row">
						<div class="col-md-6">					
							<div class="form-group">
								<label class="control-label" for="Motivo">Do you smoke?</label>
								{{ Form::select('is_smoking',array(''=>'No preference')+Config::get('constants.YES_NO'), null, array('class' => 'form-control'))}}
							</div>
						</div>
						<div class="col-md-6">					
							<div class="form-group">
								<label class="control-label" for="Motivo">Do you have any pets?</label>
								{{ Form::select('is_pets',array(''=>'No preference')+Config::get('constants.YES_NO'), null, array('class' => 'form-control'))}}
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">					
							<div class="form-group">
								<label class="control-label" for="Motivo">Your sexual orientation</label>
								{{ Form::select('is_sexual_orientation',array(''=>'No preference')+Config::get('constants.SEXUAL_ORIENTATION'), null, array('class' => 'form-control'))}}
							</div>
						</div> 
					</div>
					
					<div class="row"> 					
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="Motivo">Your preferred language</label>
								{{ Form::select('language_id',$languages, null, array('class' => 'form-control'))}}
							</div>
						</div> 
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="Motivo"> Your nationality</label>
								{{ Form::select('country_id',$nationality, null, array('class' => 'form-control'))}}
							</div>
						</div>
					</div> 
					
					<div class="row"> 					
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="Motivo">Your Interests</label>
								{{ Form::text('your_interests', null, array('class' => 'form-control'))}}
							</div>
						</div> 
						<div class="col-md-6">&nbsp;</div>
					</div>
					
					<div class="row"> 					
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="Motivo">Your Name<span class='red bold'>*</span></label>
								{{ Form::text('first_name', null, array('placeholder'=>'First Name', 'class' => 'form-control'))}}
								<span class="red">{{ $errors->first('first_name') }} </span>
							</div>
						</div> 
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="Motivo">&nbsp;</label>
								{{ Form::text('last_name', null, array('placeholder'=>'Last Name', 'class' => 'form-control'))}}
								<span class="red">{{ $errors->first('last_name') }} </span>
							</div>	
						</div>
					</div> 
					  
				</div> 
				
				
				<div class="col-md-12">
				
					<div class="alert alert-info alert-dismissible" role="alert">Advert details (optional)</div>
					
					<div class="form-group">
						<label class="control-label" for="Motivo">Title<span class='red bold'>*</span>&nbsp;</label>(short description - max 50 characters) 
						{{ Form::text('title', null, array('maxlength'=>50,'class' => 'form-control'))}}
						<span class="red">{{ $errors->first('title') }} </span>
					</div>
					
					<div class="form-group">
						<label class="control-label" for="Motivo">Description<span class='red bold'>*</span>&nbsp;</label>(No contact details permitted within description) 
						{{ Form::textarea('description', null, array('placeholder'=>'Your Message...', 'style'=>'border:1px solid #ededed;', 'rows'=>3, 'class' => 'form-control'))}}
						<span class="red">{{ $errors->first('description') }} </span>
						Tips: Give more detail about the accommodation, who you are looking for and what a potential flatmate should expect living with you. You must write at least 25 words and can write as much as you like within reason. 
					</div>
					
					<div class="form-group">
						<label class="control-label" for="Motivo">Buddy Up additional description</label> (Optional message shown to Buddy Up searches 
						{{ Form::textarea('buddy_description', null, array('placeholder'=>'Your Message...','style'=>'border:1px solid #ededed;','rows'=>3, 'class' => 'form-control'))}}
						<span class="red">{{ $errors->first('buddy_description') }} </span>
					</div> 
					<div class="form-group">
						<label class="control-label" for="Motivo">Telephone</label>
						{{ Form::text('telephone', null, array('class' => 'form-control'))}}
						(recommended - we only display to registered users) 
					</div> 
					
				</div>
				
				
				<div class="col-md-12">
				
					@if(Auth::check())
						
						<div class="alert alert-info alert-dismissible" role="alert">Email Alerts</div>
						<div class="row">
							<div class="col-md-12"> 
								<div class="form-group">
									<label for="">Daily Email Alerts</label>
									<div class="checkbox">
										{{ Form::checkbox('daily_email_alerts', 1,null,array('id'=>'checkbox1_con')) }}
										<label for="checkbox1_con">
											Yes, please send me daily summary emails of new Rooms Wanted adverts matching my requirements 
										</label>
									</div>
									<label for="">Instant Email Alerts</label>
									<div class="checkbox">
										{{ Form::checkbox('instant_email_alerts', 1,null,array('id'=>'checkbox2_con')) }}
										<label for="checkbox2_con">
											Yes, please send me emails of new Rooms Wanted adverts matching my requirements as soon as they are placed on the website 
										</label>
									</div>
								</div>
							</div>
						</div>
						
					@else 
						
						<div class="alert alert-info alert-dismissible" role="alert">
							Login information
						</div>
						<div class="row">
							<div class="col-md-6">
								Existing user? 
								<hr>
								<div class="form-group">
									<label class="control-label" for="Motivo">Email Address</label>
									{{ Form::text('login_email', null, array('autocomplete'=>'off', 'class'=>'form-control', 'id'=>'email', 'placeholder' =>'Email*'))}}  
									<span class="red">{{ $errors->first('login_email') }}</span>
								</div>
								<div class="form-group">
									<label class="control-label" for="Motivo">Password</label>
									{{ Form::password('login_password', array('autocomplete'=>'off', 'type'=>'password', 'class'=>'form-control', 'id'=>'password', 'placeholder' =>'Password*'))}}
									<span class="red">{{ $errors->first('login_password') }}</span>
								</div><?php /*
								<div class="form-group">
									<label class="control-label" for="Motivo"><a herf="#">Forgot Password</a></label>
								</div>*/ ?>
							</div>
							<div class="col-md-6">
								New user? 
								<hr/>
								<div class="form-group">
									<label class="control-label" for="Motivo">Email</label>
									{{ Form::text('register_email', null, array('autocomplete'=>'off', 'class'=>'form-control', 'id'=>'email', 'placeholder' =>'Email*', 'data-bv-notempty-message'=>'false', ))}}  
									<span class="red">{{ $errors->first('register_email') }}</span>
								</div>
								<div class="form-group">
									<label class="control-label" for="Motivo">Confirm email</label>
									{{ Form::text('register_conf_email', null, array('autocomplete'=>'off', 'class'=>'form-control', 'id'=>'email', 'placeholder' =>'Confirm Email*', 'data-bv-notempty-message'=>'false', ))}}  
									<span class="red">{{ $errors->first('register_conf_email') }}</span>
								</div>
								<div class="form-group">
									<label class="control-label" for="Motivo">Password</label>
									{{ Form::password('register_password', array('autocomplete'=>'off', 'type'=>'password', 'class'=>'form-control', 'id'=>'password', 'placeholder' =>'Password*', 'data-bv-notempty-message'=>'false', ))}}
									<span class="red">{{ $errors->first('register_password') }}</span>
								</div>
								<div class="form-group">
									<label class="control-label" for="Motivo">Confirm Password</label>
									{{ Form::password('register_conf_password', array('autocomplete'=>'off', 'type'=>'password', 'class'=>'form-control', 'id'=>'password', 'placeholder' =>'Confirm password*', 'data-fv-identical'=>true, 'data-fv-identical-field'=>'password', 'data-bv-notempty-message'=>'false', ))}}
									<span class="red">{{ $errors->first('register_conf_password') }}</span>
								</div>
								<div class="form-group">
									<div class="checkbox">
										{{ Form::checkbox('notify_email_suitable', 1,null,array('id'=>'checkbox1_noti')) }}
										<label for="checkbox1_noti">
											Notify me by email of suitable flatmates (room wanted adverts)
										</label>
									</div>
									<div class="checkbox">
										{{ Form::checkbox('send_me_occasional', 1,null,array('id'=>'checkbox1_occasional')) }}
										<label for="checkbox1_occasional">
											Send me occasional newsletters
										</label><br>
										<small>(We NEVER pass on your details to third parties) </small>
									</div><?php /*
									<div class="form-group">
										<input class="form-control" id="Correo" name="Correo" placeholder="Where did you hear about us?" required="" type="text">
									</div> */ ?>
									<div class="form-group">
										<div class="form_input form_checkbox">
											<label class="hidden">
												<input name="inagreement" checked="" value="Y" type="checkbox">
											</label>
											*By registering, I agree to SpareRoom's
											<a target="_blank" href="{{URL::to('pages/conditions')}}">terms</a> and
											<a target="_blank" href="{{URL::to('pages/privacy-policy')}}">privacy policy</a>, and to receive emails from SpareRoom (you can unsubscribe any time).
										</div>
									</div>
								</div>
							</div>
						</div> 
					
					@endif 
					
				</div>
				
				
				
			</div>
			
			<div class="button-wrapper text-center">
				<a href="{{URL::to('advertise-back/'.Route::input('slug').'/'.$get_form_step)}}"><button type="button" class="button">Back</button></a>
				<button type="submit" class="button">Submit </button>
			</div>
		</div>
	</fieldset> 

{{Form::close()}}  

<script type="text/javascript">

    var placeSearch, autocomplete;
    var componentForm = {
        //street_number: 'short_name',
        route: 'long_name',
        //locality: 'long_name',
       // administrative_area_level_1: 'short_name',
       // country: 'long_name',
       // postal_code: 'short_name'
    };

    function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            (document.getElementById('autocomplete')),
            {types: ['geocode']}
		);
        autocomplete.addListener('place_changed', fillInAddress);
    }
 
 
    function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
    }
	
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{Config::get('constants.API_KEY_GOOGLE')}}&libraries=places&callback=initAutocomplete" async defer></script>

<script type="text/javascript">
	
	function getRoom(){
	
		var room_rent_type = $('#room_size').val();
		
		$.ajax({
			url: "{{URL::to('admin/get-room-html')}}",
			type: "POST", 
			dataType: "html",
			data: {room_rent_type:room_rent_type},
			success: function(data){
				$('.roomHtml').html(data);
			},
			error: function(data,status,e){
				 
			}
		});
	}
	
</script>

<style>
	.steps-progress-bar {
		margin: 45px auto 0;
		max-width: 159px;
	}	
</style>
