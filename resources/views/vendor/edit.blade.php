@extends('admin.layout.app')

@section('content')

<div class="col-md-10 col-lg-6 col-xl-8 vendor_profile profile_section hidden"
data-role="vendor">
<p class="profile-detail-title fw-bold mb-2 mx-1 mx-md-3 mt-2 text-center fs-5 ">Profile
    Detail</p>
  
<form method="POST" action="{{ route('vendor.update') }}" enctype="multipart/form-data">
    @csrf
    <div class="row mb-2 mt-3">
        <div class="col-md-10 m-auto">
            <label for="shop_name" class="fs-5 text-dark col-form-label">{{ __('Shop Name') }}</label>
            <input id="shop_name" type="text" class="form-control @error('shop_name') is-invalid @enderror" name="shop_name" value="{{ $vendor->shop_name }}"  autofocus>
            @error('shop_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="products" class="fs-5 text-dark col-form-label">{{ __('Products') }}</label>
            <input id="products" type="text" class="form-control @error('products') is-invalid @enderror" name="products"  value="{{ $vendor->products }}"  >
            @error('products')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="product_summary" class=" fs-5 text-dark col-form-label">{{ __('Product Summary') }}</label>
            <textarea id="product_summary" class="form-control @error('product_summary') is-invalid @enderror" name="product_summary" >  {{ $vendor->product_summary }} </textarea>
            @error('product_summary')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="existing_product_pics" class="fs-5 text-dark col-form-label">{{ __('Existing Product Pics') }}</label>
            <div id="existing_product_pics">
                @if(is_array($vendor->product_pics) && !empty($vendor->product_pics))
                    @foreach($vendor->product_pics as $pic)
                        <div class="mb-2">
                            {{-- <img src="{{ asset($pic) }}" alt="Product Image" style="max-width: 100px; max-height: 100px;"> --}}
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    
    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="product_pics" class="fs-5 text-dark col-form-label">{{ __('Product Pics') }}</label>
            <input id="product_pics" accept="image/*" type="file" class="form-control @error('product_pics') is-invalid @enderror" name="product_pics[]" multiple>
            @error('product_pics')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 
        </div>
    </div>
    
    
    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="product_weight" class="fs-5 text-dark col-form-label">{{ __('Product Weight') }}</label>
            <input id="product_weight" type="number" class="form-control @error('product_weight') is-invalid @enderror" name="product_weight"  value="{{ $vendor->product_weight }}"  >
            @error('product_weight')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="product_rent_per_day" class=" fs-5 text-dark col-form-label">{{ __('Product Rent per Day') }}</label>
            <input id="product_rent_per_day" type="number" class="form-control @error('product_rent_per_day') is-invalid @enderror" name="product_rent_per_day" value="{{ $vendor->product_rent_per_day }}" >
            @error('product_rent_per_day')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="time_of_availability" class="fs-5 text-dark col-form-label">{{ __('Time of Availability') }}</label>
            <input id="time_of_availability" type="text" class="form-control @error('time_of_availability') is-invalid @enderror" name="time_of_availability"  value="{{ $vendor->time_of_availability }}"  >
            @error('time_of_availability')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="location" class="fs-5 text-dark col-form-label">{{ __('Location') }}</label>
            <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location"  value="{{ $vendor->location }}"  >
            @error('location')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-10 m-auto">
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-success rounded-pill">Submit</button>
            </div>
        </div>
    </div>
</form>


</div>
@endsection
