
@extends('layouts.main', ['title' => 'Quotes'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Request a quote from Trinity Solar Energy Ltd" name="description">
@endsection

@section('content')

    @include('components.page-header', [
        'page' => 'Quotes',
        'root' => 'Home',
        'child' => 'Quotes',
        'banner' => 'images/work-5.jpg'  // Set the banner path for the Quotes page
    ])

    @include('components.quotes')

@endsection



