@extends('layouts.app')

@section('content')

<div class="landing" id="app">
    <topnav></topnav>

    <div class="topNav-spacing"></div>
    
    <router-view></router-view>

    <div class="footer">
        <div class="copyright">
            <p class="info phone">Call us at 02-832-9628</p>
            <p class="info email bot-text">limandsze.lf@gmail.com</p>
        </div>

        <img src="{{asset('images/white-logo-darker.png')}}">

        <div class="copyright">
            <p>{{ config('app.name') }}</p>
            <p class="bot-text">Brewed by <span>Boaz Michael Sze</span></p>
        </div>
    </div>
</div>

@endsection
