<!--BACKEND-->

<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Meerservice - User Dashboard</title>
    <meta name="description" content="Meerservice - Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{URL::asset('apple-icon.png')}}">
    <link rel="shortcut icon" href="{{URL::asset('favicon.ico')}}">

    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/meerservice.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/scss/style.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">


    <link href="{{URL::asset('assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('welcome') }}"><img src="{{URL::asset('images/logo.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="{{ url('welcome') }}"><img src="{{URL::asset('images/logo.png')}}"
                                                                            alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>


                @if(session('Admin')>0)
                    @include('admin.navigation.nav_admin')
                @endif

                @if(session('Admin')>0||session('Reinigung')>0)
                    @include('admin.navigation.nav_reinigung')
                @endif

                @if(session('Admin')>0||session('Eigentümer')>0)
                    @include('admin.navigation.nav_eigentuemer')
                @endif

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <h1>Dashboard</h1>
            </div>
            <div class="float-right pull-right">
                <a class="dropdown-item btn" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <main class="py-4">
        @yield('content')
    </main>
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="{{URL::asset('assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
<script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js')}}"></script>
<script src="{{URL::asset('assets/js/plugins.js')}}"></script>
<script src="{{URL::asset('assets/js/main.js')}}"></script>


<script src="{{URL::asset('assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.js')}}"></script>
<script src="{{URL::asset('assets/js/widgets.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>

</body>
</html>
