
@extends('layouts.main',['title'=>'Error'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Some description" name="description">
@endsection

@section('content')

    @include('components.page-header',['page'=>'404','child'=>'Errors','root'=>'Home'])

    @include('components.error')


@endsection


