<!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard  (Saudi Arabia )</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form action="{{ route('Home.search') }}" method="post" class="navbar-form">
              {{csrf_field()}}
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search By User Id">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>

              <li class="dropdown language-switch">
                <a class="" data-toggle="dropdown">
                  @if(\Session::get('locale')=='en')
                    <img src="{{ url('public/assets/images/flags/gb.png') }}" class="position-left" alt="">
                    English
                  @elseif(\Session::get('locale')=='ar')
                    <img src="{{ url('public/assets/images/flags/de.png') }}" class="position-left" alt="">
                    Arabic
                  @endif
                  <span class="caret"></span>
                </a>


              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">language</i>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                   <a class="english" href="{{ url('locale/en') }}"><img src="{{ url('public/assets/images/flags/gb.png') }}" alt=""> English</a>
                   <a class="deutsch" href="{{ url('locale/ar') }}"><img src="{{ url('public/assets/images/flags/de.png') }}" alt=""> arabic</a>

                </div>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="{{route('Admin.logout')}}">
                  <i class="material-icons">arrow_back</i>
                  <p class="d-lg-none d-md-block">
                    logout
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->