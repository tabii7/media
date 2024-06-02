@extends('layouts.location vendor.locationVendorLayout')
@section('location-vendor-content')
<div class="container-fluid">
    <div class="row mt-3 border p-3 align-items-center" style="border-radius: 10px; background-color: #e3e3e3">
        <div class="col-lg">
            <div class="page-title-box d-flex justify-content-center flex-row align-items-center">
                <h5>View Location Listing </h5>
            </div>
        </div>
         
    </div>
    
    <div class="row mt-4">
        <div class="col-12 p-0 grid-margin">
            <div class="card p-4"> 
                {{-- {{$data}} --}}
 
                
                <div class="card-body">
                    <div class="row">
                        
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
                            <img src="{{ asset('storage/' . $img) }}" alt="" style="width: 100%; height:300px">
                        </div>
                            
                        @endforeach
                        @else
                            <div class="col-12">No images available</div>
                        @endif
                         
                        
                    </div>
                </div>



                
            
            <div class="card-body">
                <div class="row">
                    <div class="col-12 mt-4">
                        <label for="">Location Name:</label>
                        <p class="mt-3">{{ $data->location_name }}</p>
                    </div>
                    <div class="col-12 mt-4">
                        <label for="">Locations Address:</label>
                        <p class="mt-3">{{ $data->locations_address }}</p>
                    </div>
                    <div class="col-12 mt-4">
                        <label for="">Locations Summary:</label>
                        <p class="mt-3">{{ $data->locations_summary }}</p>
                    </div>
                    
                    <div class="col-6 mt-4">
                        <label for="">Locations Electricity Cost: {{ $data->locations_electricity_cost }}</label>
                        <p class="mt-3"></p>
                    </div>
                    
                    <div class="col-6 mt-4">
                        <label for="">Locations Voltage: {{ $data->locations_voltage }}</label>
                        <p class="mt-3"></p>
                    </div>
                    
                    <div class="col-6 mt-4">
                        <label for="">Locations Load Shut Down Timing: {{ $data->locations_load_shut_down_timing }}</label>
                        <p class="mt-3"></p>
                    </div>
                    
                    <div class="col-6 mt-4">
                        <label for="">Locations Rent Per Day: Rs. {{ $data->locations_rent_per_day }}</label>
                        <p class="mt-3"></p>
                    </div>
                    
                    <div class="col-6 mt-4">
                        <label for="">Time Of Availability: {{ $data->time_of_availability }}</label>
                        <p class="mt-3"></p>
                    </div>
                    
                    <div class="col-6 mt-4">
                        <label for="">Near By Market:  {{ $data->near_by_market }}</label>
                        <p class="mt-3"></p>
                    </div>
                    
                    <div class="col-6 mt-4">
                        <label for="">Near By Hospital: {{ $data->near_by_hospital }}</label>
                        <p class="mt-3"></p>
                    </div>
                    
                    <div class="col-6 mt-4">
                        <label for="">Near By Petrol Pump: {{ $data->near_by_petrol_pump }}</label>
                        <p class="mt-3"></p>
                    </div>
                     

                </div>
            </div>




            </div>
        </div>
    </div>

 
        
</div>

@endsection