
@extends('layouts.main',['title'=>'Features'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Some description" name="description">
@endsection

@section('content')

    @include('components.page-header',['page'=>'','child'=>'Features','root'=>'Home'])

    @include('components.metrics')

    @include('components.feature')


@endsection


