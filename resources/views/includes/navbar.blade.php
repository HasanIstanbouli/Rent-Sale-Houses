<nav class="navbar navbar-expand-lg  navbar-dark fixed-top">
    <a class="navbar-brand" href="#"><img src="images/logo1_7JU_icon.ico"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link scroll11" href="#OurTeam">Our Team</a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a  class="nav-link dropdown-toggle " data-toggle="dropdown" href="#">
                        Our Services
                    </a>
                    <div class="dropdown-menu dropdown-menu1">
                        <a class="dropdown-item scroll11" href="#OurServices">Sale</a>
                        <a class="dropdown-item scroll11" href="#OurServices">Rent</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link scroll11" href="#BuyOrRent">Confused ?!</a>
            </li>
            <li class="nav-item">
                <a class="nav-link scroll11" href="#footer">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link scroll11" href="index2.html">Our Buildings</a>
            </li>
        </ul>
        <ul class="ml-auto  mt-2">

            @if (Auth::guest())
                <button class="btn btn-outline-light my-2 my-sm-0"
                   data-toggle="modal" data-target="#exampleModal">Login</button>
                <a href="{{ route('register') }}" class="btn btn-outline-light my-2 my-sm-0">Register</a>
            @else
                <li class="dropdown" style="list-style: none">
                    <a href="#" class="dropdown-toggle btn btn-outline-light" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}" class="dropdown-item"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <li>
                            <a class="dropdown-item">Add House</a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</nav>