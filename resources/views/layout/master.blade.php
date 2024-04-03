<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crusader</title>
  <link rel="icon" type="image/x-icon" href="{{asset('images/crusader.svg')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

@if (Auth::check())
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <span class="rounded-pill" style="width:40px">
      <img src="{{asset('images/crusader.svg')}}" alt="Logo" style="width:30px;" class="rounded-pill">
    </span>
    
    <a class="navbar-brand" href="{{url('/home')}}">Crusader</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{url('profile/daniel')}}">Daniel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('profile/nathan')}}">Nathan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('profile/naufal')}}">Naufal</a>
        </li>  
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('profile/odit')}}">Odit</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('profile/ricky')}}">Ricky</a>
        </li>
        <div class="position-absolute top-50 end-0 translate-middle">
          <li class="text-light bg-dark">
            <a>{{Auth::user()->email}}</a>
            <a href="{{url('logout')}}" type="submit">Logout</a>
          </div>  
        </li> 
      </ul>
        
        
    </div>
  </div>
</nav>
@endif

@yield('container')


</body>
</html>