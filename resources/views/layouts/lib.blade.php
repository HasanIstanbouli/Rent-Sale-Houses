<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/11d1edc33a.js"></script> <!--Font Awesome CDN embed code -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet"> <!--Animation On Scroll CSS -->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> <!--Animation On Scroll JS -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    {{--for blueimp librar--}}
    {{--<script src="js/vendor/jquery.ui.widget.js"></script>--}}
    {{--<script src="js/jquery.iframe-transport.js"></script>--}}
    {{--<script src="js/jquery.fileupload.js"></script>--}}
    {{--<script>--}}
        {{--$(function () {--}}
            {{--$('#exampleInputPhotos').fileupload({--}}
                {{--dataType: 'json',--}}
                {{--done: function (e, data) {--}}
                    {{--$.each(data.result.files, function (index, file) {--}}
                        {{--$('<p/>').text(file.name).appendTo(document.body);--}}
                    {{--});--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
        {{--$('#exampleInputPhotos').fileupload({--}}
            {{--/* ... */--}}
            {{--progressall: function (e, data) {--}}
                {{--var progress = parseInt(data.loaded / data.total * 100, 10);--}}
                {{--$('#progress .bar').css(--}}
                    {{--'width',--}}
                    {{--progress + '%'--}}
                {{--);--}}
            {{--}--}}
        {{--});--}}
        {{--$(function () {--}}
            {{--$('#exampleInputPhotos').fileupload({--}}
                {{--dataType: 'json',--}}
                {{--add: function (e, data) {--}}
                    {{--data.context = $('<button/>').text('Upload')--}}
                        {{--.appendTo(document.body)--}}
                        {{--.click(function () {--}}
                            {{--data.context = $('<p/>').text('Uploading...').replaceAll($(this));--}}
                            {{--data.submit();--}}
                        {{--});--}}
                {{--},--}}
                {{--done: function (e, data) {--}}
                    {{--data.context.text('Upload finished.');--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
    {{--end blueimp library--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>