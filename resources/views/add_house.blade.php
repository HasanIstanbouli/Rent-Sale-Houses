@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/add_house.css') }}" rel="stylesheet">
@endpush
@section('houses')
<h1 class="text-center " style="margin-top: 100px">Admin Site</h1>

<div class="container-fluid">
    <h3>Add House</h3>
    <form method="post" action="{{url('form')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputLocation">House Locaion</label>
            <input type="text" name="location" class="form-control" id="exampleInputLocation"  placeholder="Enter Location for New House">
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
        <div class="form-group">
            <label for="exampleInputPhotos">House Photos</label>
            <input type="file" name="images[]" class="form-control" id="exampleInputPhotos" multiple>
        </div>
        {{--<div class="form-group">--}}
            {{--<label for="exampleInputColors">House Colors</label>--}}
            {{--<input type="color"  id="exampleInputColors" >--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<label for="exampleInputDate">House Date</label>--}}
            {{--<input type="date"  class="form-control" id="exampleInputDate" >--}}
        {{--</div>--}}
        <button type="submit" class="btn btn-outline-light">Submit</button>
    </form>
    </div>
@endsection