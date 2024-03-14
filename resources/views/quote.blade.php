
@extends('layouts.main',['title'=>'Quotes'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Some description" name="description">
@endsection

@section('content')

    @include('components.page-header',['page'=>'','child'=>'Quotes','root'=>'Home'])

    @include('components.quotes')

@endsection


