<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">@lang('dashboard.sidebar.main')</li>
    <li class="{{ css_route_active('home') }}">
        <a href="{{ route('dashboard.home') }}">
            <i class="fa fa-home"></i>
            <span>@lang('dashboard.home')</span>
        </a>
    </li>
    @include('layouts.sidebar.items.users')
</ul>
