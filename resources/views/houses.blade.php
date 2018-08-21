@extends('layouts.app')

@section('houses')
<div class="container text-center" style="margin-top:100px; ">
    <h1>Our Houses</h1>
</div>

<div class="row container">
    @foreach($posts as $post)
        <div class="col-sm-4">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$post->firstname}} - {{$post->lastname}}</h3>
                </div>
                <div class="panel-body">
                    <h2> {{$post->subject}}</h2>

                    {{--  <img src="/storage/post_image/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%,height:50%" >   --}}

                    <img src="{{ URL::to('/') }}/images/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%,height:50%" >


                    <span class="label label-danger">created at : {{$post->created_at}}  </span>
                    <span class="label label-info">  by {{$post->user->name}}</span>

                    <a class="pull-right" href="/posts/{{$post->id}}" class="btn btn-warning">More</a>
                </div>
            </div>

        </div>

    @endforeach

    {{$posts->links()}}
</div>

    @endsection