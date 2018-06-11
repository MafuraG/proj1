
<!-- <li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fas fas-address-card"></i><span>Users</span></a>
</li> -->

<li class="Active">
    <a href="#">
        <i class="fas fa-align-justify"></i>
        <span> My Farm</span>
    </a>
    <ul class="Active">
        <li class="{{ Request::is('farms*') ? 'active' : '' }}">
            <a href="{!! route('farms.index') !!}">
                <i class="fas fa-simplybuilt"></i><span> Farms</span>
            </a>
        </li>
        <li class="{{ Request::is('lots*') ? 'active' : '' }}">
            <a href="{!! route('lots.index') !!}">
                <i class="fas fa-object-group"></i><span> Lots</span>
            </a>
        </li>

        <li class="{{ Request::is('tasks*') ? 'active' : '' }}">
            <a href="{!! route('tasks.index') !!}">
                <i class="fas fa-tasks"></i><span> Tasks</span>
            </a>
        </li>

        <li class="{{ Request::is('farmproducts*') ? 'active' : '' }}">
            <a href="{!! route('farmproducts.index') !!}">
                <i class="fas fa-kiwi-bird"></i><span> Farmproducts</span>
            </a>
        </li>

        <li class="{{ Request::is('farmsales*') ? 'active' : '' }}">
            <a href="{!! route('farmsales.index') !!}">
                <i class="fas fa-money-bill-wave"></i><span> Farmsales</span>
            </a>
        </li>       

        <li class="{{ Request::is('orderinputs*') ? 'active' : '' }}">
            <a href="{!! route('orderinputs.index') !!}">
                <i class="fas fa-folder-open"></i><span> Orderinputs</span>
            </a>
        </li>

        <li class="{{ Request::is('orderservices*') ? 'active' : '' }}">
            <a href="{!! route('orderservices.index') !!}">
                <i class="fas fa-folder-open"></i><span> Orderservices</span>
            </a>
        </li>
    </ul>
</li>

<li class="Active">
    <a href="#">
        <i class="fas fa-align-justify"></i>
        <span> My Bids</span>
    </a>
    <ul>
        <li class="{{ Request::is('orderinputs*') ? 'active' : '' }}">
            <a href="{!! route('orderinputs.index') !!}">
                <i class="fas fa-folder-open"></i><span> Inputs</span>
                <!-- Here we will have 4 columns 
                    1. Farm name
                    2. Input needed
                    3. Quantity of input
                    4. open date
                    5. close date                    
                    6. placing bids-->
            </a>
        </li>

        <li class="{{ Request::is('orderservices*') ? 'active' : '' }}">
            <a href="{!! route('orderservices.index') !!}">
                <i class="fas fa-folder-open"></i><span> Services</span>
                <!-- Here we will have 4 columns 
                    1. Farm name
                    2. Service needed 
                    3. open date 
                    4. close date                  
                    5. placing bids-->
            </a>
        </li>
        <li class="{{ Request::is('orderinputs*') ? 'active' : '' }}">
            <a href="{!! route('orderinputs.index') !!}">
                <i class="fas fa-folder-open"></i><span> Transactions - inputs</span>
                <!-- Here we will have 4 columns 
                    1. Farm name
                    2. Input name
                    3. quantity
                    4. price
                    5. pay status
                    6. delivery status-->
            </a>
        </li>

        <li class="{{ Request::is('orderservices*') ? 'active' : '' }}">
            <a href="{!! route('orderservices.index') !!}">
                <i class="fas fa-folder-open"></i><span> Transactions - services</span>
                <!-- Here we will have 4 columns 
                    1. Farm name
                    2. service name                    
                    3. price
                    4. pay status
                    5. delivery status -->
                    
            </a>
        </li>
    </ul>
</li>

<li class="Active ">
    <a href="#">
        <i class="fas fa-toolbox"></i>
        <span> Settings</span>
    </a>
    <ul>
        <li class="{{ Request::is('farmroles*') ? 'active' : '' }}">
            <a href="{!! route('farmroles.index') !!}"><i class="fas fa-project-diagram"></i><span> Farmroles</span></a>
        </li>

        <li class="{{ Request::is('products*') ? 'active' : '' }}">
            <a href="{!! route('products.index') !!}"><i class="fas fa-tags"></i><span> Products</span></a>
        </li>

        <li class="{{ Request::is('productypes*') ? 'active' : '' }}">
            <a href="{!! route('productypes.index') !!}"><i class="fas fa-tag"></i> <span> Productypes</span></a>
        </li>

        <li class="{{ Request::is('unitofmeasures*') ? 'active' : '' }}">
            <a href="{!! route('unitofmeasures.index') !!}"><i class="fa fa-ruler-horizontal"></i><span> Unitofmeasures</span></a>
        </li>

         <li class="{{ Request::is('agroservices*') ? 'active' : '' }}">
            <a href="{!! route('agroservices.index') !!}">
                <i class="fas fa-user-tie"></i><span> Agroservices</span>
            </a>
        </li>

        <li class="{{ Request::is('agroinputs*') ? 'active' : '' }}">
            <a href="{!! route('agroinputs.index') !!}">
                <i class="fas fa-dolly"></i><span> Agroinputs</span>
            </a>
        </li>
    </ul>
</li>





<li class="{{ Request::is('tests*') ? 'active' : '' }}">
    <a href="{!! route('tests.index') !!}"><i class="fa fa-edit"></i><span>Tests</span></a>
</li>

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{!! route('categories.index') !!}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

