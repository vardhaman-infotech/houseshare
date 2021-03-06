<div class="section breadcrumb-bar solid-blue-bg">
	<div class="inner" style="background-image: url('{{URL::to('img/background01.jpg')}}');">
		<div class="container">
		
			<div class="col-md-12">
			
				{{ Form::model(Session::get('adssearch'),array('url' => array('/listing/'.Route::input('slug')),'method' => 'PUT')) }}
			
				<div class="col-md-10">
				
					<div class="col-md-5">
						<div class="select-style" id="desa">
							{{ Form::select('ad_type',Config::get('constants.ADVERTISE_TYPE_SEARCH'), $get_add_type, array('class' => 'form-control parsley-validated'))}}
						</div>
					</div>
					
					<div class="col-md-7">
						<div class="form-group">
							{{ Form::text('keyword', null, array('onFocus'=>'geolocate()', 'id'=>'autocomplete', 'placeholder'=>'Search by locality or title, postcode...', 'class' => 'form-control test-box-height-50 parsley-validated')) }}
						</div>
					</div> 
					 
					<?php /*
					<div class="col-md-3">
						<div class="select-style">
							<select name="day" class="form-control parsley-validated" parsley-required="true">
								<option value="Show adverts from">Show adverts from</option>
								<option value="Property type">Rooms in existing shares</option>
								<option value="Property type">Rooms in existing shares</option>
								<option value="Property type">Rooms in existing shares</option>
							</select>
						</div>
					</div>
					
					
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-3">
								<span style=" float: left;
								margin-top: 10px;">Rate</span>
							</div>
							<div class="col-md-4">
								<div class="select-style">
									<select name="day" class="form-control parsley-validated" parsley-required="true">
										<option value="Min">Min</option>
										<option value="Property type">21231</option>
										<option value="Property type">21231</option>
										<option value="Property type">21231</option>
									</select>
								</div>
							</div>
							<div class="col-md-1">
								<span style=" float: left;
								margin-top: 10px;">to</span>
							</div>
							<div class="col-md-4">
								<div class="select-style">
									<select name="day" class="form-control parsley-validated" parsley-required="true">
										<option value="Mix">Mix</option>
										<option value="Property type">21231</option>
										<option value="Property type">21231</option>
										<option value="Property type">21231</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="select-style">
							<select name="day" class="form-control parsley-validated" parsley-required="true">
								<option value="Property type">Property type</option>
							</select>
						</div>
					</div>
					*/ ?>
					
				</div>
				
				<div class="col-md-2" id="fitter">
					<button type="submit" class="button" style="padding:15px 32px; font-size:13px;">Apply Filter</button>
				</div>
				
				{{ Form::close() }}
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
