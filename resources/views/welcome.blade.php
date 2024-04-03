@extends('layout.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
@endsection

@section('navbar')
    @include('layout.nav.main-nav')
@endsection

@section('content')
    <div id="app">
        <portfolio />
    </div>
@endsection
