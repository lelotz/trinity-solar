@extends('layouts.main', ['title' => 'Contact Us'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Contact information and details for Trinity Solar Energy Ltd" name="description">
@endsection

@section('content')

    @include('components.page-header', [
        'page' => 'Contact Us',
        'root' => 'Home',
        'child' => 'Contact',
        'banner' => 'images/about.jpg'  // Set the banner path for the Contact Us page
    ])

    @include('components.contact')

@endsection
