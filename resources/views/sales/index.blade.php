@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ URL::asset('public/css/lead.css') }}">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Sale</li>
                            <li class="breadcrumb-item">Sale Invoices</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-info card-tabs">
                                        <div class="card-header p-0 pt-1">
                                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                                @can('sale_ticket_view')
                                                    <li class="nav-item">
                                                        <a onclick="get_ticket_invoice(1)" class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#ticket" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true"><i class="fa fa-ticket-alt"></i> Ticket</a>
                                                    </li>
                                                @endcan
                                                @can('sale_hotel_view')
                                                    <li class="nav-item">
                                                        <a onclick="get_hotel_invoice()" class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#hotel" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">
                                                            <i class="fa fa-bed"></i> Hotel
                                                        </a>
                                                    </li>
                                                @endcan
                                                @can('sale_visa_view')
                                                    <li class="nav-item">
                                                        <a class="nav-link" onclick="get_visa_invoice(1)" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#visa" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false"><i class="fa fa-globe"></i> Visa</a>
                                                    </li>
                                                @endcan
                                                @can('sale_transport_view')
                                                    <li class="nav-item">
                                                        <a class="nav-link" onclick="get_transport_invoice(1)" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#transport" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false"><i class="fa fa-car"></i> Transport</a>
                                                    </li>
                                                @endcan
                                                @can('sale_tour_view')
                                                    <li class="nav-item">
                                                        <a class="nav-link" onclick="get_tour_invoice(1)" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#tour" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false"><i class="fa fa-kaaba"></i> Tour/Umrah</a>
                                                    </li>
                                                @endcan
                                                    @can('sale_other_view')
                                                    <li class="nav-item">
                                                        <a class="nav-link" onclick="get_other_invoice(1)" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#other" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false"><i class="fa fa-exclamation"></i> Other</a>
                                                    </li>
                                                    @endcan

                                                    {{-- <li class="nav-item">
                                                        <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#refund" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">
                                                            <i class="fa fa-undo-alt"></i> Refund</a>
                                                    </li> --}}
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                                @include('sales.tabs.ticket')
                                                @include('sales.tabs.hotel')
                                                @include('sales.tabs.visa')
                                                @include('sales.tabs.transport')
                                                @include('sales.tabs.tour')
                                                @include('sales.tabs.other')
                                            </div>
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.invoice -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('sales.js_func')
@endsection
