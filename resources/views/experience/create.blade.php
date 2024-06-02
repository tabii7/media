@extends('layouts.app')

@section('content')
    <style>
        /* Add this CSS to your stylesheet */
        .form-control:focus {
            border-color: #eee;
            box-shadow: 0 0 0 0.1rem rgba(0, 0, 0, 0.25);
            /* Optional: Add a box shadow for a more prominent focus effect */
        }
        .form-select:focus {
            border-color: #eee;
            box-shadow: 0 0 0 0.1rem rgba(0, 0, 0, 0.25);
            /* Optional: Add a box shadow for a more prominent focus effect */
        }
    </style>
    <section class="" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black mt-1 mb-4" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-8">

                                    <p class=" h1 fw-bold mb-4 mx-1 mx-md-3 mt-2 text-center">Add Experience</p>

                                    <form method="POST" action="{{ route('experience.store') }}" enctype="multipart/form-data">
                                        @csrf


                                        <div class="row mb-3 ">

                                            <div class="col-md-6 ">
                                                <label for="name"
                                                    class=" col-form-label ">{{ __('Job Title') }}</label>
                                                <input id="job_title" type="text"
                                                    class="form-control @error('job_title') is-invalid @enderror" name="job_title"
                                                    value="{{ old('job_title') }}" required autocomplete="name" autofocus>

                                                @error('job_title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 ">
                                                <label for="name"
                                                    class=" col-form-label ">{{ __('Company Name') }}</label>
                                                <input id="company_name" type="text"
                                                    class="form-control @error('company_name') is-invalid @enderror" name="company_name"
                                                    value="{{ old('company_name') }}" required autocomplete="name" autofocus>

                                                @error('company_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="company_logo"
                                                    class=" col-form-label ">{{ __('Company Logo') }}</label>
                                                <input id="company_logo" accept="image/*" type="file"
                                                    class="form-control @error('company_logo') is-invalid @enderror"
                                                    name="company_logo" value="{{ old('company_logo') }}" required>

                                                @error('company_logo')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="company_city"
                                                    class=" col-form-label ">{{ __('Company City') }}</label>
                                                <input id="company_city" type="text"
                                                    class="form-control @error('company_city') is-invalid @enderror" name="company_city"
                                                    value="{{ old('company_city') }}" required>

                                                @error('company_city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="name"
                                                    class=" col-form-label ">{{ __('Duration From') }}</label>
                                                <input id="duration_from" type="date"
                                                    class="form-control @error('duration_from') is-invalid @enderror" name="duration_from"
                                                    value="{{ old('duration_from') }}" required autocomplete="name" autofocus>

                                                @error('duration_from')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="name"
                                                    class=" col-form-label ">{{ __('Duration To') }}</label>
                                                <input id="duration_to" type="date"
                                                    class="form-control @error('duration_to') is-invalid @enderror" name="duration_to"
                                                    value="{{ old('duration_to') }}" required autocomplete="name" autofocus>

                                                @error('duration_to')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 m-auto">
                                                <label for="name"
                                                    class=" col-form-label ">{{ __('Job Description') }}</label>
                                                <textarea id="job_description" type="text"
                                                    class="form-control @error('job_description') is-invalid @enderror" name="job_description"
                                                    value="{{ old('job_description') }}" required autocomplete="name" autofocus></textarea>

                                                @error('job_description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class=" col-md-12 m-auto">
                                                <div class="d-flex justify-content-between">

                                                    <a href="{{route('home')}}"  class="btn btn-danger ">Skip </a>
                                                    <button type="submit" class="btn btn-success ">Complete </button>
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
            $('#user_type').on('change', function() {
                // Get the selected option value
                var selectedValue = $(this).val();
                if (selectedValue === 'actor') {
                    $('#actor_fields').show();
                } else {

                    $('#actor_fields').hide();
                }
                // alert(selectedValue);
            });
        });
    </script>
@endpush
