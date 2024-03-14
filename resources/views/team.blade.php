
@extends('layouts.main',['title'=>'Team'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Some description" name="description">
@endsection

@section('content')

    @include('components.page-header',['page'=>'Our Team','child'=>'Team','root'=>'Home'])

    @include('components.team')


@endsection


