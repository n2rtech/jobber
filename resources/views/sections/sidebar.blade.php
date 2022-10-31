<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('dist/img/logo.png') }}" alt="DaltonTv CRM" style="opacity: .8">
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
                    <a href="{{ route('customers.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Add Customer
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('schedules.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Schedules
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('jobs.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-check-circle"></i>
                        <p>
                            All Jobs
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('invoices.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>
                            Invoices
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('estimates.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-calculator"></i>
                        <p>
                            Estimates
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('sales-leads.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Sales leads
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
                            <a href="{{ route('job-forms.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Job Form</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manage-team.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Manage Team</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('email-templates.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Email Templates</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tax-rates.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Tax Rates</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Product & Service</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('job-titles.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Job Titles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('company-settings.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Company Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
