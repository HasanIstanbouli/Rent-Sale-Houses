@extends('layouts.app')

@section('houses')
<div class="container text-center" style="margin-top:100px; ">
    <h1>Our Houses</h1>
</div>

    <div>
        <?php
        echo $house ;
        ?>
    </div>

    @endsection