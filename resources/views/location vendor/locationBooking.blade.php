@extends('layouts.location vendor.locationVendorLayout')
@section('location-vendor-content')


<head>

    <!-- DataTables CSS and JS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js">
    </script>

</head>

<div class="container-fluid">

    <h4 class="my-4">Booking</h4>

    <ul class="nav nav-tabs nav-tabs-custom nav-justified mt-4" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#all" role="tab">
                <span>All Records</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#completed" role="tab">
                <span>Completed</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#processing" role="tab">
                <span>Processing</span>
            </a>
        </li>
    </ul>
    <div class="tab-content py-3 text-muted">
        <div class="tab-pane active" id="all" role="tabpanel">
            <table class="  table-striped" id="dtBasicExample">
                <thead>
                    <tr>
                        <th scope="col">Type</th>
                        <th scope="col">Title</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Exeduation Time</th>
                        <th scope="col">Total</th>
                        <th scope="col">Paid</th>
                        <th scope="col">Remain</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 10; $i++)
                        <tr>
                            <td>hotel</td>
                            <th><a href="{{ route('location.vendor.booking.show', $i) }}">Hotel stanford</a></th>
                            <td>02/9/2024</td>
                            <td> check in 02/9/2024 , check out 02/9/2024 room kerama island *1= $350</td>
                            <td>$450</td>
                            <td>$0</td>
                            <td>$450</td>
                            <td>processing</td>
                            <td>
                                <i class="fa-solid fa-trash-can  text-danger"></i>


                            </td>
                        </tr>
                    @endfor

                </tbody>
            </table>
        </div>
        <div class="tab-pane " id="completed" role="tabpanel">
            <table class="  table-striped" id="dtBasicExample2">
                <thead>
                    <tr>
                        <th scope="col">Type</th>
                        <th scope="col">Title</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Exeduation Time</th>
                        <th scope="col">Total</th>
                        <th scope="col">Paid</th>
                        <th scope="col">Remain</th>
                        {{-- <th scope="col">Status</th> --}}
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 10; $i++)
                        <tr>
                            <td>hotel</td>
                            <th scope=""><a href="{{ route('location.vendor.booking.show', $i) }}">Hotel stanford</a></th>
                            <td>02/9/2024</td>
                            <td> check in 02/9/2024 , check out 02/9/2024 room kerama island *1= $350</td>
                            <td>$450</td>
                            <td>$0</td>
                            <td>$450</td>
                            {{-- <td>processing</td> --}}
                            <td>
                                <i class="fa-solid fa-trash-can  text-danger"></i>


                            </td>
                        </tr>
                    @endfor

                </tbody>
            </table>
        </div>
        <div class="tab-pane " id="processing" role="tabpanel">
            <table class="  table-striped" id="dtBasicExample3">
                <thead>
                    <tr>
                        <th scope="col">Type</th>
                        <th scope="col">Title</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Exeduation Time</th>
                        <th scope="col">Total</th>
                        <th scope="col">Paid</th>
                        <th scope="col">Remain</th>
                        {{-- <th scope="col">Status</th> --}}
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 10; $i++)
                        <tr>
                            <td>hotel</td>
                            <th scope=""><a href="{{ route('location.vendor.booking.show', $i) }}">Hotel stanford</a></th>
                            <td>02/9/2024</td>
                            <td> check in 02/9/2024 , check out 02/9/2024 room kerama island *1= $350</td>
                            <td>$450</td>
                            <td>$0</td>
                            <td>$450</td>
                            {{-- <td>processing</td> --}}
                            <td>
                                <i class="fa-solid fa-trash-can  text-danger"></i>


                            </td>
                        </tr>
                    @endfor

                </tbody>
            </table>
        </div>

    </div>



    <script>
        $(document).ready(function() {
            $('#dtBasicExample').DataTable();
            $('#dtBasicExample2').DataTable();
            $('#dtBasicExample3').DataTable();
        });
    </script>

</div>


@endsection