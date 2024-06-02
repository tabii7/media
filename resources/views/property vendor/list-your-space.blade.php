@extends('layouts.property vendor.propertyVendorLayout')  
@section('property-vendor-content')
 
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add new Property</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('property.vendor.store') }}" enctype="multipart/form-data">
                        @csrf 
                          
                        <div class="row mb-2">

                            <div class="col-md-10 m-auto">
                                <label for="shop_name"
                                    class="col-form-label ">{{ __('Shop Name') }}</label>
                                <input id="shop_name" type="text"
                                    class="form-control @error('shop_name') is-invalid @enderror"
                                    name="shop_name" value="{{ old('shop_name') }}" required
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
                                    name="products" value="{{ old('products') }}" required
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
                                    <textarea name="product_summery" id="product_summery" cols="30" rows="6"  class="form-control @error('product_summery') is-invalid @enderror"></textarea>
                                 

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
                                    name="Product_weight" value="{{ old('Product_weight') }}" required
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
                                    name="product_rent_per_day" value="{{ old('product_rent_per_day') }}" required
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
                                <label for="location"
                                    class="col-form-label ">{{ __('Location') }}</label>
                                <input id="location" type="text"
                                    class="form-control @error('location') is-invalid @enderror"
                                    name="location" value="{{ old('location') }}" required
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
                                    name="product_pics[]"  required  autofocus multiple>

                                @error('product_pics')
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