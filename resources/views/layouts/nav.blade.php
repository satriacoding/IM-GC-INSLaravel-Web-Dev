<div class="header">
  <nav class="navbar navbar-dark navbar-expand-lg ">
    <div class="container">
      <a class="navbar-brand" href="">GCI NEMA</a> 
      <div class="nav justify-content-center">
          <ul class=" navbar-nav ">
            <li class="nav-item" role="presentation">
              <a class="nav-link @yield('navHome')" href="{{url('home')}}">HOME</a>
            </li>
          
            <li class="nav-item" role="presentation">
              <a class="nav-link @yield('navFilm')" href="#">FILM</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link @yield('navCast')" href="{{url('casts')}}">CAST</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">GENRE </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" role="presentation" href="#">Romantis</a>
                <a class="dropdown-item" role="presentation" href="#">Comedy</a>
                <a class="dropdown-item" role="presentation" href="#">Action</a>
              </div>
          </li>
          </ul>
        </div> 
          <span class="navbar-text "> 
            <a href="#" class="login ">Log In</a>
            <a class="btn btn-light action-button" role="button" href="#">Sign Up</a>
          </span>
         
       
      </div>
  </nav>
</div>
<script>
  // JavaScript for hiding dropdown on mouseleave
  $('.dropdown').mouseleave(function () {
      $(this).find('.dropdown-menu').removeClass('show');
  });
</script>
</body>
