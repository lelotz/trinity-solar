@extends('layouts.main', ['title' => 'About'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Some description" name="description">
@endsection

@section('content')

    @include('components.page-header', [
        'page' => 'About Us',
        'root' => 'Home',
        'child' => 'About Us',
        'banner' => 'images/about.jpg'  // Path to your banner image
    ])

    @include('components.metrics')

    @include('components.feature')

    @include('components.team')

@endsection
