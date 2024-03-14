
@extends('layouts.main',['title'=>'Projects'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Trinity Solar Projects" name="Projects">
@endsection

@section('content')

    @include('components.page-header',['page'=>'Projects','root'=>'Home','child'=>'Pages'])

    @include('components.projects')

    @include('components.testimonial')

@endsection


