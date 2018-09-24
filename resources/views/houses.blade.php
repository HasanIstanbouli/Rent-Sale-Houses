@extends('layouts.app')

@section('houses')
<div class="container text-center">
    <h1 style="font-family: 'Century Schoolbook'; color: firebrick;">Our Houses</h1>
</div>
<div class="container-fluid row">
@include('layouts.filter')
<div class="container-fluid row col-10 " id="housescontainer"  >

@foreach($houses as $house)
{{--@foreach($house->house_images->unique('house_id') as $hh)--}}
{{--<h1>{{$hh->house->image}}</h1>--}}
{{--<img src="{{ URL::to('/') }}/storage/houses_images/{{$hh->house_image}}" style="width:50%,height:50%" >--}}

{{--@endforeach--}}

    @foreach($house->house_images->unique('house_id') as $hh)
<div class="card col-4 col-xs-3"  id="thiscard" style="min-width: 300px">
    <img class="card-img-top" src="{{ URL::to('/') }}/storage/houses_images/{{$hh->house_image}}" alt="Card image cap" style="height: 300px;width: auto">
    @endforeach
    <div class="card-body">
        <h5 class="card-title">{{$house->location}} <span class="badge badge-pill badge-dark pull-right m0">{{$house->status}}</span><span class="badge badge-pill badge-info text-capitalize pull-right m0">by {{$house->user->name}}</span></h5>
        <p class="card-text" style="text-overflow: ellipsis; width: 300px ; white-space: nowrap; overflow: hidden;">{{$house->about}}</p>
    </div>
    <div class="card-footer text-muted  ">
        <a href="/houses/{{$house->id}}" class="btn btn-primary pull-right m0 ">More</a>
        @if(!Auth::guest() && Auth::user()->id == $house->user_id)

        <a href="#" class="btn btn-success pull-left m0  ">Edit</a>
                <!-- Button trigger modal -->

                {{--<button type="button" class="pull-left btn btn-danger m0" data-toggle="modal" data-target="#exampleModal2">--}}
                    {{--Delete--}}
                {{--</button>--}}
            {{--@include('layouts.confirm_dialog')--}}

            {!! Form::open(['action' => ['HousesController@destroy',$house->id], 'method'=>'POST'] ) !!}
                {{Form::hidden('_method' ,'DELETE') }}
                {{--{{Form::submit('Delete',['class'=>"pull-left btn btn-danger m0 delete"]) }}--}}
   <button type="submit" class="pull-left btn btn-danger m0 delete" value="{{$house->id}}" id="delete">Delete</button>
                {!! Form::close() !!}

                {{--<input type="submit" class="pull-left btn btn-danger m0 delete" value="{{$house->id}}" id="delete">--}}


            @endif
    </div>
</div>
{{--</div>--}}


@endforeach
        {{--{{$houses->links()}}--}}

</div>
</div>
<div style="margin:2% 45% 0 45%" >{{ $houses->links('vendor.pagination.bootstrap-4') }}</div>
    {{--we use php artisan vendor:publish --tag=laravel-pagination
command to make pagination works with Bootstrap 4--}}
    <script type="text/javascript">
        // function upload_image() {
        //
        //     $('form').ajaxForm({
        //
        //         success : function () {
        //             // $('#housescontainer').ajax().reload();
        //             $('#housescontainer').load(document.URL + " #housescontainer");
        //             alert("hiii");
        //
        //         },
        //         complete : function () {
        //             $("#delete").closest('.card').fadeOut();
        //             console.log("abotrted");
        //
        //         }
        //         // resetForm:true
        //     });
        // }

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            // console.log("aborted ");
            var id2 = $(this).val();
            // console.log("aborted ");
            var dataObject = {id:id2};


                $.ajax({
                    type: 'GET',
                    {{--url:'{{route('delete.house')}}',--}}
                    mehtod:"get",
                    data:dataObject,
                    success:function()
                    {
                        // alert("success");
                        // $('#housescontainer').reload(document.URL + "#housescontainer");

                        // console.log("aborted ");
                    },
                    error:function (ts) {
                        // console.log("aborted ");
                        alert("error");
                        console.log(ts.responseText);
                    },
                    complete:function () {

                      // alert("complete");
                      //   $("#delete").fadeOut();
                        $("#delete").closest('.card').fadeOut();
                        // document.getElementById("id").parent().reset() ;
                        $('#housescontainer').load(document.URL + " #housescontainer");
                        // document.getElementById(id2).style.display = "none";

                    }
                })


        });

    </script>
@endsection