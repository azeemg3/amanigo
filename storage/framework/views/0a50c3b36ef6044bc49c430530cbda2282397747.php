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
    <a href="<?php echo e(url('home')); ?>" class="brand-link elevation-4 navbar-purple" style="padding: 12px !important;">
        <img src="<?php echo e(URL::asset('public/dist/img/main-logo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light" style="font-weight: 700 !important;
        font-family:cursive; padding:20px">Amani-Go</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(URL::asset('public/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo e(auth()->user()->name); ?></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dashboard_view')): ?>
                    <li class="nav-item has-treeview">
                        <a href="<?php echo e(route('home')); ?>" class="nav-link <?php echo e((request()->is('home')) ? 'active' : ''); ?>">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p> Dashboard </p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lms_view')): ?>
                    <li class="nav-item has-treeview <?php if(in_array(Request::segment(2), $lead)) echo 'menu-open'; ?>">
                        <a href="#" class="nav-link">
                            <i class='nav-icon fas fa-graduation-cap fa-xs'></i>
                            <p>
                                <?php echo e(__('lms.lms')); ?>

                                <i class="nav-icon fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('lead.index')); ?>" class="nav-link <?php echo e((request()->is('lms/lead')) ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p><?php echo e(__('lms.dashboard')); ?></p>
                                </a>
                            </li>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lead_create')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('lead.create')); ?>" class="nav-link <?php echo e((request()->is('lms/lead/create')) ? 'active' : ''); ?>">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p><?php echo e(__('lms.create_lead')); ?></p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pending_leads_view')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(url('lms/pending_leads')); ?>" class="nav-link <?php echo e((request()->is('lms/pending_leads')) ? 'active' : ''); ?>">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p><?php echo e(__('lms.pending_leads')); ?></p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item">
                                <a href="<?php echo e(url('lms/to_leads')); ?>" class="nav-link <?php echo e((request()->is('lms/to_leads')) ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>Takenover Leads</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(url('lms/ip_leads')); ?>" class="nav-link <?php echo e((request()->is('lms/ip_leads')) ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>In Process Leads</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(url('lms/sf_leads')); ?>" class="nav-link <?php echo e((request()->is('lms/sf_leads')) ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>Successfull Leads</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(url('lms/us_leads')); ?>" class="nav-link <?php echo e((request()->is('lms/us_leads')) ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>UnSuccessfull Leads</p>
                                </a>
                            </li>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('my_leads_view')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(url('lms/my_leads')); ?>" class="nav-link <?php echo e((request()->is('lms/my_leads')) ? 'active' : ''); ?>">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p><?php echo e(__('lms.my_lead')); ?></p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('all_leads_view')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(url('lms/all_leads')); ?>" class="nav-link <?php echo e((request()->is('lms/all_leads')) ? 'active' : ''); ?>">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p><?php echo e(__('lms.all_lead')); ?></p>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('accounts_view')): ?>
                    <li class="nav-item has-treeview <?php if(in_array(Request::segment(2), $accounts)) echo 'menu-open';
                    elseif(in_array(Request::segment(3), $accounts)) echo 'menu-open'; elseif(in_array(Request::segment(1), $sale)) echo 'menu-open';
                    elseif(in_array(Request::segment(3), $account_reports)) echo 'menu-open';?>">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-key fa-xs"></i>
                            <p><?php echo e(__('accounts.account')); ?>

                                <i class="nav-icon fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('accounts_dashboard_view')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('dashboard.index')); ?>" class="nav-link <?php echo e((request()->is('Accounts/dashboard')) ? 'active' : ''); ?>">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p>Accounts Dashboard</p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('account_setup_view')): ?>
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
                                            <a href="<?php echo e(route('financial_year.index')); ?>" class="nav-link <?php echo e((request()->is('Accounts/financial_year')) ? 'active' : ''); ?>">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Financial Years</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('root_accounts.index')); ?>" class="nav-link <?php echo e((request()->is('Accounts/root_accounts')) ? 'active' : ''); ?>">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Root Accounts</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('head_accounts.index')); ?>" class="nav-link <?php echo e((request()->is('Accounts/head_accounts')) ? 'active' : ''); ?>">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Head Accounts</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('subhead_accounts.index')); ?>" class="nav-link <?php echo e((request()->is('Accounts/subhead_accounts')) ? 'active' : ''); ?>">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Subhead Accounts</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('trans_accounts.index')); ?>" class="nav-link <?php echo e((request()->is('Accounts/trans_accounts')) ? 'active' : ''); ?>">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Transaction Accounts</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('vouchers_view')): ?>
                                <li class="nav-item has-treeview <?php if(in_array(Request::segment(3), $accounts)) echo 'menu-open'; ?>">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-dollar-sign"></i>
                                        <p>
                                            Vouchers
                                            <i class="nav-icon fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('rv_view')): ?>
                                            <li class="nav-item">
                                                <a href="<?php echo e(route('receipt_vouchers.index')); ?>" class="nav-link <?php echo e((request()->is('Accounts/vouchers/receipt_vouchers')) ? 'active' : ''); ?>">
                                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                    <p>Receipt Voucher</p>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pv_view')): ?>
                                            <li class="nav-item">
                                                <a href="<?php echo e(route('payment_vouchers.index')); ?>" class="nav-link <?php echo e((request()->is('Accounts/vouchers/payment_vouchers')) ? 'active' : ''); ?>">
                                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                    <p>Payment Voucher</p>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('jv_view')): ?>
                                            <li class="nav-item">
                                                <a href="<?php echo e(route('journal_vouchers.index')); ?>" class="nav-link <?php echo e((request()->is('Accounts/vouchers/journal_vouchers'))? 'active':''); ?>">
                                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                    <p>Journal Voucher</p>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    </ul>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sale_invoices_view')): ?>
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
                                            <a href="<?php echo e(url('Sale')); ?>" class="nav-link <?php echo e((request()->is('Sale')) ? 'active' : ''); ?>">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p><?php echo e(__('sale_invoice.sale_invoice')); ?></p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('general_ledger_view')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(url('Accounts/ledger')); ?>" class="nav-link <?php echo e((request()->is('Accounts/ledger')) ? 'active' : ''); ?>">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p>General Ledger</p>
                                    </a>
                                </li>
                            <?php endif; ?>



















                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('account_reports_view')): ?>
                                <li class="nav-item <?php if(in_array(Request::segment(3), $account_reports)) echo 'menu-open'; ?>">
                                    <a href="<?php echo e(route('users.index')); ?>" class="nav-link">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p>Account Reports
                                            <i class="nav-icon right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?php echo e(url('Accounts/reports/ledger_report')); ?>" class="nav-link <?php echo e((request()->is('Accounts/reports/ledger_report')) ? 'active' : ''); ?>">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Ledger Reports</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('trail_balance.index')); ?>" class="nav-link <?php echo e((request()->is('Accounts/reports/trail_balance')) ? 'active' : ''); ?>">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Traial Balance</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('account_day_book.index')); ?>" class="nav-link <?php echo e((request()->is('Accounts/reports/account_day_book')) ? 'active' : ''); ?>">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Accounts Day Book</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('income_statement.index')); ?>" class="nav-link <?php echo e((request()->is('Accounts/reports/income_statement')) ? 'active' : ''); ?>">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Income Statement</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('balance_sheet.index')); ?>" class="nav-link <?php echo e((request()->is('Accounts/reports/balance_sheet')) ? 'active' : ''); ?>">
                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                <p>Balance Sheet</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('application_setup_view')): ?>
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
                                <a href="<?php echo e(route('hotel.index')); ?>" class="nav-link <?php echo e(request()->is('Application_Setup/hotel')?'active':''); ?>">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>Hotel List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('airlines.index')); ?>" class="nav-link <?php echo e(request()->is('Application_Setup/airlines')?'active':''); ?>">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>Airlines</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('ticket_source.index')); ?>" class="nav-link <?php echo e(request()->is('Application_Setup/ticket_source')? 'active':''); ?>">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>Ticket Source</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview <?php if(in_array(Request::segment(3), $user)) echo 'menu-open'; ?>">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        <?php echo e(__('user_management.user_management')); ?>

                                        <i class="nav-icon fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('users.index')); ?>" class="nav-link <?php echo e((request()->is('Application_Setup/user_management/users')) ? 'active' : ''); ?>">
                                            <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                            <p>User List</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('users.create')); ?>" class="nav-link <?php echo e((request()->is('Application_Setup/user_management/users/create')) ? 'active' : ''); ?>">
                                            <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                            <p>Create New User</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('roles.index')); ?>" class="nav-link <?php echo e((request()->is('Application_Setup/user_management/roles')) ? 'active' : ''); ?>">
                                            <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                            <p>Roles</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('permission.index')); ?>" class="nav-link <?php echo e((request()->is('Application_Setup/user_management/permission')) ? 'active' : ''); ?>">
                                            <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                            <p>Permissions</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('hr_view')): ?>
                                <li class="nav-item has-treeview <?php if(in_array(Request::segment(2), $hr)) echo 'menu-open'; ?>">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-user-cog"></i>
                                        <p>
                                            <?php echo e(__('main.hr')); ?>

                                            <i class="nav-icon fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('hr_setup_view')): ?>
                                            <li class="nav-item has-treeview <?php if(in_array(Request::segment(2), $hr)) echo 'menu-open'; ?>">
                                                <a href="#" class="nav-link">
                                                    <i class="nav-icon fas fa-cog fa-xs"></i>
                                                    <p>
                                                        HR Setup
                                                        <i class="right fas fa-angle-left"></i>
                                                    </p>
                                                </a>
                                                <ul class="nav nav-treeview">
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('designation_view')): ?>
                                                        <li class="nav-item">
                                                            <a href="<?php echo e(route('designation.index')); ?>" class="nav-link <?php echo e((request()->is('Hr/designation')) ? 'active' : ''); ?>">
                                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                                <p>Designation</p>
                                                            </a>
                                                        </li>
                                                    <?php endif; ?>
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('department_view')): ?>
                                                        <li class="nav-item">
                                                            <a href="<?php echo e(route('department.index')); ?>" class="nav-link <?php echo e((request()->is('Hr/department')) ? 'active' : ''); ?>">
                                                                <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                                <p>Department</p>
                                                            </a>
                                                        </li>
                                                    <?php endif; ?>
                                                </ul>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employee_details_view')): ?>
                                            <li class="nav-item">
                                                <a href="<?php echo e(route('employee.index')); ?>" class="nav-link <?php echo e((request()->is('Hr/employee')) ? 'active' : ''); ?>">
                                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                                    <p>Employee Details</p>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            <?php endif; ?>

























                            <li class="nav-item">
                                <a href="<?php echo e(route('currencies.index')); ?>" class="nav-link <?php echo e(request()->is('currencies')?'active':''); ?>">
                                    <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                    <p>Currency</p>
                                </a>
                            </li>






                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('location_setup_view')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('countries.index')); ?>" class="nav-link <?php echo e(request()->is('countries')?'active':''); ?>">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p>Countries</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('cities.index')); ?>" class="nav-link <?php echo e(request()->is('cities')?'active':''); ?>">
                                        <i class="nav-icon fas fa-angle-double-right fa-xs"></i>
                                        <p>Cities</p>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH E:\xampp_8.2\htdocs\pp\amani-go\resources\views/layouts/aside.blade.php ENDPATH**/ ?>