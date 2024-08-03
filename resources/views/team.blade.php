@extends('layouts.main', ['title' => 'Team'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Meet our team at Trinity Solar Energy Ltd" name="description">
@endsection

@section('content')

    @include('components.page-header', [
        'page' => 'Our Team',
        'root' => 'Home',
        'child' => 'Team',
        'banner' => 'images/carousel-3.jpg'  // Set the banner path for the Team page
    ])

    @include('components.team')

@endsection
