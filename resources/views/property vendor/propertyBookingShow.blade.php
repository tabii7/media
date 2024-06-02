@extends('layouts.property vendor.propertyVendorLayout')
@section('property-vendor-content')


<head>

    <!-- DataTables CSS and JS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  
  </head>
<div class="container-fluid">
    
    <!-- start page title -->
     
   
    
    

    <div class="row align-items-center mb-2">
        <div class="col-lg">
            <div class="page-title-box">
                <h4>Booking</h4>

            </div>
        </div>
    </div>

    <!-- end page title -->


    



    <div class="card">
        <div class="card-header">
          Booking Detail
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 my-2">Type</div>
            <div class="col-md-6 my-2">Hotel </div>
            <div class="col-md-6 my-2 ">Title</div>
            <div class="col-md-6 my-2">Hotel stanford </div>
            <div class="col-md-6 my-2 ">Execuation time</div>
            <div class="col-md-6 my-2">check in 02/9/2024 , check out 02/9/2024 room kerama island *1= $350</div>
            <div class="col-md-6 my-2 ">Total amount</div>
            <div class="col-md-6 my-2">$200 </div>
            <div class="col-md-6 my-2 ">Paid</div>
            <div class="col-md-6 my-2">$200 </div>
            <div class="col-md-6 my-2 ">Remaining</div>
            <div class="col-md-6 my-2">$200 </div>
            <div class="col-md-6 my-2 ">Status </div>
            <div class="col-md-6 my-2" >pending </div>
          </div>
        </div>
      </div>




</div>



@endsection