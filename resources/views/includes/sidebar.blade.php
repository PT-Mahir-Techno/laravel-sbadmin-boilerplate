@php

    $item1 = [
        'title' => 'item1',
        'url' => '#',
        'icon' => 'fas fa-fw fa-tachometer-alt',
    ];

    $item2 = [
        'title' => 'item2',
        'url' => '#',
        'icon' => 'fas fa-fw fa-cog',
        'childerns' => [
            [
                'title' => 'child1',
                'url' => '#'
            ],
            [
                'title' => 'child2',
                'url' => '#'
            ],
        ]
    ];

    $menus = [$item1, $item2]

@endphp

<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #006CB8" id="accordionSidebar">
{{-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> --}}

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('/admin/img/logo-pertagas.png') }}" alt="logo pertagas" style="filter: drop-shadow(1px 1px rgba(255,255,255,0.5));">
        </div>
        {{-- <div class="sidebar-brand-text mx-3">PERTAGAS</div> --}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Features
    </div>

    <!-- Nav Item -->
    @foreach ($menus as $menu)
        @if (!isset($menu['childerns']))
            <li class="nav-item">
                <a class="nav-link" href="{{ $menu['url'] }}">
                    <i class="{{ $menu['icon'] }}"></i>
                    <span>{{ $menu['title'] }}</span></a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ $menu['url'] }}" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="{{ $menu['icon'] }}"></i>
                    <span>{{ $menu['title'] }}</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @foreach ($menu['childerns'] as $item)
                            <a class="collapse-item" href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                        @endforeach
                    </div>
                </div>
            </li>
        @endif
    @endforeach


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
