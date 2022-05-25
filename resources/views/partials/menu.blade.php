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
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.category.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/category") || request()->is("admin/category/*") ? "c-active" : "" }}">
                <i class="fa-fw fas fa-bookmark c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.category.title') }}
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.product.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/product") || request()->is("admin/product/*") ? "c-active" : "" }}">
                <i class="fa-fw fas fa-bookmark c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.product.title') }}
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>