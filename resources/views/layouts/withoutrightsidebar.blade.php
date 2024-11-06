<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SocialV | Responsive Bootstrap 5 Admin Dashboard Template</title>

    @include('partials._head')
</head>
<body class="">
@include('partials._body1')
</body>
</html>
