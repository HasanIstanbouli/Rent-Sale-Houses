@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/add_house.css') }}" rel="stylesheet">
@endpush
@section('houses')
<h1 class="text-center ">Admin Site</h1>

<div class="container-fluid">
    <h3>Add House</h3>
    <form>
        <div class="form-group">
            <label for="exampleInputLocation">House Locaion</label>
            <input type="text" class="form-control" id="exampleInputLocation"  placeholder="Enter Location for New House">
        </div>
        <div class="form-group">
            <label for="exampleInputSpace">House Space</label>
            <input type="number" class="form-control" id="exampleInputSpace"  placeholder="Enter Space for New House">
        </div>
        <div class="form-group">
            <label for="exampleInputSpace">House Floor</label>
            <input type="number" class="form-control" id="exampleInputSpace"  placeholder="Enter Space for New House">
        </div>
        <div class="form-group">
            <label for="exampleInputDetails">House Details</label>
            <textarea  class="form-control" id="exampleInputDetails"  placeholder="Enter All Details for New House"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPhotos">House Photos</label>
            <input type="file" class="form-control" id="exampleInputPhotos" >
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