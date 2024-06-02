@extends('layouts.property vendor.propertyVendorLayout')
@section('property-vendor-content')
 
<div class="container-fluid">
    <div class="row mt-3 border p-3 align-items-center" style="border-radius: 10px; background-color: #e3e3e3">
        <div class="col-lg">
            <div class="page-title-box d-flex justify-content-center flex-row align-items-center">
                <h5>View Property Listing </h5>
            </div>
        </div>
         
    </div>
    
    <div class="row mt-4">
        <div class="col-12 p-0 grid-margin">
            <div class="card p-4"> 
                {{-- {{$data}} --}}
 
                
                <div class="card-body">
                    <div class="row">
                        
                        @if(!empty($data->product_pics))
                        @php
                            // Initialize $locationsPics as an empty array
                            $productspics = [];

                            // Check if locations_pics is a string and decode it
                            if (is_string($data->product_pics)) {
                                $decodedProductsPics = json_decode($data->product_pics, true);
                                
                                // If decoding was successful and resulted in an array, use it
                                if (is_array($decodedProductsPics)) {
                                    $productspics = $decodedProductsPics;
                                }
                            } elseif (is_array($data->product_pics)) {
                                // If locations_pics is already an array, use it directly
                                $productspics = $data->product_pics;
                            }
                        @endphp

                        @foreach ($productspics as $img)
                         
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
                        <label for="">Shop Name:</label>
                        <p class="mt-3">{{ $data->shop_name }}</p>
                    </div>
                    <div class="col-12 mt-4">
                        <label for="">Products:</label>
                        <p class="mt-3">{{ $data->products }}</p>
                    </div>
                    <div class="col-12 mt-4">
                        <label for="">Product Summary:</label>
                        <p class="mt-3">{{ $data->product_summery }}</p>
                    </div>
                    
                    <div class="col-6 mt-4">
                        <label for="">Product Weight: {{ $data->Product_weight }}</label>
                        <p class="mt-3"></p>
                    </div>
                    
                    <div class="col-6 mt-4">
                        <label for="">Product Rent Per Day: Rs. {{ $data->product_rent_per_day }}</label>
                        <p class="mt-3"></p>
                    </div>
                    
                    <div class="col-6 mt-4">
                        <label for="">Time Of Availability: {{ $data->time_of_availability }}</label>
                        <p class="mt-3"></p>
                    </div>
                    
                    <div class="col-6 mt-4">
                        <label for="">Location:  {{ $data->location }}</label>
                        <p class="mt-3"></p>
                    </div>
                     

                </div>
            </div>




            </div>
        </div>
    </div>

 
        
</div>




@endsection