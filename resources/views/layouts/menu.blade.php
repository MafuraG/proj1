<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('farmroles*') ? 'active' : '' }}">
    <a href="{!! route('farmroles.index') !!}"><i class="fa fa-edit"></i><span>Farmroles</span></a>
</li>

<li class="{{ Request::is('farms*') ? 'active' : '' }}">
    <a href="{!! route('farms.index') !!}"><i class="fa fa-edit"></i><span>Farms</span></a>
</li>

