<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Animate -->
    <link href="{{ URL::asset('vendors/animate.css/animate.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ URL::asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ URL::asset('build/css/custom.css') }}" rel="stylesheet">

    <!-- App Style -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles required for specific pages -->
    @yield('page_styles')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('home') }}" class="site_title"><i class="fa fa-hand-o-up"></i>
              <span>{{ config('app.name', 'Laravel') }}!</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Admin</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Basic <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        @if(Auth::User()->type == 0)
                      <li><a>Setup <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="{{ $current_path == 'users' ? 'current-page' : '' }}">
                            <a href="{{ action('UserController@index') }}">Users</a>
                          </li>
                        </ul>
                      </li>
                        @endif
                      
                      <!-- more links heres -->
                    </ul>
                  </li>
                    <li class="{{ $current_path == 'companies' ? 'current-page' : '' }}">
                        <a href="{{ action('CompanyController@index') }}">
                            <i class="fa fa-user"> </i>
                        Company</a>
                      </li>
                      
                      <li class="{{ $current_path == 'components' ? 'current-page' : '' }}">
                        <a href="{{ action('ComponentController@index') }}"><i class="fa fa-user"> </i>Components</a>
                      </li>
                      
                      <li class="{{ $current_path == 'products' ? 'current-page' : '' }}">
                        <a href="{{ action('ProductController@index') }}"><i class="fa fa-user"> </i>Products</a>
                      </li>

                      <li class="{{ $current_path == 'reviews' ? 'current-page' : '' }}">
                        <a href="{{ action('ReviewController@index') }}"><i class="fa fa-user"> </i>Review</a>
                      </li>

                      <li class="{{ $current_path == 'forums' ? 'current-page' : '' }}">
                        <a href="{{ action('ForumController@index') }}"><i class="fa fa-user"> </i>Forum</a>
                      </li>
                        <li class="{{ $current_path == 'find_components' ? 'current-page' : '' }}">
                        <a href="{{ action('FilterController@filterShow') }}"><i class="fa fa-user"> </i>Search Components</a>
                      </li>
                  {{--<li class="{{ $current_path == 'examples/charts' ? 'current-page' : '' }}">
                    <a href="{{ url('examples/charts') }}">
                      <i class="fa fa-user"></i> Charts
                    </a>
                  </li>--}}
                  <!-- more links here -->
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    {{ \Auth::user()->name }}
                    <span class="fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                      <a href="{{ action('UserController@showPasswordChangeForm') }}">
                        Change Password
                      </a>
                    </li>
                    <li>
                      <form name="logoutform" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="javascript: logoutSubmit()" id="logoutlink">
                          Log Out &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <i class="fa fa-sign-out"></i>
                        </a>
                      </form>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                @yield('breadcrumbs')
              </ol>
            </nav>
            <!-- /Breadcrumbs -->

            @if(Session::has('error'))
              <div class="alert alert-danger alert-dismissible show" role="alert">
                <strong>Alert!</strong> {{ Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

            @if(Session::has('success'))
              <div class="alert alert-success alert-dismissible show" role="alert">
                <strong>Success!</strong> {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

            @yield('content')

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            {{ config('app.name', 'Laravel') }} - Code Society
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ URL::asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ URL::asset('vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ URL::asset('vendors/nprogress/nprogress.js') }}"></script>
    <!-- Autosize -->
    <script src="{{ URL::asset('vendors/autosize/dist/autosize.min.js') }}"></script>

    <!-- PAGE RELATED PLUGIN(S)-->
    @yield('plugins')

    <!-- PAGE RELATED SCRIPTS -->
    @yield('page_script')

    <!-- Custom Theme Scripts -->
    <script src="{{ URL::asset('build/js/custom.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>

    <script type="text/javascript">
      function logoutSubmit()
      {
        document.logoutform.submit();
      }
    </script>

  </body>
</html>
