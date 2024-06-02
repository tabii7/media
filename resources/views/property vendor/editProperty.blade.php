@extends('layouts.property vendor.propertyVendorLayout')
@section('property-vendor-content')


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
                <h4 class="card-title">Edit Property</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('property.vendor.update', $property->id) }}" enctype="multipart/form-data">
                        @csrf 
                          
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="shop_name"
                                    class="col-form-label ">{{ __('Shop Name') }}</label>
                                <input id="shop_name" type="text"
                                    class="form-control @error('shop_name') is-invalid @enderror"
                                    name="shop_name" value="{{ $property->shop_name }}" required
                                    autocomplete="shop_name" autofocus>

                                @error('shop_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="products"
                                    class="col-form-label ">{{ __('Products') }}</label>
                                <input id="products" type="text"
                                    class="form-control @error('products') is-invalid @enderror"
                                    name="products" value="{{ $property->products }}" required
                                    autocomplete="products" autofocus>

                                @error('products')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="product_summery"
                                    class="col-form-label ">{{ __('Product Summary') }}</label>
                                    <textarea name="product_summery" id="product_summery" cols="30" rows="6"  class="form-control @error('product_summery') is-invalid @enderror">{{ $property->product_summery }}</textarea>
                                 

                                @error('product_summery')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="Product_weight"
                                    class="col-form-label ">{{ __('Product Weight') }}</label>
                                <input id="Product_weight" type="text"
                                    class="form-control @error('Product_weight') is-invalid @enderror"
                                    name="Product_weight" value="{{ $property->Product_weight }}" required
                                    autocomplete="Product_weight" autofocus>

                                @error('Product_weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="product_rent_per_day"
                                    class="col-form-label ">{{ __('Product Rent per day') }}</label>
                                <input id="product_rent_per_day" type="text"
                                    class="form-control @error('product_rent_per_day') is-invalid @enderror"
                                    name="product_rent_per_day" value="{{ $property->product_rent_per_day }}" required
                                    autocomplete="product_rent_per_day" autofocus>

                                @error('product_rent_per_day')
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
                                    name="time_of_availability" value="{{ $property->time_of_availability }}" required
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
                                <label for="location"
                                    class="col-form-label ">{{ __('Location') }}</label>
                                <input id="location" type="text"
                                    class="form-control @error('location') is-invalid @enderror"
                                    name="location" value="{{ $property->location }}" required
                                    autocomplete="location" autofocus>

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     
                        
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="product_pics"
                                    class="col-form-label ">{{ __('Product Pics') }}</label>
                                <input id="product_pics" type="file"
                                    class="form-control @error('product_pics') is-invalid @enderror"
                                    name="product_pics[]"     autofocus multiple>

                                @error('product_pics')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        
                        <div class="row">

                            <div class="col-10 m-auto">
                                <div id="imageContainer" class="row  mt-4"> 
                                    @if(!empty($property->product_pics))
                                        @php
                                            // Check if product_pics is already an array
                                            if (is_array($property->product_pics)) {
                                                $locationsPics = $property->product_pics;
                                            } else {
                                                // Attempt to decode the product_pics attribute if it's a string
                                                $decodedLocationsPics = json_decode($property->product_pics, true);
                                            
                                                // Check if decoding was successful and if it resulted in an array
                                                if (is_array($decodedLocationsPics)) {
                                                    $locationsPics = $decodedLocationsPics;
                                                } else {
                                                    // If decoding failed or resulted in a non-array value, set locationsPics to an empty array
                                                    $locationsPics = [];
                                                }
                                            }
                                        @endphp
                                        @foreach ($locationsPics as $img)
                                            <div class="col-3">
                                                <div class="img-div">
                                                    <img src="{{ asset('storage/' . $img) }}" alt="" style="width: 100%; height: 200px">
                                                    <div class="delbtn">
                                                        <button class="btn btn-danger" onclick="deleteImg(event, '{{ $img }}', '{{ $property->id }}')">
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
        console.log("Image id:", id); // Debugging statement

        if (confirm('Are you sure you want to delete this image?')) {
            console.log("CSRF Token:", $('meta[name="csrf-token"]').attr('content')); // Debugging statement

            $.ajax({
                url: '/delete-property-image',
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
    document.getElementById('product_pics').addEventListener('change', function(event) {
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