@extends('layouts.app')

@section('houses')
<div class="container text-center">
    <h1>Our Houses</h1>
</div>
<div class="container-fluid row">

@foreach($houses as $house)
{{--@foreach($house->house_images->unique('house_id') as $hh)--}}
{{--<h1>{{$hh->house->image}}</h1>--}}
{{--<img src="{{ URL::to('/') }}/storage/houses_images/{{$hh->house_image}}" style="width:50%,height:50%" >--}}

{{--@endforeach--}}

    @foreach($house->house_images->unique('house_id') as $hh)

            <div class="col-4 col-xs-3">
<div class="card">
    <img class="card-img-top" src="{{ URL::to('/') }}/storage/houses_images/{{$hh->house_image}}" alt="Card image cap" style="height: 300px;width: auto">
    @endforeach
    <div class="card-body">
        <h5 class="card-title">{{$house->location}} <span class="badge badge-pill badge-dark pull-right m0">{{$house->status}}</span><span class="badge badge-pill badge-info text-capitalize pull-right m0">by {{$house->user->name}}</span></h5>
        <p class="card-text" style="text-overflow: ellipsis; width: 300px ; white-space: nowrap; overflow: hidden;">{{$house->about}}</p>
    </div>
    <div class="card-footer text-muted  ">
        <a href="#" class="btn btn-primary pull-right m0 ">More</a>
        @if(!Auth::guest() && Auth::user()->id == $house->user_id)

        <a href="#" class="btn btn-success pull-left m0  ">Edit</a>
                <!-- Button trigger modal -->

                {{--<button type="button" class="pull-left btn btn-danger m0" data-toggle="modal" data-target="#exampleModal2">--}}
                    {{--Delete--}}
                {{--</button>--}}
            {{--@include('layouts.confirm_dialog')--}}
                
                {!! Form::open(['action' => ['HousesController@destroy',$house->id], 'method'=>'POST']) !!}
                {{Form::hidden('_method' ,'DELETE') }}
                {{Form::submit('Delete',['class'=>"pull-left btn btn-danger m0 "]) }}
                {!! Form::close() !!}
                
            @endif
    </div>
</div>
</div>


@endforeach
</div>
@endsection