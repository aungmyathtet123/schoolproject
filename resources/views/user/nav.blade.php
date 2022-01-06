<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar_top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/school_logo.png') }}" alt="" class="img-fluid">
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarCenteredExample"
        aria-controls="navbarCenteredExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
        <div
        class="collapse navbar-collapse justify-content-center"
        id="navbarCenteredExample"
      >
        <!-- Left links -->
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if(request()->is('home'))
                active bg-primary

            @endif" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li> --}}
          <!-- Navbar dropdown -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle  @if(request()->is('course*'))
              active bg-primary

          @endif"
              href="#"
              id="navbarDropdown"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              Course
            </a>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach (App\Course::all() as $course )
                <li>
                    <a class="dropdown-item text-center" href="{{ route('course',$course->id) }}">{{ $course->name }}</a>
                  </li>
                @endforeach


            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link @if(request()->is('department*'))
                active bg-primary

            @endif" href="{{ route('department') }}">Department</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->is('facility*'))
                active bg-primary

            @endif" href="{{ route('facility') }}">Facility</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->is('aboutus*'))
                active bg-primary

            @endif" href="{{ route('aboutus') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->is('contact*'))
                active bg-primary

            @endif" href="{{ route('contact') }}">Contact</a>
          </li>
            {{-- <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              Language
            </a>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#">Action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another action</a>
              </li>

              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li> --}}

        </ul>

        <!-- Left links -->
      </div>
    </div>
  </nav>
