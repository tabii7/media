@extends('layouts.location vendor.locationVendorLayout')
@section('location-vendor-content')



<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4>Welcome</h4>
                {{-- <p>It looks like you have no upcoming appointments.would you like to make one?</p> --}}

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row section-stats">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow" style="border: none">
                <div class="card-body text-center">
                    <div class="mb-2">
                        <span style="font-size: 20px; font-weight: bold"><i class="fa-solid fa-house mr-2"></i> Total Spaces</span>
                    </div>
                    <div class="">
                        <h4 class="mb-0"><span data-plugin="counterup">{{$dataCount}}</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card shadow" style="border: none">
                <div class="card-body text-center">
                    <div class="mb-2">
                        <span style="font-size: 20px; font-weight: bold"><i class="fa-solid fa-sack-dollar mr-2"></i> Total Payouts</span>
                    </div>
                    <div class="">
                        <h4 class="mb-0">$<span data-plugin="counterup">32,152</span></h4>
                    </div>
                </div>
            </div>
        </div>
 
    </div>

    <div class="row my-4"> 

        <div class="col-lg-12 mb-4 mb-lg-0">
            <div class="card h-100 ">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="card-title mb-2">Income</h4>
                        <h3>€ 5,987,34</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div id="line_chart_ataiga" class="apex-charts" dir="ltr"></div>                              
                </div>
            </div>
        </div>
 
    </div>
    <div class="row">

        <h4 class="mb-4">Upcomming Bookings</h4>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Space Name</th>
                <th scope="col">Vendor name</th>
                <th scope="col">User Name</th>
                <th scope="col">Booking Date</th>
                <th scope="col">Rent For</th>
                <th scope="col">Guests</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Sub Total Amount</th>
                <th scope="col">Tax</th>
                <th scope="col">Total Amount</th>
                <th scope="col">Currency</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <th>William</th>
                <td>Vendor Name</td>
                <td>User Name</td>
                <td>03 Nov, 2024 12:22 PM</td>
                <td>4 days</td>
                <td>2 Guests</td>
                <td>Bank Transfer</td>
                <td>$ 130</td>
                <td>21%</td>
                <td>$ 200</td>
                <td>USD</td>
                <td><span class="badge  badge-soft-warning" style="color: #da1616;"> pending</span></td>
              </tr>
              <tr>
                <th>William</th>
                <td>Vendor Name</td>
                <td>User Name</td>
                <td>03 Nov, 2024 12:22 PM</td>
                <td>4 days</td>
                <td>2 Guests</td>
                <td>Bank Transfer</td>
                <td>$ 130</td>
                <td>21%</td>
                <td>$ 200</td>
                <td>USD</td>
                <td><span class="badge  badge-soft-warning" style="color: #da1616;"> pending</span></td>
              </tr>
              <tr>
                <th>William</th>
                <td>Vendor Name</td>
                <td>User Name</td>
                <td>03 Nov, 2024 12:22 PM</td>
                <td>4 days</td>
                <td>2 Guests</td>
                <td>Bank Transfer</td>
                <td>$ 130</td>
                <td>21%</td>
                <td>$ 200</td>
                <td>USD</td>
                <td><span class="badge  badge-soft-warning" style="color: #da1616;"> pending</span></td>
              </tr>
              <tr>
                <th>William</th>
                <td>Vendor Name</td>
                <td>User Name</td>
                <td>03 Nov, 2024 12:22 PM</td>
                <td>4 days</td>
                <td>2 Guests</td>
                <td>Bank Transfer</td>
                <td>$ 130</td>
                <td>21%</td>
                <td>$ 200</td>
                <td>USD</td>
                <td><span class="badge  badge-soft-warning" style="color: #da1616;"> pending</span></td>
              </tr>
            </tbody>
        </table>
    </div>


</div>

@endsection