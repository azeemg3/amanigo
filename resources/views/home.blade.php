@extends('layouts.app')
@section("my_title","Dashboard")
@section('content')
    <style>

        .hc-cat-title {
            font-size: 13px;
            font-weight: bold;
        }

        .highcharts-figure, .highcharts-data-table table {
            min-width: 320px;
            max-width: 800px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #EBEBEB;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }
        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }
        .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
            padding: 0.5em;
        }
        .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }
        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }

    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">{{ __('main.dashboard') }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        @if(Auth::user()->getRoleNames()[0]=='Admin')
            <section class="content home-main">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ \App\Helpers\CommonHelper::dsn($pl) }}</h3>
                                    <p>Pending Leads</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{ url('lms/pending_leads') }}" class="small-box-footer">All Pending <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-purple">
                                <div class="inner">
                                    <h3>{{ \App\Helpers\CommonHelper::dsn($tol) }}</h3>
                                    <p>Takenover Leads</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="{{ url('lms/to_leads') }}" class="small-box-footer">All Takenover <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-dark">
                                <div class="inner">
                                    <h3>{{ \App\Helpers\CommonHelper::dsn($ipl) }}</h3>
                                    <p>In Process Leads</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="{{ url('lms/ip_leads') }}" class="small-box-footer">All In Process <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ \App\Helpers\CommonHelper::dsn($sfl) }}</h3>
                                    <p>Successfull Leads</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ url('lms/sf_leads') }}" class="small-box-footer">All Successfull <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-gradient-red">
                                <div class="inner">
                                    <h3>{{ \App\Helpers\CommonHelper::dsn($usfl) }}</h3>

                                    <p>Unsuccessfull Leads</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="{{ url('lms/us_leads') }}" class="small-box-footer">All Unsuccessfull <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>{{ \App\Helpers\CommonHelper::dsn($tl) }}</h3>

                                    <p>Total Leads</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-body">
                                    <div id="container"></div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                        <section class="col-lg-6 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-body">
                                    <div id="container1"></div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        Receiveable/Customers
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr>
                                            <th><small>Customr Name</small></th>
                                            <th class="text-blue"><small>Dr</small></th>
                                            <th class="text-yellow"><small>Cr</small></th>
                                            <th class="text-success text-right"><small>Balance</small></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $dr=0; $cr=0; ?>
                                        @foreach($accounts as $item)
                                            @if($item->PID==2)
                                            <?php
                                            $balance=App\Helpers\Account::ob(date('Y-m-d'), $item->id);
                                            if($balance>0){
                                                $dr+=$balance;
                                            }else{
                                                $cr+=$balance;
                                            }
                                            ?>
                                            <tr class="customers-{{ App\Helpers\Account::show_bal($dr-$cr) }}">
                                                <td>{{ $item->Trans_Acc_Name }}</td>
                                                <td>@if($balance>0) {{ App\Helpers\Account::show_bal_format($balance) }} @else 0.00 @endif</td>
                                                <td>@if($balance<0) {{ App\Helpers\Account::show_bal_format($balance) }} @else 0.00 @endif</td>
                                                <td style="text-align: right"> {{ App\Helpers\Account::show_bal($dr-$cr) }}</td>
                                            </tr>
                                            @endif
                                        @endforeach
                                        <tr>
                                        </tbody>
                                    </table>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header bg-dark">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        Payable/Vendors
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr>
                                            <th><small>Vendor Name</small></th>
                                            <th class="text-blue"><small>Dr</small></th>
                                            <th class="text-yellow"><small>Cr</small></th>
                                            <th class="text-success"><small>Balance</small></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tbody>
                                        <?php $dr=0; $cr=0; ?>
                                        @foreach($accounts as $item)
                                            @if($item->PID==9)
                                                <?php
                                                $balance=App\Helpers\Account::ob(date('Y-m-d'), $item->id);
                                                if($balance>0){
                                                    $dr+=$balance;
                                                }else{
                                                    $cr+=$balance;
                                                }
                                                ?>
                                                <tr class="vendor-{{ App\Helpers\Account::show_bal($cr-$dr) }}">
                                                    <td>{{ $item->Trans_Acc_Name }}</td>
                                                    <td>@if($balance>0) {{ App\Helpers\Account::show_bal_format($balance) }} @else 0.00 @endif</td>
                                                    <td>@if($balance<0) {{ App\Helpers\Account::show_bal_format($balance) }} @else 0.00 @endif</td>
                                                    <td style="text-align: right"> {{ App\Helpers\Account::show_bal($cr-$dr) }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        <tr>
                                        </tbody>
                                        </tbody>
                                    </table>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
    @endif
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".customers-Nil").each(function () {
               $(this).remove();
        });
        $(".vendor").each(function () {
               $(this).remove();
        });
    </script>
{{--    	<script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>--}}
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/bullet.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        Highcharts.chart('container', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'LEADS SUMMARY'
    },
    tooltip: {
        valueSuffix: '%'
    },
    plotOptions: {
        series: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: [{
                enabled: true,
                distance: 20
            }, {
                enabled: true,
                distance: -40,
                format: '{point.percentage:.1f}%',
                style: {
                    fontSize: '1.2em',
                    textOutline: 'none',
                    opacity: 0.7
                },
                filter: {
                    operator: '>',
                    property: 'percentage',
                    value: 10
                }
            }]
        }
    },
    series: [
        {
            name: 'Percentage',
            colorByPoint: true,
            data: [
                {
                    name: 'PENDING',
                    y: 55.02
                },
                {
                    name: 'TAKENOVER',
                    sliced: true,
                    selected: true,
                    y: 26.71
                },
                {
                    name: 'SUCCESSFULL',
                    y: 1.09
                },
                {
                    name: 'UNSUCCESSFULL',
                    y: 15.5
                },
                {
                    name: 'INPROCESS',
                    y: 1.68
                }
            ]
        }
    ]
});

        //function lead_notifiation
        function lead_notifcation(recdata) {
            $.ajax({
                url:'http://localhost/uotrips/notify',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type:"POST",
                data:{'message':recdata},
                success:function (data) {

                }
            });
        }
        //tabs
        // Data retrieved from https://netmarketshare.com/
// Data retrieved from https://www.ssb.no/energi-og-industri/olje-og-gass/statistikk/sal-av-petroleumsprodukt/artikler/auka-sal-av-petroleumsprodukt-til-vegtrafikk
Highcharts.chart('container1', {
    title: {
        text: 'PRODUCT WISE SALE',
        align: 'left'
    },
    xAxis: {
        categories: [
            'TICKET', 'HOTEL', 'VISA', 'TRANSFER', 'OTHER'
        ]
    },
    yAxis: {
        title: {
            text: 'Million liters'
        }
    },
    tooltip: {
        valueSuffix: ' million liters'
    },
    plotOptions: {
        series: {
            borderRadius: '25%'
        }
    },
    series: [{
        type: 'column',
        name: '2020',
        data: [59, 83, 65, 228, 184]
    }, {
        type: 'column',
        name: '2021',
        data: [24, 79, 72, 240, 167]
    }, {
        type: 'column',
        name: '2022',
        data: [58, 88, 75, 250, 176]
    }, {
        type: 'line',
        step: 'center',
        name: 'Average',
        data: [47, 83.33, 70.66, 239.33, 175.66],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    }, {
        type: 'pie',
        name: 'Total',
        data: [{
            name: '2020',
            y: 619,
            color: Highcharts.getOptions().colors[0], // 2020 color
            dataLabels: {
                enabled: true,
                distance: -50,
                format: '{point.total} M',
                style: {
                    fontSize: '15px'
                }
            }
        }, {
            name: '2021',
            y: 586,
            color: Highcharts.getOptions().colors[1] // 2021 color
        }, {
            name: '2022',
            y: 647,
            color: Highcharts.getOptions().colors[2] // 2022 color
        }],
        center: [75, 65],
        size: 100,
        innerSize: '70%',
        showInLegend: false,
        dataLabels: {
            enabled: false
        }
    }]
});



    </script>
@endsection
