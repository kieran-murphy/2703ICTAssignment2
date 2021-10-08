<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <title>@yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url("product")}}">Products</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{url("product")}}">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{url("ask_recommendation")}}">Recommendation</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url("documentation")}}">Documentation</a>
        </li>
        
        @auth
        
        <li class="nav-item">
          <a class="nav-link" href="{{url("user")}}">Users</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url("product/create")}}">Create</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="">{{Auth::user()->name}} ({{Auth::user()->type}})</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url("logoutcheck")}}">Logout</a>
        </li>

        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>


<br>
<div class="content">
@yield('content')
</div>
</body>
</html>


