<nav class="d-flex align-items-center">
  <ul class="">
    <li><a href="{{route("home")}}"><img src="img/logo.png" alt="logo"></a></li>
  </ul>
  <ul class="d-flex justify-content-end">
    <li><a href="{{route("home")}}" class="{{Route::currentRouteName()=== "home" ? "active" : ""}}">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Portfolio</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>
