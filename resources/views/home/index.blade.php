@extends('master')
@section('title', 'Home')
@section('content')
    <x-navbar></x-navbar>

    <main >
        <x-sidebar></x-sidebar>
        @include('home/hero')
        @include('home/about')
        @include('home/tools&skill')
        @include('home/project')
        @include('home/contact')
        @include('home/footer')
    </main>
@endsection
