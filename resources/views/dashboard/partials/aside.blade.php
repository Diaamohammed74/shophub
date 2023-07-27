<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <!--A side Logo-->
                {{-- @include('dashboard.partials.asideLogo') --}}
                <!--A side Logo-->
            </span>
            <span class="app-brand-text demo  fw-bolder ms-2">Dashboard</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item ">
            <a href="{{ route('dashboard.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        {{-- <li class="menu-item ">
            <a href="{{route('dashboard.category.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Categories</div>
            </a>
            <li>
                <a href="{{route('dashboard.category.index')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Categories</div>
                </a>
            </li>
        </li> --}}

        <li class="menu-item" style="">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Category</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('dashboard.category.index') }}" class="menu-link">
                        <div data-i18n="Basic">View</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('dashboard.category.create') }}" class="menu-link">
                        <div data-i18n="Basic">Create New</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>
