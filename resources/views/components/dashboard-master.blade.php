<!DOCTYPE html>
<html lang="US_en" dir="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template" />
    <meta name="author" content="Lukasz Holeczek" />
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template" />
    <title>Dashboard | Lahcen Oubbaih</title>
    <!-- Icons -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/simple-line-icons.css')}}" rel="stylesheet" />
    <!-- Main styles for this application -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    @yield('styles')
</head>

<body class="navbar-fixed sidebar-nav fixed-nav">
    <header class="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">
                &#9776;
            </button>
            <a class="navbar-brand" href="#"></a>
            <ul class="nav navbar-nav hidden-md-down">
                <li class="nav-item">
                    <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
                </li>
                <li class="nav-item p-x-1">
                    <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-left hidden-md-down" style="margin-left: 2rem;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset($setting->avatar)}}" class="img-avatar" alt="{{$setting->fullname}}" />
                        <span class="hidden-md-down">admin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                       
                        <a class="dropdown-item" href="{{route('setting.index')}}"><i class="fa fa-wrench"></i> Settings</a>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-lock"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>



                    </div>
                </li>
            </ul>
        </div>
    </header>
    @include('layouts.dashboard.sidebar')
    <!-- Main content -->
    <main class="main">
        @yield('main')
    </main>

    <footer class="footer" style="text-align: center">
        <span >
                &copy;
                <script>
                    document.write(new Date().getFullYear());

                </script>
                {!! $setting->copyright !!}
        </span>
    </footer>
    <!-- Bootstrap and necessary plugins -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/tether.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>

    <!-- Plugins and scripts required by all views -->
    <script src="{{asset('js/Chart.min.js')}}"></script>

    <!-- CoreUI main scripts -->

    <script src="{{asset('js/app.js')}}"></script>

    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    <script src="{{asset('js/views/main.js')}}"></script>

    @yield('scripts')

    <!-- Grunt watch plugin -->
</body>

</html>
