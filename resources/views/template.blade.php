<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body>

    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>AdiviaGP Company</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Dashboard</a>
                </li>
                <li>
                    <a href="{{url('department')}}">Department</a>
                </li>
                <li>
                    <a href="{{url('position')}}">Position</a>
                </li>
                <li>
                    <a href="{{url('employee')}}">Employee</a>
                </li>

            </ul>
        </nav>
        <!--  -->

        <div id="content">
            @section('content')
            @show
        </div>

    </div>

  </body>
</html>
