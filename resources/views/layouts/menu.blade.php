
<!-- <li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fas fas-address-card"></i><span>Users</span></a>
</li> -->


<li class="{{ Request::is('farmroles*') ? 'active' : '' }}">
    <a href="{!! route('farmroles.index') !!}"><i class="fas fa-project-diagram"></i><span> Farmroles</span></a>
</li>

<li class="{{ Request::is('farms*') ? 'active' : '' }}">
    <a href="{!! route('farms.index') !!}"><i class="fas fa-simplybuilt"></i><span> Farms</span></a>
</li>

<li class="{{ Request::is('lots*') ? 'active' : '' }}">
    <a href="{!! route('lots.index') !!}"><i class="fas fa-object-group"></i><span> Lots</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fas fa-tags"></i><span> Products</span></a>
</li>

<li class="{{ Request::is('productypes*') ? 'active' : '' }}">
    <a href="{!! route('productypes.index') !!}"><i class="fas fa-tag"></i> <span> Productypes</span></a>
</li>

<li class="{{ Request::is('tasks*') ? 'active' : '' }}">
    <a href="{!! route('tasks.index') !!}"><i class="fas fa-tasks"></i><span> Tasks</span></a>
</li>

<li class="{{ Request::is('farmproducts*') ? 'active' : '' }}">
    <a href="{!! route('farmproducts.index') !!}"><i class="fas fa-kiwi-bird"></i><span> Farmproducts</span></a>
</li>

<li class="{{ Request::is('farmsales*') ? 'active' : '' }}">
    <a href="{!! route('farmsales.index') !!}"><i class="fas fa-money-bill-wave"></i><span> Farmsales</span></a>
</li>

<li class="{{ Request::is('unitofmeasures*') ? 'active' : '' }}">
    <a href="{!! route('unitofmeasures.index') !!}"><i class="fa fa-ruler-horizontal"></i><span> Unitofmeasures</span></a>
</li>

<li class="{{ Request::is('agroservices*') ? 'active' : '' }}">
    <a href="{!! route('agroservices.index') !!}"><i class="fas fa-user-tie"></i><span> Agroservices</span></a>
</li>

<li class="{{ Request::is('agroinputs*') ? 'active' : '' }}">
    <a href="{!! route('agroinputs.index') !!}"><i class="fas fa-dolly"></i><span> Agroinputs</span></a>
</li>

<li class="{{ Request::is('orderinputs*') ? 'active' : '' }}">
    <a href="{!! route('orderinputs.index') !!}"><i class="fas fa-folder-open"></i><span> Orderinputs</span></a>
</li>

<li class="{{ Request::is('orderservices*') ? 'active' : '' }}">
    <a href="{!! route('orderservices.index') !!}"><i class="fas fa-folder-open"></i><span> Orderservices</span></a>
</li>



