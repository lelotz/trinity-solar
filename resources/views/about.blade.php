
@extends('layouts.main',['title'=>'About'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Some description" name="description">
@endsection

@section('content')

    @include('components.page-header',['page'=>'','child'=>'About','root'=>'Home'])

    @include('components.metrics')

    @include('components.feature')

    @include('components.team')

@endsection


