@extends('layouts.property vendor.propertyVendorLayout')
@section('property-vendor-content')
<div class="container-fluid">
    <div class="row mt-3 border p-3 align-items-center" style="border-radius: 10px; background-color: #e3e3e3">
        <div class="col-lg">
            <div class="page-title-box d-flex flex-row align-items-center">
                <h5>Spaces</h5>
                <button style="margin-left: 2rem; border: 1px solid #c3c4c7; border-radius: 10px; padding: 10px 20px"><a href="{{route('property.vendor.list.your.space')}}" class="text-decoration-none text-dark">List Your Space</a></button>
            </div>
        </div>
        <div class="col-lg-auto d-flex align-items-center flex-row">
            <h6 style="margin-right: 15px">Sort By</h6>
            
            <select class="form-select text-center" style="border: none; ">
                <option value="1">All</option>
                <option value="2">Listed</option>
                <option value="3">Unlisted</option>
            </select>

        </div>
    </div>


       
        <div class="row">
            
            @if (count($data) > 0)
            {{-- {{$data}} --}}
            @foreach ($data as $item)
            <div class="col-lg-4">
                <div class="card mt-5" style="border: none; border-radius: 15px">
                    @php
                        // Initialize firstImage with the default image path
                        $firstImage = 'vendor/assets/images/default-image.png';

                        // Check if product_pics is a string and decode it
                        if (is_string($item->product_pics)) {
                            $productPics = json_decode($item->product_pics, true);

                            // Check if decoding was successful and if it resulted in an array
                            if (is_array($productPics) && !empty($productPics)) {
                                // Get the first image from the array
                                $firstImage = 'storage/' . $productPics[0];
                            }
                        } elseif (is_array($item->product_pics)) {
                            // If product_pics is already an array, use it directly
                            if (!empty($item->product_pics)) {
                                $firstImage = 'storage/' . $item->product_pics[0];
                            }
                        }
                    @endphp

                    <img src="{{ asset($firstImage) }}" style="border-radius: 10px; height: 225px" class="card-img-top" alt="...">

                    <p
                        style="position: absolute; bottom:50%; left:0;  padding: 5px 10px; background-color: rgb(26, 25, 25); color: white; border:none; border-radius: 0px 10px 10px 0px
                    ">
                        {{ $item->product_rent_per_day }} / per day</p>
                    <div class="card-body pl-0">
                        <p>Desk <i class="fa-sharp fa-solid fa-chair ml-2"></i> 6 Seats</p>
                        <h5>{{ $item->shop_name }}</h5>
                        <p><i class="fa-solid fa-location-dot"></i>{{ $item->location }}</p>
                        <hr>
                        <button class="btnHover"
                            style="border: 2px solid black; background: none; border-radius: 150px; padding: 5px 15px; font-weight: bold; font-size: 13px"
                            onmouseover="this.style.border='2px solid #45a049'"
                            onmouseout="this.style.border='2px solid black'"> <a href="{{ route('property.vendor.edit', $item->id) }}"  class="text-decoration-none text-black"><i class="fa-solid fa-pencil"></i> Edit
                            Listing </a></button>
                        <button class="btnHover"
                            style="border: 2px solid black; background: none; border-radius: 150px; padding: 5px 15px; font-weight: bold; font-size: 13px"
                            onmouseover="this.style.border='2px solid #45a049'"
                            onmouseout="this.style.border='2px solid black'"><i class="fa-regular fa-calendar-days"></i>
                            Change Availability</button>
                            <button class="btnHover"
                                style="border: 2px solid black; background: none; border-radius: 150px; padding: 5px 15px; font-weight: bold; font-size: 13px"
                                onmouseover="this.style.border='2px solid #45a049'"
                                onmouseout="this.style.border='2px solid black'"> <a href="{{ route('property.vendor.view', $item->id) }}"  class="text-decoration-none text-black"><i class="fa-solid fa-eye"></i>
                                View</a></button>
                    </div>
                </div>
            </div>
            
            @endforeach
                                    
            @endif 
        </div>
        
        
</div>

@endsection