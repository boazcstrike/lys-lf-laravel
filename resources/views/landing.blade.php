@extends('layouts.app')

@section('content')

<div class="landing" id="app">
    <nav class="lys-nav">
        <div class="container">
            <router-link class="nav-links" to="/">
                <img class="logo" src="{{ asset('images/lys-logo.png') }}">
            </router-link>
            
            <router-link class="nav-links" to="/practice">Practice Areas</router-link>
            <router-link class="nav-links" to="/profile">Profile</router-link>
            <router-link class="nav-links" to="/articles">News</router-link>
            <router-link class="nav-links" to="/team">Our Team</router-link>
            <router-link class="nav-links" to="/contact">Contact</router-link>
        </div>
    </nav>
    <router-view></router-view>
    <div class="footer">
        <img src="{{asset('images/white-logo-darker.png')}}">
        <div class="copyright">
            <p>{{ config('app.name') }}</p>
            <p class="bot-text">Brewed by <span>Boaz Michael Sze</span></p>
        </div>
    </div>
</div>

@endsection
