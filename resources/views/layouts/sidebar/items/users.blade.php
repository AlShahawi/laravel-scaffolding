{{--Users--}}
<li class="treeview {{ css_resource_active('dashboard.users') }}">
    <a href="#">
        <i class="fa fa-users"></i> <span>{{  trans('users.plural') }}</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ css_route_active('dashboard.users.index') }}">
            <a href="{{ route('dashboard.users.index') }}">
                <i class="fa fa-arrow-right"></i>
                {{  trans('dashboard.sidebar.list') }}
            </a>
        </li>
        <li class="{{ css_route_active('dashboard.users.create') }}">
            <a href="{{ route('dashboard.users.create') }}">
                <i class="fa fa-arrow-right"></i>
                {{  trans('dashboard.sidebar.add') }}
            </a>
        </li>
    </ul>
</li>
