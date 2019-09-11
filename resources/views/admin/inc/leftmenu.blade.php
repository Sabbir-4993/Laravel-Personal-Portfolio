<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <!-- Dashboard menu -->
            <li>
                <a href="{{ URL('home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            <!-- About menu -->
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> About<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL('about/insert')}}"></i>About Entry</a>
                    </li>
                    <li>
                        <a href="{{ URL('about/manage')}}">About Manage</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <!-- Resume menu -->
            <li>
                <a href="{{ URL('resume') }}"><i class="fa fa-table fa-fw"></i> Resume</a>
            </li>

            <!-- Portfolio menu -->
            <li>
                <a href="{{ URL('portfolio') }}"><i class="fa fa-edit fa-fw"></i> Portfolio</a>
            </li>

            <!-- Blog menu -->
            <li>
                <a href="{{ URL('blog') }}"><i class="fa fa-wrench fa-fw"></i> Blog</a>
            </li>

            <!-- Contact menu -->
            <li>
                <a href="{{ URL('contact') }}"><i class="fa fa-sitemap fa-fw"></i> Contact</a>
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
