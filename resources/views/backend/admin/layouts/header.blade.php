@section('header')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{url('re_logo.png')}}" type="image/x-icon">
        <title>
            @if(isset($title))
                {!! $title !!}
            @else
                Admin Panel
            @endif
        </title>


    <link rel="stylesheet" href="{{asset('public/backend')}}/assets/js/plugins/datatables/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{asset('public/backend')}}/assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('public/backend')}}/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('public/server')}}/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/server')}}/assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('public/backend')}}/assets/js/plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="{{asset('public/backend')}}/assets/js/plugins/simplemde/simplemde.min.css">

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{asset('public/backend')}}/assets/css/oneui.min.css">
    <link rel="stylesheet" id="css-main" href="{{asset('public/backend')}}/assets/css/view_photo.css">
</head>
<body class="nav-md">
<body>

@stop

