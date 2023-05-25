<div class="wrapper" style="height: 100vh;">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Right navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>					
        </ul>
        
        <ul class="navbar-nav ml-auto">
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-dropdown-link href="{{ route('logout') }}"
                         @click.prevent="$root.submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </ul>
    </nav>
    
    <aside x-data="{ open: false }" class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('dashboard')}}" class="brand-link">
            <span class="brand-text font-weight-light">Smart Phone</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column"> <!--data-widget="treeview" role="menu" data-accordion="false"-->
                    
                    <li class="nav-item">
                        <x-nav-link href="{{route('dashboard')}}" :active="request()->routeIs('dashboard')" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            {{__('Dashboard')}}
                        </x-nav-link>																
                    </li>
    
                    <li class="nav-item">
                        <x-nav-link href="{{url('showcategory')}}" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            {{__('Category')}}
                        </x-nav-link>
                    </li>
    
                    <li class="nav-item">
                        <x-nav-link href="{{url('showproduct')}}" class="nav-link">
                            <i class="nav-icon fas fa-tag"></i>
                            {{__('Product')}}
                        </x-nav-link>
                    </li>

                    <li class="nav-item">
                        <x-nav-link href="{{url('showorder')}}" class="nav-link">
                            <i class="nav-icon fas fa-shopping-bag"></i>
                            {{__('Orders')}}
                        </x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link href="{{url('detailuser')}}" class="nav-link">
                            <i class="nav-icon  fas fa-users"></i>
                            {{__('Users')}}
                        </x-nav-link>
                    </li>

                </ul>    
            </nav>
        </div>
    </aside>
    <div style="margin-left:20%; margin-right:10%">
        @yield('content')
    </div>
</div>