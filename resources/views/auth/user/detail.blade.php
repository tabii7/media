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
                                    <div id="select_profile" class="row justify-content-center text-center">
                                        <p class="select-profile-title fw-bold mb-3 mx-1 mx-md-3 mt-2 text-center">Select
                                            Profile</p>

                                           
                                        @foreach ($roles as $r)
                                            <div class="col-md-3 select-profile-card">
                                                <div class="card">
                                                    <img src="{{ asset('images/user.png') }}" class="card-img-top bg-light"
                                                        alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-capitalize">{{ $r->name }}</h5>
                                                        <p class="card-text">Start your career as {{ $r->name }}</p>
                                                    </div>
                                                    <div class="d-grid">
                                                        <!-- <a href="{{route('actor.create')}}" class="btn btn-outline-info">continue</a> -->
                                                         <button class="btn btn-outline-info roles" type="button"
                                                            data-select-profile="{{ $r->name }}">Continue</button> 
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- select role end --}}
                                    {{-- form --}}
                                    <div class="col-md-10 col-lg-6 col-xl-8 profile_form" style="display: none">

                                        <p class="profile-detail-title fw-bold mb-2 mx-1 mx-md-3 mt-2 text-center">Profile
                                            Detail</p>

                                        <form method="POST" action="{{ route('user.detail.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-2 mt-3">

                                                <div class="col-md-10 m-auto">
                                                    <label for="user_type"
                                                        class="col-form-label ">{{ __('User Type') }}</label>
                                                    <input type="text" id="user_type"
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
                                                    <label for="pronouns"
                                                        class="col-form-label ">{{ __('Pronouns') }}</label>
                                                    <input id="pronouns" type="text"
                                                        class="form-control @error('pronouns') is-invalid @enderror"
                                                        name="pronouns" value="{{ old('pronouns') }}" required
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
                                                        class="col-form-label ">{{ __('Sexuality') }}</label>
                                                    <input id="sexuality" type="text"
                                                        class="form-control @error('sexuality') is-invalid @enderror"
                                                        name="sexuality" value="{{ old('sexuality') }}" required
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
                                                        class="col-form-label ">{{ __('Height') }}</label>
                                                    <input id="height" type="text"
                                                        class="form-control @error('height') is-invalid @enderror"
                                                        name="height" value="{{ old('height') }}" required
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
                                                        class="col-form-label ">{{ __('Body Type') }}</label>
                                                    <input id="body_type" type="text"
                                                        class="form-control @error('body_type') is-invalid @enderror"
                                                        name="body_type" value="{{ old('body_type') }}" required
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
                                                        class="col-form-label ">{{ __('Body Art') }}</label>
                                                    <input id="body_art " type="text"
                                                        class="form-control @error('body_art') is-invalid @enderror"
                                                        name="body_art" value="{{ old('body_art') }}" required
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
                                                        class="col-form-label ">{{ __('Birthmrk(s)') }}</label>
                                                    <input id="birthmark" type="text"
                                                        class="form-control @error('birthmark') is-invalid @enderror"
                                                        name="birthmark" value="{{ old('birthmark') }}" required
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
                                                        class="col-form-label ">{{ __('Scar(s)') }}</label>
                                                    <input id="scar " type="text"
                                                        class="form-control @error('scar') is-invalid @enderror"
                                                        name="scar" value="{{ old('scar') }}" required
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
                                                        class="col-form-label ">{{ __('Hair Color') }}</label>
                                                    <input id="hair_color" type="text"
                                                        class="form-control @error('hair_color') is-invalid @enderror"
                                                        name="hair_color" value="{{ old('hair_color') }}" required
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
                                                        class="col-form-label ">{{ __('Features') }}</label>
                                                    <input id="features " type="text"
                                                        class="form-control @error('features') is-invalid @enderror"
                                                        name="features" value="{{ old('features') }}" required
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
                                                        class="col-form-label ">{{ __('Eye Color') }}</label>
                                                    <input id="eye_color" type="text"
                                                        class="form-control @error('eye_color') is-invalid @enderror"
                                                        name="eye_color" value="{{ old('eye_color') }}" required
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
                                                        class="col-form-label ">{{ __('Relationship Status') }}</label>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="relationship_status" id="inlineRadio4" value="married" required>
                                                            <label class="form-check-label" for="inlineRadio4">Married</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="relationship_status" id="inlineRadio5" value="single" required>
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
                                                        class="col-form-label ">{{ __('Occupation') }}</label>
                                                    <input id="occupation" type="text"
                                                        class="form-control @error('occupation') is-invalid @enderror"
                                                        name="occupation" value="{{ old('occupation') }}" required
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
                                                        class="col-form-label ">{{ __('Residence') }}</label>
                                                    <input id="residence" type="text"
                                                        class="form-control @error('residence') is-invalid @enderror"
                                                        name="residence" value="{{ old('residence') }}" required
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
                                                        class="col-form-label ">{{ __('Experience') }}</label>
                                                    <input id="experience" type="text"
                                                        class="form-control @error('experience') is-invalid @enderror"
                                                        name="experience" value="{{ old('experience') }}" required
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
                                                        class="col-form-label ">{{ __('Profile Picture') }}</label>
                                                    <input id="profile_picture" accept="image/*" type="file"
                                                        class="form-control @error('profile_picture') is-invalid @enderror"
                                                        name="profile_picture" value="{{ old('profile_picture') }}"
                                                        required>

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
                                                        class="col-form-label ">{{ __('Short Video') }}</label>
                                                    <input id="short_video" accept="video/*" type="file"
                                                        class="form-control @error('short_video') is-invalid @enderror"
                                                        name="short_video" value="{{ old('short_video') }}" required>

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
                                                        value="{{ old('skills[]') }}" required id="skills"
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
