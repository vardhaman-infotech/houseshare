@extends('frontend/layouts/default')

@section('title')
Housesharemarket
@stop

@section('content')

<div class="section candidate-dashboard-content solid-light-grey-bg">
	<div class="inner">
		<div class="container">
			<div class="candidate-dashboard-wrapper flex space-between no-wrap">
				
				<div class="right-side-content">
					<div class="tab-content candidate-dashboard"><?php 
					
						$type_search = Session::get('adssearch.type_search');
						
						//echo $type_search; die;  
						
						?>
					
						{{ Form::model(Session::get('adssearch'),array('url' => array('/listing/'.Route::input('slug')),'method' => 'PUT')) }}
						
							{{ Form::hidden('type_search', 1) }}
						
							<div class="col-md-6">
							
								<h3 style="padding-bottom: 5%;" class="tab-pane-title"><b>Basic Search</b></h3>
							
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::select('ad_type',Config::get('constants.ADVERTISE_TYPE_SEARCH'), ($type_search==1)?null:'' , array('class' => 'parsley-validated textbox-border'))}}
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::text('keyword', ($type_search==1)?null:'', array('placeholder'=>'Search by title', 'class' => 'form-control test-box-height-50 parsley-validated textbox-border')) }}
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::text('post_code', ($type_search==1)?null:'', array('placeholder'=>'Search by postcode', 'class' => 'form-control test-box-height-50 parsley-validated textbox-border')) }}
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::text('area', ($type_search==1)?null:'', array('onFocus'=>'geolocate()', 'id'=>'autocomplete', 'placeholder'=>'Search by locality', 'class' => 'form-control test-box-height-50 parsley-validated textbox-border')) }}
									</div>
								</div>   
								
								<div class="col-md-12">
									<div class="col-md-3">&nbsp;</div>
										<div class="col-md-8">
										<button type="submit" class="button" style="padding:15px 32px; font-size:13px;">Search</button>
										</div>
									<div class="col-md-2">&nbsp;</div>
								</div>
								
									
							</div>
							
						{{ Form::close() }}
							
							
						{{ Form::model(Session::get('adssearch'),array('url' => array('/listing/'.Route::input('slug')),'method' => 'PUT')) }}
							
							<div class="col-md-6">
							
								{{ Form::hidden('type_search', 2) }}
							
								<h3 style="padding-bottom: 5%;" class="tab-pane-title"><b>Advanced Search</b></h3>
								
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::select('ad_type',Config::get('constants.ADVERTISE_TYPE_SEARCH'), ($type_search==1)?null:'' , array('class' => 'parsley-validated textbox-border'))}}
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::text('keyword', ($type_search==2)?null:'', array('placeholder'=>'Search by title', 'class' => 'form-control test-box-height-50 parsley-validated textbox-border')) }}
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::text('post_code', ($type_search==2)?null:'', array('placeholder'=>'Search by postcode', 'class' => 'form-control test-box-height-50 parsley-validated textbox-border')) }}
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::text('area', ($type_search==2)?null:'', array('onFocus'=>'geolocate()', 'id'=>'autocomplete', 'placeholder'=>'Search by locality', 'class' => 'form-control test-box-height-50 parsley-validated textbox-border')) }}
									</div>
								</div> 
								
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::select('i_am_we_are', array(''=>'I am')+Config::get('constants.I_AM_WE_ARE') , null, array('id'=>'room_size', 'class' => 'form-control test-box-height-50 parsley-validated textbox-border'))}}
									</div>
								</div> 
								
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::select('looking_for',array(''=>'Looking For')+Config::get('constants.LOOKING_FOR'), null, array('class' => 'form-control test-box-height-50 parsley-validated textbox-border'))}}
									</div>
								</div> 
								
								
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-2">
											<span style=" float: left; margin-top: 10px;">Minimum Stay</span>
										</div>
										<div class="col-md-4">
											<div class="select-style">
												{{ Form::select('minimum_stay_type',array(''=>'Minimum')+Config::get('constants.MINIMUM_STAY'), null, array('class' => 'form-control parsley-validated textbox-border'))}}
											</div>
										</div>
										<div class="col-md-1">
											<span style=" float: left;
											margin-top: 10px;">to</span>
										</div>
										<div class="col-md-5">
											<div class="select-style">
												{{ Form::select('maximum_stay_type',array(''=>'Maximum')+Config::get('constants.MAXIMUM_STAY'), null, array('class' => 'form-control parsley-validated textbox-border'))}}
											</div>
										</div>
									</div>
								</div>  
								
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-2">
											<span style=" float: left; margin-top: 10px;">Ages</span>
										</div>
										<div class="col-md-4">
											<div class="select-style"><?php 
												for($j=16; $j<100; $j++){
													$minimum_ageArr[$j] = $j;
												} ?>
												{{ Form::select('minimum_age',array(''=>'Min')+$minimum_ageArr, null, array('class' => 'form-control parsley-validated textbox-border'))}}
											</div>
										</div>
										<div class="col-md-1">
											<span style=" float: left;
											margin-top: 10px;">to</span>
										</div>
										<div class="col-md-5">
											<div class="select-style"><?php 
												for($j=16; $j<100; $j++){
													$maximum_ageArr[$j] = $j;
												} ?>
												{{ Form::select('maximum_age',array(''=>'Max')+$maximum_ageArr, null, array('class' => 'form-control parsley-validated textbox-border'))}}
											</div>
										</div>
									</div>
								</div> 
								
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::select('days_available_type',array(''=>'Available Days')+Config::get('constants.DAYS_AVAILABLE'), null, array('class' => 'form-control parsley-validated textbox-border'))}}
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::select('is_gender',array(''=>'Gender')+Config::get('constants.GENDER'), null, array('class' => 'form-control parsley-validated textbox-border'))}}
									</div>
								</div>
								 
								
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::select('is_gender',array(''=>'Gender')+Config::get('constants.GENDER'), null, array('class' => 'form-control parsley-validated textbox-border'))}}
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::select('is_smoking',array(''=>'Smoking')+Config::get('constants.YES_NO'), null, array('class' => 'form-control parsley-validated textbox-border'))}}
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="select-style">
										{{ Form::select('is_occupation',array(''=>'Occupation')+Config::get('constants.OCCUPATION_TYPE'), null, array('class' => 'form-control parsley-validated textbox-border'))}}
									</div>
								</div>
								 
								
								<div class="col-md-12">
									<div class="col-md-3">&nbsp;</div>
										<div class="col-md-8">
										<button class="button" type="submit" style="padding:15px 32px; font-size:13px;">Search</button>
										</div>
									<div class="col-md-2">&nbsp;</div>
								</div>
								
							
							</div>
						
						{{ Form::close() }}
						
						
					</div>
				</div>
				
				<div class="left-sidebar-menu">
					@include('Elements/Property/property_list_left') 
				</div>
					
			</div>
		</div>
	</div>
</div>



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

    function fillInAddress() {
        
        var place = autocomplete.getPlace();
        for (var component in componentForm) {
         // document.getElementById(component).value = '';
         // document.getElementById(component).disabled = false;
        }

        for (var i = 0; i < place.address_components.length; i++) {
			var addressType = place.address_components[i].types[0];
			if (componentForm[addressType]) {
				var val = place.address_components[i][componentForm[addressType]];
				//document.getElementById(addressType).value = val;
			}
        }
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



<style>
	h6 {
	color: #627199;
	font-size: 9px;
	font-weight: 700;
	line-height: 14px;
	text-transform: uppercase;
	}	
	
	.section.solid-blue-bg > .inner {
	background: #fff none repeat scroll 0 0;
	}
	
	@media only screen and (max-width: 320px), only screen and (max-device-width: 479px) {
	
	.select-style {
    background: rgba(0, 0, 0, 0) url("./img/arrow.png") no-repeat scroll 96% 50%;
    border-radius: 4px;
    overflow: hidden;
    width: 100%;
	}
	
	
	}
	
	
	@media only screen and (max-width: 480px), only screen and (max-device-width: 767px) {
	
	.select-style {
    background: rgba(0, 0, 0, 0) url("./img/arrow.png") no-repeat scroll 96% 50%;
    border-radius: 4px;
    overflow: hidden;
    width: 100%;
	}

}







</style>
@stop