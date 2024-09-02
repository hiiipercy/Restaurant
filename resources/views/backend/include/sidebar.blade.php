<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">DASHBOARD</li>
            <li>
                <a href="{{ url('/') }}">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>
            </li>


            <li class="{{ request()->is('heroes*') ? 'active' : '' }}">
                <a href="{{ route('app.heroes.index') }}">
                    <i class="fa fa-bars"></i> <span>Hero</span>
                </a>
            </li>

            <li class="{{ request()->is('abouts*') ? 'active' : '' }}">
                <a href="{{ route('app.abouts.index') }}">
                    <i class="fa fa-bars"></i> <span>About</span>
                </a>
            </li>

            <li class="{{ request()->is('whyus*') ? 'active' : '' }}">
                <a href="{{ route('app.whyus.index') }}">
                    <i class="fa fa-bars"></i> <span>Whyus</span>
                </a>
            </li>

            <li class="{{ request()->is('menu*') ? 'active' : '' }}">
                <a href="{{ route('app.menu.index') }}">
                    <i class="fa fa-bars"></i> <span>Menu</span>
                </a>
            </li>

            <li class="{{ request()->is('user*') ? 'active' : '' }}">
                <a href="{{ route('app.user.index') }}">
                    <i class="fa fa-user"></i> <span>Users</span>
                </a>
            </li>

            <li class="{{ request()->is('special*') ? 'active' : '' }}">
                <a href="{{ route('app.special.index') }}">
                    <i class="fa fa-bars"></i> <span>Special</span>
                </a>
            </li>

            <li class="{{ request()->is('event*') ? 'active' : '' }}">
                <a href="{{ route('app.event.index') }}">
                    <i class="fa fa-bars"></i> <span>Event</span>
                </a>
            </li>

            <li class="{{ request()->is('gallery*') ? 'active' : '' }}">
                <a href="{{ route('app.gallery.index') }}">
                    <i class="fa fa-bars"></i> <span>Gallery</span>
                </a>
            </li>

            <li class="{{ request()->is('chef*') ? 'active' : '' }}">
                <a href="{{ route('app.chef.index') }}">
                    <i class="fa fa-bars"></i> <span>Chef</span>
                </a>
            </li>

            <li class="{{ request()->is('testimonial*') ? 'active' : '' }}">
                <a href="{{ route('app.testimonial.index') }}">
                    <i class="fa fa-bars"></i> <span>Testimonial</span>
                </a>
            </li>

            <li class="{{ request()->is('contact*') ? 'active' : '' }}">
                <a href="{{ route('app.contact.index') }}">
                    <i class="fa fa-bars"></i> <span>Contact</span>
                </a>
            </li>

            {{-- <li class="header">USER MANAGEMENT</li>
            <li class="{{ request()->is('user*') ? 'active' : '' }}">
                <a href="{{ route('app.user.index') }}">
                    <i class="fa fa-users"></i> <span>Users</span>
                </a>
            </li>

            <li class="header">FORM FIELD DATA</li>
            <li class="{{ request()->is('branchs*') ? 'active' : '' }}">
                <a href="{{ route('app.branch.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Branchs</span>
                </a>
            </li>

            <li class="{{ request()->is('districts*') ? 'active' : '' }}">
                <a href="{{ route('app.district.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Districts</span>
                </a>
            </li>
            <li class="{{ request()->is('upazila*') ? 'active' : '' }}">
                <a href="{{ route('app.upazila.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Upazila</span>
                </a>
            </li>
            <li class="{{ request()->is('categories*') ? 'active' : '' }}">
                <a href="{{ route('app.category.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Categories</span>
                </a>
            </li>
            <li class="{{ request()->is('products*') ? 'active' : '' }}">
                <a href="{{ route('app.product.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Products</span>
                </a>
            </li>
            <li class="{{ request()->is('query_type*') ? 'active' : '' }}">
                <a href="{{ route('app.query_type.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Query Type</span>
                </a>
            </li>
            <li class="{{ request()->is('query_mail*') ? 'active' : '' }}">
                <a href="{{ route('app.query_mail.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Query Mail</span>
                </a>
            </li>
            <li class="{{ request()->is('professions*') ? 'active' : '' }}">
                <a href="{{ route('app.profession.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Profession</span>
                </a>
            </li>
            <li class="header">CRM DATA</li>
            <li class="{{ request()->is('reports*') ? 'active' : '' }}">
                <a href="{{ route('app.reports.index') }}">
                    <i class="fa fa-list-ul"></i> <span>Reports</span>
                </a>
            </li> --}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
