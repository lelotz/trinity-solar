
@extends('layouts.main',['title'=>'Contacts'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Some description" name="description">
@endsection

@section('content')

    @include('components.page-header',['page'=>'Contact Us','child'=>'Pages','root'=>'Home'])

    @include('components.contact')

@endsection


