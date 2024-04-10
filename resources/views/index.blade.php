@extends('layouts.main',['title'=>'Home'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Some description" name="description">
@endsection

@section('content')

    @include('components.carousel')

    @include('components.metrics')

    @include('components.about')

    @include('components.service')

    @include('components.feature')

    @include('components.projects')

    @include('components.quotes')

    @include('components.team')

    

@endsection






