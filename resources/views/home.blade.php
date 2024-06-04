@extends('admin.layout.app')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@section('content')
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fbc2eb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1))
        }
    </style>


    <section class=" ">

        <div class="container py-5  ">

            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="col col-lg-9 col-xl-7">

                    <div class="card">
                        @if (Auth::user()->hasRole('model'))
                            <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                        @endif
                        {{-- <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;"> --}}


                        @if (Auth::user()->hasRole('model'))
                            <img src="{{ asset($user->image ?? 'asset/images/avatar/1.jpg') }}"
                                alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                style="width: 150px; z-index: 1">
                        @endif
                        @if (Auth::user()->hasRole('vendor'))
                            {{-- <a href="{{ route('vendor.edit') }}" class="btn btn-outline-dark"
                                        data-mdb-ripple-color="dark" style="z-index: 1;">
                                        Edit vendor
                                    </a> --}}
                        @elseif(Auth::user()->hasRole('model'))
                            <a href="{{ route('actor.edit') }}" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                                style="z-index: 1;">
                                Edit Profile
                            </a>
                        @endif
                        {{-- @elseif(Auth::user()->hasRole('writer'))
                                    <a href="{{ route('writer.edit') }}" class="btn btn-outline-dark"
                                        data-mdb-ripple-color="dark" style="z-index: 1;">
                                        Edit Profile
                                    </a>
                                @endif --}}



                    </div>
                    @php
                        $scriptsCount = DB::table('scripts')->count();

                    @endphp
                    @if (Auth::user()->hasRole('writer'))
                        <div class="md-2" style="margin-top: -20px; background-color: var(--primary)">
                            <h5>{{ $scriptsCount }}</h5>
                            <p class="text-capitalize">No. of Scripts</p>
                        </div>
                    @endif
                    @if (Auth::user()->hasRole('model'))
                        <div class="ms-3" style="margin-top: 130px;">
                            <h5>{{ $user->name }}</h5>
                            <p class="text-capitalize">{{ $user->user_type }}</p>
                        </div>
                    @endif
                </div>
                @if (Auth::user()->hasRole('model'))
                    <div class="p-4 text-black" style="background-color: #f8f9fa;">
                        <div class="d-flex justify-content-end text-center py-1">

                        </div>
                    </div>
                    <div class="card-body p-4 text-black mt-2">
                        <div class="mb-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="lead fw-normal mb-0">Experience</p>
                                <p class="mb-0">
                                    <a href="{{ route('experience.create') }}" class="btn btn-outline-secondary">
                                        <i class="fas fa-plus"></i>
                                    </a>

                                </p>
                            </div>
                            <div class="p-4" style="background-color: #f8f9fa;">
                                @foreach ($user->experiences as $xp)
                                    <div class="mb-2">
                                        <div class="d-flex">
                                            <div class="mt-3 me-2">
                                                <img width="50px" src="{{ $xp->company_logo }}" alt="image 1"
                                                    class="rounded-3">
                                            </div>
                                            <div>
                                                <p class="text-capitalize mb-0">{{ $xp->job_title }}</p>
                                                <p class="mb-0">{{ $xp->company_name }},{{ $xp->city }}</p>
                                                <p class="mb-0"></p>
                                                <p class="mb-0">{{ $xp->duration_from }} - {{ $xp->duration_to }}
                                                </p>
                                                {{-- <p class="font-italic mb-1">{{ $xp->description }}</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                        @if ($user->skills)
                            <div class="mb-5">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="lead fw-normal mb-0">Skills</p>
                                </div>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    @php
                                        $skills = json_decode($user->skills);
                                    @endphp
                                    <div class="row">

                                        @foreach ($skills as $skill)
                                            <div>
                                                <p class="text-capitalize mb-0">{{ $skill }}</p>
                                            </div>
                                            {{-- <div class="col-md-2 ">
                                                    <span class="badge bg-primary px-2 py-1">
                                                       {{ $skill }}
                                                    </span>
                                                </div> --}}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                            <h3 class="lead fw-normal mb-0">Gallery</h3>
                        </div>

                        <div class="container">
                            <!-- Video Section -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3 class="lead fw-normal mb-0">Videos</h3>
                            </div>
                            {{-- @php
                                    $images = json_decode($user->image, true);
                                @endphp --}}
                            <div class="row mb-2">
                                {{-- @foreach ($videos as $video) --}}
                                <div class="col mb-2">
                                    <video src="{{ $user->video }}" class="w-50 h-70 rounded-3" controls></video>
                                </div>
                                {{-- @endforeach --}}
                            </div>

                            <!-- Image Section -->
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                <h3 class="lead fw-normal mb-0">Images</h3>
                            </div>
                            {{-- @php
                                    $images = json_decode($user->image, true);
                                @endphp --}}
                            {{-- <div class="row mb-2">
                                    @foreach ($images as $image)
                                        <div class="col mb-2">
                                            <img src="{{ asset($image) }}" alt="Image" class="w-50 rounded-3">
                                        </div>
                                    @endforeach
                                </div> --}}
                        </div>
                    </div>
                @endif
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
