<?php
$lead=['lead','pending_leads', 'my_leads', 'all_leads','to_leads','ip_leads','sf_leads','us_leads'];
$user=['users', 'create', 'roles', 'permission'];
$appication_setup=['categories', 'currencies', 'product_types', 'products', 'regions',
    'currency_api','currency_history','sources','clients', 'continents', 'countries',
    'division','district', 'cities', 'province', 'areas','mosques','hotel','airlines','ticket_source'];
$accounts=['root_accounts', 'dashboard', 'head_accounts', 'subhead_accounts',
    'trans_accounts', 'payment_vouchers', 'receipt_vouchers','journal_vouchers','ledger',
    'financial_year','agent_wallet','service_providors'];
$account_reports=['ledger_report','trail_balance','account_day_book','balance_sheet',
    'income_statement'];
$hr=['designation', 'department', 'employee'];
$bus_setup=['company_setup', 'branches'];
$sale=['Sale'];
$acc_providor=['account_statement'];
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('home') }}" class="brand-link elevation-4 navbar-purple" style="padding: 12px !important;">
        <img src="{{ URL::asset('public/dist/img/main-logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light" style="font-weight: 700 !important;
        font-family:cursive; padding:20px">Amani-Go</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ URL::asset('public/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @can('dashboard_view')
                    <li class="nav-item has-treeview">
                        <a href="{{ route('home') }}" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p> Dashboard </p>
                        </a>
                    </li>
                @endcan
                @can('lms_view')
                    <li class="nav-item has-treeview <?php if(in_array(Request::segment(2), $lead)) echo 'menu-open'; ?>">
                        <a href="#" class="nav-link">
                            <i class='nav-icon fas fa-graduation-cap fa-xs'></i>
                            <p>
                                {{ __('lms.lms') }}
                                <i class="nav-icon fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('lead.index') }}" class="nav-link {{ (request()->is('lms/lead')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>{{ __('lms.dashboard') }}</p>
                                </a>
                            </li>
                            @can('lead_create')
                                <li class="nav-item">
                                    <a href="{{ route('lead.create') }}" class="nav-link {{ (request()->is('lms/lead/create')) ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p>{{ __('lms.create_lead') }}</p>
                                    </a>
                                </li>
                            @endcan
                            @can('pending_leads_view')
                                <li class="nav-item">
                                    <a href="{{ url('lms/pending_leads') }}" class="nav-link {{ (request()->is('lms/pending_leads')) ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p>{{ __('lms.pending_leads') }}</p>
                                    </a>
                                </li>
                            @endcan
                            <li class="nav-item">
                                <a href="{{ url('lms/to_leads') }}" class="nav-link {{ (request()->is('lms/to_leads')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>Takenover Leads</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('lms/ip_leads') }}" class="nav-link {{ (request()->is('lms/ip_leads')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>In Process Leads</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('lms/sf_leads') }}" class="nav-link {{ (request()->is('lms/sf_leads')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>Successfull Leads</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('lms/us_leads') }}" class="nav-link {{ (request()->is('lms/us_leads')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>UnSuccessfull Leads</p>
                                </a>
                            </li>
                            @can('my_leads_view')
                                <li class="nav-item">
                                    <a href="{{ url('lms/my_leads') }}" class="nav-link {{ (request()->is('lms/my_leads')) ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p>{{ __('lms.my_lead') }}</p>
                                    </a>
                                </li>
                            @endcan
                            @can('all_leads_view')
                                <li class="nav-item">
                                    <a href="{{ url('lms/all_leads') }}" class="nav-link {{ (request()->is('lms/all_leads')) ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p>{{ __('lms.all_lead') }}</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('accounts_view')
                    <li class="nav-item has-treeview <?php if(in_array(Request::segment(2), $accounts)) echo 'menu-open';
                    elseif(in_array(Request::segment(3), $accounts)) echo 'menu-open'; elseif(in_array(Request::segment(1), $sale)) echo 'menu-open';
                    elseif(in_array(Request::segment(3), $account_reports)) echo 'menu-open';?>">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-key fa-xs"></i>
                            <p>{{ __('accounts.account') }}
                                <i class="nav-icon fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('accounts_dashboard_view')
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.index') }}" class="nav-link {{ (request()->is('Accounts/dashboard')) ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p>Accounts Dashboard</p>
                                    </a>
                                </li>
                            @endcan
                            @can('account_setup_view')
                                <li class="nav-item has-treeview <?php if(in_array(Request::segment(2), $accounts)) echo 'menu-open'; ?>">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-cog fa-xs"></i>
                                        <p>
                                            Master Account
                                            <i class="nav-icon fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('financial_year.index') }}" class="nav-link {{ (request()->is('Accounts/financial_year')) ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Financial Years</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('root_accounts.index') }}" class="nav-link {{ (request()->is('Accounts/root_accounts')) ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Root Accounts</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('head_accounts.index') }}" class="nav-link {{ (request()->is('Accounts/head_accounts')) ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Head Accounts</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('subhead_accounts.index') }}" class="nav-link {{ (request()->is('Accounts/subhead_accounts')) ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Subhead Accounts</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('trans_accounts.index') }}" class="nav-link {{ (request()->is('Accounts/trans_accounts')) ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Transaction Accounts</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endcan
                            @can('vouchers_view')
                                <li class="nav-item has-treeview <?php if(in_array(Request::segment(3), $accounts)) echo 'menu-open'; ?>">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-dollar-sign"></i>
                                        <p>
                                            Vouchers
                                            <i class="nav-icon fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @can('rv_view')
                                            <li class="nav-item">
                                                <a href="{{ route('receipt_vouchers.index') }}" class="nav-link {{ (request()->is('Accounts/vouchers/receipt_vouchers')) ? 'active' : '' }}">
                                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                    <p>Receipt Voucher</p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('pv_view')
                                            <li class="nav-item">
                                                <a href="{{ route('payment_vouchers.index') }}" class="nav-link {{ (request()->is('Accounts/vouchers/payment_vouchers')) ? 'active' : '' }}">
                                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                    <p>Payment Voucher</p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('jv_view')
                                            <li class="nav-item">
                                                <a href="{{ route('journal_vouchers.index') }}" class="nav-link {{ (request()->is('Accounts/vouchers/journal_vouchers'))? 'active':'' }}">
                                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                    <p>Journal Voucher</p>
                                                </a>
                                            </li>
                                        @endcan
                                        {{--<li class="nav-item">--}}
                                        {{--<a href="#" class="nav-link">--}}
                                        {{--<i class="nav-icon fas fa-angle-double-right fa-xs"></i>--}}
                                        {{--<p>Sale Voucher</p>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="nav-item">--}}
                                        {{--<a href="#" class="nav-link">--}}
                                        {{--<i class="nav-icon fas fa-angle-double-right fa-xs"></i>--}}
                                        {{--<p>Purchase Voucher</p>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="nav-item">--}}
                                        {{--<a href="#" class="nav-link">--}}
                                        {{--<i class="nav-icon fas fa-angle-double-right fa-xs"></i>--}}
                                        {{--<p>Return Voucher</p>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                    </ul>
                                </li>
                            @endcan
                            @can('sale_invoices_view')
                                <li class="nav-item has-treeview <?php if(in_array(Request::segment(1), $sale)) echo 'menu-open'; ?>">
                                    <a href="#" class="nav-link">
                                        <i class='nav-icon fas fa-ticket-alt fa-xs'></i>
                                        <p>
                                            Invoice
                                            <i class="nav-icon fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('Sale') }}" class="nav-link {{ (request()->is('Sale')) ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>{{ __('sale_invoice.sale_invoice') }}</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endcan
                            @can('general_ledger_view')
                                <li class="nav-item">
                                    <a href="{{ url('Accounts/ledger') }}" class="nav-link {{ (request()->is('Accounts/ledger')) ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p>General Ledger</p>
                                    </a>
                                </li>
                            @endcan
{{--                            @can('refund_view')--}}
{{--                                <li class="nav-item has-treeview <?php if(in_array(Request::segment(1), $sale)) echo 'menu-open'; ?>">--}}
{{--                                    <a href="#" class="nav-link">--}}
{{--                                        <i class="nav-icon fas fa-undo"></i>--}}
{{--                                        <p>--}}
{{--                                            Refunds--}}
{{--                                            <i class="nav-icon fas fa-angle-left right"></i>--}}
{{--                                        </p>--}}
{{--                                    </a>--}}
{{--                                    <ul class="nav nav-treeview">--}}
{{--                                        <li class="nav-item">--}}
{{--                                            <a href="#" class="nav-link {{ (request()->is('Accounts/ledger')) ? 'active' : '' }}">--}}
{{--                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>--}}
{{--                                                <p>Refunds</p>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            @endcan--}}
                            @can('account_reports_view')
                                <li class="nav-item <?php if(in_array(Request::segment(3), $account_reports)) echo 'menu-open'; ?>">
                                    <a href="{{ route('users.index') }}" class="nav-link">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p>Account Reports
                                            <i class="nav-icon right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('Accounts/reports/ledger_report') }}" class="nav-link {{ (request()->is('Accounts/reports/ledger_report')) ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Ledger Reports</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('trail_balance.index') }}" class="nav-link {{ (request()->is('Accounts/reports/trail_balance')) ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Traial Balance</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('account_day_book.index') }}" class="nav-link {{ (request()->is('Accounts/reports/account_day_book')) ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Accounts Day Book</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('income_statement.index') }}" class="nav-link {{ (request()->is('Accounts/reports/income_statement')) ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Income Statement</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('balance_sheet.index') }}" class="nav-link {{ (request()->is('Accounts/reports/balance_sheet')) ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Balance Sheet</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('application_setup_view')
                    <li class="nav-item has-treeview <?php if(in_array(Request::segment(1), $appication_setup)){ echo 'menu-open'; } elseif(in_array(Request::segment(2), $appication_setup)) echo 'menu-open'; elseif(in_array(Request::segment(2), $appication_setup)) echo 'menu-open';
                    elseif(in_array(Request::segment(3), $user)){ echo 'menu-open'; } elseif(in_array(Request::segment(2), $hr)){ echo 'menu-open'; }
                    elseif(in_array(Request::segment(1), $bus_setup)){ echo 'menu-open'; } ?>">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cogs fa-xs"></i>
                            <p>
                                Application Setting
                                <i class="nav-icon fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('hotel.index') }}" class="nav-link {{ request()->is('Application_Setup/hotel')?'active':'' }}">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>Hotel List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('airlines.index') }}" class="nav-link {{ request()->is('Application_Setup/airlines')?'active':'' }}">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>Airlines</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ticket_source.index') }}" class="nav-link {{ request()->is('Application_Setup/ticket_source')? 'active':'' }}">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>Ticket Source</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview <?php if(in_array(Request::segment(3), $user)) echo 'menu-open'; ?>">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        {{ __('user_management.user_management') }}
                                        <i class="nav-icon fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('users.index') }}" class="nav-link {{ (request()->is('Application_Setup/user_management/users')) ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                            <p>User List</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('users.create') }}" class="nav-link {{ (request()->is('Application_Setup/user_management/users/create')) ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                            <p>Create New User</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('roles.index') }}" class="nav-link {{ (request()->is('Application_Setup/user_management/roles')) ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                            <p>Roles</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('permission.index') }}" class="nav-link {{ (request()->is('Application_Setup/user_management/permission')) ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                            <p>Permissions</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @can('hr_view')
                                <li class="nav-item has-treeview <?php if(in_array(Request::segment(2), $hr)) echo 'menu-open'; ?>">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-user-cog"></i>
                                        <p>
                                            {{ __('main.hr') }}
                                            <i class="nav-icon fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @can('hr_setup_view')
                                            <li class="nav-item has-treeview <?php if(in_array(Request::segment(2), $hr)) echo 'menu-open'; ?>">
                                                <a href="#" class="nav-link">
                                                    <i class="nav-icon fas fa-cog fa-xs"></i>
                                                    <p>
                                                        HR Setup
                                                        <i class="right fas fa-angle-left"></i>
                                                    </p>
                                                </a>
                                                <ul class="nav nav-treeview">
                                                    @can('designation_view')
                                                        <li class="nav-item">
                                                            <a href="{{ route('designation.index') }}" class="nav-link {{ (request()->is('Hr/designation')) ? 'active' : '' }}">
                                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                                <p>Designation</p>
                                                            </a>
                                                        </li>
                                                    @endcan
                                                    @can('department_view')
                                                        <li class="nav-item">
                                                            <a href="{{ route('department.index') }}" class="nav-link {{ (request()->is('Hr/department')) ? 'active' : '' }}">
                                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                                <p>Department</p>
                                                            </a>
                                                        </li>
                                                    @endcan
                                                </ul>
                                            </li>
                                        @endcan
                                        @can('employee_details_view')
                                            <li class="nav-item">
                                                <a href="{{ route('employee.index') }}" class="nav-link {{ (request()->is('Hr/employee')) ? 'active' : '' }}">
                                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                    <p>Employee Details</p>
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endcan
{{--                            @can('business_setup_view')--}}
{{--                                <li class="nav-item has-treeview <?php if(in_array(Request::segment(1), $bus_setup)) echo 'menu-open'; ?>">--}}
{{--                                    <a href="#" class="nav-link">--}}
{{--                                        <i class="nav-icon fas fa-business-time"></i>--}}
{{--                                        <p>--}}
{{--                                            {{ __('main.business_setup') }}--}}
{{--                                            <i class="nav-icon fas fa-angle-left right"></i>--}}
{{--                                        </p>--}}
{{--                                    </a>--}}
{{--                                    <ul class="nav nav-treeview">--}}
{{--                                        <li class="nav-item">--}}
{{--                                            <a href="{{ route('company_setup.create') }}" class="nav-link {{ (request()->is('company_setup/create')) ? 'active' : '' }}">--}}
{{--                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>--}}
{{--                                                <p>Company Setup</p>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li class="nav-item">--}}
{{--                                            <a href="{{ route('branches.index') }}" class="nav-link {{ (request()->is('branches')) ? 'active' : '' }}">--}}
{{--                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>--}}
{{--                                                <p>Branches</p>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            @endcan--}}
                            <li class="nav-item">
                                <a href="{{ route('currencies.index') }}" class="nav-link {{ request()->is('currencies')?'active':'' }}">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>Currency</p>
                                </a>
                            </li>
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{ url('currency_history') }}" class="nav-link {{ request()->is('currency_history')?'active':'' }}">--}}
{{--                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>--}}
{{--                                    <p>Currency Rate History</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            @can('location_setup_view')
                                <li class="nav-item">
                                    <a href="{{ route('countries.index') }}" class="nav-link {{ request()->is('countries')?'active':'' }}">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p>Countries</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('cities.index') }}" class="nav-link {{ request()->is('cities')?'active':'' }}">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p>Cities</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
