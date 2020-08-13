@section('title', 'Home')
@section('content')
    @extends('layouts.base')
    <style>
        @keyframes discord {
            0% {height:70px; width:250px;}
             100% {height:500px;width:350px;}
        }
        @keyframes discord-c {
            0% {height:500px;width:350px;}
            100% {height:70px; width:250px;}
        }
        .discord {
            animation-name: discord-c;
            animation-duration: 2s;
            animation-play-state: pause;
            float:left;
            height:70px;
            width:250px;


        }
        .discord:hover {
            height:500px;
            width:350px;
            float:left;
            animation-name: discord;
            animation-duration: 2s;
            animation-play-state: pause;
        }
    </style>
    <section class="hero is-fullheight">
        <div class="hero-head">@include ('layouts.nav')</div></br></br></br></br>
        <h1 class="title has-text-centered is-centered is-hidden-mobile" style="font-size: 600%;">
                The Campsite
        </h1>
        <h1 class="title has-text-centered is-centered is-hidden-desktop" style="font-size: 400%;">
                The Campsite
        </h1>
        </br></br>
        <div class="title is-1 has-text-white has-text-centered is-centered is-hidden-mobile">
            <u>What is The Campsite?</u></br>
        </div>
        <div class="title is-2 has-text-white has-text-centered is-centered is-hidden-desktop">
            <u>What is The Campsite?</u></br>
        </div>
        <div class="container has-text-centered">
            <div class="title is-4 has-text-white has-text-left is-hidden-mobile">
                We are a growing community on Discord where we give all our users a lovely warm welcome!
                We host monthly giveaways, events and more!
                We have a variety of channels and self-assignable roles to make the server more interactable!
            </div>
        </div>
        <div class="container has-text-centered">
            <div class="title is-5 has-text-white has-text-left is-hidden-desktop">
                We are a growing community on Discord where we give all our users a lovely warm welcome!
                We host monthly giveaways, events and more!
                We have a variety of channels and self-assignable roles to make the server more interactable!
            </div>
        </div>
        <div class="container is-centered">
            <iframe class="discord" src="https://discordapp.com/widget?id=506105941498789888&theme=dark"/>
        </div>
    </section>
@endsection
