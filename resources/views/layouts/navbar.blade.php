
<nav class="navbar navbar-expand-lg navbar-dark ">
    <a class="navbar-brand" href="{{url('/')}}"><img src="images/logo1_7JU_icon.ico"></a>
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
                <a class="nav-link scroll11" href="{{ route ('houses') }}">Our Buildings</a>
            </li>
        </ul>
        @if (!Auth::guest())
            {{--<div style="width: 70px;height: 70px;">--}}
        {{--<img src="/storage/upload/{{Auth::user()->user_image}}" class="rounded-circle"  width="70" height="70">--}}
            {{--</div>--}}
        @endif
        <ul class="ml-auto  mt-2">

            @if (Auth::guest())

                <button class="btn btn-outline-light my-2 my-sm-0"
                   data-toggle="modal" data-target="#exampleModal">Login</button>
                <a href="{{ route('register') }}" class="btn btn-outline-light my-2 my-sm-0">Register</a>
            @else

                <li class="dropdown" style="list-style: none">
                    <img src="/storage/upload/{{Auth::user()->user_image}}" class="rounded-circle"  width="70" height="70">
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
                            <a class="dropdown-item" href="{{route('add_house')}}">Add House</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('my_houses')}}">My Houses</a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('login') }}" id="formm">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1">Email address</label>
                        <div  class="input-group">

                            <span class="input-group-addon"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></span> &nbsp;
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"  placeholder="Enter email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="exampleInputPassword1">Password</label>
                        <div  class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key fa-2x" aria-hidden="true"></i></span> &nbsp;
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-dark btn-lg"> <i class="fa fa-arrow-circle-right fa-1x" aria-hidden="true" ></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>