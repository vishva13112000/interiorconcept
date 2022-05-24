<div class="main-menu material-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ route('admin.home') }}"><i class="mbri-desktop"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a></li>
            <li class=" nav-item"><a href="#"><i class="mbri-extension"></i><span class="menu-title" data-i18n="nav.category.admin-panels">Products</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('categories.index') }}"><i class="material-icons">list_alt</i><span>Manage Category</span></a></li>
                    <li><a class="menu-item" href="{{ route('tags.index') }}"><i class="material-icons">list_alt</i><span>Manage Tag</span></a></li>
                    <li><a class="menu-item" href="{{ route('pcolors.index') }}"><i class="material-icons">list_alt</i><span>Manage Color</span></a></li>
                    <li><a class="menu-item" href="{{ route('products.index') }}"><i class="material-icons">list_alt</i><span>Manage Product</span></a></li>
                    <!-- <li><a class="menu-item" href="{{ route('pimages.index') }}"><i class="material-icons">list_alt</i><span>Manage Image</span></a></li> -->
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="mbri-website-theme"></i><span class="menu-title" data-i18n="nav.category.admin-panels">Banners</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('banners.index') }}"><i class="material-icons">list_alt</i><span>Manage Banner</span></a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="mbri-file"></i><span class="menu-title" data-i18n="nav.category.admin-panels">Document</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('document_showapi') }}"><i class="material-icons">list_alt</i><span>Manage API</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
