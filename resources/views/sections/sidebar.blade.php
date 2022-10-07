<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="dist/img/logo.png" alt="DaltonTv CRM" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('customers.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Customers
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('suppliers.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            Suppliers
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('swapouts.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>
                            Swapouts
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('bookings.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-check-circle"></i>
                        <p>
                            Bookings
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('sales-enquiries.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Sales Enquiries
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>
                            Finance
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('invoices.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Invoices</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('recurrence.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Recurrence</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('payments.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Payments</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sales-reports.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Sales Report</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('standard-letters.index') }}" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Standard Letters
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('user-management.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            User Management
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('all-settings') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>All Settings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('system-settings') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>System</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tax-rates') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Tax Rates</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('invoicing') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Invoicing</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('payment-types') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Payment Types</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backup-database') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Backup Database</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
