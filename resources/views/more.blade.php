@extends('layouts.app')
@push('styles')
    {{--LightBox Library --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map"></script>
@endpush
@section('houses')

<div class="container">
    <br>
<div class="table-responsive">
    <table class="table table-hover table-bordered">
        <tbody>
        <tr>
            <td>Owner</td>
            <td>{{\App\User::find($house->user_id)->name}}</td>
        </tr>
        <tr>
            <td>Location</td>
             <td>{{$house->location}}</td>
        </tr>
        <tr>
            <td>Status</td>
             <td>{{$house->status}}</td>
        </tr>
        <tr>
            <td>Area</td>
             <td>{{$house->area}}</td>
        </tr>
        <tr>
            <td>Floor</td>
             <td>{{$house->floor}}</td>
        </tr>
        <tr>
            <td>Details</td>
            <td>{{$house->about}}</td>
        </tr>
        <tr>
            <td>Added in</td>
            <td>{{$house->created_at}}</td>
        </tr>
        <tr>
            <td>Last Update</td>
             <td>{{$house->updated_at}}</td>
        </tr>
        <tr>
            <td>Owner Email</td>
            <td>{{\App\User::find($house->user_id)->email}}</td>
        </tr>
        <tr>
            <td>
                <span class="input-group-btn">
        <button type="submit" class="btn btn-success" value="Submit Your Offer">
               Submit Your Offer <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
        </button>
            </span>
            </td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" class="form-control">

                </div>
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-warning ">Watch Later <i class="fa fa-clock-o" aria-hidden="true"></i>
                </button></td>
            <td><i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                </td>
        </tr>

        </tbody>
    </table>
</div>

</div>
<br>
<br>
{{----------------}}
<div class="row justify-content-center container-fluid">
    <div class="col-md-8">
        <div class="row">
            @foreach($house->house_images as $hhh)

            <a href="{{ URL::to('/') }}/storage/houses_images/{{$hhh->house_image}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{ URL::to('/') }}/storage/houses_images/{{$hhh->house_image}}" class="img-fluid" style="height: 200px;width: 300px">
            </a>
            @endforeach
        </div>
    </div>
</div>
    <script type="text/javascript">
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
@endsection