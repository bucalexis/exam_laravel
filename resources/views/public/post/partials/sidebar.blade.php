<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title">
                <img height="60px" src="{{ asset('assets/images/wfhq_logo.png') }}">
                <span>Webforce HQ</span></a>
        </div>
        <div class="clearfix"></div>


        <!-- menu prile quick info -->
        <!-- /menu prile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3>Public</h3>
                <ul class="nav side-menu">
                    <li id="navPosts"><a href="{{URL::to('post')}}"><i class="fa fa-edit"></i>Posts</a>
                    <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i>Log in</a>
                    </li>

                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">

    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                        <li><a href="{{ url('/login') }}"><i class="fa fa-sign-out pull-right"></i> Log in</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
    </div>

</div>


</div>