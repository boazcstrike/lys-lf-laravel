@extends('layouts.app')

@section('content')

<div id="app">
    <nav class="navbar navbar-top">
        <router-link to="/" class="navbar-brand" href="#">
            <img class="logo" src="{{ asset('images/lys-logo.png') }}">
        </a>
        <router-link to="/contact">Contact</router-link>
        <router-link to="/profile">Profile</router-link>
        <router-link to="/articles">Articles</router-link>
    </nav>
    <router-view></router-view>
</div>

@endsection
