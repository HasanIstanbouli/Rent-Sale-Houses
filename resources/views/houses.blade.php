@extends('layouts.app')

@section('houses')
<div class="container text-center" style="margin-top:100px; ">
    <h1>Our Houses</h1>
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
        <a href="#" class="btn btn-primary pull-right">More</a>
    </div>
</div>
</div>

    @endforeach
@endforeach
</div>
@endsection
{{--<div class="row container">--}}
    {{--@foreach($houses as $house)--}}
        {{--<div class="col-sm-4">--}}

            {{--<div class="panel panel-primary">--}}
                {{--<div class="panel-heading">--}}
                    {{--<h3 class="panel-title">{{$house->status}}</h3>--}}
                {{--</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<h2> {{$house->location}}</h2>--}}

{{--                      <img src="/storage/post_image/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%,height:50%" >--}}
                    {{--<div>{{$house->house_images()->get()->house_image->first()}}</div>--}}
                    {{--@foreach($house->house_images as $hh)--}}
                    {{--<img src="/public/storage/houses_images/{{$hh->house_image}}"  alt="{{$hh->house_image}}" style="width:50%,height:50%" >--}}
                    {{--@endforeach--}}


                    {{--<span class="label label-danger">created at : {{$house->created_at}}  </span>--}}
                    {{--<span class="label label-info">  by {{$house->users->name}}</span>--}}

                    {{--<a class="pull-right" href="/posts/{{$post->id}}" class="btn btn-warning">More</a>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}

    {{--@endforeach--}}


{{--</div>--}}

    {{--@endsection--}}