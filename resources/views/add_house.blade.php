@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/add_house.css') }}" rel="stylesheet">

@endpush
@section('houses')

<div class="container-fluid">
    <h1 class="text-center">Add House</h1>
    <form method="post"  action="{{url('form')}}" enctype="multipart/form-data" id="image_form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputLocation">House Locaion</label>
            <select class="form-control" name="location"  id="exampleInputLocation">
                <option>Tartous</option>
                <option>Lattakia</option>
                <option>Damascuss</option>
                <option>Aleppo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputLocation">House Status</label>
            <select class="form-control" name="status">
                <option>Rent</option>
                <option>Sale</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputSpace">House Space</label>
            <input type="number" name="space" class="form-control" id="exampleInputSpace"  placeholder="Enter Space for New House">
        </div>
        <div class="form-group">
            <label for="exampleInputSpace">House Floor</label>
            <input type="number" name="floor" class="form-control" id="exampleInputSpace"  placeholder="Enter Floor for New House">
        </div>
        <div class="form-group">
            <label for="exampleInputDetails">House Details</label>
            <textarea  class="form-control" name="details" id="exampleInputDetails"  placeholder="Enter All Details for New House"></textarea>
        </div>
        <div class="progress" id="progress_div">
            <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" id="bar">
                <span id="percent"></span>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPhotos">House Photos</label>
            <input type="file" name="images[]" class="form-control" id="exampleInputPhotos" multiple style="width: 40%">
            <button class="btn btn-success" type="button">Upload</button>
            {{--<input name="images" id="poster" type="file" class="form-control">--}}
        </div>
        {{--<div class="form-group">--}}
            {{--<label for="exampleInputColors">House Colors</label>--}}
            {{--<input type="color"  id="exampleInputColors" >--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<label for="exampleInputDate">House Date</label>--}}
            {{--<input type="date"  class="form-control" id="exampleInputDate" >--}}
        {{--</div>--}}

        <input type="submit" class="btn btn-outline-light" onclick="upload_image()" value="Submit">
        <button class="btn btn-danger cancelBtn cancel" id="cancelBtn" type="button" >Cancel</button>

    </form>

    </div>
    <script type="text/javascript">
        // var ajaxCall =0;
    $('#progress_div').hide();

    function upload_image() {

         $('#image_form').ajaxForm({

            beforeSubmit: function() {
                $('#progress_div').show();
                $('#bar').width('0%');
                $('#percent').html('0%');

            },

            uploadProgress : function (event,position,total,percentComplete) {
                $('#bar').width(percentComplete+'%');
                $('#percent').html(percentComplete+'%');

            },
            success : function () {
                $('#bar').width('100%');
                $('#percent').html('100%');
                {{--window.location="{{URL::to('houses')}}";--}}
            },
            complete : function () {
                $('#progress_div').fadeOut();
                $('#bar').width('0%');
                $('#percent').html('0%');

            },
             beforeSend: function(xhr) {
                 $('.cancelBtn').on('click',function () {
                    xhr.abort();
                     console.log("abotrted");

                 })


             },
            resetForm: false
        });
    }
        // var xhr = ajaxCall.data('jqxhr');
        // function cancel2() {
        //      xhr.abort() ;
        //      console.log("aborted");
        //
        // }


        // $(document).on('submit','form',function(e){
        //     e.preventDefault();
        //     $form = $(this);
        //     uploadImage($form);
        // });
        // function uploadImage($form) {
        //     // $form.find('.progress-bar').removeClass('progress-bar-success')
        //     //     .removeClass('progress-bar-danger');
        //     var formdata = new FormData($form[0]); //formelement
        //     var request = new XMLHttpRequest();
        //     //progress event...
        //     // request.upload.addEventListener('progress', function (e) {
        //     //     var percent = Math.round(e.loaded / e.total * 100);
        //     //     $form.find('.progress-bar').width(percent + '%').html(percent + '%');
        //     // });
        //     // request.addEventListener('load', function (e) {
        //     //     $form.find('.progress-bar').addClass('progress-bar-success').html('upload completed....');
        //     // });
        //     request.open('post','' );
        //     request.send(formdata);
        //     $form.on('click', '.cancel', function () {
        //         console.log('aborted hason');
        //         request.abort();
        //
        //         // $form.find('.progress-bar')
        //         //     .addClass('progress-bar-danger')
        //         //     .removeClass('progress-bar-success')
        //         //     .html('upload aborted...');
        //     });
        // }

    </script>

@endsection