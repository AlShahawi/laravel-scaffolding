<!-- Sidebar user panel -->
<div class="user-panel">
    <div class="pull-left image">
        <img src="https://s.gravatar.com/avatar/{{ md5(strtolower(auth()->user()->email)) }}?s=80" class="img-circle" alt="{{ auth()->user()->name }}">
    </div>
    <div class="pull-left info">
        <p>{{ auth()->user()->name }}</p>
        <a href="javascript:">
            <i class="fa fa-circle text-success"></i> @lang('adminlte::adminlte.online')
        </a>
    </div>
</div>
