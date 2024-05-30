@extends('admin.layout.app')

@section('content')

<div class="col-md-10 col-lg-6 col-xl-8 vendor_profile profile_section hidden"
data-role="vendor">
<p class="profile-detail-title fw-bold mb-2 mx-1 mx-md-3 mt-2 text-center fs-5 ">Profile
    Detail</p>

    <form method="POST" action="{{ route('actor.update') }}"
    enctype="multipart/form-data">
    @csrf


    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="name"
                class="col-form-label  fs-5 text-dark  ">{{ __('Age') }}</label>
            <input id="age" type="number"
                class="form-control @error('age') is-invalid @enderror"
                name="age" value="{{ $Actor->age }}"  
                autocomplete="age" autofocus>

            @error('age')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="gender"
                class="col-form-label  fs-5 text-dark  ">{{ __('Gender') }}</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender"
                    id="inlineRadio1" value="male"    {{ $Actor->gender == 'male' ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender"
                    id="inlineRadio2" value="female"   {{ $Actor->gender == 'female' ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender"
                    id="inlineRadio3" value="others"   {{ $Actor->gender == 'others' ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineRadio3">Others<label>
            </div>

            @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="pronouns"
                class="col-form-label  fs-5 text-dark  ">{{ __('Pronouns') }}</label>
            <input id="pronouns" type="text"
                class="form-control @error('pronouns') is-invalid @enderror"
                name="pronouns" value="{{ $Actor->pronouns }}"  
                autocomplete="pronouns" autofocus>

            @error('pronouns')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="sexuality"
                class="col-form-label  fs-5 text-dark  ">{{ __('Sexuality') }}</label>
            <input id="sexuality" type="text"
                class="form-control @error('sexuality') is-invalid @enderror"
                name="sexuality" value="{{ $Actor->sexuality }}"  
                autocomplete="sexuality" autofocus>

            @error('sexuality')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="height"
                class="col-form-label  fs-5 text-dark  ">{{ __('Height') }}</label>
            <input id="height" type="text"
                class="form-control @error('height') is-invalid @enderror"
                name="height" value="{{ $Actor->height }}"  
                autocomplete="height" autofocus>

            @error('height')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="body_type"
                class="col-form-label  fs-5 text-dark  ">{{ __('Body Type') }}</label>
            <input id="body_type" type="text"
                class="form-control @error('body_type') is-invalid @enderror"
                name="body_type" value="{{ $Actor->body_type }}"  
                autocomplete="body_type  " autofocus>

            @error('body_type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="body_art"
                class="col-form-label  fs-5 text-dark  ">{{ __('Body Art') }}</label>
            <input id="body_art " type="text"
                class="form-control @error('body_art') is-invalid @enderror"
                name="body_art" value="{{ $Actor->body_art }}"  
                autocomplete="body_art  " autofocus>

            @error('body_art')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="birthmark"
                class="col-form-label  fs-5 text-dark  ">{{ __('Birthmrk(s)') }}</label>
            <input id="birthmark" type="text"
                class="form-control @error('birthmark') is-invalid @enderror"
                name="birthmark" value="{{ $Actor->birthmark }}"  
                autocomplete="birthmark  " autofocus>

            @error('birthmark')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="scar"
                class="col-form-label  fs-5 text-dark  ">{{ __('Scar(s)') }}</label>
            <input id="scar " type="text"
                class="form-control @error('scar') is-invalid @enderror"
                name="scar" value="{{ $Actor->scar }}"  
                autocomplete="scar  " autofocus>

            @error('scar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="hair_color"
                class="col-form-label  fs-5 text-dark  ">{{ __('Hair Color') }}</label>
            <input id="hair_color" type="text"
                class="form-control @error('hair_color') is-invalid @enderror"
                name="hair_color" value="{{ $Actor->hair_color }}"  
                autocomplete="hair_color  " autofocus>

            @error('hair_color')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="features"
                class="col-form-label  fs-5 text-dark  ">{{ __('Features') }}</label>
            <input id="features " type="text"
                class="form-control @error('features') is-invalid @enderror"
                name="features" value="{{ $Actor->features }}"  
                autocomplete="features" autofocus>

            @error('features')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="eye color"
                class="col-form-label  fs-5 text-dark  ">{{ __('Eye Color') }}</label>
            <input id="eye_color" type="text"
                class="form-control @error('eye_color') is-invalid @enderror"
                name="eye_color" value="{{ $Actor->eye_color }}"  
                autocomplete="eye_color  " autofocus>

            @error('eye_color')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="relationship_status"
                class="col-form-label  fs-5 text-dark  ">{{ __('Relationship Status') }}</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"
                    name="relationship_status" id="inlineRadio4" value="married"
                      {{ $Actor->relationship_status == 'married' ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineRadio4">Married</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"
                    name="relationship_status" id="inlineRadio5" value="single"
                      {{ $Actor->relationship_status == 'single' ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineRadio5">Single</label>
            </div>

            @error('relationship_status')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="occupation"
                class="col-form-label  fs-5 text-dark  ">{{ __('Occupation') }}</label>
            <input id="occupation" type="text"
                class="form-control @error('occupation') is-invalid @enderror"
                name="occupation" value="{{ $Actor->occupation }}"  
                autocomplete="occupation  " autofocus>

            @error('occupation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="residence"
                class="col-form-label  fs-5 text-dark  ">{{ __('Residence') }}</label>
            <input id="residence" type="text"
                class="form-control @error('residence') is-invalid @enderror"
                name="residence" value="{{ $Actor->residence }}"  
                autocomplete="residence  " autofocus>

            @error('residence')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="name"
                class="col-form-label  fs-5 text-dark  ">{{ __('Experience') }}</label>
            <input id="experience" type="text"
                class="form-control @error('experience') is-invalid @enderror"
                name="experience" value="{{ $Actor->experience }}"  
                autocomplete="name" autofocus>

            @error('experience')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="profile_picture"
                class="col-form-label  fs-5 text-dark  ">{{ __('Profile Picture') }}</label>
            <input id="profile_picture" accept="image/*" type="file"
                class="form-control @error('profile_picture') is-invalid @enderror"
                name="profile_picture" >

            @error('profile_picture')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">

        <div class="col-md-10 m-auto">
            <label for="short_video"
                class="col-form-label  fs-5 text-dark  ">{{ __('Short Video') }}</label>
            <input id="short_video" accept="video/*" type="file"
                class="form-control @error('short_video') is-invalid @enderror"
                name="short_video"  >

            @error('short_video')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    
    <div class="row ">

        <div class="col-md-10 m-auto">
            <label for="skills"
                class="col-form-label  ">{{ __('Skills') }}</label>
            <select style=" width:100%" name="skills[]"
                class=" form-select js-example-tokenizer  @error('skills') is-invalid @enderror"
                value="{{ $Actor->skills }}"   id="skills" required
                multiple="multiple">
                <option value="" disabled>Write and press enter</option>
            </select>

            @error('skills')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    
    <div class="row mt-3">
        <div class=" col-md-10 m-auto">
            <div class="d-flex justify-content-end">

                <button type="submit"
                    class="btn btn-outline-success rounded-pill ">Continue
                </button>
            </div>
        </div>
    </div>



</form>


</div>
@endsection
@push('custom-scripts')
<script>
    $(".js-example-tokenizer").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });


</script>
@endpush
