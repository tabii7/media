@extends('layouts.app')

@section('content')
    <style>
        .form-control:focus,
        .form-select:focus {
            border-color: #eee;
            box-shadow: 0 0 0 0.1rem rgba(0, 0, 0, 0.25);
        }

        .card {
            border-radius: 25px;
        }

        .profile-form-container {
            background-color: #eee;
        }

        .profile-form-container .card-body {
            padding: 3rem;
        }

        .select-profile-title {
            font-size: 2.5rem;
        }

        .profile-detail-title {
            font-size: 2.5rem;
        }

        .select-profile-card {
            margin-bottom: 20px;
            transition: transform 0.3s ease-in-out;
        }

        .select-profile-card:hover {
            transform: scale(1.05);
        }


        .profile-form-container input[type="text"].form-control {
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-radius: 0;
        }
        .profile-form-container input[type="text"].form-control:focus {
            border-bottom-color: transparent; /* Set bottom border color to transparent */
            box-shadow: none; 
            border-bottom: 1px solid rgb(224, 191, 191);
        }

        .profile-form-container .form-select {
            height: 45px !important;
            border: 0;
        }

        
    </style>

    <section class="profile-form-container">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black mt-1 mb-4">
                        <div class="card-body p-md-5">

                            {{-- select role start --}}
                            <div class="row justify-content-center">
                              
                                {{-- form --}}
                                <div class="col-md-10 col-lg-6 col-xl-8 profile_form"   >

                                    <p class="profile-detail-title fw-bold mb-2 mx-1 mx-md-3 mt-2 text-center">Profile
                                        Detail</p>
                                        
                                    <form method="POST" action="{{ route('writer.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-2 mt-3">

                                            <div class="col-md-10 m-auto">
                                                <label for="user_type"
                                                    class="col-form-label ">{{ __('User Type') }}</label>
                                                <input type="text" value="actor" id="user_type"
                                                    class="form-control @error('user_type')  is-invalid @enderror"
                                                    name="user_type" autocomplete="name" readonly>
                                                @error('user_type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-2">

                                            <div class="col-md-10 m-auto">
                                                <label for="name"
                                                    class="col-form-label ">{{ __('Age') }}</label>
                                                <input id="age" type="number"
                                                    class="form-control @error('age') is-invalid @enderror"
                                                    name="age" value="{{ old('age') }}" required
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
                                                    class="col-form-label ">{{ __('Gender') }}</label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" required>
                                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" required>
                                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="others" required>
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
                                                <label for="about_yourself"
                                                    class="col-form-label ">{{ __('About Yourself') }}</label>
                                                <textarea id="about_yourself" type="text"
                                                    class="form-control @error('about_yourself') is-invalid @enderror"
                                                    name="about_yourself" required
                                                    autocomplete="about_yourself" autofocus>{{ old('about_yourself') }}</textarea>

                                                @error('about_yourself')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-2">

                                            <div class="col-md-10 m-auto">
                                                <label for="portfolio"
                                                    class="col-form-label ">{{ __('Portfolio') }}</label>
                                                <input id="portfolio" type="text"
                                                    class="form-control @error('portfolio') is-invalid @enderror"
                                                    name="portfolio" value="{{ old('portfolio') }}" required
                                                    autocomplete="portfolio" autofocus>

                                                @error('portfolio')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-2">

                                            <div class="col-md-10 m-auto">
                                                <label for="best_genre"
                                                    class="col-form-label ">{{ __('Best Genre') }}</label>
                                                <input id="best_genre" type="text"
                                                    class="form-control @error('best_genre') is-invalid @enderror"
                                                    name="best_genre" value="{{ old('best_genre') }}" required
                                                    autocomplete="best_genre" autofocus>

                                                @error('best_genre')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-2">

                                            <div class="col-md-10 m-auto">
                                                <label for="best_format"
                                                    class="col-form-label ">{{ __('Best Format') }}</label>
                                                <input id="best_format" type="text"
                                                    class="form-control @error('best_format') is-invalid @enderror"
                                                    name="best_format" value="{{ old('best_format') }}" required
                                                    autocomplete="best_format  " autofocus>

                                                @error('best_format')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-2">

                                            <div class="col-md-10 m-auto">
                                                <label for="best_language"
                                                    class="col-form-label ">{{ __('Best Language') }}</label>
                                                <input id="best_language " type="text"
                                                    class="form-control @error('best_language') is-invalid @enderror"
                                                    name="best_language" value="{{ old('best_language') }}" required
                                                    autocomplete="best_language  " autofocus>

                                                @error('best_language')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-2">

                                            <div class="col-md-10 m-auto">
                                                <label for="writing_speed"
                                                    class="col-form-label ">{{ __('Writing Speed') }}</label>
                                                <input id="writing_speed" type="text"
                                                    class="form-control @error('writing_speed') is-invalid @enderror"
                                                    name="writing_speed" value="{{ old('writing_speed') }}" required
                                                    autocomplete="writing_speed  " autofocus>

                                                @error('writing_speed')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-2">

                                            <div class="col-md-10 m-auto">
                                                <label for="inspirational_content"
                                                    class="col-form-label ">{{ __('Inspirational Content') }}</label>
                                                <input id="inspirational_content " type="text"
                                                    class="form-control @error('inspirational_content') is-invalid @enderror"
                                                    name="inspirational_content" value="{{ old('inspirational_content') }}" required
                                                    autocomplete="inspirational_content  " autofocus>

                                                @error('inspirational_content')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-2">

                                            <div class="col-md-10 m-auto">
                                                <label for="favourite_writers"
                                                    class="col-form-label ">{{ __('Favourite Writers') }}</label>
                                                <input id="favourite_writers" type="text"
                                                    class="form-control @error('favourite_writers') is-invalid @enderror"
                                                    name="favourite_writers" value="{{ old('favourite_writers') }}" required
                                                    autocomplete="favourite_writers  " autofocus>

                                                @error('favourite_writers')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                       
                                    
                                        <div class="row mt-3">
                                            <div class=" col-md-10 m-auto">
                                                <div class="d-flex justify-content-end">

                                                    <button type="submit" class="btn btn-outline-success rounded-pill ">Continue </button>
                                                </div>
                                            </div>
                                        </div>



                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('custom-scripts')
    <script>
        $(".js-example-tokenizer").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });



        $(document).ready(function() {
            $('.roles').click(function(e) {
                e.preventDefault();
                var role = $(this).attr('data-select-profile');
                $('#user_type').val(role);
                $('#select_profile').hide(500);
                $('.profile_form').show(500);
                console.log('selected role:', role);

            });
            // $('#user_type').on('change', function() {
            //     // Get the selected option value
            //     var selectedValue = $(this).val();
            //     if (selectedValue === 'actor') {
            //         $('#actor_fields').show();
            //     } else {

            //         $('#actor_fields').hide();
            //     }
            //     // alert(selectedValue);
            // });
        });
    </script>
@endpush
