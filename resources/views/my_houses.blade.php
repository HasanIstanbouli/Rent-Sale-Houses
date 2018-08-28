@extends('layouts.app')

@section('houses')
    <div class="container text-center" style="margin-top:100px; ">
        <h1>My Houses</h1>
    </div>
    <div class="container-fluid row">
        <div class="c"></div>
        @foreach($houses as $house)
            {{--@foreach($house->house_images->unique('house_id') as $hh)--}}
            {{--<h1>{{$hh->house->image}}</h1>--}}
            {{--<img src="{{ URL::to('/') }}/storage/houses_images/{{$hh->house_image}}" style="width:50%,height:50%" >--}}

            {{--@endforeach--}}

            @foreach($house->house_images->unique('house_id') as $hh)

                <div class="col-4 col-xs-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ URL::to('/') }}/storage/houses_images/{{$hh->house_image}}" alt="Card image cap" style="height: 300px;width: auto">
                        <div class="card-body">
                            <h5 class="card-title">{{$house->location}} <span class="badge badge-pill badge-dark pull-right">{{$house->status}}</span></h5>
                            <p class="card-text" style="text-overflow: ellipsis; width: 300px ; white-space: nowrap; overflow: hidden;">{{$house->about}}</p>
                        </div>
                        <div class="card-footer text-muted ">
                            <a href="#" class="btn btn-primary pull-right m0">More</a>
                            <a href="#" class="btn btn-success pull-left m0">Edit</a>
                            <button type="button" class="pull-left btn btn-danger m0" data-toggle="modal" data-target="#exampleModal2">
                                Delete
                            </button>
                            @include('layouts.confirm_dialog')
                        </div>
                    </div>
                </div>

            @endforeach
        @endforeach
    </div>
@endsection