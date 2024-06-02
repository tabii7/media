@extends('layouts.location vendor.locationVendorLayout')
@section('location-vendor-content')
 
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add new Location</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('location.vendor.store') }}" enctype="multipart/form-data">
                        @csrf 
                          
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="location_name"
                                    class="col-form-label ">{{ __('Location Name') }}</label>
                                <input id="location_name" type="text"
                                    class="form-control @error('location_name') is-invalid @enderror"
                                    name="location_name" value="{{ old('location_name') }}" required
                                    autocomplete="location_name" autofocus>

                                @error('shop_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>  
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="locations_address"
                                    class="col-form-label ">{{ __('Locations address') }}</label>
                                    <textarea name="locations_address" id="locations_address" cols="30" rows="6"  class="form-control @error('locations_address') is-invalid @enderror"></textarea>
                                 

                                @error('locations_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="locations_summary"
                                    class="col-form-label ">{{ __('Locations Summary') }}</label>
                                    <textarea name="locations_summary" id="locations_summary" cols="30" rows="6"  class="form-control @error('locations_summary') is-invalid @enderror"></textarea>
                                 

                                @error('locations_summary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="locations_electricity_cost"
                                    class="col-form-label ">{{ __('Locations Electricity Cost') }}</label>
                                <input id="locations_electricity_cost" type="text"
                                    class="form-control @error('locations_electricity_cost') is-invalid @enderror"
                                    name="locations_electricity_cost" value="{{ old('locations_electricity_cost') }}" required
                                    autocomplete="locations_electricity_cost" autofocus>

                                @error('locations_electricity_cost')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="locations_voltage"
                                    class="col-form-label ">{{ __('Locations Voltage') }}</label>
                                <input id="locations_voltage" type="text"
                                    class="form-control @error('locations_voltage') is-invalid @enderror"
                                    name="locations_voltage" value="{{ old('locations_voltage') }}" required
                                    autocomplete="locations_voltage" autofocus>

                                @error('locations_voltage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="locations_load_shut_down_timing"
                                    class="col-form-label ">{{ __('Locations Load Shut down Timing') }}</label>
                                <input id="locations_load_shut_down_timing" type="text"
                                    class="form-control @error('locations_load_shut_down_timing') is-invalid @enderror"
                                    name="locations_load_shut_down_timing" value="{{ old('locations_load_shut_down_timing') }}" required
                                    autocomplete="locations_load_shut_down_timing" autofocus>

                                @error('locations_load_shut_down_timing')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="locations_rent_per_day"
                                    class="col-form-label ">{{ __('Locations Rent per day') }}</label>
                                <input id="locations_rent_per_day" type="text"
                                    class="form-control @error('locations_rent_per_day') is-invalid @enderror"
                                    name="locations_rent_per_day" value="{{ old('locations_rent_per_day') }}" required
                                    autocomplete="locations_rent_per_day" autofocus>

                                @error('locations_rent_per_day')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="time_of_availability"
                                    class="col-form-label ">{{ __('Time of availability') }}</label>
                                <input id="time_of_availability" type="text"
                                    class="form-control @error('time_of_availability') is-invalid @enderror"
                                    name="time_of_availability" value="{{ old('time_of_availability') }}" required
                                    autocomplete="time_of_availability" autofocus>

                                @error('time_of_availability')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="near_by_market"
                                    class="col-form-label ">{{ __('Near by Market ') }}</label>
                                <input id="near_by_market" type="text"
                                    class="form-control @error('near_by_market') is-invalid @enderror"
                                    name="near_by_market" value="{{ old('near_by_market') }}" required
                                    autocomplete="near_by_market" autofocus>

                                @error('near_by_market')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="near_by_hospital"
                                    class="col-form-label ">{{ __('Near by Hospital ') }}</label>
                                <input id="near_by_hospital" type="text"
                                    class="form-control @error('near_by_hospital') is-invalid @enderror"
                                    name="near_by_hospital" value="{{ old('near_by_hospital') }}" required
                                    autocomplete="near_by_hospital" autofocus>

                                @error('near_by_hospital')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="near_by_petrol_pump"
                                    class="col-form-label ">{{ __('Near By Petrol Pump') }}</label>
                                <input id="near_by_petrol_pump" type="text"
                                    class="form-control @error('near_by_petrol_pump') is-invalid @enderror"
                                    name="near_by_petrol_pump" value="{{ old('near_by_petrol_pump') }}" required
                                    autocomplete="near_by_petrol_pump" autofocus>

                                @error('near_by_petrol_pump')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 

                     
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="locations_pics"
                                    class="col-form-label ">{{ __('Locations Pics') }}</label>
                                <input id="locations_pics" type="file"
                                    class="form-control @error('locations_pics') is-invalid @enderror"
                                    name="locations_pics[]"  required  autofocus multiple>

                                @error('locations_pics')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                                
                        <div class="row mt-3">
                            <div class=" col-md-10 m-auto">
                                <div class="d-flex justify-content-end">

                                    <button type="submit" class="btn btn-outline-success rounded-pill ">{{ __('Add') }} </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection