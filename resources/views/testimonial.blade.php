@extends('layouts.main', ['title' => 'Testimonial'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Read testimonials from our satisfied clients at Trinity Solar Energy Ltd" name="description">
@endsection

@section('content')

    @include('components.page-header', [
        'page' => 'Testimonial',
        'root' => 'Home',
        'child' => 'Testimonial',
        'banner' => 'images/project-2.jpg'  // Set the banner path for the Testimonial page
    ])

    @include('components.testimonial')

@endsection
