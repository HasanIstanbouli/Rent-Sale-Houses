@extends('layouts.app')
@section('welcome')
    <!--Begin Of Modal-->
    <!--End Of Modal-->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators marginbottom ">
            <li data-target="#demo" data-slide-to="0" class="active "></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="  carousel-inner">
            <div class="carousel-item active">
                <img src="images/building2.jpg" alt="Los Angeles" >
                <div class="carousel-caption mb-5 textcolor1">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/building3.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption mb-5 textcolor1">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/building4.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption mb-5  textcolor1">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="container-fluid" id="OurTeam">
        <br>
        <br>
        <h1 class="text-center " id="h1Team"> Our Team </h1>

        <!-- Begin First Row -->
        <div class=" row" id="firstrow">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 " data-aos="fade-zoom-in" data-aos-delay="200">
                <img src="images/bill.jpg" class="rounded-circle offset-sm-3 offset-2 offset-xl-0 offset-lg-0 offset-md-0">
                <p class="offset-xl-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                </p>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-down" data-aos-delay="300">
                <img src="images/denesh.jpg" class="rounded-circle  offset-sm-3 offset-2 offset-xl-0 offset-lg-0 offset-md-0">
                <p class="offset-xl-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                </p>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="400">
                <img src="images/ggg.jpg" class="rounded-circle  offset-sm-3 offset-2 offset-xl-0 offset-lg-0 offset-md-0">
                <p class="offset-xl-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                </p>
            </div>
            <div class="col-xl-3 col-lg-5 offset-lg-4 offset-xl-0 col-md-6 col-sm-12"data-aos="fade-right" data-aos-delay="500">
                <img src="images/oo.jpg" class="rounded-circle  offset-sm-3 offset-2 offset-xl-0 offset-lg-0 offset-md-0">
                <p class="offset-xl-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                </p>
            </div>
            <br>
            <br>
        </div> <!-- End First Row -->

        <br><br><hr><br>
        <div class="row"> <!-- Begin Second Row -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200">
                <img src="images/rr.jpg" class="rounded-circle offset-sm-3 offset-2 offset-xl-0 offset-lg-0 offset-md-0">
                <p class="offset-xl-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                </p>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-left" data-aos-delay="500">
                <img src="images/jared.jpg" class="rounded-circle offset-sm-3 offset-2 offset-xl-0 offset-lg-0 offset-md-0">
                <p class="offset-xl-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                </p>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-right" data-aos-delay="400">
                <img src="images/barney.jpg" class="rounded-circle offset-sm-3 offset-2 offset-xl-0 offset-md-0 offset-lg-0">
                <p class="offset-xl-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                </p>
            </div>
            <div class="col-xl-3 col-lg-5 offset-lg-4 offset-xl-0 col-md-6 col-sm-12" data-aos="fade-down" data-aos-delay="300">
                <img src="images/joey1.png" class="rounded-circle offset-sm-3 offset-2 offset-xl-0 offset-lg-0 offset-md-0">
                <p class="offset-xl-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                </p>
            </div>
        </div> <!-- End Second Row -->
        <br>
        <br>
    </div>

    <div class="container-fluid" id="BuyOrRent">
        <br>
        <h2 class="text-center ">If You Don't Know What To Do Send Us Your Problem </h2>
        <form action="#">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="tele">Your Telephone Number</label>
                <input type="text" class="form-control" id="tele" placeholder="Enter Your Number" name="tele">
            </div>
            <div class="form-group">
                <label for="city">Your City</label>
                <input type="text" class="form-control" id="city" placeholder="Enter Your Location" name="location">
            </div>
            <div class="form-group">
                <label for="Problem">Describe Your Problem</label><br>
                <textarea id="Problem" style="width: 80%" placeholder="Talk To Us"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-light">Send</button>
        </form>

    </div>

    <div class="container-fluid row" id="OurServices">
        <h1 class="text-center col-12" > Our Services </h1>

        <div class="card col-xl-4 col-lg-3 offset-lg-0 offset-md-6 offset-sm-2 offset-1"style="width:400px"
             data-aos="fade-up-right" data-aos-delay="300">
            <img class="card-img-top" src="images/sale.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Sale With Us</h4>
                <p class="card-text">Some example text some example text.
                    Some example text some example text. </p>
                <a href="#" class="btn btn-outline-light">Sale</a>
            </div>
        </div>

        <div class="card col-xl-4 col-lg-3 offset-lg-0 offset-md-0 offset-sm-2  offset-1 " style="width:400px"
             data-aos="fade-up" data-aos-delay="900">
            <img class="card-img-top " src="images/rent.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
                <h4 class="card-title">Sale With Us</h4>
                <p class="card-text">Some example text some example text.
                    Some example text some example text. </p>
                <a href="#" class="btn btn-outline-light">Rent</a>
            </div>
        </div>

        <div class="card col-xl-4 col-lg-6 offset-lg-0 offset-md-6 offset-sm-2 offset-1" style="width:400px"
             data-aos="fade-up-left" data-aos-delay="600">
            <img class="card-img-top " src="images/lucky.png" alt="Card image" style="width:100%;">
            <div class="card-body">
                <h4 class="card-title">Sale With Us</h4>
                <p class="card-text">Some example text some example text.
                    Some example text some example text. </p>
                <a href="#" class="btn btn-outline-light">See Your Luck</a>
            </div>
        </div>
    </div>

    <footer id="footer">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 ">
                    <div>
                        <h5>Lorem Ipsum</h5>
                    </div>
                    <ul class="mylist fixUl">

                        <li>
                            <p>Lorem</p>
                        </li>
                        <li>
                            <p>Lorem</p>
                        </li>
                        <li>
                            <p>Lorem</p>
                        </li>
                        <li>
                            <p>Lorem</p>
                        </li>
                        <li>
                            <p>Lorem</p>
                        </li>

                    </ul>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <h5>Lorem Ipsum</h5>
                    <ul class="mylist fixUl">

                        <li>
                            <p>Lorem</p>
                        </li>
                        <li>
                            <p>Lorem</p>
                        </li>
                        <li>
                            <p>Lorem</p>
                        </li>

                    </ul>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <h5>Lorem Ipsum</h5>
                    <ul class="mylist fixUl">

                        <li>
                            <p>Lorem</p>
                        </li>
                        <li>
                            <p>Lorem</p>
                        </li>
                        <li>
                            <p>Lorem</p>
                        </li>


                    </ul>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <h5>Lorem Ipsum</h5>
                    <ul class="mylist fixUl">

                        <li>
                            <p>Lorem</p>
                        </li>
                        <li>
                            <p>Lorem</p>
                        </li>

                        <li>
                            <form>

                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                                    <span class="input-group-btn">
              <button class="btn btn-outline-warning" type="button">Go!</button>
            </span>
                                </div>


                            </form>
                        </li>


                    </ul>
                </div>
            </div>

        </div>



    </footer>

    <script>
        AOS.init({
            duration: 1000,
        });

        $(document).ready(function(){
            $(".scroll11").on('click', function(event) {
                if (this.hash !== "") {

                    event.preventDefault();

                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){

                        window.location.hash = hash;
                    });
                }
            });
        });
        // function submit() {
        //     if (document.getElementById("firstname").innerText == "admin"   )
        //     {
        //         window.open("https://www.w3schools.com/js/js_operators.asp","_self");
        //     }
        //     else {
        //          // $("#firstname").modal();
        //         // alert("Errore in UserName Or PassWord");
        //         window.open("https://www.w3schools.com/js/js_operators.asp","_self");
        //     }
        // }
        // document.getElementById("submitbutton").onclick = function(){
        //     window.open("")
        // }
        {{--$("#formm").submit(function(e) {--}}


            {{--var form = $(this);--}}
            {{--var url = form.attr('action');--}}

            {{--$.ajax({--}}
                {{--type: "POST",--}}
                {{--url: {{ route('login') }},--}}
                {{--data: form.serialize(), // serializes the form's elements.--}}
                {{--success: function(data)--}}
                {{--{--}}
                    {{--{{ route('login') }} // show response from the php script.--}}
                {{--}--}}
            {{--});--}}
            {{--alert({{$errors}}) ;--}}

            {{--e.preventDefault();// avoid to execute the actual submit of the form.--}}

        {{--});--}}

    </script>

@endsection