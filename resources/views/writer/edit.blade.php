@extends('admin.layout.app')

@section('content')

<div class="col-md-10 col-lg-6 col-xl-8 vendor_profile profile_section hidden"
data-role="vendor">
<p class="profile-detail-title fw-bold mb-2 mx-1 mx-md-3 mt-2 text-center fs-5 ">Profile
    Detail</p>
  
  
  <form method="POST" action="{{ route('writer.update') }}" enctype="multipart/form-data">
    @csrf
    <div class="row mb-2 mt-3">
        <div class="col-md-10 m-auto">
            <label for="age" class="col-form-label">{{ __('Age') }}</label>
            <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $writer->age }}" required>
            @error('age')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="gender" class="col-form-label">{{ __('Gender') }}</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender_male" value="male" required
                    {{ $writer->gender == 'male' ? 'checked' : '' }}>
                <label class="form-check-label" for="gender_male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender_female" value="female" required
                    {{ $writer->gender == 'female' ? 'checked' : '' }}>
                <label class="form-check-label" for="gender_female">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender_others" value="others" required
                    {{ $writer->gender == 'others' ? 'checked' : '' }}>
                <label class="form-check-label" for="gender_others">Others</label>
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
            <label for="about_yourself" class="col-form-label">{{ __('About Yourself') }}</label>
            <textarea id="about_yourself" class="form-control @error('about_yourself') is-invalid @enderror" name="about_yourself" required>{{ $writer->about_yourself }}</textarea>
            @error('about_yourself')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="portfolio" class="col-form-label">{{ __('Portfolio') }}</label>
            <input id="portfolio" multiple accept=".jpg,.png,.jpeg" type="file" class="form-control @error('portfolio') is-invalid @enderror" name="portfolio[]" >
            @error('portfolio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="best_genre" class="col-form-label">{{ __('Your Best Genre') }}</label>
            <input id="best_genre" type="text" class="form-control @error('best_genre') is-invalid @enderror" name="best_genre" value="{{ $writer->best_genre }}" required>
            @error('best_genre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="best_format" class="col-form-label">{{ __('Your Best Format') }}</label>
            <input id="best_format" type="text" class="form-control @error('best_format') is-invalid @enderror" name="best_format" value="{{ $writer->best_format }}" required>
            @error('best_format')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="best_language" class="col-form-label">{{ __('Your Best Language') }}</label>
            <input id="best_language" type="text" class="form-control @error('best_language') is-invalid @enderror" name="best_language" value="{{ $writer->best_language }}" required>
            @error('best_language')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="writing_speed" class="col-form-label">{{ __('Speed of Writing') }}</label>
            <input id="writing_speed" type="text" class="form-control @error('writing_speed') is-invalid @enderror" name="writing_speed" value="{{ $writer->writing_speed }}" required>
            @error('writing_speed')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="inspirational_content" class="col-form-label">{{ __('Inspirational Content') }}</label>
            <input id="inspirational_content" type="text" class="form-control @error('inspirational_content') is-invalid @enderror" name="inspirational_content" value="{{ $writer->inspirational_content }}" required>
            @error('inspirational_content')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-10 m-auto">
            <label for="favourite_writers" class="col-form-label">{{ __('Fav Writers') }}</label>
            <input id="favourite_writers" type="text" class="form-control @error('favourite_writers') is-invalid @enderror" name="favourite_writers" value="{{ $writer->favourite_writers }}" required>
            @error('favourite_writers')
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
