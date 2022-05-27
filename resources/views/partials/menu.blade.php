<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('order_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/orders*") ? "c-show" : "" }} {{ request()->is("admin/order-items*") ? "c-show" : "" }} {{ request()->is("admin/order-statuses*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-file-invoice-dollar c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.orderManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('order_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.orders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/orders") || request()->is("admin/orders/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-dollar-sign c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.order.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('order_item_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.order-items.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/order-items") || request()->is("admin/order-items/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-list-ol c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.orderItem.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('order_status_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.order-statuses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/order-statuses") || request()->is("admin/order-statuses/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-check-circle c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.orderStatus.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('inventory_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.inventories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/inventories") || request()->is("admin/inventories/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-chart-bar c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.inventory.title') }}
                </a>
            </li>
        @endcan
        @can('product_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/products*") ? "c-show" : "" }} {{ request()->is("admin/product-statuses*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-check-double c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.productManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('product_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.products.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/products") || request()->is("admin/products/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-check c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.product.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('product_status_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.product-statuses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/product-statuses") || request()->is("admin/product-statuses/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-check-circle c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.productStatus.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('store_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/stores*") ? "c-show" : "" }} {{ request()->is("admin/locations*") ? "c-show" : "" }} {{ request()->is("admin/distributors*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-boxes c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.storeManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('store_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.stores.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/stores") || request()->is("admin/stores/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-box c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.store.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('location_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.locations.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/locations") || request()->is("admin/locations/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-map-marked-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.location.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('distributor_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.distributors.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/distributors") || request()->is("admin/distributors/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-truck-moving c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.distributor.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('report_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/order-reports*") ? "c-show" : "" }} {{ request()->is("admin/product-reports*") ? "c-show" : "" }} {{ request()->is("admin/store-reports*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-file-contract c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.reportManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('order_report_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.order-reports.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/order-reports") || request()->is("admin/order-reports/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-dollar-sign c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.orderReport.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('product_report_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.product-reports.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/product-reports") || request()->is("admin/product-reports/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-check-double c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.productReport.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('store_report_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.store-reports.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/store-reports") || request()->is("admin/store-reports/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-archive c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.storeReport.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('log_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/order-logs*") ? "c-show" : "" }} {{ request()->is("admin/inventory-logs*") ? "c-show" : "" }} {{ request()->is("admin/product-logs*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw far fa-clock c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.log.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('order_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.order-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/order-logs") || request()->is("admin/order-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-dollar-sign c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.orderLog.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('inventory_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.inventory-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/inventory-logs") || request()->is("admin/inventory-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-chart-bar c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.inventoryLog.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('product_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.product-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/product-logs") || request()->is("admin/product-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-check c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.productLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/permissions*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>