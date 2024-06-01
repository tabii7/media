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
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}


    <section class="h-100 gradient-custom-2">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card">

                        <div class="pieborder">

                            <div id="pieChart"></div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var model = <?php echo json_encode($userCounts->where('user_type', 'model')->first()->count ?? 0); ?>;
        var writer = <?php echo json_encode($userCounts->where('user_type', 'writer')->first()->count ?? 0); ?>;
        var vendor = <?php echo json_encode($userCounts->where('user_type', 'vendor')->first()->count ?? 0); ?>;

        var pieOptions = {
            chart: {
                type: 'pie'
            },
            series: [model, writer, vendor],
            labels: ['Total Models', 'Total Writers', 'Total Vendor'],
            dataLabels: {
                enabled: true,
                formatter: function(val, opts) {
                    // Return the actual value from the series array
                    return opts.w.config.series[opts.seriesIndex];
                }
            }
        };


        var pieChart = new ApexCharts(document.querySelector("#pieChart"), pieOptions);
        pieChart.render();
    </script>
@endsection
