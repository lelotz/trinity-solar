@extends('layouts.main', ['title' => 'Projects'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Trinity Solar Projects" name="description">
@endsection

@section('content')

    @include('components.page-header', [
        'page' => 'Projects',
        'root' => 'Home',
        'child' => 'Pages',
        'banner' => 'images/project-2.jpg'  // Set the banner image for the Projects page
    ])

    @include('components.projects')

    @include('components.testimonial')

@endsection


