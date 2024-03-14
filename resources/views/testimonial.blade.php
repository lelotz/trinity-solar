
@extends('layouts.main',['title'=>'Testimonial'])

@section('meta')
    <meta content="Trinity Solar Energy Ltd" name="keywords">
    <meta content="Some description" name="description">
@endsection

@section('content')

    @include('components.page-header',['page'=>'Testimonial','child'=>'Testimonial','root'=>'Home'])

    @include('components.testimonial')

@endsection


