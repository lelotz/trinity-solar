
@extends('layouts.main',['title'=>'Services'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Some description" name="description">
@endsection

@section('content')

    @include('components.page-header',['page'=>'Services','child'=>'Pags','root'=>'Home'])

    @include('components.service')

    @include('components.feature')

    @include('components.projects')

    @include('components.quotes')

    @include('components.team')

    @include('components.testimonial')

@endsection

