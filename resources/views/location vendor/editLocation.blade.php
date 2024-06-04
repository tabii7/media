@extends('layouts.location vendor.locationVendorLayout')
@section('location-vendor-content')


<style>
    .img-div {
        position: relative;
    }

    .delbtn {
        position: absolute;
        top: -4%;
        right: -4%;
        display: none;
    }

    .img-div:hover .delbtn {

        display: inline;
    }
        .form-control{
            height: auto;
        }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Location</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('location.vendor.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf  
                               
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="location_name"
                                    class="col-form-label ">{{ __('Location Name') }}</label>
                                <input id="location_name" type="text"
                                    class="form-control @error('location_name') is-invalid @enderror"
                                    name="location_name" value="{{ $data->location_name }}" required
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
                                    <textarea name="locations_address" id="locations_address" cols="30" rows="6"  class="form-control @error('locations_address') is-invalid @enderror">{{ $data->locations_address }}</textarea>
                                 

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
                                    <textarea name="locations_summary" id="locations_summary" cols="30" rows="6"  class="form-control @error('locations_summary') is-invalid @enderror">{{ $data->locations_summary }}</textarea>
                                 

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
                                    name="locations_electricity_cost" value="{{$data->locations_electricity_cost }}" required
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
                                    name="locations_voltage" value="{{ $data->locations_voltage }}" required
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
                                    name="locations_load_shut_down_timing" value="{{ $data->locations_load_shut_down_timing }}" required
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
                                    name="locations_rent_per_day" value="{{ $data->locations_rent_per_day }}" required
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
                                    name="time_of_availability" value="{{ $data->time_of_availability }}" required
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
                                    name="near_by_market" value="{{ $data->near_by_market }}" required
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
                                    name="near_by_hospital" value="{{ $data->near_by_hospital }}" required
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
                                    name="near_by_petrol_pump" value="{{ $data->near_by_petrol_pump }}" required
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
                                    name="locations_pics[]"     autofocus multiple>

                                @error('locations_pics')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="row">

                            <div class="col-10 m-auto">
                                <div id="imageContainer" class="row  mt-4">
                                    @if(!empty($data->locations_pics))
    @php
        // Initialize $locationsPics as an empty array
        $locationsPics = [];

        // Check if locations_pics is a string and decode it
        if (is_string($data->locations_pics)) {
            $decodedLocationsPics = json_decode($data->locations_pics, true);
            
            // If decoding was successful and resulted in an array, use it
            if (is_array($decodedLocationsPics)) {
                $locationsPics = $decodedLocationsPics;
            }
        } elseif (is_array($data->locations_pics)) {
            // If locations_pics is already an array, use it directly
            $locationsPics = $data->locations_pics;
        }
    @endphp

    @foreach ($locationsPics as $img)
        <div class="col-3">
            <div class="img-div">
                <img src="{{ asset('storage/' . $img) }}" alt="" style="width: 100%; height: 200px">
                <div class="delbtn">
                    <button class="btn btn-danger" onclick="deleteImg(event, '{{ $img }}', '{{ $data->id }}')">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="col-12">No images available</div>
@endif

                                


                                </div> 
                                
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function deleteImg(event, img, id) {
        event.preventDefault();
        console.log("Delete button clicked"); // Debugging statement
        console.log("Image path:", img); // Debugging statement

        if (confirm('Are you sure you want to delete this image?')) {
            console.log("CSRF Token:", $('meta[name="csrf-token"]').attr('content')); // Debugging statement

            $.ajax({
                url: '/delete-image',
                type: 'POST',
                data: {
                    image: img,
                    id: id,
                    _token: $('meta[name="csrf-token"]').attr('content') // Pass the CSRF token here
                },
                success: function(data) {
                    console.log("Server response:", data); // Debugging statement
                    if (data.success) {
                        $(event.target).closest('.img-div').parent().remove();
                    } else {
                        alert('Failed to delete the image.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
    }
 
</script>

    
<script>
    document.getElementById('locations_pics').addEventListener('change', function(event) {
        var container = document.getElementById('imageContainer');
        var files = event.target.files;  

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var reader = new FileReader();

            reader.onload = (function(theFile) {
                return function(e) {
                    var imgElement = document.createElement('img');
                    imgElement.style.width = '100%';
                    imgElement.style.height = '100%';
                    imgElement.src = e.target.result;

                    var divElement = document.createElement('div');
                    divElement.className = 'col-2';
                    divElement.innerHTML = `
                    <div class="img-div">
                        ${imgElement.outerHTML}
                        <div class="delbtn">
                            <button class="btn btn-danger">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                `;

                    container.appendChild(divElement);
                };
            })(file);

            reader.readAsDataURL(file);
        }
    });
</script>
    
   


@endsection